@extends('layouts.home') 
@section('css')
<style type="text/css">
</style>
@endsection
 @section('content')
<div class="wrap">
	<div class="container tag__container">
		<form  id="ajax-form" class="form-horizontal" action="{{url('blog/apply')}}" method="post" enctype="multipart/form-data">
			<div class="form-group ">
				<label class="col-sm-2 control-label" for="title">专栏名称</label>
				<div class="col-sm-8">
					<input type="text" name="name" class="form-control" id="title">
				</div>
			</div>
			{{ csrf_field() }}
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">专栏封面</label>
					<div class="col-sm-8">
					<input type="file" name="cover" class="form-control" id="cover" accept="image/*">
				</div>
			</div>
				<div class="form-group">
				<label for="name" class="col-sm-2 control-label">描述</label>
					<div class="col-sm-8">
					<input type="textarea" name="descript" class="form-control" id="descript">
				</div>
			</div>
			<div class="col-sm-2 col-sm-offset-9">
				<button  class="btn btn-primary ajax-post">提交申请</button>
			</div>

		</form>
	</div>
</div>



@endsection 
@section('js') 
@parent 
<script>
	$('.ajax-post').click(function (e) {
		var url=$("#ajax-form").attr('action');
		var type="post";
		var options = {
      		url: url,
      		type: type,
      		success: function (data) {
				   layer.msg(data.msg);
				  if(data.status){
					   window.location.href=data.data.url;
				  }
				  return false;
			  },
			  error: function (data) {
				  var error=data.responseJSON;
				  var msg="";
				  for(var key in error){
					  msg+=key+":"+error[key][0]
				}
				layer.msg(msg);
      		}
		};
		$("#ajax-form").ajaxSubmit(options);
		return false;
    });
</script>



@endsection