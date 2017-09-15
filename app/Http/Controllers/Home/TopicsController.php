<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Topic;

class TopicsController extends Controller
{
    public function index(Request $request,Topic $topic){
        $topics=$topic->getTopics();
        return view('home.topics.index', compact('topics'));

    }
}
