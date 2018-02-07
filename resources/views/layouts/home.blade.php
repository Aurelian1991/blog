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
    <link href="https://bootstrap-themes.github.io/application/assets/css/application.css" rel="stylesheet">
    <link href="https://bootstrap-themes.github.io/application/assets/css/toolkit.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet">
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    @yield('css')
</head>
<body data-mod="tag" class="tag-detail bjy">
<div class="bkk" id="app-growl"></div>
<div class="global-nav blog_header blog_header--index">
   <nav class="ck mo zq mt qh app-navbar">

  <a class="e" href="index.html">
    <img src="assets/img/brand-white.png" alt="brand">
  </a>

  <button class="mk blk se" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="ml"></span>
  </button>

  <div class="collapse f" id="navbarResponsive">
    <ul class="navbar-nav adn">
      <li class="md active">
        <a class="mb" href="{{url('/')}}">首页 <span class="zt">(current)</span></a>
      </li>
      <li class="md">
        <a class="mb" href="{{url('/')}}">最新</a>
      </li>
      <li class="md">
        <a class="mb" data-toggle="modal" href="{{url('/')}}">热门</a>
      </li>
      <li class="md">
        <a class="mb" href="docs/index.html">专栏</a>
      </li>

      <li class="md se">
        <a class="mb" href="notifications/index.html">Notifications</a>
      </li>
      <li class="md se">
        <a class="mb" data-action="growl">Growl</a>
      </li>
      <li class="md se">
        <a class="mb" href="login/index.html">Logout</a>
      </li>

    </ul>

    <form class="kl zc ro sk">
      <input class="form-control" type="text" data-action="grow" placeholder="Search">
    </form>

    <ul id="#js-popoverContent" class="nav navbar-nav zc aah ro sk">
      <li class="md">
        <a class="g mb" href="notifications/index.html">
          <span class="h avv"></span>
        </a>
      </li>
      <li class="md aax">
      @if(Auth::guest())
       <button class="cg bll blm bkf" data-toggle="popover" data-original-title="" title="">
          <a class="btn btn-default" href="javascript:void(0)">登录</a>
        </button>
      @else
      <button class="cg bll blm bkf" data-toggle="popover" data-original-title="" title="">
          <img class="rl" src="{{Auth::user()->image_url??'https://bootstrap-themes.github.io/application/assets/img/avatar-dhg.png'}}">
        </button>
      @endif

      </li>
    </ul>
    @if(Auth::guest())
    <div class="btn-group-vertical" role="group" aria-label="...">
      <ul class="nav navbar-nav ro" id="js-popoverContent">
        <li class="md"><a class="mb" href="{{url('login/oauth?'.'driver=github')}}">github登录</a></li>
        <li class="md wechat" ><a class="mb" href="#">微信登录</a></li>
        <li class="md"><a class="mb" href="{{url('login/oauth?'.'driver=qq')}}">qq登录</a></li>
      </ul>
      </div>
    @else
    <ul class="nav navbar-nav ro" id="js-popoverContent">
      <li class="md"><a class="mb" href="#" data-action="growl">个人中心</a></li>
      <li class="md"><a class="mb" href="{{url('logout')}}" data-action="logout">退出</a></li>
        <li class="md"><a class="mb" href="{{url('topics/create')}}">发表文章</a></li>
    </ul>
    @endif
  </div>
</nav>
</div>

@yield('content')


</body>

@section('js')
<script src="{{asset('js/jquery-1.11.3.min.js')}}"></script>
{{--  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>  --}}
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://bootstrap-themes.github.io/application/assets/js/popper.min.js"></script>
<script src="https://bootstrap-themes.github.io/application/assets/js/chart.js"></script>
<script src="https://bootstrap-themes.github.io/application/assets/js/toolkit.js"></script>
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