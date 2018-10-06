<div class="tover_view_page element_fade_in">
	<div class="tover_view_header clearfix">
		<p>Quick view</p>
		<a id="tover_view_page_close" href="javascript:void(0);">Close<i>X</i></a>
	</div>
	
	<div class="clearfix">
		<div class="tovar_view_fotos clearfix">
			<div id="slider1" class="flexslider">
				<ul class="slides">
					<li><a href="{{ asset('upload/images/products/large/'.$item->prod_img) }}" ><img src="{{ asset('upload/images/products/small/'.$item->prod_img) }}" alt="" /></a></li>
					@foreach($prod_images as $image)
					<li><a href="{{ asset('upload/images/products/large/'.$image->image) }}" ><img src="{{ asset('upload/images/products/small/'.$image->image) }}" alt="" /></a></li>
					@endforeach
				</ul>
			</div>
			<div id="carousel1" class="flexslider">
				<ul class="slides">
					<li><a href="javascript:void(0);" ><img src="{{ asset('upload/images/products/small/'.$item->prod_img) }}" alt="" /></a></li>
					@foreach($prod_images as $image)
					<li><a href="javascript:void(0);" ><img src="{{ asset('upload/images/products/small/'.$image->image) }}" alt="" /></a></li>
					@endforeach
				</ul>
			</div>
		</div>
		
		<div class="tovar_view_description">
			<div class="tovar_view_title">{{ $item->prod_name }}</div>
			<div class="tovar_article">88-305-676</div>
			<div class="clearfix tovar_brend_price">
				<div class="pull-left tovar_brend">Calvin Klein</div>
				<div class="pull-right tovar_view_price">${{ $item->prod_price}}.00</div>
			</div>
			<div class="tovar_color_select">
				<p>Select color</p>
				<a href="javascript:void(0);" style="background:{{ $item->prod_color }}; "><strong>{{ $item->prod_color }}</strong></a>
			</div>
			<div class="tovar_size_select">
				<div class="clearfix">
					<p class="pull-left">Select SIZE</p>
					<span>Size & Fit</span>
				</div>
				<a class="sizeXS" href="javascript:void(0);" >XS</a>
				<a class="sizeS active" href="javascript:void(0);" >S</a>
				<a class="sizeM" href="javascript:void(0);" >M</a>
				<a class="sizeL" href="javascript:void(0);" >L</a>
				<a class="sizeXL" href="javascript:void(0);" >XL</a>
				<a class="sizeXXL" href="javascript:void(0);" >XXL</a>
				<a class="sizeXXXL" href="javascript:void(0);" >XXXL</a>
			</div>
			<div class="tovar_view_btn">
				<select class="basic">
					<option value="">QTY</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
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
	</div>
</div>


























