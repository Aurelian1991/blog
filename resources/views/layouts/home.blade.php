<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home/global.css') }}" rel="stylesheet">
</head>
<body data-mod="tag" class="tag-detail ">
<img id="icon4weChat" style="height: 0;width: 0;"
     data-src="https://static.segmentfault.com/v-59b26b31/global/img/touch-icon-512.png">
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
                <div class="opts"><a class="opts-group " href="/questions"><i class="fa fa-comments"
                                                                              aria-hidden="true"></i><span>问答</span></a><a
                            class="opts-group " href="/news"><i class="fa fa-newspaper-o" aria-hidden="true"></i><span>头条</span></a><a
                            class="opts-group " href="/blogs"><i class="fa fa-pencil-square"
                                                                 aria-hidden="true"></i><span>专栏</span></a><a
                            class="opts-group " href="/lives"><i class="fa fa-play-circle" aria-hidden="true"></i><span>讲堂</span></a>
                    <div class="opts-group">
                        <div class="btn-group dropup"><i class="fa fa-bars dropdown hoverDropdown"
                                                         data-toggle="dropdown" aria-hidden="true"><span>更多</span></i>
                            <ul class="dropdown-menu">
                                <li><a href="/jobs">职位</a></li>
                                <li><a href="/events">活动</a></li>
                                <li><a href="/tags">标签</a></li>
                                <li><a href="/badges">徽章</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>{{--m端--}}
        <div class="row hidden-xs">
            <div class="col-sm-8 col-md-9 col-lg-9">
                <div class="blog_header__logo"><h1><a href="/">blog</a></h1></div>
                <div>
                    <ul class="menu list-inline pull-left hidden-xs">
                        <li class="menu__item"><a href="/questions" class="">问答</a></li>
                        <li class="menu__item"><a href="/news" class="">头条</a></li>
                        <li class="menu__item"><a href="/blogs" class="">专栏</a></li>
                        <li class="menu__item"><a href="/lives" class="">讲堂</a></li>
                        <li class="menu__item"><a href="/jobs" class="">职位</a></li>
                        <li class="menu__item"><a href="/events" class="">活动</a></li>
                        <li class="menu__item visible-sm-inline-block">
                            <a href="/search">
                                <span class="glyphicon glyphicon-search" style="vertical-align: middle;">
                                </span>
                            </a>
                        </li>
                    </ul>
                    <form action="/search" class="header-search  hidden-sm hidden-xs pull-right">
                        <button class="btn btn-link"><span class="sr-only">搜索</span><span
                                    class="fa fa-search"></span></button>
                        <input id="searchBox" name="q" type="text" placeholder="搜索问题或关键字" class="form-control" value="">
                    </form>
                </div>
            </div>
            <div class="col-sm-4 col-md-3 col-lg-3 text-right">
                <ul class="opts list-inline hidden-xs">
                    <li class="opts__item"><a href="/login" class="SFLogin btn-signin"
                                              style="margin-bottom:2px;">立即登录</a><a
                                href="/login" class="SFLogin ml10 btn-signup"
                                onclick="_gaq.push(['_trackEvent', 'Button', 'Click', 'Login']);">免费注册</a></li>
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
<div class="wrap">
    <div class="container tag__container">
        <div class="row">
            <div class="col-xs-12 col-md-9 main">
                {{--<section class="tag-info tag__info">--}}
                {{--</section>--}}
                <ul class="nav nav-tabs mb10 mt30 visible-xs">
                    <li class="active"><a href="/questions">最新问答</a>
                    </li>
                    <li><a href="/questions/hottest">热门问答</a></li>
                    <li><a href="/questions/unanswered">等待回答</a>
                    </li>
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                           aria-expanded="false">
                            更多 <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/feed">最新动态</a>
                            </li>
                            <li><a href="/experts">付费问答</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav nav-tabs mb10 mt30 hidden-xs">
                    <li class="active"><a href="/questions">最新问答</a>
                    </li>
                    <li><a href="/questions/hottest">热门问答</a></li>
                    <li><a href="/questions/unanswered">等待回答</a>
                    </li>
                    <li><a href="/feed">最新动态</a>
                    </li>
                    <li><a href="/experts">付费问答</a></li>
                </ul>
                <div class="stream-list question-stream">
                    <a class="btn btn-default active" href="/t/php?type=newest" role="button">时间</a>
                    <a class="btn btn-default" href="/t/php?type=votes" role="button">得票数</a>
                    <a class="btn btn-default" href="/t/php?type=unanswered" role="button">未回答</a>
                    <a class="btn btn-default" href="/t/php?type=unsolved" role="button">未解决</a>
                    <section class="stream-list__item">
                        <div class="qa-rank">
                            <div class="votes hidden-xs">
                                0
                                <small>得票</small>
                            </div>
                            <div class="answers answered">
                                16
                                <small>回答</small>
                            </div>
                            <div class="views hidden-xs viewsword100to999">
                                <span>898</span>
                                <small>浏览</small>
                            </div>
                        </div>
                        <div class="summary">
                            <ul class="author list-inline">
                                <li>
                                    <a href="/u/weidaohuanbucuoo">味道还不错哦</a>
                                    <span class="split"></span>
                                    <a href="/q/1010000010713682/a-1020000011089971">1 天前回答</a>
                                </li>
                            </ul>
                            <h2 class="title"><a href="/q/1010000010713682">客户端直接显示id不是一种好方案，譬如/article/2，这样的话，爬虫从1-10000就可以爬取所有文章，应该hash一下</a>
                            </h2>

                            <ul class="taglist--inline ib">
                                <li class="tagPopup"><a class="tag tag-sm" href="/t/php" data-toggle="popover"
                                                        data-original-title="php" data-id="1040000000089387">php</a>
                                </li>
                                <li class="tagPopup"><a class="tag tag-sm" href="/t/http" data-toggle="popover"
                                                        data-original-title="http" data-id="1040000000089706">http</a>
                                </li>
                                <li class="tagPopup"><a class="tag tag-sm" href="/t/go%E8%AF%AD%E8%A8%80"
                                                        data-toggle="popover"
                                                        data-original-title="go语言" data-id="1040000000630969">go语言</a>
                                </li>
                                <li class="tagPopup"><a class="tag tag-sm" href="/t/golang" data-toggle="popover"
                                                        data-original-title="golang"
                                                        data-id="1040000000090203">golang</a></li>
                            </ul>
                        </div>
                    </section>
                </div>
                <div class="text-center">
                    <ul class="pagination">
                        <li class="active"><a href="javascript:void(0);">1</a></li>
                        <li><a href="/t/php?type=newest&amp;page=2">2</a></li>
                        <li><a href="/t/php?type=newest&amp;page=3">3</a></li>
                        <li><a href="/t/php?type=newest&amp;page=4">4</a></li>
                        <li><a href="/t/php?type=newest&amp;page=5">5</a></li>
                        <li class="disabled"><span>…</span></li>
                        <li class="next"><a rel="next" href="/t/php?type=newest&amp;page=2">下一页</a></li>
                    </ul>
                </div>
            </div><!-- /.tab-content -->
            <div class="col-xs-12 col-md-3 side">
                <div id="mm_124884735_33830642_120602202" class="mb25"><span
                            style="overflow: visible; position: relative; display: block; width: 255px; height: 213px; background: none; border: 0px; text-align: left;"><span
                                style="overflow: hidden; position: absolute; display: block; width: 255px; height: 213px; background: none; border: 0px; text-align: left;"><span
                                    style="overflow: hidden; position: absolute; display: block; width: 255px; height: 213px; background: none; border: 0px; text-align: left;"><img
                                        id="ac_cs_mm_124884735_33830642_120602202_1" border="0"
                                        src="https://afp.alicdn.com/afp-creative/creative/u124884735/876563eaa73b00d988686976ac2059b9.png"
                                        style="width: 255px; height: 213px;"></span></span></span></div>

                <div class="widget-box">
                    <h2 class="h4 widget-box__title">相关标签</h2>
                    <ul class="taglist--inline multi">
                        <li class="tagPopup"><a class="tag" href="/t/javascript" data-toggle="popover"
                                                data-id="1040000000089436"
                                                data-original-title="javascript">javascript</a></li>
                        <li class="tagPopup"><a class="tag" href="/t/mysql" data-toggle="popover"
                                                data-id="1040000000089439"
                                                data-original-title="mysql">mysql</a></li>
                        <li class="tagPopup"><a class="tag" href="/t/laravel" data-toggle="popover"
                                                data-id="1040000000196640"
                                                data-original-title="laravel">laravel</a></li>
                        <li class="tagPopup"><a class="tag" href="/t/java" data-toggle="popover"
                                                data-id="1040000000089449"
                                                data-original-title="java">java</a></li>
                        <li class="tagPopup"><a class="tag" href="/t/html" data-toggle="popover"
                                                data-id="1040000000089571"
                                                data-original-title="html">html</a></li>
                        <li class="tagPopup"><a class="tag" href="/t/linux" data-toggle="popover"
                                                data-id="1040000000089392"
                                                data-original-title="linux">linux</a></li>
                        <li class="tagPopup"><a class="tag" href="/t/python" data-toggle="popover"
                                                data-id="1040000000089534"
                                                data-original-title="python">python</a></li>
                        <li class="tagPopup"><a class="tag" href="/t/thinkphp" data-toggle="popover"
                                                data-id="1040000000090482"
                                                data-original-title="thinkphp">thinkphp</a></li>
                        <li class="tagPopup"><a class="tag" href="/t/html5" data-toggle="popover"
                                                data-id="1040000000089409"
                                                data-original-title="html5">html5</a></li>
                        <li class="tagPopup"><a class="tag" href="/t/nginx" data-toggle="popover"
                                                data-id="1040000000090145"
                                                data-original-title="nginx">nginx</a></li>
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
                        <li class="text-muted">
                            <img src="https://sfault-avatar.b0.upaiyun.com/882/953/882953009-599659ae32b38_small"
                                 class="avatar-24">
                            <a href="/u/gujiawei" class="ellipsis">JVVV</a>
                            <span class="text-muted pull-right">+122</span>
                        </li>
                        <li class="text-muted">
                            <img src="https://sfault-avatar.b0.upaiyun.com/330/302/3303024212-5949d911b2948_small"
                                 class="avatar-24">
                            <a href="/u/summer1993" class="ellipsis">命中水ヽ</a>
                            <span class="text-muted pull-right">+100</span>
                        </li>
                        <li class="text-muted">
                            <img src="https://sfault-avatar.b0.upaiyun.com/387/044/3870447111-5673aedad6338_small"
                                 class="avatar-24">
                            <a href="/u/justjavac" class="ellipsis">justjavac</a>
                            <span class="text-muted pull-right">+100</span>
                        </li>
                        <li class="text-muted">
                            <img src="https://static.segmentfault.com/v-59b26b31/global/img/user-32.png"
                                 class="avatar-24">
                            <a href="/u/uprogrammer" class="ellipsis">精进吧Aaron</a>
                            <span class="text-muted pull-right">+99</span>
                        </li>
                        <li class="text-muted">
                            <img src="https://sfault-avatar.b0.upaiyun.com/172/280/1722806306-57ea8a99b1667_small"
                                 class="avatar-24">
                            <a href="/u/dryyun" class="ellipsis">dryyun</a>
                            <span class="text-muted pull-right">+97</span>
                        </li>
                        <li class="text-muted">
                            <img src="https://sfault-avatar.b0.upaiyun.com/482/138/482138281-59ae1cac87af0_small"
                                 class="avatar-24">
                            <a href="/u/fqy" class="ellipsis">风兮清扬</a>
                            <span class="text-muted pull-right">+96</span>
                        </li>
                        <li class="text-muted">
                            <img src="https://sfault-avatar.b0.upaiyun.com/283/817/2838179050-1030000000493539_small"
                                 class="avatar-24">
                            <a href="/u/hantianfeng" class="ellipsis">韩天峰</a>
                            <span class="text-muted pull-right">+91</span>
                        </li>
                        <li class="text-muted">
                            <img src="https://sfault-avatar.b0.upaiyun.com/417/773/417773404-59a19cc559425_small"
                                 class="avatar-24">
                            <a href="/u/daitutu" class="ellipsis">呆兔兔</a>
                            <span class="text-muted pull-right">+88</span>
                        </li>
                        <li class="text-muted">
                            <img src="https://sfault-avatar.b0.upaiyun.com/124/603/124603685-58b90f003e406_small"
                                 class="avatar-24">
                            <a href="/u/qzuser_57fb1d5db527e" class="ellipsis">Tony_Zby</a>
                            <span class="text-muted pull-right">+85</span>
                        </li>
                    </ol>
                </div>

                <div class="widget-box widget-taguser">
                    <h2 class="h4 widget-box__title">标签名人榜</h2>
                    <ol class="widget-top10">
                        <li class="text-muted">
                            <img src="https://sfault-avatar.b0.upaiyun.com/304/698/3046988269-5644b84c17ed3_small"
                                 class="avatar-24">
                            <a href="/u/youmingdot" class="ellipsis">有明</a>
                            <span class="text-muted pull-right">+10838</span>
                        </li>
                        <li class="text-muted">
                            <img src="https://sfault-avatar.b0.upaiyun.com/324/771/3247715052-56fce46b2ae70_small"
                                 class="avatar-24">
                            <a href="/u/lizheming" class="ellipsis">公子</a>
                            <span class="text-muted pull-right">+9796</span>
                        </li>
                        <li class="text-muted">
                            <img src="https://sfault-avatar.b0.upaiyun.com/427/102/4271029182-55b7a3c57d25b_small"
                                 class="avatar-24">
                            <a href="/u/eechen" class="ellipsis">eechen</a>
                            <span class="text-muted pull-right">+9223</span>
                        </li>
                        <li class="text-muted">
                            <img src="https://sfault-avatar.b0.upaiyun.com/254/315/2543157282-594a1de313f44_small"
                                 class="avatar-24">
                            <a href="/u/jellybool" class="ellipsis">JellyBool</a>
                            <span class="text-muted pull-right">+8810</span>
                        </li>
                        <li class="text-muted">
                            <img src="https://sfault-avatar.b0.upaiyun.com/175/934/175934663-572d654c6f521_small"
                                 class="avatar-24">
                            <a href="/u/sushengbuhuo" class="ellipsis">苏生不惑</a>
                            <span class="text-muted pull-right">+8153</span>
                        </li>
                        <li class="text-muted">
                            <img src="https://sfault-avatar.b0.upaiyun.com/157/842/1578424531-1030000000455562_small"
                                 class="avatar-24">
                            <a href="/u/mcfog" class="ellipsis">mcfog</a>
                            <span class="text-muted pull-right">+6615</span>
                        </li>
                        <li class="text-muted">
                            <img src="https://sfault-avatar.b0.upaiyun.com/387/044/3870447111-5673aedad6338_small"
                                 class="avatar-24">
                            <a href="/u/justjavac" class="ellipsis">justjavac</a>
                            <span class="text-muted pull-right">+6514</span>
                        </li>
                        <li class="text-muted">
                            <img src="https://sfault-avatar.b0.upaiyun.com/289/632/289632912-56dcdd3095831_small"
                                 class="avatar-24">
                            <a href="/u/incnick" class="ellipsis">incNick</a>
                            <span class="text-muted pull-right">+5674</span>
                        </li>
                        <li class="text-muted">
                            <img src="https://sfault-avatar.b0.upaiyun.com/270/943/2709439599-1030000000321731_small"
                                 class="avatar-24">
                            <a href="/u/shamiao" class="ellipsis">沙渺</a>
                            <span class="text-muted pull-right">+5666</span>
                        </li>
                        <li class="text-muted">
                            <img src="https://sfault-avatar.b0.upaiyun.com/192/648/1926483299-1030000000139155_small"
                                 class="avatar-24">
                            <a href="/u/johnlui" class="ellipsis">JohnLui</a>
                            <span class="text-muted pull-right">+5128</span>
                        </li>
                    </ol>
                </div>
            </div><!-- /.side -->
        </div>
    </div>

</div>

</div>


</div><!-- /.main -->


</div>
</div>
</body>