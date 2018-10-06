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
              <h3 class="box-title">Edit user</h3>
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
            <form role="form" method="post" action=" {{ url('admin/user/edit/'.$user->id) }}"> {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Full Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $user->name }}" name="name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Account</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $user->user }}"account" name="user">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" value="{{ $user->email }}" name="email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" value="{{ $user->password }}" name="pass">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  
                  <select name="level">
                    <option  value="1" @if($user->level == 1) {{ 'selected' }} @endif>Quan tri vien</option>
                    <option value="2" @if($user->level == 2) {{ 'selected' }} @endif>Cong tac vien</option>
                    <option value="3" @if($user->level == 3) {{ 'selected' }} @endif>Thanh vien</option>
                  </select>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="submit">Edit user</button>
              </div>
            </form>
          </div>
      </div>
  </div>
</section>
</div>
@endsection