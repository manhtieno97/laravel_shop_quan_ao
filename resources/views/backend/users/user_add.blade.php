@extends('backend.layout.master')
@section('title','Thêm mới quản trị viên')
@section('content')

<form action="" method="POST" role="form" enctype="multipart/form-data" class="col-md-6">
  	<legend>Thêm mới</legend>
      @csrf
  	<div class="form-group">
  		<label for="">Tên quản trị viên</label>
          <input type="text" class="form-control" name="name" value="{{old('name') }}" placeholder="Nhập tên ...">
          @if ($errors->has('name'))
           <p class="text-danger">{{ $errors->first('name') }}</p>
          @endif
  	</div>

    <div class="form-group">
      <label for="">Email</label>
          <input type="text" class="form-control" name="email" value="{{old('email') }}" placeholder="Nhập email...">
          @if ($errors->has('email'))
           <p class="text-danger">{{ $errors->first('email') }}</p>
          @endif
           <p class="text-danger" style="display: none">lỗi</p>
    </div>
    <div class="form-group" >
      <label>Ảnh đại diện</label>
          <input  id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
          <img id="avatar" class="thumbnail" width="200px" src="{{url('backend')}}/images/no-ig.png">
    </div>
  	<div class="form-group">
      <label for="">Mật khẩu</label>
          <input type="password" class="form-control" name="password"  placeholder="Nhập mật khẩu...">
          @if ($errors->has('password'))
           <p class="text-danger">{{ $errors->first('password') }}</p>
          @endif
    </div>

    <div class="form-group">
      <label for="">Nhập lại mật khẩu</label>
          <input type="password" class="form-control" name="confirm_password"  placeholder="Nhập mật khẩu...">
          @if ($errors->has('confirm_password'))
           <p class="text-danger">{{ $errors->first('confirm_password') }}</p>
          @endif
    </div>

      <button type="submit" class="btn btn-primary">Thêm mới</button>
     
  </form>
@stop()

@section('js')
<script type="text/javascript">
  function changeImg(input){
        //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
        if(input.files && input.files[0]){
            var reader = new FileReader();
            //Sự kiện file đã được load vào website
            reader.onload = function(e){
                //Thay đổi đường dẫn ảnh
                $('#avatar').attr('src',e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(document).ready(function() {
        $('#avatar').click(function(){
            $('#img').click();
        });
    });
  $(document).ready(function() {
      
  });

</script>
@stop()