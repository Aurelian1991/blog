<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Topic;
use App\Models\Tag;
use Auth;
use Faker;

class IndexController extends Controller
{
    public function index(Request $request,Topic $topic){
        $topics=$topic->getTopics();
        $TagsModel=new Tag();
        $AllTags=$TagsModel->tagsAll();
        return view('home.topics.index', compact('topics', 'AllTags'));

    }
     public function hot(Request $request,Topic $topic){
        $topics=$topic->getTopicsHot();
        return view('home.topics.index', compact('topics'));

    }
}
