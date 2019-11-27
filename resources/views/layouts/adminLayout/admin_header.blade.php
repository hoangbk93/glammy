<?php 
use App\Comment;

$comments = Comment::where('com_status', 0)->get();



?>

<header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>Panel</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li><a href="{{ url('/') }}" class="btn " target="blank">Home Page</a></li>
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">{{$comments->count()}}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have {{$comments->count()}} Comment</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  @foreach($comments as $comment)
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="{{ asset('images/backend_images/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        {{$comment->com_name}}
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>{{substr($comment->com_content,0,16)}}</p>
                    </a>
                  </li>
                  <!-- end message -->
                  @endforeach
                </ul>
              </li>
              <li class="footer"><a href="{{url('admin/product/comment/view')}}">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
          
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ asset('images/backend_images/user2-160x160.jpg')}}" class="user-image" alt="User Image">
              
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
              
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ asset('images/backend_images/user2-160x160.jpg')}}" class="img-circle" alt="User Image">

                <p>
                  {{ Auth::user()->name }}- {{ Auth::user()->email }}
                  
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{ url('admin/logout') }}" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>