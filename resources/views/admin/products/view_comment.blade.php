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
                  <th>ID</th>
                  <th width="30%">Guest</th>
                  <th>Content</th>
                  <th width="20%">Id product</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($comments as $comment)
                <tr>
                  <td>{{ $comment->id}}</td>
                  <td>{{ $comment->com_name}}</td>
                  <td>{{ $comment->com_content}} </td>
                  <td>{{ $comment->com_product}}</td>
                  <td>@if($comment->com_status == 1) Enable @elseif($comment->com_status == 0) Disable @endif </td>
                  <td><a class="btn btn-primary" href="{{ url('admin/product/comment/edit/'.$comment->id) }}">Edit</a> <a class="btn btn-danger" onclick="return confirm('Bạn chắc chăn muốn xóa sản phẩm')" href="{{ url('admin/product/comment/delete/'.$comment->id)}}">Delete</a></td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th width="30%">Guest</th>
                  <th>Content</th>
                  <th width="20%">Id product</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
                </tfoot>
              </table>
            </div>
            
            <!-- /.box-body -->
        </div>
          <!-- /.box -->
         
</div>
</section>
</div>

@endsection