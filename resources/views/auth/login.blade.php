@extends('layouts.home')

@section('content')
        <fieldset class="form-group">
                        <div class="alert alert-info">
                            使用以下方法注册或者登录
                        </div>
                        <div class="col-md-6 col-md-offset-3">
                        <a class="btn  btn-default " href="/login/oauth?driver=github">
                        <i class="fa fa-github-alt"></i> GitHub 登录</a>
                        </div>
                        <div class="col-md-6 col-md-offset-3">
                        <a class="btn  btn-default" href="/login/oauth?driver=wechat"><i class="fa fa-weixin"></i> 使用微信登录</a>
                        </div>
                    </fieldset>
@endsection
