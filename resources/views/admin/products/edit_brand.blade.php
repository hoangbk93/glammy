@extends('layouts.adminLayout.admin_design')
@section('content')
<div class="content-wrapper">

    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Sửa Brand</h1>
      </div>
    </div><!--/.row-->
    
    <div class="row">
      <div class="col-xs-12 col-md-12 col-lg-12">
        
        <div class="panel panel-primary">
          <div class="panel-heading">Sửa Brand</div>
          <div class="panel-body">
            <form method="post" action="{{ url('admin/product/brand/edit/'.$brand->id) }}"> {{ csrf_field() }}
              <div class="row" style="margin-bottom:40px">
                <div class="col-xs-8">
                 <div class="form-group">
                    <label for="">Brand Name:</label>
                    <input type="text" class="form-control" id="" name="brand_name" value="{{ $brand->brand_name }}">
                  </div>
                  <div class="form-group">
                    <label for="">Brand status:</label>
                    <select name="brand_status">
                      <option value="1" @if($brand->brand_status == 1) actived @endif>Entable</option>
                      <option value="0" @if($brand->brand_status == 0) actived @endif>Disable</option>
                    </select>
                  </div>
                  <input type="submit" name="submit" value="Sửa" class="btn btn-primary">
                  <a href="{{ url('admin/product/brand') }}" class="btn btn-danger">Hủy bỏ</a>
                </div>
              </div>
            </form>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div><!--/.row-->

</div>
@endsection