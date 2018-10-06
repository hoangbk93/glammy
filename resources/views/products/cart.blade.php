@extends('layouts.frontLayout.front_design')
@section('title','List Product Add To Cart')
@section('content')
<script type="text/javascript">
	function updateCart(qty,rowId){
		$.get(
				'{{ asset('cart/update') }}',
				{qty:qty,rowId:rowId},
				function(){
					location.reload();
				}
			);
	}
</script>
		<!-- BREADCRUMBS -->
<section class="breadcrumb parallax margbot30"></section>
<!-- //BREADCRUMBS -->


<!-- PAGE HEADER -->
<section class="page_header">
	
	<!-- CONTAINER -->
	<div class="container">
		<h3 class="pull-left"><b>Shopping bag</b></h3>
		
		<div class="pull-right">
			<a href="{{ url('/') }}" >Back to shop<i class="fa fa-angle-right"></i></a>
		</div>
	</div><!-- //CONTAINER -->
</section><!-- //PAGE HEADER -->


<!-- SHOPPING BAG BLOCK -->
<section class="shopping_bag_block">
	
	<!-- CONTAINER -->
	<div class="container">
	
		<!-- ROW -->
		<div class="row">
			
			<!-- CART TABLE -->
			<div class="col-lg-9 col-md-9 padbot40">
				@if(Cart::count() > 0)
				<table class="shop_table">
					<thead>
						<tr>
							<th class="product-thumbnail"></th>
							<th class="product-name">Item</th>
							<th class="product-price">Price</th>
							<th class="product-quantity">Quantity</th>
							<th class="product-subtotal">Total</th>
							<th class="product-remove"></th>
						</tr>
					</thead>
					<tbody>
						@foreach($items as $item)
						<tr class="cart_item">
							<td class="product-thumbnail"><a href="{{ url('product/'.$item->id.'/'.$item->name) }}" ><img src="{{asset('upload/images/products/small/'.$item->options->img)}}" width="100px" alt="" /></a></td>
							<td class="product-name">
								<a href="{{ url('product/'.$item->id.'/'.$item->name) }}">{{ $item->name }}</a>
								<ul class="variation">
									<li class="variation-Color">Color: <span>Brown</span></li>
									<li class="variation-Size">Size: <span>XS</span></li>
								</ul>
							</td>

							<td class="product-price">${{ $item->price }}.00</td>

							<td class="product-quantity">
								<input type="number" name="qty" value="{{ $item->qty }}" onchange="updateCart(this.value,'{{ $item->rowId }}')">
							</td>
							
							<td class="product-subtotal">${{ $item->price*$item->qty}}.00</td>

							<td class="product-remove"><a href="{{ asset('cart/delete/'.$item->rowId)}}" ><span>Delete</span> <i>X</i></a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
				<a href="{{ asset('/') }}" class="btn btn-primary">Mua tiếp</a>
				<a href="" class="btn btn-promary">Cập nhật</a>
				<a href="{{ asset('cart/delete/all') }}" class="btn btn-primary">Xóa hết</a>
				
				<div><br></div>
				<div class="panel panel-primary">
			        <div class="panel-heading"><h3 class="text-center"><strong>Thông tin khách hàng mua sản phẩm</strong></h3></div>
			        <div class="panel-body">
						<form method="post"> {{ csrf_field() }}
							<div class="form-group" >
				                <label>Địa chỉ Email:</label>
				                <input required type="email" name="email" class="form-control">
				            </div>
				            <div class="form-group" >
				                <label>Họ & Tên:</label>
				                <input required type="text" name="name" class="form-control">
				            </div>
				            <div class="form-group" >
				                <label>Số điện thoại:</label>
				                <input required type="text" name="phone" class="form-control">
				            </div>
				            <div class="form-group" >
				                <label>Địa chỉ nhận hàng:</label>
				                <input required type="text" name="address" class="form-control">
				            </div>
				            <button type="submit" name="submit" class="btn btn-primary">Xác nhận</button>
						</form>
					</div>
				</div>
				@else
				<h3 class="text-center">Giỏ hàng rỗng</h3>
				@endif
			</div><!-- //CART TABLE -->
			
			
			<!-- SIDEBAR -->
			<div id="sidebar" class="col-lg-3 col-md-3 padbot50">
				
				<!-- BAG TOTALS -->
				<div class="sidepanel widget_bag_totals">
					<h3>BAG TOTALS</h3>
					<table class="bag_total">
						<tr class="cart-subtotal clearfix">
							<th>Sub total</th>
							<td>${{ $total }}.00</td>
						</tr>
						<tr class="shipping clearfix">
							<th>SHIPPING</th>
							<td>Free</td>
						</tr>
						<tr class="total clearfix">
							<th>Total</th>
							<td>${{ $total }}.00</td>
						</tr>
					</table>
					<form class="coupon_form" action="javascript:void(0);" method="get">
						<input type="text" name="coupon" value="Have a coupon?" onFocus="if (this.value == 'Have a coupon?') this.value = '';" onBlur="if (this.value == '') this.value = 'Have a coupon?';" />
						<input type="submit" value="Apply">
					</form>
					<a class="btn active" href="javascript:void(0);" >Check out</a>
					<a class="btn inactive" href="{{ asset('/') }}" >Continue shopping</a>
				</div><!-- //REGISTRATION FORM -->
			</div><!-- //SIDEBAR -->
		</div><!-- //ROW -->
	</div><!-- //CONTAINER -->
</section><!-- //SHOPPING BAG BLOCK -->

	
@endsection