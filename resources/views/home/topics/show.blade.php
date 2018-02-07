@extends('layouts.home')
@section('content')
 @inject('tagsModel', 'App\Models\Tag')
<div class="post-topheader custom-">
    <div class="container">
        <div class="block-for-right-border">
            <div class="row">
                <div class="col-md-9 col-sm-8 col-xs-12">
                    <div class="post-topheader__info" data-username="andot" data-userslug="andot" data-useravatar="">

                            <h1 class="h3 post-topheader__info--title" id="articleTitle" data-id="1190000007760513">
                                <a href="/a/1190000007760513">{{$info->title}}</a>
                            </h1>

                            <div class="content__tech blog-type-common blog-type-0-before">
                            </div>
                                @if(!empty($info->TopicTag))
                                <ul class="taglist--inline inline-block article__title--tag mr10">
                                    @foreach($info->TopicTag as $tagId)
                                      @if(!empty($tagsModel->tagsAll()[$tagId->tag_id]))
                                        <li class="tagPopup mb5">
                                            <a class="tag" href="/t/swoole/blogs" data-toggle="popover" data-img="" data-placement="top" data-original-title="swoole" data-id="1040000000578968">
                                                {{$tagsModel->tagsAll()[$tagId->tag_id]}}
                                            </a>
                                        </li>
                                    @endif
                                    @endforeach
                                </ul>
                                 @endif       
                            <div class="article__author">
                                    <a href="/u/andot" class="mr5 ">
                                        <strong>andot</strong>
                                    </a>
                                    2016年12月10日发布
                                   
                            </div>
                             
                    </div>
  
                </div>
                <div class="col-md-3 col-sm-4 hidden-xs">
                    <ul class="post-topheader__side list-unstyled">
                        <li>
                            <button type="button" class="btn btn-success btn-sm " data-id="1190000007760513" id="sideLike"><span id="sideLikeText">赞</span>&nbsp;&nbsp;<span class="seprator">|</span>&nbsp;&nbsp;
                            <span id="sideLikeNum">7</span></button><button type="button" id="sideBookmark" class="btn btn-default btn-sm " data-id="1190000007760513" data-type="article"><span id="sideBookmarkText">收藏</span>&nbsp;&nbsp;<span class="seprator">|</span>&nbsp;&nbsp;<span id="sideBookmarkNum">45</span></button>                            </li>
                        <li>
                            <strong class="no-stress">3.8k</strong> 次浏览
                        </li>
                    </ul>
                </div>      
        </div>    
    </div>
</div>
<div class="container mt30">
        <div class="row">
            <div class="col-xs-12 col-md-9 main ">
                <div class="article fmt article__content" data-id="1190000013041329" data-license="">
                    {!!$info->content!!}
            </div>
        </div><!-- /.main -->


            <div class="col-xs-12 col-md-3 side">
                
                <div class="widget-box widget_lives pt0 hidden" style="border-top: none" id="live-recommend-wrapper">
                    <h2 class="widget-box__title">
                        讲堂推荐
                        <i class="fa fa-youtube-play fa-sm" aria-hidden="true"></i>
                        <a href="/lives" class="pull-right more">更多</a>
                    </h2>
                    <div id="live-recommend" class="mb20"></div>
                </div>
                
                                
                <div id="mm_124884735_33830642_120290173" class="mb25"><span style="overflow: visible; position: relative; display: block; width: 255px; height: 213px; background: none; border: 0px; text-align: left;"><span style="overflow: hidden; position: absolute; display: block; width: 255px; height: 213px; background: none; border: 0px; text-align: left;"><span style="overflow: hidden; position: absolute; display: block; width: 255px; height: 213px; background: none; border: 0px; text-align: left;"><a href="https://afptrack.alimama.com/clk?bid=0bfbf7c900005a7984c8313024d5b1dc&amp;pid=mm_124884735_33830642_120290173&amp;cid=264935&amp;mid=250254&amp;oid=34726&amp;productType=1&amp;qytInfoMTime=1517858109&amp;e=h9G4O9btMypfumWCnJqSgX3zsnWZJgka0TY45mR%2BlXH%2FDj52ToDbsv6yoXEsDyQyyDBGxpwPU121rqk1GCrVl62TFmV%2Be%2FnPlQthTJtDdRo%3D&amp;k=109" target="_blank" style="position: absolute; display: block; top: 0px; left: 0px; margin: 0px; padding: 0px; width: 255px; height: 213px; text-decoration: none; opacity: 0; z-index: 1; cursor: pointer; background: rgb(255, 255, 255);"></a><img id="ac_cs_mm_124884735_33830642_120290173_1" border="0" src="https://afp.alicdn.com/afp-creative/creative/u124884735/4e375754c058d325efe6c3434e31b025.jpg" style="width: 255px; height: 213px;"></span></span></span></div>
                
                <div class="widget-box widget-box--blog-info">
                    <div class="blog__sidebar-author blog__sidebar-author--noblog">
                                                    <button type="button" class="btn btn-sm btn-success follow-user ml10 pull-right" data-do="follow" data-type="user" data-id="1030000010414897">关注作者
                            </button>
                        
                        <div class="article__widget--author">
                            <a href="/u/zi_597d64ce14187" class="inline-block">
                                <img class="avatar-40" src="https://sfault-avatar.b0.upaiyun.com/296/874/2968748607-59ff0740eb58a_big64" alt="咚子">
                            </a>
                            <a class="article__widget-author-name inline-block" href="/u/zi_597d64ce14187">
                                <strong>咚子</strong>
                            </a>
                            <p class="article__widget-author-text-muted mb0">
                                <span>1.5k 声望</span>

                            </p>


                        </div>


                    </div>
                    

                </div>
                
                
                                <div id="mm_124884735_33830642_145440102" class="mb25 ad-should-be-fixed stuckMenu" style="display: block; position: relative; top: 0px;"><div class="sfad-list"><div class="sfad-item"><a target="_blank" href="https://afptrack.alimama.com/clk?bid=0bfbf7ca00005a7984c7757524c0a052&amp;pid=mm_124884735_33830642_145440102&amp;cid=266543&amp;mid=251746&amp;oid=34478&amp;productType=1&amp;qytInfoMTime=1517858109&amp;e=Gk7C8%2F%2F6NRJfumWCnJqSgbGwtOlaLtnG1elYJ1S1IevEgksemoQNJjHe%2BckwXp0%2FLuRratpqH3liODDozmX0cqbS5ou%2Bcrhd7gBlk0C%2B0TY8dj6cb4pSWefkEjqAj5Ew%2Bdapcbmg9EW7dGXvGiWb2H3dQH6KP1uGnmQXkC5wkBGwSFH8Hbp%2BdPDhoOcS0QRMHj5Ji57QB8MEEl2QYpmOuceSStu1Q3qxF3Quzfkt49Dqj%2BH%2FLTvBUKgzNDotEbATh4Lmt4IqPQNRRrssrjXDW7Owh7t9YKslxYMMSVZTlhSUVr5aSEf%2FGhU2B1xlY7bWEpOVMxxU2vO4vdpS2IkXD6GP%2FY0LENybEfezrvORhD6pirxp%2FkPvjt2R%2BJ6m6ngUmibPrBgINhffVDHn2iPmW0eRTkTwdD2T5FPOw6YNcurjPoT3cknsSKCyzvc0bwqdZRFipqotbMebIo8Do3kEnnJx%2BhAlJcDGM3XRuqlDHzELRDmU99lpShobGa31QjRkPjZYGSuBjg4%3D&amp;k=525"><img src="https://afp.alicdn.com/afp-creative/creative/u124884735/14945f2171400c10764ab8f3468470e4.jpg" alt="过年学区块链"></a></div><div class="sfad-item"><a target="_blank" href="https://afptrack.alimama.com/clk?bid=0bfbf7ca00005a7984c7757524c0a052&amp;pid=mm_124884735_33830642_145440102&amp;cid=266542&amp;mid=251744&amp;oid=34478&amp;productType=1&amp;qytInfoMTime=1517858109&amp;e=AR%2BLOx3OR%2F5fumWCnJqSgbGwtOlaLtnG1elYJ1S1IevEgksemoQNJg8jbaN%2FWDoPLuRratpqH3liODDozmX0cqbS5ou%2Bcrhd7gBlk0C%2B0TY8dj6cb4pSWefkEjqAj5Ew%2Bdapcbmg9EW7dGXvGiWb2H3dQH6KP1uGnmQXkC5wkBGIDaA6AceMqNpbgmoBWAnOlrHc4lQvd%2Bch0aaMhiz%2FbCDri8aaxHgc8O52hx8%2FTrP0sFhxpXw3Ysbg2eCY%2BRYBT184GxDNB7WabuZmuoyA8CrQEGC7V4CojHyd7tJQHtQmMThoL%2Bxvd9rHonUd9j0GtlJ1mScIaSRM7fOizw1gC2Abw1fjIhUhnnlQy0NiyrWZqG8R5YxfOEPklD78NJvdauV7nfucEmslj39Eo%2BOMNsmNH5P5w6Sc0koohX02TAEhf8OmjPcOU6Cyzvc0bwqdZRFipqotbMebIo8Do3kEnnJx%2BhAlJcDGQTAn941NL6Koi1Idza3PSvE5hCytZXXhaFIII3IgEC8%3D&amp;k=525"><img src="https://afp.alicdn.com/afp-creative/creative/u124884735/9fa0c2075172839724a919bf198dc4e8.jpg" alt="五年高考三年模拟"></a></div></div><div id="ac_wrap_mm_124884735_33830642_145440102" style="width:255px"><div id="ac_wrap_custommm_124884735_33830642_145440102" style="position:relative;"></div></div></div>
 
                <div class="post-nav hidden-xs side-outline hidden-sm" style="display: block; margin-top: 0px; width: 100%;">
                    <div class="panel panel-default widget-outline">
                        <div class="panel-heading">目录</div>
                        <div class="panel-body">
                            <div class="nav-body" style="top: 0px;">
                                <div class="highlight-title" style="display: none;"></div>
                                <ul class="articleIndex"><li><a href="#articleHeader0">前言</a></li><li><a href="#articleHeader1">JavaScript</a></li><li style="list-style:none;"><ul><li><a href="#articleHeader2">1. type 类型判断</a></li><li><a href="#articleHeader3">2. Date</a></li><li><a href="#articleHeader4">3. Array</a></li><li><a href="#articleHeader5">4. String 字符串操作</a></li><li><a href="#articleHeader6">5. Number</a></li><li><a href="#articleHeader7">6. Http</a></li><li><a href="#articleHeader8">7. DOM</a></li><li><a href="#articleHeader9">8. Storage 储存操作</a></li><li><a href="#articleHeader10">9. Other 其它操作</a></li></ul></li><li><a href="#articleHeader11">CSS</a></li><li style="list-style:none;"><ul><li><a href="#articleHeader12">1. pc-reset PC样式初始化</a></li><li><a href="#articleHeader13">2. Phone-reset</a></li><li><a href="#articleHeader14">3. 公共样式提取</a></li></ul></li></ul>
                            </div>
                        </div>
                    </div>
                </div>

                
            </div><!-- /.side -->
        </div>
    </div>
@endsection