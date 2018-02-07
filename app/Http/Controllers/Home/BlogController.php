<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Aure\Tools\Upload;
use App\Http\Requests\PictureUpload;
use App\Models\Blog;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('CheckBlogAuthor');
    }
    public function applyform()
    {//未判断已是专栏作者
        return view('home.blog.applyform');
    }

    public function apply(PictureUpload $request)
    {
        $Blog = new Blog();
        $input = $request->except(['_token']);
        $picture = Upload::picture($request);
        $slug = app('Aure\Tools\BaiduTranslate')->translate($input['name'], 'auto', 'en');
        $Blog->name = $input['name'];
        $Blog->cover = $picture['url'];
        $Blog->user_id = Auth::id();
        $Blog->description=strip_tags($input['descript']);
        $Blog->slug = $slug;
        $res = $Blog->save();
        
        if ($res) {
            return response()->json(['status' => 1, 'data' => ['url'=>url('topics/create')], 'msg' => '创建成功']);
        } else {
            return response()->json(['status' => 0, 'data' => '', 'msg' => '网络异常']);
        }

    }

}
