@extends('layouts.home')
@section('content')
<div class="wrap">
    @inject('tagsModel', 'App\Models\Tag')
    <div class="container tag__container">
        <div class="row">
            <div class="col-xs-12 col-md-9 main">
                {{--<section class="tag-info tag__info">--}}
                {{--</section>--}}
                {{--  <ul class="nav nav-tabs mb10 mt30 visible-xs">
                    <li class="active"><a href="/questions">最新</a>
                    </li>
                    <li><a href="/questions/hottest">热门</a></li>

                </ul>
                <ul class="nav nav-tabs mb10 mt30 hidden-xs">
                    <li class="active"><a href="/questions">最新</a>
                    </li>
                    <li><a href="/questions/hottest">热门</a></li>
                </ul>  --}}
                @foreach ($topics as $topic)
                <div class="stream-list question-stream">
                    {{--<a class="btn btn-default active" href="/t/php?type=newest" role="button">时间</a>--}}
                    {{--<a class="btn btn-default" href="/t/php?type=votes" role="button">得票数</a>--}}
                    {{--<a class="btn btn-default" href="/t/php?type=unanswered" role="button">未回答</a>--}}
                    {{--<a class="btn btn-default" href="/t/php?type=unsolved" role="button">未解决</a>--}}
                    <section class="stream-list__item">
                        <div class="qa-rank">
                            <div class="votes hidden-xs">
                                0
                                <small>点赞</small>
                            </div>
                            <div class="answers answered">
                                16
                                <small>评论</small>
                            </div>
                            <div class="views hidden-xs viewsword100to999">
                                <span>898</span>
                                <small>浏览</small>
                            </div>
                        </div>
                        <div class="summary">
                            <ul class="author list-inline">
                                <li>
                                    <a href="{{url('u/'.$topic->user['id'])}}">{{$topic->user['name']}}</a>
                                    <span class="split"></span>
                                    <a href="/q/1010000010713682/a-1020000011089971">{{$topic->updated_at??$topic->created_at}}</a>
                                </li>
                            </ul>
                            <h2 class="title"><a href="{{url('topics/'.$topic->id)}}" target="_blank">{{$topic->title}}</a>
                            </h2>
                            @if(!empty($topic->TopicTag))
                            <ul class="taglist--inline ib">
                                  @foreach ($topic->TopicTag as $tagId)
                                 
                                @if(!empty($tagsModel->tagsAll()[$tagId->tag_id]))
                                <li class="tagPopup"><a class="tag tag-sm" href="/t/php" data-toggle="popover"
                                                        data-original-title="php" data-id="1040000000089387"> {{$tagsModel->tagsAll()[$tagId->tag_id]}}</a>
                                </li>
                                @endif
                                @endforeach
                            </ul>
                            @endif
                        </div>
                    </section>
                </div>
                @endforeach
                <div class="text-center">
                    {{ $topics->links() }}
                </div>
            </div><!-- /.tab-content -->
            <div class="col-xs-12 col-md-3 side">
                <div id="" class="mb25"><span
                
                </div>

                <div class="widget-box">
                    <h2 class="h4 widget-box__title">标签</h2>
                    <ul class="taglist--inline multi">
                        @foreach($AllTags as $tag)
                        <li class="tagPopup"><a class="tag" href="/t/javascript" data-toggle="popover"
                                                data-id="1040000000089436"
                                                data-original-title="javascript">{{$tag}}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="widget-box widget-taguser">
                    <h2 class="h4 widget-box__title">标签排行榜
                        <span class="taguser-catalog text-muted pull-right">
                            本月
                            ·
                            <a href="/users">全部</a>
                        </span>
                    </h2>
                    <ol class="widget-top10">
                        <li class="text-muted">
                            <img src="https://sfault-avatar.b0.upaiyun.com/181/611/1816113910-586e06da22a22_small"
                                 class="avatar-24">
                            <a href="/u/postbird" class="ellipsis">Postbird</a>
                            <span class="text-muted pull-right">+187</span>
                        </li>
                    </ol>
                </div>

                <div class="widget-box widget-taguser">
                    <h2 class="h4 widget-box__title">名人榜</h2>
                    <ol class="widget-top10">
                        <li class="text-muted">
                            <img src="https://sfault-avatar.b0.upaiyun.com/304/698/3046988269-5644b84c17ed3_small"
                                 class="avatar-24">
                            <a href="/u/youmingdot" class="ellipsis">有明</a>
                            <span class="text-muted pull-right">+10838</span>
                        </li>
                    </ol>
                </div>
            </div><!-- /.side -->
        </div>
    </div>

</div>
    @endsection