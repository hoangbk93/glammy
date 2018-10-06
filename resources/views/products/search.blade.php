@extends('layouts.frontLayout.front_design')
@section('title','Search Product')
@section('content')
		
		<!-- BREADCRUMBS -->
		<section class="breadcrumb women parallax margbot30">
			
			<!-- CONTAINER -->
			<div class="container">
				<h2>Result search</h2>
			</div><!-- //CONTAINER -->
		</section><!-- //BREADCRUMBS -->
		
		
		<!-- SHOP BLOCK -->
		<section class="shop">
			
			<!-- CONTAINER -->
			<div class="container">
			
				<!-- ROW -->
				<div class="row">
					
				@include('layouts.frontLayout.front_sidebar')
					
					<!-- SHOP PRODUCTS -->
					<div class="col-lg-9 col-sm-9 col-sm-9 padbot20">
						
						<!-- SHOP BANNER -->
						<div class="banner_block margbot15">
							<a class="banner nobord" href="javascript:void(0);" ><img src="{{ asset('images/frontend_images/tovar/banner21.jpg') }}" alt="" /></a>
						</div><!-- //SHOP BANNER -->
						
						<!-- SORTING TOVAR PANEL -->
						<div class="sorting_options clearfix">
							
							<!-- COUNT TOVAR ITEMS -->
							<div class="count_tovar_items">
								<p>Search for: {{$keyword}}</p>
								<span>{{ $items->count() }} Items</span>
							</div><!-- //COUNT TOVAR ITEMS -->
							
							<!-- TOVAR FILTER -->
							<div class="product_sort">
								<p>SORT BY</p>
								<select class="basic">
									<option value="">Popularity</option>
									<option>Reting</option>
									<option>Date</option>
								</select>
							</div><!-- //TOVAR FILTER -->
							
							<!-- PRODUC SIZE -->
							<div id="toggle-sizes">
								<a class="view_box active" href="javascript:void(0);"><i class="fa fa-th-large"></i></a>
								<a class="view_full" href="javascript:void(0);"><i class="fa fa-th-list"></i></a>
							</div><!-- //PRODUC SIZE -->
						</div><!-- //SORTING TOVAR PANEL -->
						
						
						<!-- ROW -->
						<div class="row shop_block">
							@foreach($items as $item)
							<!-- TOVAR1 -->
							<div class="tovar_wrapper col-lg-4 col-md-4 col-sm-6 col-xs-6 col-ss-12 padbot40">
								<div class="tovar_item clearfix">
									<div class="tovar_img">
										<div class="tovar_img_wrapper">
											<img class="img" src="{{ asset('upload/images/products/small/'.$item->prod_img) }}" alt="" />
											<img class="img_h" src="{{ asset('upload/images/products/small/'.$item->prod_img) }}" alt="" />
										</div>
										<div class="tovar_item_btns">
											<div class="open-project-link"><a class="open-project tovar_view" href="javascript:void(0);" data-url="{{ url('quick/view/'.$item->id) }}" ><span>quick</span> view</a></div>
											<a class="add_bag" href="{{ url('cart/add/'.$item->id) }}" ><i class="fa fa-shopping-cart"></i></a>
											<a class="add_lovelist" href="javascript:void(0);" ><i class="fa fa-heart"></i></a>
										</div>
									</div>
									<div class="tovar_description clearfix">
										<a class="tovar_title" href="{{ url('product/'.$item->id.'/'.$item->prod_slug) }}" >{{ $item->prod_name }}</a>
										<span class="tovar_price">${{ $item->prod_price}}.00</span>
									</div>
									<div class="tovar_content">What makes our cashmere so special? We start with the finest yarns from an Italian mill known for producing some of the softest cashmere out there.</div>
								</div>
							</div><!-- //TOVAR1 -->
							@endforeach
						</div><!-- //ROW -->
						
						<hr>
						
						<div class="clearfix">
							<!-- PAGINATION -->
							{{ $items->links() }}
							<!-- //PAGINATION -->
							
							<a class="show_all_tovar" href="javascript:void(0);" >show all</a>
							
						</div>
						
						<hr>
						
						<div class="padbot60 services_section_description">
							<p>We empower WordPress developers with design-driven themes and a classy experience their clients will just love</p>
							<span>Gluten-free quinoa selfies carles, kogi gentrify retro marfa viral. Odd future photo booth flannel ethnic pug, occupy keffiyeh synth blue bottle tofu tonx iphone. Blue bottle 90′s vice trust fund gastropub gentrify retro marfa viral. Gluten-free quinoa selfies carles, kogi gentrify retro marfa viral. Odd future photo booth flannel ethnic pug, occupy keffiyeh synth blue bottle tofu tonx iphone. Blue bottle 90′s vice trust fund gastropub gentrify retro marfa viral.</span>
						</div>
						
						<!-- SHOP BANNER -->
						<div class="row top_sale_banners center">
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-ss-12"><a class="banner nobord margbot30" href="javascript:void(0);" ><img src="{{ asset('images/frontend_images/tovar/banner22.jpg') }}" alt="" /></a></div>
							<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-ss-12"><a class="banner nobord margbot30" href="javascript:void(0);" ><img src="{{ asset('images/frontend_images/tovar/banner23.jpg') }}" alt="" /></a></div>
						</div><!-- //SHOP BANNER -->
					</div><!-- //SHOP PRODUCTS -->
				</div><!-- //ROW -->
			</div><!-- //CONTAINER -->
		</section><!-- //SHOP -->
		
	
@endsection