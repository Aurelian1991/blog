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
      <div class="fj">
        <div class="pz bpi afo">
            <div class="qf" style="background-image: url(http://{{$blog->cover}});"></div>
            <div class="qa avz">
                <a href="{{url('u/'.$blog->user['id'])}}" target="_blank">
            <img class="bpj" src="{{$blog->user['image_url']}}">
          </a>
                <h6 class="qb">
                    <a class="boa" href="{{url('u/'.$blog->user['id'])}}">{{$blog->user['name']}}</a>
                </h6>
                <p class="afo">{{$blog->name}}</p>
                <ul class="bpk">
                    <li class="bpl">
                        <a href="#userModal" class="boa" data-toggle="modal">
                订阅
                <h6 class="aej">{{$blog->subscriber_count}}</h6>
              </a>
                    </li>
                    <li class="bpl">
                        <a href="#userModal" class="boa" data-toggle="modal">
                发布
                <h6 class="aej">{{$blog->article_count}}</h6>
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