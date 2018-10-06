@extends('layouts.adminLayout.admin_design')
@section('content')
<div class="content-wrapper">
<section class="content">

    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Ảnh Sản phẩm</h1>
      </div>
    </div>
    <!--/.row-->
    <div class="row">
      <div class="col-xs-12 col-md-12 col-lg-12">
        <div class="panel panel-primary">
          <div class="panel-heading">Thêm Ảnh sản phẩm</div>
          @if(isset($errors))
              @foreach($errors->all() as $error)
              <div class="alert alert-warning alert-bock">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{{$error}}</strong>
              </div>
              @endforeach
            @endif 
          <div class="panel-body">
            <form method="post" enctype="multipart/form-data" action="{{ url('admin/product/images/add/'.$product->id) }}"> {{ csrf_field() }}
              <div class="row" style="margin-bottom:40px">
                <div class="col-xs-6 col-md-6 col-lg-6">
                  <div class="form-group" >
                    <label>Tên sản phẩm: </label><span>{{$product->prod_name}}</span>
                  </div>
                  <div class="form-group" >
                    <label>Giá sản phẩm: </label><span>${{$product->prod_price}}.00</span>
                  </div>
                  <div class="form-group">
                  	<label>Ảnh sản phẩm:</label>
                  	<input type="file" name="image">
                  </div>
                  <input type="submit" name="submit" value="Thêm Ảnh" class="btn btn-primary">
                </div>
                <div class="col-xs-6 col-md-6 col-lg-6">
                	<img width="150px" src="{{ url('upload/images/products/small/'.$product->prod_img) }}">
                </div>
              </div>
            </form>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div><!--/.row-->
<!-- table info -->
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh sach hinh anh</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th width="20%">ID</th>
                  <th width="20%">ID Product</th>
                  <th width="30%">IMG</th>
                  <th>Action</th>
                </tr>
                @foreach($images as $img)
                <tr>
                  <td>{{$img->id}}</td>
                  <td>{{$img->product_id}}</td>
                  <td><img width="100px" src="{{ url('upload/images/products/small/'.$img->image) }}"></td>
                  <td>
                  	<a onclick="return confirm('Bạn chắc chắn muốn xáo hình ảnh sản phẩm?')" href="{{ url('admin/product/images/delete/'.$img->id)}}" class="btn btn-danger">Xóa</a>
                  </td>
                </tr>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
 <!-- ./table info -->
</section>
</div>
@endsection