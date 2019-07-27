@extends('backend.layout.master')
@section('title','Quản lý danh mục')
@section('content')


<div class="panel panel-primary">
    <!-- Default panel contents -->
    <div class="panel-heading">Danh sách danh mục</div>
    <div class="panel-body">
        <form action="{{ route('search_category') }}" method="get" class="form-inline" role="form">

            <div class="col-md-6" class="form-search">
                                        
                <div class="input-group">
                <input type="text" name="search" id="search" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" id="search_btn" class="btn btn-primary"><i class="fa fa-search"></i>
                    </button>
                </span>
                
                </div>
            <a href="{{route('get_category_add')}}" class="btn btn-success">Thêm mới</a>
             </div>
        </form>
    </div>

    <!-- Table -->
    <table class="table">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên danh mục</th>
                <th>Trạng thái</th>
                <th>Ngày tạo</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category as $key => $cat)
            @php
                $status=$cat->status==1?'Hiện':'Ẩn';
            @endphp
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$cat->name}}</td>
                <td>{{ $status}}</td>
                <td>{{ $cat->created_at}}</td>
                <td>
                    <div class="action">
                        <a href="{{route('get_category_edit',['id'=>$cat->id])}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Sửa</a>
                        <form action="{{route('post_category_delete',['id'=>$cat->id])}}" method="post" accept-charset="utf-8" class="form-action">
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
            {!! $category->links() !!}
    </div>
</div>

@stop()
@section('js')

@stop()