@extends('layouts.adminLayout.admin_design')
@section('content')
<div class="content-wrapper">
<section class="content">
      <div class="row">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh sách Banner</h3>
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
                  <th width="30%">Tên banner</th>
                  <th>URL</th>
                  <th width="20%">Ảnh sản phẩm</th>
                  <th>Thẻ Alt</th>
                  <th>Status</th>
                  <th>Tùy chọn</th>
                </tr>
                </thead>
                <tbody>
                @foreach($banners as $banner)
                <tr>
                  <td>{{ $banner->id}}</td>
                  <td>{{ $banner->banner_name}}</td>
                  <td>{{ $banner->banner_url}}</td>
                  <td><img width="100px" src="{{ asset('upload/images/banner/'.$banner->banner_image)}}" class="thumbnail">
                    </td>
                  <td>{{ $banner->banner_alt}}</td>
                  <td>@if( $banner->banner_status == 1) Enable @elseif($banner->banner_status == 0) Disable @endif</td>
                  <td><a class="btn btn-primary" href="{{ url('admin/banner/edit/'.$banner->id) }}">Edit</a> <a class="btn btn-danger" onclick="return confirm('Bạn chắc chăn muốn xóa sản phẩm')" href="{{ url('admin/banner/delete/'.$banner->id) }}">Delete</a></td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Tên banner</th>
                  <th>URL</th>
                  <th>Ảnh sản phẩm</th>
                  <th>Thẻ Alt</th>
                  <th>Tùy chọn</th>
                </tr>
                </tfoot>
              </table>
            </div>
            
            <!-- /.box-body -->
        </div>
          <!-- /.box -->
          <a type="button" class="btn btn-primary" href="{{url('admin/banner/add')}}">ADD banner</a>
</div>
</section>
</div>

@endsection