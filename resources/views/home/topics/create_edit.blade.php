@extends('layouts.home')
@section('css')
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/select2-bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrapValidator.min.css') }}" rel="stylesheet">
    <style type="text/css">
        .select2-results__option{padding: 6px;
            user-select: none;
            -webkit-user-select: none;
            float: left;}
        .select2-selection__choice__remove {
            color: #999;
            cursor: pointer;
            display: inline-block;
            font-weight: bold;
            margin-right: 2px;
            float: right;
        }
        .select2-results{

        }
    </style>
@endsection
@section('content')

    <form class="form-horizontal">
        <div class="form-group ">
            <label  class="col-sm-2 control-label" for="title">标题</label>
            <div class="col-sm-8">
            <input type="text" name="title" class="form-control" id="title" >
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">内容</label>
            <div class="col-sm-8">
            <textarea class="form-control" rows="3"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="label" class="col-sm-2 control-label">标签</label>
            <div class="col-sm-8">
                <select class="form-control" multiple="multiple">
                    @foreach($tags as $k=>$item)
                    <option value="{{$item['id']}}" class="element">{{$item['name']}}</option>
                        @endforeach
                </select>
            </div>
        </div>
        <div class="col-sm-2 col-sm-offset-9">
            <button   type="submit" class="btn btn-primary">提交</button>
            <button   type="submit" class="btn btn-primary">保存至草稿</button>
        </div>

    </form>



    @endsection
@section('js')
    <script src="{{asset('js/jquery-1.11.3.min.js')}}"></script>
    <script src="{{asset('js/jquery.form.js')}}"></script>
    <script src="{{asset('js/tinymce_4.6.7/tinymce/js/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/bootstrapValidator.min.js')}}"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        function formatState (state) {
//            if (!state.id) {
//                return state.text;
//            }
//            var baseUrl = "/user/pages/images/flags";
            var $state = $(
              '<span>'+state.text+'</span>'+'<span class="select2-selection__choice__remove" role="presentation">×</span>'
            );
            return $state;
        };
        $('select').select2({
            placeholder: 'This is my placeholder',
            allowClear: true,
            theme: "bootstrap"
//            templateSelection: formatState
        });
    </script>
    <script>
        $.fn.select2.defaults.set( "theme", "bootstrap" );
        tinymce.init({
            selector:'textarea',
            language: 'zh_CN',
            height: 300,
            body_class: 'panel-body',
            object_resizing: false,
            upload_image_url: '/Upload/pictures',
            toolbar:['removeformat undo redo |  bullist numlist | outdent indent | forecolor | styleselect | bold italic blockquote |insert  | media link image uploadimage | alignleft aligncenter alignright | code fullscreen'],
            menubar:false,
            imagetools_toolbar: "rotateleft rotateright | flipv fliph | editimage imageoptions",
            // plugins: 'advlist,autolink,code,paste,textcolor, colorpicker,fullscreen,link,lists,media,wordcount, imagetools,watermark,uploadimage',
            //toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            plugins: 'advlist,autolink,code,paste,textcolor, colorpicker,fullscreen,link,lists,media,wordcount, image,imagetools,uploadimage',
            end_container_on_empty_block: true,
            powerpaste_word_import: 'clean',
            code_dialog_height: 450,
            code_dialog_width: 1000,
            advlist_bullet_styles: 'square',
            advlist_number_styles: 'default',
            default_link_target: '_blank',
            link_title: false,
            block_formats: '普通标签=p;小标题=h2;',
        });
    </script>
    @endsection