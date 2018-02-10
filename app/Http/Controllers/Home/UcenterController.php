<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Blog;
use App\Models\Topic;

class UcenterController extends Controller
{
    public function Index($id){
        $blogModel = new Blog();
        $blog = $blogModel->getByUid($id);
        $topicModels=new Topic();
        $topics=$topicModels->getBlogArticle($blog->user['id']);
        return view('home.ucenter.index',compact('blog'));
    }
}
