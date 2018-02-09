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
    <link href="{{asset('css/toolkit.css')}}" rel="stylesheet">
    <link href="{{asset('css/css.css')}}" rel="stylesheet">
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> @yield('css')
</head>


<body data-mod="tag" class="bob">
    <div class="bon" id="app-growl"></div>
    <div class="global-nav blog_header blog_header--index"></div>
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
                        <span class="adx">(current)</span>
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
                    <button class="cg bpo bpp boi" data-toggle="popover" data-original-title="" title="">
                        @if(Auth::guest())
                        <a class="btn btn-default" href="javascript:void(0)">登录</a>
                        @else
                        <img class="us" src="{{Auth::user()->image_url??'https://bootstrap-themes.github.io/application/assets/img/avatar-dhg.png}}"> @endif
                    </button>
                </li>
            </ul>
            @if(Auth::guest()) {{--
            <div class="btn-group-vertical" role="group" aria-label="..."></div> --}}
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
      <!--   </div> -->
    </nav>
</div>
 @yield('content')
</body>

   <!--  <div class="cd fade" id="msgModal" tabindex="-1" role="dialog" aria-labelledby="bpq" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="d">
                    <h5 class="modal-title">Messages</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>

                <div class="modal-body afx js-modalBody">
                    <div class="axw">
                        <div class="bow cj ca js-msgGroup">
                            <a href="#" class="b rx">
                                <div class="rv">
                                    <img class="us bos vb yb aff" src="assets/img/avatar-fat.jpg">
                                    <div class="rw">
                                        <strong>Jacob Thornton</strong> and
                                        <strong>1 other</strong>
                                        <div class="bpg">
                                            Aenean eu leo quam. Pellentesque ornare sem lacinia quam …
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="b rx">
                                <div class="rv">
                                    <img class="us bos vb yb aff" src="assets/img/avatar-mdo.png">
                                    <div class="rw">
                                        <strong>Mark Otto</strong> and
                                        <strong>3 others</strong>
                                        <div class="bpg">
                                            Brunch sustainable placeat vegan bicycle rights yeah…
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="b rx">
                                <div class="rv">
                                    <img class="us bos vb yb aff" src="assets/img/avatar-dhg.png">
                                    <div class="rw">
                                        <strong>Dave Gamache</strong>
                                        <div class="bpg">
                                            Brunch sustainable placeat vegan bicycle rights yeah…
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="b rx">
                                <div class="rv">
                                    <img class="us bos vb yb aff" src="assets/img/avatar-fat.jpg">
                                    <div class="rw">
                                        <strong>Jacob Thornton</strong> and
                                        <strong>1 other</strong>
                                        <div class="bpg">
                                            Aenean eu leo quam. Pellentesque ornare sem lacinia quam …
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="b rx">
                                <div class="rv">
                                    <img class="us bos vb yb aff" src="assets/img/avatar-mdo.png">
                                    <div class="rw">
                                        <strong>Mark Otto</strong> and
                                        <strong>3 others</strong>
                                        <div class="bpg">
                                            Brunch sustainable placeat vegan bicycle rights yeah…
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="b rx">
                                <div class="rv">
                                    <img class="us bos vb yb aff" src="assets/img/avatar-dhg.png">
                                    <div class="rw">
                                        <strong>Dave Gamache</strong>
                                        <div class="bpg">
                                            Brunch sustainable placeat vegan bicycle rights yeah…
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="b rx">
                                <div class="rv">
                                    <img class="us bos vb yb aff" src="assets/img/avatar-fat.jpg">
                                    <div class="rw">
                                        <strong>Jacob Thornton</strong> and
                                        <strong>1 other</strong>
                                        <div class="bpg">
                                            Aenean eu leo quam. Pellentesque ornare sem lacinia quam …
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="b rx">
                                <div class="rv">
                                    <img class="us bos vb yb aff" src="assets/img/avatar-mdo.png">
                                    <div class="rw">
                                        <strong>Mark Otto</strong> and
                                        <strong>3 others</strong>
                                        <div class="bpg">
                                            Brunch sustainable placeat vegan bicycle rights yeah…
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="b rx">
                                <div class="rv">
                                    <img class="us bos vb yb aff" src="assets/img/avatar-dhg.png">
                                    <div class="rw">
                                        <strong>Dave Gamache</strong>
                                        <div class="bpg">
                                            Brunch sustainable placeat vegan bicycle rights yeah…
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="d-none afc js-conversation">
                            <ul class="bow bpc">
                                <li class="rv bpf afo">
                                    <div class="rw">
                                        <div class="bpd">
                                            Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue.
                                            Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo risus,
                                            porta ac consectetur ac, vestibulum at eros. Sed posuere consectetur est at lobortis.
                                        </div>
                                        <div class="bpe">
                                            <small class="axc">
                                                <a href="#">Dave Gamache</a> at 4:20PM
                                            </small>
                                        </div>
                                    </div>
                                    <img class="us bos vb yb afi" src="assets/img/avatar-dhg.png">
                                </li>

                                <li class="rv afo">
                                    <img class="us bos vb yb aff" src="assets/img/avatar-fat.jpg">
                                    <div class="rw">
                                        <div class="bpd">
                                            Cras justo odio, dapibus ac facilisis in, egestas eget quam. Duis mollis, est non commodo luctus, nisi erat porttitor ligula,
                                            eget lacinia odio sem nec elit. Praesent commodo cursus magna, vel scelerisque
                                            nisl consectetur et.
                                        </div>
                                        <div class="bpd">
                                            Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus
                                            ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                            vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                            et. Nullam quis risus eget urna mollis ornare vel eu leo. Morbi leo risus, porta
                                            ac consectetur ac, vestibulum at eros.
                                        </div>
                                        <div class="bpd">
                                            Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere
                                            velit aliquet. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi
                                            porta gravida at eget metus.
                                        </div>
                                        <div class="bpe">
                                            <small class="axc">
                                                <a href="#">Fat</a> at 4:28PM
                                            </small>
                                        </div>
                                    </div>
                                </li>

                                <li class="rv afo">
                                    <img class="us bos vb yb aff" src="assets/img/avatar-mdo.png">
                                    <div class="rw">
                                        <div class="bpd">
                                            Etiam porta sem malesuada magna mollis euismod. Donec id elit non mi porta gravida at eget metus. Praesent commodo cursus
                                            magna, vel scelerisque nisl consectetur et. Etiam porta sem malesuada magna mollis
                                            euismod. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean
                                            lacinia bibendum nulla sed consectetur.
                                        </div>
                                        <div class="bpd">
                                            Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est
                                            non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                                        </div>
                                        <div class="bpe">
                                            <small class="axc">
                                                <a href="#">Mark Otto</a> at 4:20PM
                                            </small>
                                        </div>
                                    </div>
                                </li>

                                <li class="rv bpf afo">
                                    <div class="rw">
                                        <div class="bpd">
                                            Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue.
                                            Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo risus,
                                            porta ac consectetur ac, vestibulum at eros. Sed posuere consectetur est at lobortis.
                                        </div>
                                        <div class="bpe">
                                            <small class="axc">
                                                <a href="#">Dave Gamache</a> at 4:20PM
                                            </small>
                                        </div>
                                    </div>
                                    <img class="us bos vb yb afi" src="assets/img/avatar-dhg.png">
                                </li>

                                <li class="rv afo">
                                    <img class="us bos vb yb aff" src="assets/img/avatar-fat.jpg">
                                    <div class="rw">
                                        <div class="bpd">
                                            Cras justo odio, dapibus ac facilisis in, egestas eget quam. Duis mollis, est non commodo luctus, nisi erat porttitor ligula,
                                            eget lacinia odio sem nec elit. Praesent commodo cursus magna, vel scelerisque
                                            nisl consectetur et.
                                        </div>
                                        <div class="bpd">
                                            Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus
                                            ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                            vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                            et. Nullam quis risus eget urna mollis ornare vel eu leo. Morbi leo risus, porta
                                            ac consectetur ac, vestibulum at eros.
                                        </div>
                                        <div class="bpd">
                                            Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere
                                            velit aliquet. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi
                                            porta gravida at eget metus.
                                        </div>
                                        <div class="bpe">
                                            <small class="axc">
                                                <a href="#">Fat</a> at 4:28PM
                                            </small>
                                        </div>
                                    </div>
                                </li>

                                <li class="rv afo">
                                    <img class="us bos vb yb aff" src="assets/img/avatar-mdo.png">
                                    <div class="rw">
                                        <div class="bpd">
                                            Etiam porta sem malesuada magna mollis euismod. Donec id elit non mi porta gravida at eget metus. Praesent commodo cursus
                                            magna, vel scelerisque nisl consectetur et. Etiam porta sem malesuada magna mollis
                                            euismod. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean
                                            lacinia bibendum nulla sed consectetur.
                                        </div>
                                        <div class="bpd">
                                            Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est
                                            non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                                        </div>
                                        <div class="bpe">
                                            <small class="axc">
                                                <a href="#">Mark Otto</a> at 4:20PM
                                            </small>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cd fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="bpr" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="d">
                    <h4 class="modal-title">Users</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>

                <div class="modal-body afx">
                    <div class="axw">
                        <ul class="bow cj ca">
                            <li class="b">
                                <div class="rv ady">
                                    <img class="bos vb yb aff" src="assets/img/avatar-fat.jpg">
                                    <div class="rw">
                                        <button class="cg ns ok acx">
                                            <span class="c bps"></span> Follow
                                        </button>
                                        <strong>Jacob Thornton</strong>
                                        <p>@fat - San Francisco</p>
                                    </div>
                                </div>
                            </li>
                            <li class="b">
                                <div class="rv ady">
                                    <img class="bos vb yb aff" src="assets/img/avatar-dhg.png">
                                    <div class="rw">
                                        <button class="cg ns ok acx">
                                            <span class="c bps"></span> Follow
                                        </button>
                                        <strong>Dave Gamache</strong>
                                        <p>@dhg - Palo Alto</p>
                                    </div>
                                </div>
                            </li>
                            <li class="b">
                                <div class="rv ady">
                                    <img class="bos vb yb aff" src="assets/img/avatar-mdo.png">
                                    <div class="rw">
                                        <button class="cg ns ok acx">
                                            <span class="c bps"></span> Follow
                                        </button>
                                        <strong>Mark Otto</strong>
                                        <p>@mdo - San Francisco</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="by aha ahl">
        <div class="dp">
            <div class="fj">
                <div class="pz bpi afo">
                    <div class="qf" style="background-image: url(assets/img/iceland.jpg);"></div>
                    <div class="qa avz">
                        <a href="profile/index.html">
                            <img class="bpj" src="assets/img/avatar-dhg.png">
                        </a>

                        <h6 class="qb">
                            <a class="boa" href="profile/index.html">Dave Gamache</a>
                        </h6>

                        <p class="afo">I wish i was a little bit taller, wish i was a baller, wish i had a girl…&nbsp;also.</p>

                        <ul class="bpk">
                            <li class="bpl">
                                <a href="#userModal" class="boa" data-toggle="modal">
                                    Friends
                                    <h6 class="aej">12M</h6>
                                </a>
                            </li>

                            <li class="bpl">
                                <a href="#userModal" class="boa" data-toggle="modal">
                                    Enemies
                                    <h6 class="aej">1</h6>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="pz vp vy afo">
                    <div class="qa">
                        <h6 class="afh">About
                            <small>·
                                <a href="#">Edit</a>
                            </small>
                        </h6>
                        <ul class="dc axg">
                            <li>
                                <span class="axc h ban aff"></span>Went to
                                <a href="#">Oh, Canada</a>
                            </li>
                            <li>
                                <span class="axc h bnc aff"></span>Became friends with
                                <a href="#">Obama</a>
                            </li>
                            <li>
                                <span class="axc h bfa aff"></span>Worked at
                                <a href="#">Github</a>
                            </li>
                            <li>
                                <span class="axc h bfq aff"></span>Lives in
                                <a href="#">San Francisco, CA</a>
                            </li>
                            <li>
                                <span class="axc h bgz aff"></span>From
                                <a href="#">Seattle, WA</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="pz vp vy afo">
                    <div class="qa">
                        <h6 class="afh">Photos
                            <small>·
                                <a href="#">Edit</a>
                            </small>
                        </h6>
                        <div data-grid="images" data-target-height="150">
                            <div style="margin-bottom: 10px; margin-right: 10px; display: inline-block; vertical-align: bottom;">
                                <img data-width="640" data-height="640" data-action="zoom" src="assets/img/instagram_5.jpg" style="width: 114px; height: 115px;">
                            </div>
                            <div style="margin-bottom: 10px; margin-right: 0px; display: inline-block; vertical-align: bottom;">
                                <img data-width="640" data-height="640" data-action="zoom" src="assets/img/instagram_6.jpg" style="width: 114px; height: 115px;">
                            </div>
                            <div style="margin-bottom: 10px; margin-right: 10px; display: inline-block; vertical-align: bottom;">
                                <img data-width="640" data-height="640" data-action="zoom" src="assets/img/instagram_7.jpg" style="width: 114px; height: 115px;">
                            </div>
                            <div style="margin-bottom: 10px; margin-right: 0px; display: inline-block; vertical-align: bottom;">
                                <img data-width="640" data-height="640" data-action="zoom" src="assets/img/instagram_8.jpg" style="width: 114px; height: 115px;">
                            </div>
                            <div style="margin-bottom: 10px; margin-right: 10px; display: inline-block; vertical-align: bottom;">
                                <img data-width="640" data-height="640" data-action="zoom" src="assets/img/instagram_9.jpg" style="width: 114px; height: 115px;">
                            </div>
                            <div style="margin-bottom: 10px; margin-right: 0px; display: inline-block; vertical-align: bottom;">
                                <img data-width="640" data-height="640" data-action="zoom" src="assets/img/instagram_10.jpg" style="width: 114px; height: 115px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fm">

                <ul class="ca bow box afo">

                    <li class="rv b agz">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Message">
                            <div class="bpt">
                                <button type="button" class="cg ns yf">
                                    <span class="h bao"></span>
                                </button>
                            </div>
                        </div>
                    </li>

                    <li class="rv b agz">
                        <img class="bos vb yb aff" src="assets/img/avatar-dhg.png">
                        <div class="rw">
                            <div class="bpb">
                                <small class="acx axc">4 min</small>
                                <h6>Dave Gamache</h6>
                            </div>

                            <p>
                                Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper. Morbi leo risus, porta ac
                                consectetur ac, vestibulum at eros. Cras justo odio, dapibus ac facilisis in, egestas eget
                                quam. Vestibulum id ligula porta felis euismod semper. Cum sociis natoque penatibus et magnis
                                dis parturient montes, nascetur ridiculus mus.
                            </p>

                            <div class="boy" data-grid="images">
                                <div style="display: inline-block; margin-bottom: 10px; margin-right: 10px; vertical-align: bottom;">
                                    <img data-action="zoom" data-width="1050" data-height="700" src="assets/img/unsplash_1.jpg" style="width: 273px; height: 182px;">
                                </div>
                                <div style="display: inline-block; margin-bottom: 10px; margin-right: 0px; vertical-align: bottom;">
                                    <img data-action="zoom" data-width="640" data-height="640" src="assets/img/instagram_1.jpg" style="width: 182px; height: 182px;">
                                </div>
                                <div style="display: inline-block; margin-bottom: 10px; margin-right: 10px; vertical-align: bottom;">
                                    <img data-action="zoom" data-width="640" data-height="640" src="assets/img/instagram_13.jpg" style="width: 181px; height: 182px;">
                                </div>
                                <div style="display: inline-block; margin-bottom: 10px; margin-right: 0px; vertical-align: bottom;">
                                    <img data-action="zoom" data-width="1048" data-height="700" src="assets/img/unsplash_2.jpg" style="width: 274px; height: 182px;">
                                </div>
                            </div>

                            <ul class="bow afa">
                                <li class="rv afh">
                                    <img class="bos vb yb aff" src="assets/img/avatar-fat.jpg">
                                    <div class="rw">
                                        <strong>Jacon Thornton: </strong>
                                        Donec id elit non mi porta gravida at eget metus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                                        Donec ullamcorper nulla non metus auctor fringilla. Praesent commodo cursus magna,
                                        vel scelerisque nisl consectetur et. Sed posuere consectetur est at lobortis.
                                    </div>
                                </li>
                                <li class="rv">
                                    <img class="bos vb yb aff" src="assets/img/avatar-mdo.png">
                                    <div class="rw">
                                        <strong>Mark Otto: </strong>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum
                                        nibh, ut fermentum massa justo sit amet risus.
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="rv b agz">
                        <img class="bos vb yb aff" src="assets/img/avatar-fat.jpg">
                        <div class="rw">
                            <div class="bpd">
                                <div class="bpb">
                                    <small class="acx axc">12 min</small>
                                    <h6>Jacob Thornton</h6>
                                </div>
                                <p>
                                    Donec id elit non mi porta gravida at eget metus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cum
                                    sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi
                                    leo risus, porta ac consectetur ac, vestibulum at eros. Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit.
                                </p>
                            </div>
                        </div>
                    </li>

                    <li class="rv b agz">
                        <img class="bos vb yb aff" src="assets/img/avatar-mdo.png">
                        <div class="rw">
                            <div class="bpb">
                                <small class="acx axc">34 min</small>
                                <h6>Mark Otto</h6>
                            </div>

                            <p>
                                Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Aenean eu leo quam.
                                Pellentesque ornare sem lacinia quam venenatis vestibulum. Etiam porta sem malesuada magna
                                mollis euismod. Donec sed odio dui.
                            </p>

                            <div class="boy" data-grid="images">
                                <img style="display: inline-block; width: 466px; height: 451px; margin-bottom: 10px; margin-right: 0px; vertical-align: bottom;"
                                    data-width="640" data-height="640" data-action="zoom" src="assets/img/instagram_3.jpg">
                            </div>

                            <ul class="bow">
                                <li class="rv">
                                    <img class="bos vb yb aff" src="assets/img/avatar-dhg.png">
                                    <div class="rw">
                                        <strong>Dave Gamache: </strong>
                                        Donec id elit non mi porta gravida at eget metus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                                        Donec ullamcorper nulla non metus auctor fringilla. Praesent commodo cursus magna,
                                        vel scelerisque nisl consectetur et. Sed posuere consectetur est at lobortis.
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="fj">
                <div class="alert ro alert-dismissible d-none vy" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <a class="rj" href="profile/index.html">Visit your profile!</a> Check your self, you aren't looking well.
                </div>

                <div class="pz afo d-none vy">
                    <div class="qa">
                        <h6 class="afh">Sponsored</h6>
                        <div data-grid="images" data-target-height="150">
                            <img class="bos" data-width="640" data-height="640" data-action="zoom" src="assets/img/instagram_2.jpg" style="width: 239px; height: 225px; margin-bottom: 10px; margin-right: 0px; display: inline-block; vertical-align: bottom;">
                        </div>
                        <p>
                            <strong>It might be time to visit Iceland.</strong> Iceland is so chill, and everything looks cool here.
                            Also, we heard the people are pretty nice. What are you waiting for?</p>
                        <button class="cg nz ok">Buy a ticket</button>
                    </div>
                </div>

                <div class="pz afo d-none vy">
                    <div class="qa">
                        <h6 class="afh">Likes
                            <small>·
                                <a href="#">View All</a>
                            </small>
                        </h6>
                        <ul class="bow box">
                            <li class="rv afa">
                                <img class="bos vb yb aff" src="assets/img/avatar-fat.jpg">
                                <div class="rw">
                                    <strong>Jacob Thornton</strong> @fat
                                    <div class="bpa">
                                        <button class="cg nz ok">
                                            <span class="h ayi"></span> Follow</button>
                                    </div>
                                </div>
                            </li>
                            <li class="rv">
                                <a class="bpu" href="#">
                                    <img class="bos vb yb aff" src="assets/img/avatar-mdo.png">
                                </a>
                                <div class="rw">
                                    <strong>Mark Otto</strong> @mdo
                                    <div class="bpa">
                                        <button class="cg nz ok">
                                            <span class="h ayi"></span> Follow</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="qg">
                        Dave really likes these nerds, no one knows why though.
                    </div>
                </div>

                <div class="pz bpm">
                    <div class="qa">
                        © 2018 Bootstrap
                        <a href="#">About</a>
                        <a href="#">Help</a>
                        <a href="#">Terms</a>
                        <a href="#">Privacy</a>
                        <a href="#">Cookies</a>
                        <a href="#">Ads </a>
                        <a href="#">Info</a>
                        <a href="#">Brand</a>
                        <a href="#">Blog</a>
                        <a href="#">Status</a>
                        <a href="#">Apps</a>
                        <a href="#">Jobs</a>
                        <a href="#">Advertise</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
 -->

@section('js')
<script src="{{asset('js/jquery-1.11.3.min.js')}}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://bootstrap-themes.github.io/application/assets/js/popper.min.js"></script>
<script src="https://bootstrap-themes.github.io/application/assets/js/chart.js"></script>
<script src="https://bootstrap-themes.github.io/application/assets/js/toolkit.js"></script>
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