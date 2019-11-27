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
          <div class="panel-heading">Thêm sản phẩm</div>
          @if(isset($errors))
              @foreach($errors->all() as $error)
              <div class="alert alert-warning alert-bock">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{{$error}}</strong>
              </div>
              @endforeach
            @endif 
          <div class="panel-body">
            <form method="post" enctype="multipart/form-data" action="{{ url('admin/product/add') }}"> {{ csrf_field() }}
              <div class="row" style="margin-bottom:40px">
                <div class="col-xs-8">
                  <div class="form-group" >
                    <label>Tên sản phẩm</label>
                    <input required type="text" name="product_name" class="form-control">
                  </div>
                  <div class="form-group" >
                    <label>Thương hiệu sản phẩm: </label>
                    <select name="brand">
                      @foreach($brands as $brand)
                      <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group" >
                    <label>Giá sản phẩm</label>
                    <input required type="number" name="product_price" class="form-control">
                  </div>
                  <div class="form-group" >
                    <label>Ảnh sản phẩm</label>
                    <input  id="img" type="file" name="product_img" class="form-control hidden" onchange="changeImg(this)">
                              <img id="avatar" class="thumbnail" width="300px" src="{{ asset('images/backend_images/add-img.png') }}">
                  </div>
                 <div class="form-group">
                      <label for="exampleInputEmail1">Product Code</label>
                      <input type="text" class="form-control" id="product_code" name="product_code" placeholder="product code" required>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Product Color</label>
                      <input type="text" class="form-control" id="product_color" name="product_color" placeholder="product color" required>
                  </div>
                  <div class="form-group" >
                    <label>Miêu tả</label>
                    <textarea required name="description" class="ckeditor"></textarea>
                    <script type="text/javascript">
                    var editor = CKEDITOR.replace('description',{
                      language:'vi',
                      filebrowserImageBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Images',
                      filebrowserFlashBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Flash',
                      filebrowserImageUploadUrl: '../../editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                      filebrowserFlashUploadUrl: '../../editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                    });
                  </script>
                  </div>
                  <div class="form-group" >
                    <label>Danh mục</label>
                    <select required name="product_cate" class="form-control">
                      @foreach($catelist as $cate)
                      <option value="{{$cate->id}}">{{$cate->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group" >
                    <label>Sản phẩm nổi bật</label><br>
                    Có: <input type="radio" name="product_feature" value="1">
                    Không: <input type="radio" checked name="product_feature" value="0">
                  </div>
                  <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
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