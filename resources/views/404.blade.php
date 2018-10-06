@extends('layouts.frontLayout.front_design')
@section('content')

<div class="container text-center">
		<div class="logo-404">
			<a href="{{ url('/')}}"><img src="{{ asset('images/frontend_images/home/logo.png')}}" alt="" /></a>
			<h1><b>OPPS!</b> Chúng tôi không thể tìm thấy trang bạn đang truy cập</h1>
			<p>Có thể đường link của bạn ruy cập không đúng hoặc gặp sự cố,bạn vui lòng thử lại !!! </p>
			
		</div>
		<div class="content-404">
			<h2><a href="{{ url('/')}}">Quay lại trang chủ</a></h2>
			<img src="{{ asset('images/frontend_images/404/404.png') }}" class="img-responsive" alt="" />
			
		</div>
	</div>

@endsection