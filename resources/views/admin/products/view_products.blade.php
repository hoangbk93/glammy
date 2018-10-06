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
                  <th width="30%">Tên Sản phẩm</th>
                  <th>Giá sản phẩm</th>
                  <th width="20%">Ảnh sản phẩm</th>
                  <th>Danh mục</th>
                  <th>Tùy chọn</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $prod)
                <tr>
                  <td>{{ $prod->id}}</td>
                  <td>{{ $prod->prod_name}}</td>
                  <td>{{ $prod->prod_price}} VND</td>
                  <td><img width="100px" src="{{ asset('upload/images/products/small/'.$prod->prod_img)}}" class="thumbnail">
                    </td>
                  <td>{{ $prod->cate_id}}</td>
                  <td><a class="btn btn-primary" href="{{ url('admin/product/edit/'.$prod->id) }}">Edit</a> <a class="btn btn-danger" onclick="return confirm('Bạn chắc chăn muốn xóa sản phẩm')" href="{{ url('admin/product/delete/'.$prod->id) }}">Delete</a> <a href="{{ url('admin/product/images/add/'.$prod->id) }}" class="btn btn-default">IMG</a></td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Tên Sản phẩm</th>
                  <th>Giá sản phẩm</th>
                  <th>Ảnh sản phẩm</th>
                  <th>Danh mục</th>
                  <th>Tùy chọn</th>
                </tr>
                </tfoot>
              </table>
            </div>
            
            <!-- /.box-body -->
        </div>
          <!-- /.box -->
          <a type="button" class="btn btn-primary" href="{{url('admin/product/add')}}">ADD PRODUCT</a>
</div>
</section>
</div>

@endsection