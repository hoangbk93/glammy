@extends('layouts.frontLayout.front_design')
@section('title','Glammy Shop - Ecomere store')
@section('content')

@include('layouts.frontLayout.front_slider')
<section class="tovar_section">
    <!-- CONTAINER -->
    <div class="container">
        <h2>Featured products</h2>
        
        <!-- ROW -->
        <div class="row">
            
            <!-- TOVAR WRAPPER -->
            <div class="tovar_wrapper" data-appear-top-offset='-100' data-animated='fadeInUp'>
                
                @foreach($featured as $feat)
                <!-- TOVAR1 -->
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-ss-12 padbot40">
                    <div class="tovar_item">
                        <div class="tovar_img">
                            <div class="tovar_img_wrapper">
                                <img class="img" src="{{ asset('upload/images/products/small/'.$feat->prod_img) }}" alt="" />
                                <img class="img_h" src="{{ asset('upload/images/products/small/'.$feat->prod_img) }}" alt="" />
                            </div>
                            <div class="tovar_item_btns">
                                <div class="open-project-link"><a class="open-project tovar_view" href="javascript:void(0);" data-url="{{ url('quick/view/'.$feat->id) }}" >quick view</a></div>
                                <a class="add_bag" href="{{ url('cart/add/'.$feat->id) }}" ><i class="fa fa-shopping-cart"></i></a>
                                <a class="add_lovelist" href="javascript:void(0);" ><i class="fa fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="tovar_description clearfix">
                            <a class="tovar_title" href="{{ url('product/'.$feat->id.'/'.$feat->prod_slug) }}" >{{ $feat->prod_name }}</a>
                            <span class="tovar_price">${{$feat->prod_price}}.00</span>
                        </div>
                    </div>
                </div><!-- //TOVAR1 -->
                @endforeach
            </div><!-- //TOVAR WRAPPER -->
        </div><!-- //ROW -->
        <!-- ROW -->
        <div class="row">
            
            <!-- BANNER WRAPPER -->
            <div class="banner_wrapper" data-appear-top-offset='-100' data-animated='fadeInUp'>
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
</section><!-- //TOVAR SECTION -->
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
            
            <div class="jcarousel" data-appear-top-offset='-100' data-animated='fadeInUp'>
                <ul>
                    @foreach($products as $product)
                    <li>
                        <!-- TOVAR -->
                        <div class="tovar_item_new">
                            <div class="tovar_img">
                                <img src="{{ asset('upload/images/products/small/'.$product->prod_img) }}" alt="" />
                                <div class="open-project-link"><a class="open-project tovar_view" href="javascript:void(0);" data-url="{{ url('quick/view/'.$product->id) }}" >quick view</a></div>
                            </div>
                            <div class="tovar_description clearfix">
                                <a class="tovar_title" href="{{ url('product/'.$product->id.'/'.$product->prod_slug) }}" >{{$product->prod_name}}</a>
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


<!-- BRANDS -->
<section class="brands_carousel">
    
    <!-- CONTAINER -->
    <div class="container">
        
        <!-- JCAROUSEL -->
        <div class="jcarousel-wrapper">
            
            <!-- NAVIGATION -->
            <div class="jCarousel_pagination">
                <a href="javascript:void(0);" class="jcarousel-control-prev" ><i class="fa fa-angle-left"></i></a>
                <a href="javascript:void(0);" class="jcarousel-control-next" ><i class="fa fa-angle-right"></i></a>
            </div><!-- //NAVIGATION -->
            
            <div class="jcarousel" data-appear-top-offset='-100' data-animated='fadeInUp'>
                <ul>
                    <li><a href="javascript:void(0);" ><img src="{{ asset('images/frontend_images/brands/1.jpg') }}" alt="" /></a></li>
                    <li><a href="javascript:void(0);" ><img src="{{ asset('images/frontend_images/brands/2.jpg') }}" alt="" /></a></li>
                    <li><a href="javascript:void(0);" ><img src="{{ asset('images/frontend_images/brands/3.jpg') }}" alt="" /></a></li>
                    <li><a href="javascript:void(0);" ><img src="{{ asset('images/frontend_images/brands/4.jpg') }}" alt="" /></a></li>
                    <li><a href="javascript:void(0);" ><img src="{{ asset('images/frontend_images/brands/5.jpg') }}" alt="" /></a></li>
                    <li><a href="javascript:void(0);" ><img src="{{ asset('images/frontend_images/brands/6.jpg') }}" alt="" /></a></li>
                    <li><a href="javascript:void(0);" ><img src="{{ asset('images/frontend_images/brands/7.jpg') }}" alt="" /></a></li>
                    <li><a href="javascript:void(0);" ><img src="{{ asset('images/frontend_images/brands/8.jpg') }}" alt="" /></a></li>
                    <li><a href="javascript:void(0);" ><img src="{{ asset('images/frontend_images/brands/9.jpg') }}" alt="" /></a></li>
                    <li><a href="javascript:void(0);" ><img src="{{ asset('images/frontend_images/brands/10.jpg') }}" alt="" /></a></li>
                    <li><a href="javascript:void(0);" ><img src="{{ asset('images/frontend_images/brands/11.jpg') }}" alt="" /></a></li>
                    <li><a href="javascript:void(0);" ><img src="{{ asset('images/frontend_images/brands/12.jpg') }}" alt="" /></a></li>
                </ul>
            </div>
        </div><!-- //JCAROUSEL -->
    </div><!-- //CONTAINER -->
</section><!-- //BRANDS -->


<hr class="container">


<!-- SERVICES SECTION -->
<section class="services_section">
    
    <!-- CONTAINER -->
    <div class="container">
        
        <!-- ROW -->
        <div class="row">
            <div class="col-lg-6 col-md-6 padbot60 services_section_description" data-appear-top-offset='-100' data-animated='fadeInLeft'>
                <p>We empower WordPress developers with design-driven themes and a classy experience their clients will just love</p>
                <span>Gluten-free quinoa selfies carles, kogi gentrify retro marfa viral. Odd future photo booth flannel ethnic pug, occupy keffiyeh synth blue bottle tofu tonx iphone. Blue bottle 90′s vice trust fund gastropub gentrify retro marfa viral</span>
            </div>
            
            <div class="col-lg-6 col-md-6 padbot30" data-appear-top-offset='-100' data-animated='fadeInRight'>
                
                <!-- ROW -->
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6 col-ss-12 padbot30">
                        <div class="service_item">
                            <div class="clearfix"><i class="fa fa-tablet"></i><p>Responsive Theme</p></div>
                            <span>Thundercats squid single-origin coffee YOLO selfies disrupt, master cleanse semiotics letterpress typewriter.</span>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6 col-ss-12 padbot30">
                        <div class="service_item">
                            <div class="clearfix"><i class="fa fa-comments-o"></i><p>Free Support</p></div>
                            <span>Thundercats squid single-origin coffee YOLO selfies disrupt, master cleanse semiotics letterpress typewriter.</span>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6 col-ss-12 padbot30">
                        <div class="service_item">
                            <div class="clearfix"><i class="fa fa-eye"></i><p>Retina Ready</p></div>
                            <span>Thundercats squid single-origin coffee YOLO selfies disrupt, master cleanse semiotics letterpress typewriter.</span>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6 col-ss-12 padbot30">
                        <div class="service_item">
                            <div class="clearfix"><i class="fa fa-cogs"></i><p>Easy Customize</p></div>
                            <span>Thundercats squid single-origin coffee YOLO selfies disrupt, master cleanse semiotics letterpress typewriter.</span>
                        </div>
                    </div>
                </div><!-- //ROW -->
            </div>
        </div><!-- //ROW -->
    </div><!-- //CONTAINER -->
</section><!-- //SERVICES SECTION -->


<hr class="container">


<!-- RECENT POSTS -->
<section class="recent_posts padbot40">
    
    <!-- CONTAINER -->
    <div class="container">
        <h2>New blog posts</h2>
        
        <!-- ROW -->
        <div class="row" data-appear-top-offset='-100' data-animated='fadeInUp'>
            <div class="col-lg-6 col-md-6 padbot30">
                <div class="recent_post_item clearfix">
                    <div class="recent_post_date">15<span>oct</span></div>
                    <a class="recent_post_img" href="blog-post.html" ><img src="{{ asset('images/frontend_images/blog/recent1.jpg') }}" alt="" /></a>
                    <a class="recent_post_title" href="blog-post.html" >Be Unafraid, Self-Hosted WordPress Is WAY Easier Nowadays</a>
                    <div class="recent_post_content">The beauty of self-hosted WordPress, is that you can build your site however you like, want to add forums to your website? Done. Want to add a ecommerce to your blog? Done.</div>
                    <ul class="post_meta">
                        <li><i class="fa fa-comments"></i>Commetcs <span class="sep">|</span> 15</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-6 padbot30">
                <div class="recent_post_item clearfix">
                    <div class="recent_post_date">07<span>dec</span></div>
                    <a class="recent_post_img" href="blog-post.html" ><img src="{{ asset('images/frontend_images/blog/recent2.jpg') }}" alt="" /></a>
                    <a class="recent_post_title" href="blog-post.html" >True Story: I Went Two Weeks Without Social Media</a>
                    <div class="recent_post_content">Since I began blogging 5.5 years ago, social media (and my blog) have taken hold on my life. I’ve been an early adopter for most major networks and use them extensively.  This past year I’ve been overwhelmed.</div>
                    <ul class="post_meta">
                        <li><i class="fa fa-comments"></i>Commetcs <span class="sep">|</span> 15</li>
                    </ul>
                </div>
            </div>
        </div><!-- //ROW -->
    </div><!-- //CONTAINER -->
</section><!-- //RECENT POSTS -->

@endsection