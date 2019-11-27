@extends('layouts.frontLayout.front_design')
@section('title','Glammy Shop - '.$item->prod_name)
@section('content')
<!-- BREADCRUMBS -->
<section class="breadcrumb parallax margbot30"></section>
<!-- //BREADCRUMBS -->
<!-- TOVAR DETAILS -->
<section class="tovar_details padbot70">
	<!-- CONTAINER -->
	<div class="container">
		<!-- ROW -->
		<div class="row">
			<!-- SIDEBAR TOVAR DETAILS -->
			<div class="col-lg-3 col-md-3 sidebar_tovar_details">
				<h3><b>other sweaters</b></h3>
				
				<ul class="tovar_items_small clearfix">
					@foreach($product_other as $other)
					<li class="clearfix">
						<img class="tovar_item_small_img" src="{{ asset('upload/images/products/small/'.$other->prod_img) }}" alt="" />
						<a href="{{url('product/'.$other->id.'/'.$other->prod_slug)}}" class="tovar_item_small_title">{{ $other->prod_name }}</a>
						<span class="tovar_item_small_price">${{ $other->prod_price}}.00</span>
					</li>
					@endforeach
				</ul>
			</div><!-- //SIDEBAR TOVAR DETAILS -->
			
			<!-- TOVAR DETAILS WRAPPER -->
			<div class="col-lg-9 col-md-9 tovar_details_wrapper clearfix">
				<div class="tovar_details_header clearfix margbot35">
					<h3 class="pull-left"><b>Sweaters</b></h3>
					
					<div class="tovar_details_pagination pull-right">
						<a class="fa fa-angle-left" href="javascript:void(0);" ></a>
						<span>{{ $item->id }} of {{ $count_product }}</span>
						<a class="fa fa-angle-right" href="javascript:void(0);" ></a>
					</div>
				</div>
				
				<!-- CLEARFIX -->
				<div class="clearfix padbot40">
					<div class="tovar_view_fotos clearfix">
						<img class="zoom_01" class="img-fluid" src="{{ asset('upload/images/products/small/'.$item->prod_img) }}" alt="" data-zoom-image="{{ asset('upload/images/products/large/'.$item->prod_img) }}" />
						<div id="gal1">
 
						  <a href="#" data-image="{{ asset('upload/images/products/small/'.$item->prod_img) }}" data-zoom-image="{{ asset('upload/images/products/large/'.$item->prod_img) }}">
						    <img class="img_01" src="{{ asset('upload/images/products/small/'.$item->prod_img) }}" width="100px" />
						  </a>
							@foreach($prod_images as $image)
						  <a href="#" data-image="{{ asset('upload/images/products/small/'.$image->image) }}" data-zoom-image="{{ asset('upload/images/products/large/'.$image->image) }}">
						    <img class="img_01" src="{{ asset('upload/images/products/small/'.$image->image) }}" width="100px" />
						  </a>
						  @endforeach
						</div>
						
					</div>
					<script  type="text/javascript">
				       //initiate the plugin and pass the id of the div containing gallery images
						$(".zoom_01").elevateZoom({gallery:'gallery_01', cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true, loadingIcon: 'http://www.elevateweb.co.uk/spinner.gif'}); 

						//pass the images to Fancybox
						$(".img_01").bind("click", function(e) {  
						  var ez =   $('.zoom_01').data('elevateZoom');	
							$.fancybox(ez.getGalleryList());
						  return false;
						});
				    </script>
					<div class="tovar_view_description">
						<div class="tovar_view_title">{{$item->prod_name}}</div>
						<div class="tovar_article">{{$item->prod_code}}</div>
						<div class="clearfix tovar_brend_price">
							<div class="pull-left tovar_brend">{{$brand->brand_name}}</div>
							<div class="pull-right tovar_view_price">${{ $item->prod_price }}.00</div>
						</div>
						<div class="tovar_color_select">
							<p>Product color:</p>
							<a href="javascript:void(0);" style="background:{{ $item->prod_color }}; "><strong>{{ $item->prod_color }}</strong></a>
						</div>
						<div class="tovar_size_select">
							<div class="clearfix">
								<p class="pull-left">Select SIZE:</p>
								<span>Size & Fit</span>
							</div>
							<a class="sizeXS" href="javascript:void(0);" >XS</a>
							<a class="sizeS" href="javascript:void(0);" >S</a>
							<a class="sizeM active" href="javascript:void(0);" >M</a>
							<a class="sizeL" href="javascript:void(0);" >L</a>
							<a class="sizeXL" href="javascript:void(0);" >XL</a>
							<a class="sizeXXL" href="javascript:void(0);" >XXL</a>
							<a class="sizeXXXL" href="javascript:void(0);" >XXXL</a>
						</div>
						<div class="tovar_view_btn">
							<select class="basic" name="qty">
								<option value="1">QTY</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
							<a class="add_bag" href="{{ asset('cart/add/'.$item->id) }}" ><i class="fa fa-shopping-cart"></i>Add to bag</a>
							<a class="add_lovelist" href="javascript:void(0);" ><i class="fa fa-heart"></i></a>
						</div>
						<div class="tovar_shared clearfix">
							<p>Share item with friends</p>
							<ul>
								<li><a class="facebook" href="javascript:void(0);" ><i class="fa fa-facebook"></i></a></li>
								<li><a class="twitter" href="javascript:void(0);" ><i class="fa fa-twitter"></i></a></li>
								<li><a class="linkedin" href="javascript:void(0);" ><i class="fa fa-linkedin"></i></a></li>
								<li><a class="google-plus" href="javascript:void(0);" ><i class="fa fa-google-plus"></i></a></li>
								<li><a class="tumblr" href="javascript:void(0);" ><i class="fa fa-tumblr"></i></a></li>
							</ul>
						</div>
					</div>
				</div><!-- //CLEARFIX -->
				
				<!-- TOVAR INFORMATION -->
				<div class="tovar_information">
					<ul class="tabs clearfix">
						<li class="current">Details</li>
						<li>Reviews (2)</li>
					</ul>
					<div class="box visible">
						
						{!! $item->prod_description !!}
					</div>
					<div class="box">
						<ul class="comments">
							@foreach($comments as $com)
								@if($com->com_status == 1)
								<li>
									<div class="clearfix">
										<p class="pull-left"><strong><a href="javascript:void(0);" >{{ $com->com_name }}</a></strong></p>
										<span class="date">{{ date('d/m/Y H:i',strtotime($com->created_at)) }}</span>
										<div class="pull-right rating-box clearfix">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
										</div>
									</div>
									<p>{{ $com->com_content }}</p>
								</li>
								@endif
								@if(Session::has('flash_message_success'))
						          <div class="alert alert-success alert-bock">
						            <button type="button" class="close" data-dismiss="alert">x</button>
						            <strong>{!! session('flash_message_success') !!}</strong>
						          </div>
						        @endif
							@endforeach
						</ul>
						
						<h3>WRITE A REVIEW</h3>
						<p>Now please write a (short) review....(min. 200, max. 2000 characters)</p>
						<form method="post" name="comment" action="{{ url('product/'.$item->id.'/'.$item->prod_slug.'/comment') }}"> {{ csrf_field() }}
							<div class="clearfix">
								<div class="row">
									<div class="col-lg-6">
										<input type="text" name="email" placeholder="Email">
									</div>
									<div class="col-lg-6">
										<input type="text" name="name" placeholder="Name">
									</div>
								</div>
								<textarea id="review-textarea" name="comment" placeholder="Comment ..."></textarea>
								<label class="pull-left rating-box-label">Your Rate:</label>
								<div class="pull-left rating-box clearfix">
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<input type="submit" class="dark-blue big" value="Submit a review" name="submit">
							</div>
						</form>
					</div>
				</div><!-- //TOVAR INFORMATION -->
			</div><!-- //TOVAR DETAILS WRAPPER -->
		</div><!-- //ROW -->
	</div><!-- //CONTAINER -->
</section><!-- //TOVAR DETAILS -->


<!-- BANNER SECTION -->
<section class="banner_section">
	
	<!-- CONTAINER -->
	<div class="container">
		
		<!-- ROW -->
		<div class="row">
			
			<!-- BANNER WRAPPER -->
			<div class="banner_wrapper">
				<!-- BANNER -->
				<div class="col-lg-9 col-md-9">
					<a class="banner type4 margbot40" href="javascript:void(0);" ><img src="{{ asset('images/frontend_images/tovar/banner4.jpg') }}" alt="" /></a>
				</div><!-- //BANNER -->
				
				<!-- BANNER -->
				<div class="col-lg-3 col-md-3">
					<a class="banner nobord margbot40" href="javascript:void(0);" ><img src="{{ asset('images/frontend_images/tovar/banner5.jpg') }}" alt="" /></a>
				</div><!-- //BANNER -->
			</div><!-- //BANNER WRAPPER -->
		</div><!-- //ROW -->
	</div><!-- //CONTAINER -->
</section><!-- //BANNER SECTION -->


<!-- NEW ARRIVALS -->
<section class="new_arrivals padbot50">
	
	<!-- CONTAINER -->
	<div class="container">
		<h2>new arrivals</h2>
		
		<!-- JCAROUSEL -->
		<div class="jcarousel-wrapper">
			
			<!-- NAVIGATION -->
			<div class="jCarousel_pagination">
				<a href="javascript:void(0);" class="jcarousel-control-prev" ><i class="fa fa-angle-left"></i></a>
				<a href="javascript:void(0);" class="jcarousel-control-next" ><i class="fa fa-angle-right"></i></a>
			</div><!-- //NAVIGATION -->
			
			<div class="jcarousel">
				<ul>
					@foreach($products as $product)
					<li>
						<!-- TOVAR -->
						<div class="tovar_item_new">
							<div class="tovar_img">
								<img src="{{ asset('upload/images/products/small/'.$product->prod_img) }}" alt="" />
								<div class="open-project-link"><a class="open-project tovar_view" href="javascript:void(0);" data-url="!projects/women/1.html" >quick view</a></div>
							</div>
							<div class="tovar_description clearfix">
								<a class="tovar_title" href="{{ url('product/'.$product->id.'/'.$product->prod_slug) }}" >{{ $product->prod_name }}</a>
								<span class="tovar_price">${{$product->prod_price}}.00</span>
							</div>
						</div><!-- //TOVAR -->
					</li>
					@endforeach
				</ul>
			</div>
		</div><!-- //JCAROUSEL -->
	</div><!-- //CONTAINER -->
</section><!-- //NEW ARRIVALS -->

<!-- NEW ARRIVALS -->
<section class="new_arrivals padbot50">
	
	<!-- CONTAINER -->
	<div class="container">
		<h2>Recent Products</h2>

		<!-- JCAROUSEL -->
		<div class="jcarousel-wrapper">
			
			<!-- NAVIGATION -->
			<div class="jCarousel_pagination">
				<a href="javascript:void(0);" class="jcarousel-control-prev" ><i class="fa fa-angle-left"></i></a>
				<a href="javascript:void(0);" class="jcarousel-control-next" ><i class="fa fa-angle-right"></i></a>
			</div><!-- //NAVIGATION -->
			
			<div id="jcarousel_id" class="jcarousel">
				<ul>
					@foreach($products as $product)
					<li>
						<!-- TOVAR -->
						<div class="tovar_item_new">
							<div class="tovar_img">
								<img src="{{ asset('upload/images/products/small/'.$product->prod_img) }}" alt="" />
								<div class="open-project-link"><a class="open-project tovar_view" href="javascript:void(0);" data-url="!projects/women/1.html" >quick view</a></div>
							</div>
							<div class="tovar_description clearfix">
								<a class="tovar_title" href="{{ url('product/'.$product->id.'/'.$product->prod_slug) }}" >{{ $product->prod_name }}</a>
								<span class="tovar_price">${{$product->prod_price}}.00</span>
							</div>
						</div><!-- //TOVAR -->
					</li>
					@endforeach
				</ul>
			</div>
		</div><!-- //JCAROUSEL -->
	</div><!-- //CONTAINER -->
</section><!-- //NEW ARRIVALS -->
@endsection