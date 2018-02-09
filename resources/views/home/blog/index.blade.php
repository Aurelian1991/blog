@extends('layouts.home') 
@section('css')
<style>
    .ea_flex {
        display: flex;
        flex-wrap: wrap;
    }
</style>
@endsection
 
@section('content')
<div class="by acy adh">
    <div class="ea ea_flex">
        @foreach ($blogs as $blog)
        <div class="dv">
            <div class="mu blf abk">
                <div class="na" style="background-image: url({{$blog->cover}});">
                </div>
                <div class="mv arx">
                    <a href="{{url('blog/'.$blog->slug)}}">
                        <img class="blg" src="{{$blog->user['image_url']}}">
                    </a>
                    <h6 class="mw">
                        <a class="bjx" href="{{url('blog/'.$blog->slug)}}">{{$blog->name}}</a>
                    </h6>
                    <p class="abk">{{$blog->description}}
                    </p>
                    <ul class="blh">
                        <li class="bli">
                            <a href="#userModal" class="bjx" data-toggle="modal">文章
                            <h6 class="aal">{{$blog->article_count??0}}</h6>
                            </a>
                        </li>
                        <li class="bli">
                            <a href="#userModal" class="bjx" data-toggle="modal">
                                订阅
                                <h6 class="aal">{{$blog->subscriber_count??0}}</h6>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        @endforeach
    </div>
</div>
@endsection