<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Topic;
use App\Models\Tag;
use Auth;
use Faker;

class TopicsController extends Controller
{
    public function index(Request $request,Topic $topic){
        $topics=$topic->getTopics();
        return view('home.topics.index', compact('topics'));

    }
    public function create()
    {
        $user = Auth::user();
        $tags = factory(\App\Models\Tag::class, 20)->make();
//        $tags=Tag::all();

        return view('home.topics.create_edit', compact('user','tags'));
    }



}
