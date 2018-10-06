@extends('layouts.adminLayout.admin_design')
@section('content')
<div class="content-wrapper">

    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Sửa Commnet</h1>
      </div>
    </div><!--/.row-->
    
    <div class="row">
      <div class="col-xs-12 col-md-12 col-lg-12">
        
        <div class="panel panel-primary">
          <div class="panel-heading">Sửa Comment</div>
          <div class="panel-body">
            <form method="post" action="{{ url('admin/product/comment/edit/'.$comment->id) }}"> {{ csrf_field() }}
              <div class="row" style="margin-bottom:40px">
                <div class="col-xs-8">
                  <div class="form-group" >
                    <label>Người Bình luận</label>
                    <input required type="text" name="name" class="form-control" value="{{ $comment->com_name}}">
                  </div>
                  <div class="form-group" >
                    <label>Email bình luận</label>
                    <input required type="text" name="email" class="form-control" value="{{ $comment->com_email }}">
                  </div>
                  <div class="form-group" >
                    <label>Nội dung</label>
                    <input required type="text" name="content" class="form-control" value="{{ $comment->com_content }}">
                  </div>
                  <div class="form-group" >
                    <label>Trạng thái</label>
                    <select required name="status" class="form-control">
                      <option value="1" @if($comment->com_status == 1) actived @endif>Enable</option>
                      <option value="0" @if($comment->com_status == 0) actived @endif>Disable</option>
                    </select>
                  </div>
                  <input type="submit" name="submit" value="Sửa" class="btn btn-primary">
                  <a href="#" class="btn btn-danger">Hủy bỏ</a>
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