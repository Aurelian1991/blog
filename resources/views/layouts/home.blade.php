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
  <link href="{{ asset('js/layer/skin/layer.css') }}" rel="stylesheet">
  <link href="{{asset('css/application.css')}}" rel="stylesheet">
  <link href="{{asset('css/toolkit.css')}}" rel="stylesheet">
  <link href="{{asset('css/css.css')}}" rel="stylesheet">
  <link href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 
  @yield('css')
</head>

<body data-mod="tag" class="bob">
<div class="bon" id="app-growl"></div>
  {{--  <div class="global-nav blog_header blog_header--index">  --}}
    <nav class="ck pt adq py tk app-navbar">
      <a class="e" href="index.html">
        <img src="assets/img/brand-white.png" alt="brand">
      </a>
      <button class="pp bpn vm" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="pq"></span>
      </button>
      <div class="collapse f" id="navbarResponsive">
        <ul class="navbar-nav ahq">
          <li class="pi active">
            <a class="pg" href="{{url('/')}}">首页
              <span class="adt">(current)</span>
            </a>
          </li>
          <li class="pi">
            <a class="pg" href="{{url('/')}}">最新</a>
          </li>
          <li class="pi">
            <a class="pg" data-toggle="modal" href="{{url('/')}}">热门</a>
          </li>
          <li class="pi">
            <a class="pg" href="{{url('blog/index')}}">专栏</a>
          </li>
          <li class="pi vm">
            <a class="pg" href="notifications/index.html">Notifications</a>
          </li>
          <li class="pi vm">
            <a class="pg" data-action="growl">Growl</a>
          </li>
          <li class="pi vm">
            <a class="pg" href="login/index.html">Logout</a>
          </li>
        </ul>
        <form class="nn acx d-none vt">
          <input class="form-control" type="text" data-action="grow" placeholder="Search">
        </form>
         <ul id="#js-popoverContent" class="nav navbar-nav acx aek d-none vt">
          <li class="pi">
            <a class="g pg" href="notifications/index.html">
               <span class="h azy"></span>
            </a>
          </li>
          <li class="pi afb">
            <button class="cg bpo bpp boi login" data-toggle="popover" data-original-title="" title="">
              @if(Auth::guest())
              <a class="btn btn-default" href="javascript:void(0)">登录</a>
              @else
              <img class="us" src="{{Auth::user()->image_url??'https://bootstrap-themes.github.io/application/assets/img/avatar-dhg.png'}}"> @endif
            </button>
          </li>
        </ul>
        @if(Auth::guest())
        {{--  <div class="btn-group-vertical" role="group" aria-label="..."></div>  --}}
        <ul class="nav navbar-nav d-none" id="js-popoverContent">
          <li class="md">
            <a class="mb" href="{{url('login/oauth?'.'driver=github')}}">github登录</a>
          </li>
          <li class="md wechat">
            <a class="mb" href="{{url('login/oauth?'.'driver=weixin')}}">微信登录</a>
          </li>
          <li class="md">
            <a class="mb" href="{{url('login/oauth?'.'driver=qq')}}">qq登录</a>
          </li>
        </ul>
      </div>
      @else
      <ul class="nav navbar-nav d-none" id="js-popoverContent">
        <li class="md">
          <a class="mb" href="#" data-action="growl">个人中心</a>
        </li>
        <li class="md">
          <a class="mb" href="{{url('logout')}}" data-action="logout">退出</a>
        </li>
        <li class="md">
          <a class="mb" href="{{url('topics/create')}}">发表文章</a>
        </li>
      </ul>
      @endif
    </nav>
  {{--  </div>  --}}
  @yield('content')
</body>

@section('js')
<script src="{{asset('js/jquery-1.11.3.min.js')}}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/chart.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{asset('js/toolkit.js')}}"></script>
<script src="{{asset('js/jquery.form.js')}}"></script>
<script src="{{asset('js/tinymce_4.6.7/tinymce/js/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('js/select2.min.js')}}"></script>
<script src="{{asset('js/bootstrapValidator/js/bootstrapValidator.min.js')}}"></script>
<script src="{{ asset('js/layer/layer.js') }}"></script>
<script src="{{asset('js/application.js')}}"></script>
<script type="text/javascript">
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
</script>
@show

</html>