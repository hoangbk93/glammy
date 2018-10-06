@extends('layouts.adminLayout.admin_design')
@section('content')

<div class="content-wrapper">
<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Category</h3>
            </div>
            @if(isset($errors))
              @foreach($errors->all() as $error)
              <div class="alert alert-warning alert-bock">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{{$error}}</strong>
              </div>
              @endforeach
            @endif 
            @if(Session::has('flash_message_success'))
              <div class="alert alert-success alert-bock">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{!! session('flash_message_success') !!}</strong>
              </div>
            @endif
            <form role="form" method="post" action=" {{ url('admin/category/edit/'.$category->id) }}"> {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Category Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $category->name }}" name="name">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Categpry Level:</label>
                  
                  <select name="parent_id">
                    <option value="1">Shoe</option>
                    <option value="2">Dress</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Description</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $category->description }}" name="description">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Url</label>
                  <input type="text" class="form-control" id="exampleInputEmail1"value="{{ $category->url }}" name="url">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Status:</label>
                  
                  <select name="status">
                    <option value="1">Enable</option>
                    <option value="2">Disable</option>
                  </select>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="submit">Edit Category</button>
              </div>
            </form>
          </div>
      </div>
  </div>
</section>
</div>
@endsection