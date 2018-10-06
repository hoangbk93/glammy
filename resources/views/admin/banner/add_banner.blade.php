@extends('layouts.adminLayout.admin_design')
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Banner Quảng cáo</h1>
      </div>
    </div><!--/.row-->
    
    <div class="row">
      <div class="col-xs-12 col-md-12 col-lg-12">
        
        <div class="panel panel-primary">
          <div class="panel-heading">Thêm Banner</div>
          <div class="panel-body">
            <form method="post" enctype="multipart/form-data" action="{{ url('admin/banner/add') }}"> {{ csrf_field() }}
              <div class="row" style="margin-bottom:40px">
                <div class="col-xs-8">
                  <div class="form-group" >
                    <label>Tên banner</label>
                    <input required type="text" name="name" class="form-control">
                  </div>
                  <div class="form-group" >
                    <label>Đường dẫn Url</label>
                    <input required type="text" name="url" class="form-control">
                  </div>
                  <div class="form-group" >
                    <label>Thẻ alt</label>
                    <input required type="text" name="alt" class="form-control">
                  </div>
                  <div class="form-group" >
                    <label>Ảnh Banner</label>
                    <input  id="img" type="file" name="image" class="form-control hidden" onchange="changeImg(this)">
                              <img id="avatar" class="thumbnail" width="300px" src="{{ asset('images/backend_images/add-img.png') }}">
                  </div>
                  <div class="form-group" >
                    <label>Trạng thái</label>
                    <select required name="status" class="form-control">
                      <option value="1">Enable</option>
                      <option value="0">Disable</option>
                    </select>
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