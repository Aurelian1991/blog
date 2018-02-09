<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Blog;

class UcenterController extends Controller
{
    public function Index($id){
        $blogModel = new Blog();
        $blog = $blogModel->getByUid($id);
        // p($blog);exit;
        return view('home.ucenter.index',compact('blog'));
    }
}
