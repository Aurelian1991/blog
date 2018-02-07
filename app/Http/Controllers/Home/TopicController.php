<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\Topic;
use App\Models\Tag;
use App\models\TopicTag;
use App\Http\Requests\Topic\StoreTopicPost;
use App\Models\Blog;

class TopicController extends Controller
{
    public function __construct()
    {
        $this->middleware('CheckBlogAuthor',['except' => ['index', 'show']]);
    }
    public function createOrEdit()
    {
        $user = Auth::user();
        // $tags = factory(\App\Models\Tag::class, 20)->make();
       $tags=Tag::all();
        return view('home.topics.create_edit', compact('user', 'tags'));
    }
    public function save(StoreTopicPost $request)
    {
        $input = $request->except(['_token']);
        $topic=!empty($input['id'])?Topic::find($input['id']):new Topic;
        // $topic=Topic::firstOrNew(['id'=>$input['id']]);
        $topic->title=$input['title'];
        $topic->content=$input['content'];
        $topic->is_draft=$request->is_draft??0;
        $topic->user_id= $request->user()->id;
        if($topic->save()){
            $tags=array_unique(array_values($input['tags']));
            $TopicTags=new TopicTag();
            $TopicTags->addTopicIds($topic->id, $tags);
            // Blog::where('')专栏文章数加一
            
            //添加标签 listener  
            //手动触发事件 后期连接swoole 通知订阅者
            //作者文章数量加一
        }
            return response()->json(['status' => 1, 'data' => ['url' => url('/')], 'msg' => '创建成功']);
    }
    public function show($id=0){
        
        $model=new Topic();
        $info=$model->detail($id);
        // p($info);
        // exit;
        // $info->increment('view_count',1);//阅读量加一未做
        return view('home.topics.show', compact('info'));
    }
}
