@extends('layouts.adminLayout.admin_design')
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Sản phẩm</h1>
      </div>
    </div><!--/.row-->
    
    <div class="row">
      <div class="col-xs-12 col-md-12 col-lg-12">
        
        <div class="panel panel-primary">
          <div class="panel-heading">Sửa sản phẩm</div>
          <div class="panel-body">
            <form method="post" enctype="multipart/form-data" action="{{ url('admin/product/edit/'.$product->id) }}"> {{ csrf_field() }}
              <div class="row" style="margin-bottom:40px">
                <div class="col-xs-8">
                  <div class="form-group" >
                    <label>Tên sản phẩm</label>
                    <input required type="text" name="product_name" class="form-control" value="{{ $product->prod_name }}">
                  </div>
                  <div class="form-group" >
                    <label>Giá sản phẩm</label>
                    <input required type="number" name="product_price" class="form-control" value="{{ $product->prod_price }}">
                  </div>
                  <div class="form-group" >
                    <label>Ảnh sản phẩm</label>
                    <input  id="img" type="file" name="product_img" class="form-control hidden" onchange="changeImg(this)">
                              <img id="avatar" class="thumbnail" width="300px" src="{{ asset('upload/images/products/small/'.$product->prod_img) }}">
                  </div>
                 <div class="form-group">
                      <label for="exampleInputEmail1">Product Code</label>
                      <input type="text" class="form-control" id="product_code" name="product_code"  value="{{ $product->prod_code }}">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Product Color</label>
                      <input type="text" class="form-control" id="product_color" name="product_color" value="{{ $product->prod_color }}">
                  </div>
                  <div class="form-group" >
                    <label>Miêu tả</label>
                    <textarea required name="description" class="ckeditor">{{ $product->prod_description }}</textarea>
                    <script type="text/javascript">
                    var editor = CKEDITOR.replace('description',{
                      language:'vi',
                      filebrowserImageBrowseUrl: '../../../editor/ckfinder/ckfinder.html?Type=Images',
                      filebrowserFlashBrowseUrl: '../../../editor/ckfinder/ckfinder.html?Type=Flash',
                      filebrowserImageUploadUrl: '../../../editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                      filebrowserFlashUploadUrl: '../../../editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                    });
                  </script>
                  </div>
                  <div class="form-group" >
                    <label>Danh mục</label>
                    <select required name="product_cate" class="form-control">
                    	<option ></option>
                    	@foreach($catelist as $cate)
                     	 <option value="{{$cate->id}}" @if($cate->id == $product->cate_id) {{'selected'}} @endif>{{ $cate->name }}</option>
                     	@endforeach
                    </select>
                  </div>
                  <div class="form-group" >
                    <label>Sản phẩm nổi bật</label><br>
                    Có: <input type="radio" name="product_feature" value="1" @if($product->prod_feature == 1) {{ 'checked'}} @endif>
                    Không: <input type="radio" name="product_feature" value="0" @if($product->prod_feature == 0) {{ 'checked'}} @endif>
                  </div>
                  <input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
                  <a href="#" class="btn btn-danger">Hủy bỏ</a>
                </div>
              </div>
            </form>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div><!--/.row-->
  </div>  <!--/.main-->

@endsection