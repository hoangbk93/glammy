@extends('layouts.adminLayout.admin_design')
@section('content')
<div class="content-wrapper">
<section class="content">
      <div class="row">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh sách Category</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              @if(Session::has('flash_message_success'))
              <div class="alert alert-success alert-bock">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{!! session('flash_message_success') !!}</strong>
              </div>
            @endif
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Category name</th>
                  <th>Level</th>
                  <th>Description</th>
                  <th>Category Url</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                <tr>
                  <td>{{ $category->id}}</td>
                  <td>{{ $category->name}}</td>
                  <td>{{ $category->parent_id}}</td>
                  <td>{{ $category->description}}</td>
                  <td>{{ $category->url}}</td>
                  <td><a href="{{ url('admin/category/edit/'.$category->id) }}">Edit</a> | <a onclick="return confirm('Bạn chắc chăn muốn xóa tài khoản')" href="{{ url('admin/category/delete/'.$category->id) }}">Delete</a></td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Category name</th>
                  <th>Level</th>
                  <th>Description</th>
                  <th>Category Url</th>
                  <th>Actions</th>
                </tr>
                </tfoot>
              </table>
            </div>
            
            <!-- /.box-body -->
        </div>
          <!-- /.box -->
          <a type="button" class="btn btn-primary" href="{{url('admin/category/add')}}">ADD CATEGORY</a>
</div>
</section>
</div>

@endsection