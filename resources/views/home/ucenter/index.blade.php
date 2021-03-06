@extends('layouts.home')
@section('content')
<div class="by aha ahl">



{{$blog}}  
  <div class="dp">
    <div class="fj">
      <div class="pz bpi afo">
        <div class="qf" style="background-image: url(http://{{$blog->cover}});"></div>
        <div class="qa avz">
          <a href="profile/index.html">
            <img class="bpj" src="{{$blog->user['image_url']}}">
          </a>
          <h6 class="qb">
            <a class="boa" href="profile/index.html">{{$blog['name']}}</a>
          </h6>
          <p class="afo">{{$blog->user['name']}}</p>
          <ul class="bpk">
            <li class="bpl">
              <a href="#userModal" class="boa" data-toggle="modal">
                订阅
                <h6 class="aej">{{$blog['subscriber_count']}}</h6>
              </a>
            </li>
            <li class="bpl">
              <a href="#userModal" class="boa" data-toggle="modal">
                发布
                <h6 class="aej">{{$blog['article_count']}}</h6>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="pz vp vy afo">
        <div class="qa">
          <h6 class="afh">About <small>· <a href="#">Edit</a></small></h6>
          <ul class="dc axg">
            {{$blog->description}}
            {{--  <li><span class="axc h ban aff"></span>来自<a href="javascript:void(0)">{{$blog->user['address']}}</a>
            </li>
            <li><span class="axc h bnc aff"></span>简述 <i>{{$blog->description}}</i>
            </li>
            <li><span class="axc h bfa aff"></span>Worked at <a href="#">Github</a>
            </li>
            <li><span class="axc h bfq aff"></span>Lives in <a href="#">San Francisco, CA</a>
            </li>
            <li><span class="axc h bgz aff"></span>From <a href="#">Seattle, WA</a>
            </li>  --}}
          </ul>
        </div>
      </div>
      <div class="pz vp vy afo">
        <div class="qa">
          <h6 class="afh">Photos <small>· <a href="{url('ucenter/edit')}"></a></small></h6>
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
        {{--  <li class="rv b agz">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Message">
            <div class="bpt">
              <button type="button" class="cg ns yf">
                <span class="h bao"></span>
              </button>
            </div>
          </div>
        </li>  --}}
        <li class="rv b agz">
          <img class="bos vb yb aff" src="assets/img/avatar-dhg.png">
          <div class="rw">
            <div class="bpb">
              <small class="acx axc">4 min</small>
              <h6>Dave Gamache</h6>
            </div>
            <p>
              Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper. Morbi leo risus, porta ac
              consectetur ac, vestibulum at eros. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum
              id ligula porta felis euismod semper. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
              ridiculus mus.
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
                  <strong>Jacon Thornton: </strong> Donec id elit non mi porta gravida at eget metus. Vivamus sagittis lacus
                  vel augue laoreet rutrum faucibus dolor auctor. Donec ullamcorper nulla non metus auctor fringilla. Praesent
                  commodo cursus magna, vel scelerisque nisl consectetur et. Sed posuere consectetur est at lobortis.
                </div>
              </li>
              <li class="rv">
                <img class="bos vb yb aff" src="assets/img/avatar-mdo.png">
                <div class="rw">
                  <strong>Mark Otto: </strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dapibus, tellus
                  ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                </div>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
    <div class="fj">
      <div class="alert ro alert-dismissible d-none vy" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <a class="rj" href="profile/index.html">Visit your profile!</a> Check your self, you aren't looking well.
      </div>
      <div class="pz afo d-none vy">
        <div class="qa">
          <h6 class="afh">Sponsored</h6>
          <div data-grid="images" data-target-height="150"><img class="bos" data-width="640" data-height="640" data-action="zoom" src="assets/img/instagram_2.jpg" style="width: 239px; height: 225px; margin-bottom: 10px; margin-right: 0px; display: inline-block; vertical-align: bottom;"></div>
          <p><strong>It might be time to visit Iceland.</strong> Iceland is so chill, and everything looks cool here. Also,
            we heard the people are pretty nice. What are you waiting for?</p>
          <button class="cg nz ok">Buy a ticket</button>
        </div>
      </div>
      <div class="pz afo d-none vy">
        <div class="qa">
          <h6 class="afh">Likes <small>· <a href="#">View All</a></small></h6>
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
@endsection