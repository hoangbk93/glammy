<?php
use App\Http\Controllers\Controller;
use App\Banner;
use App\Category;
use App\ProductBrand;
$brands = ProductBrand::all();
$ban = Banner::where('banner_status',1)->take(3)->get();
$cate = Category::All();
?>

	<!-- SIDEBAR -->
<div id="sidebar" class="col-lg-3 col-md-3 col-sm-3 padbot50">
	
	<!-- CATEGORIES -->
	<div class="sidepanel widget_categories">
		<h3>Product Categories</h3>
		<ul>
			@foreach($cate as $cat)
			<li><a href="{{url('products/'.$cat->id.'/'.$cat->url)}}" >{{$cat->name}}</a></li>
			@endforeach
		</ul>
	</div><!-- //CATEGORIES -->
	
	<!-- PRICE RANGE -->
	<div class="sidepanel widget_pricefilter">
		<h3>Filter by price</h3>
		<div class="clearfix">
			<label for="amount">Range:</label>
			<input type="hidden" id="hiddem_miximum_price" value="0" name="">
			<input type="hidden" id="hiddem_maximum_price" value="0" name="">
			<p id="price_show">1000-65000</p> 
			<div id="price_range"></div> 
		</div>
	</div><!-- //PRICE RANGE -->

	<!-- SHOP BY SIZE -->
	<div class="sidepanel widget_sized">
		<h3>SHOP BY SIZE</h3>
		<ul>
			<li><a class="sizeXS" href="javascript:void(0);" >XS</a></li>
			<li class="active"><a class="sizeS" href="javascript:void(0);" >S</a></li>
			<li><a class="sizeM" href="javascript:void(0);" >M</a></li>
			<li><a class="sizeL" href="javascript:void(0);" >L</a></li>
			<li><a class="sizeXL" href="javascript:void(0);" >XL</a></li>
		</ul>
	</div><!-- //SHOP BY SIZE -->
	
	<!-- SHOP BY COLOR -->
	<div class="sidepanel widget_color">
		<h3>SHOP BY COLOR</h3>
		<ul>
			<li><a class="color1" href="javascript:void(0);" ></a></li>
			<li class="active"><a class="color2" href="javascript:void(0);" ></a></li>
			<li><a class="color3" href="javascript:void(0);" ></a></li>
			<li><a class="color4" href="javascript:void(0);" ></a></li>
			<li><a class="color5" href="javascript:void(0);" ></a></li>
			<li><a class="color6" href="javascript:void(0);" ></a></li>
			<li><a class="color7" href="javascript:void(0);" ></a></li>
			<li><a class="color8" href="javascript:void(0);" ></a></li>
		</ul>
	</div><!-- //SHOP BY COLOR -->
	
	<!-- SHOP BY BRANDS -->
	<div class="sidepanel widget_brands">
		<h3>SHOP BY BRANDS</h3>
		@foreach($brands as $brand)
		@if($brand->brand_status == 1)
		<input type="checkbox" class="commmon_selector brand" id="categorymanufacturer{{$brand->id}}" /><label for="categorymanufacturer{{$brand->id}}">{{ $brand->brand_name}} <span>(24)</span></label>
		@endif
		@endforeach
	</div><!-- //SHOP BY BRANDS -->
	
	<!-- BANNERS WIDGET -->
	<div class="widget_banners">
		@foreach($ban as $banner_sidebar)
		<a class="banner nobord margbot10" href="{{ $banner_sidebar->banner_url }}" ><img src="{{ asset('upload/images/banner/'.$banner_sidebar->banner_image) }}" alt="{{$banner_sidebar->banner_alt }}" /></a>
		@endforeach
	</div><!-- //BANNERS WIDGET -->
	
	<!-- NEWSLETTER FORM WIDGET -->
	<div class="sidepanel widget_newsletter">
		<div class="newsletter_wrapper">
			<h3>NEWSLETTER</h3>
			<form class="newsletter_form clearfix" action="javascript:void(0);" method="get">
				<input type="text" name="newsletter" value="Enter E-mail & Get 10% off" onFocus="if (this.value == 'Enter E-mail & Get 10% off') this.value = '';" onBlur="if (this.value == '') this.value = 'Enter E-mail & Get 10% off';" />
				<input class="btn newsletter_btn" type="submit" value="Sign up & get 10% off">
			</form>
		</div>
	</div><!-- //NEWSLETTER FORM WIDGET -->
</div><!-- //SIDEBAR -->
					