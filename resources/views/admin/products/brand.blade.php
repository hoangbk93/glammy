@extends('layouts.adminLayout.admin_design')
@section('content')
<div class="content-wrapper">
<section class="content">
      <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh sách Product Brand</h3>
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
                  <th>Brand</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($brands as $brand)
                <tr>
                  <td>{{ $brand->id}}</td>
                  <td class="brand-name-view">{{ $brand->brand_name}} <span class="hidden" >#{{ $brand->id }}</span></td>
                  <td> @if( $brand->brand_status == 1) Entable @elseif($brand->brand_status == 0) Disable @endif</td>
                  <td><a href="{{ url('admin/product/brand/edit/'.$brand->id) }}" class="edit-brand">Edit</a> | <a onclick="return confirm('Bạn chắc chăn muốn xóa Brand')" href="{{ url('admin/product/brand/delete/'.$brand->id) }}">Delete</a></td>
                  <span id="brand-id" class="hidden" >{{ $brand->id }}</span>
                </tr>
                @endforeach
                </tbody>
              </table>
              <a href="javascript:location.reload(true)" class="btn btn-primary">Refresh Page</a>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
          <form action="{{ url('admin/product/brand')}}" method="post"> {{ csrf_field() }}
            <legend>Option brand</legend>
            <div id="brand-id-option" class="hidden"></div>
            <div id="update-completed" class="alert alert-success hidden"></div>
            <div class="form-group">
              <label for="">Brand Name:</label>
              <input type="text" class="form-control" id="brand-name-edit" name="brand_name">
            </div>
            <div class="form-group">
              <label for="">Brand status:</label>
              <select name="brand_status" id="brand-status-select">
                <option value="1" selected="">Entable</option>
                <option value="0" selected="">Disable</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary" id="submit-add" name="submit">Add</button>
            <a class="btn btn-success hidden" id="submit-edit" href="javascript:void(0)">Edit</a>
          </form>
          <div>
            <h4>Hướng dẫn:</h4>
            <p>Sửa brand 2 cách:</p>
            <ol>
              <li>click edit tại cột actions chuyển sang trang chỉnh sửa.</li>
              <li>Click tên brand và chỉnh sửa ngay phần bên phải màn hình.</li>
            </ol>
          </div>
        </div>
    </div>
  </section>
</div>

@endsection
