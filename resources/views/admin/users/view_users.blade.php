@extends('layouts.adminLayout.admin_design')
@section('content')
<div class="content-wrapper">
<section class="content">
      <div class="row">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh sách thành viên</h3>
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
                  <th>Full name</th>
                  <th>User</th>
                  <th>Email</th>
                  <th>Level</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                <tr>
                  <td>{{ $user->id}}</td>
                  <td>{{ $user->name}}</td>
                  <td>{{ $user->user}}</td>
                  <td>{{ $user->email}}</td>
                  <td>{{ $user->level}}</td>
                  <td><a href="{{ url('admin/user/edit/'.$user->id) }}">Edit</a> | <a onclick="return confirm('Bạn chắc chăn muốn xóa tài khoản')" href="{{ url('admin/user/delete/'.$user->id) }}">Delete</a></td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Id </th>
                  <th>Full name</th>
                  <th>User</th>
                  <th>Email</th>
                  <th>Level</th>
                </tr>
                </tfoot>
              </table>
            </div>
            
            <!-- /.box-body -->
        </div>
          <!-- /.box -->
          <a type="button" class="btn btn-primary" href="{{url('admin/user/add')}}">ADD USER</a>
</div>
</section>
</div>

@endsection