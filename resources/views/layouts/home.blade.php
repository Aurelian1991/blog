<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home/global.css') }}" rel="stylesheet">
    @yield('css')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
</head>
<body data-mod="tag" class="tag-detail ">
<img id="icon4weChat" style="height: 0;width: 0;" data-src="https://static.segmentfault.com/v-59b26b31/global/img/touch-icon-512.png">
<div class="global-nav blog_header blog_header--index">
    <nav class="container nav">
        <div class="visible-xs header-response"><a href="/search" style="display:block"><i class="fa fa-search"
                                                                                           aria-hidden="true"></i></a>
            <div class="blog_header__logo blog_header__logo--response">
                <h1><a href="/" style="height:24px; background-size: auto 24px;"></a>
                </h1>
            </div>
            <a href="/user/login" class="pull-right login-btn"><i class="fa fa-user" aria-hidden="true"></i></a>
            <div class="bottom-nav">
                <div class="opts">
                    @foreach ($indexNav as $k=>$v)
                        @if($k<=4)
                            <a class="opts-group " href="{{url('category/'.$v->id)}}"><i class="fa fa-comments"
                                                                                         aria-hidden="true"></i><span>{{$v->name}}</span></a>
                        @endif
                    @endforeach
                    @if(count($indexNav)>4)
                        <div class="opts-group">
                            <div class="btn-group dropup"><i class="fa fa-bars dropdown hoverDropdown"
                                                             data-toggle="dropdown"
                                                             aria-hidden="true"><span>更多</span></i>
                                <ul class="dropdown-menu">
                                    @foreach ($indexNav as $k=>$v)
                                        @if($k>4)
                                            <li><a href="{{url('category/'.$v->id)}}">{{$v->name}}</a></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif


                </div>
            </div>
        </div>{{--m端--}}
        <div class="row hidden-xs">
            <div class="col-sm-8 col-md-9 col-lg-9">
                <div class="blog_header__logo"><h1><a href="/">blog</a></h1></div>
                <div>
                    <ul class="menu list-inline pull-left hidden-xs">
                        @foreach ($indexNav as $k=>$v)
                            <li class="menu__item"><a href="{{url('Category',[$v->id])}}" class="">{{$v->name}}</a></li>
                        @endforeach

                        {{--<li class="menu__item visible-sm-inline-block">--}}
                        {{--<a href="/search">--}}
                        {{--<span class="glyphicon glyphicon-search" style="vertical-align: middle;">--}}
                        {{--</span>--}}
                        {{--</a>--}}
                        {{--</li>--}}
                    </ul>
                    {{--<form action="/search" class="header-search  hidden-sm hidden-xs pull-right">--}}
                    {{--<button class="btn btn-link"><span class="sr-only">搜索</span><span--}}
                    {{--class="fa fa-search"></span></button>--}}
                    {{--<input id="searchBox" name="q" type="text" placeholder="搜索问题或关键字" class="form-control" value="">--}}
                    {{--</form>--}}
                </div>
            </div>
            <div class="col-sm-4 col-md-3 col-lg-3 text-right">
                <ul class="opts list-inline hidden-xs">
                    @if(Auth::check())
                        <ul class="opts list-inline hidden-xs">
                            <li class="opts__item message has-unread hidden-sm ml10">
                                <a id="dLabel" class="dropdown-toggle-message" href="{{url('topics/create')}}"><span class="sr-only">创作文章</span><span  class="fa fa-plus"></span></a>
                            </li>
                        </ul>
                    @else
                         <li class="opts__item">
                        <a href="/login" class="SFLogin btn-signin" style="margin-bottom:2px;">立即登录</a>
                        <a href="/login" class="SFLogin ml10 btn-signup" onclick="_gaq.push(['_trackEvent', 'Button', 'Click', 'Login']);">免费注册</a></li>
                    @endif
                   
                </ul>
            </div>
        </div>
        {{--<div class="sub-head hidden-xs"><span class="tag-nav__item btn-all-tag"><a href="/tags" class="text-secondNav">热门标签</a></span>--}}
        {{--<div class="tag-container-outer"><span class="tag-nav__item mr20 "><a class="text-secondNav"--}}
        {{--href="/questions">全部</a></span>--}}
        {{--<div class="tag-container"><span class="tag-nav__item mr20"><a class="text-secondNav"--}}
        {{--href="/t/javascript">javascript</a></span><span--}}
        {{--class="tag-nav__item mr20"><a class="text-secondNav" href="/t/php">php</a></span><span--}}
        {{--class="tag-nav__item mr20"><a class="text-secondNav" href="/t/python">python</a></span><span--}}
        {{--class="tag-nav__item mr20"><a class="text-secondNav" href="/t/java">java</a></span><span--}}
        {{--class="tag-nav__item mr20"><a class="text-secondNav" href="/t/mysql">mysql</a></span><span--}}
        {{--class="tag-nav__item mr20"><a class="text-secondNav" href="/t/ios">ios</a></span><span--}}
        {{--class="tag-nav__item mr20"><a class="text-secondNav"--}}
        {{--href="/t/android">android</a></span><span--}}
        {{--class="tag-nav__item mr20"><a class="text-secondNav"--}}
        {{--href="/t/node.js">node.js</a></span><span--}}
        {{--class="tag-nav__item mr20"><a class="text-secondNav" href="/t/html5">html5</a></span><span--}}
        {{--class="tag-nav__item mr20"><a class="text-secondNav" href="/t/linux">linux</a></span><span--}}
        {{--class="tag-nav__item mr20"><a class="text-secondNav" href="/t/c%2B%2B">c++</a></span><span--}}
        {{--class="tag-nav__item mr20"><a class="text-secondNav" href="/t/css3">css3</a></span><span--}}
        {{--class="tag-nav__item mr20"><a class="text-secondNav" href="/t/git">git</a></span><span--}}
        {{--class="tag-nav__item mr20"><a class="text-secondNav" href="/t/golang">golang</a></span><span--}}
        {{--class="tag-nav__item mr20"><a class="text-secondNav" href="/t/ruby">ruby</a></span><span--}}
        {{--class="tag-nav__item mr20"><a class="text-secondNav" href="/t/vim">vim</a></span><span--}}
        {{--class="tag-nav__item mr20"><a class="text-secondNav" href="/t/docker">docker</a></span><span--}}
        {{--class="tag-nav__item mr20"><a class="text-secondNav" href="/t/mongodb">mongodb</a></span>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="gradient-block"></div>--}}
        {{--</div>--}}
    </nav>
</div>
@yield('content')


</body>

@section('js')
    @show

</html>