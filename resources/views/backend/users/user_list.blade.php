@extends('backend.layout.master')
@section('title','Danh sách quản trị viên')
@section('content')

<div class="panel panel-primary">
    <!-- Default panel contents -->
    <div class="panel-heading">Danh sách quản trị viên</div>
    <div class="panel-body">
        <form action="{{ route('search_user') }}" method="get" class="form-inline" role="form">

            <div class="col-md-6" class="form-search">
                                        
                <div class="input-group">
                <input type="text" name="search" id="search" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" id="search_btn" class="btn btn-primary"><i class="fa fa-search"></i>
                    </button>
                </span>
                
                </div>
            <a href="{{route('get_user_add')}}" class="btn btn-success">Thêm mới</a>
             </div>
        </form>
    </div>

    <!-- Table -->
    <table class="table">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên quản trị viên</th>
                <th>Ảnh đại diện</th>
                <th>Email</th>
                <th>level</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $key => $user)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$user->name}}</td>
                <td><img src="{{ url('') }}\avatar\{{$user->image}}" alt="" width="40"></td>
                <td>{{$user->email}}</td>
                <td>{{$user->level}}</td>
                <td>
                    <div class="action">
                        <a href="{{route('get_user_edit',['id'=>$user->id])}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Sửa</a>
                        <form action="{{route('post_user_delete',['id'=>$user->id])}}" method="post" accept-charset="utf-8" class="form-action">
                                @csrf
                        <button class="btn btn-danger btn-sm"  onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><span class="glyphicon glyphicon-trash"></span> Xóa</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class=" paging">
            {!! $users->links() !!}
    </div>
</div>
@stop()