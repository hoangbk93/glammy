 <header> 
    <!-- TOP INFO -->
    <div class="top_info">
        
        <!-- CONTAINER -->
        <div class="container clearfix">
            <ul class="secondary_menu">
                <li><a href="mailto:shopglammy@gmail.com" >shopglammy@gmail.com</a></li>
                <li><a href="tel:0374117767" >0374117767</a></li>
            </ul>
            
            <div class="live_chat"><a href="javascript:void(0);" ><i class="fa fa-comment-o"></i> Live chat</a></div>
            
            <div class="phone_top">have a question? <a href="tel:1 800 888 2828" >1 800 888 2828</a></div>
        </div><!-- //CONTAINER -->
    </div><!-- TOP INFO -->
    
    
    <!-- MENU BLOCK -->
    <div class="menu_block">
    
        <!-- CONTAINER -->
        <div class="container clearfix">
            
            <!-- LOGO -->
            <div class="logo">
                <a href="{{url('/')}}" ><img src="{{ asset('images/frontend_images/logo.png') }}" alt="" /></a>
            </div><!-- //LOGO -->
            
            
            <!-- SEARCH FORM -->
            <div class="top_search_form">
                <a class="top_search_btn" href="javascript:void(0);" ><i class="fa fa-search"></i></a>
                <form method="get" action="{{ asset('search') }}"> {{ csrf_field() }}
                    <input type="text" name="result" value="Search" onFocus="if (this.value == 'Search') this.value = '';" onBlur="if (this.value == '') this.value = 'Search';" />
                </form>
            </div><!-- SEARCH FORM -->
            
            
            <!-- SHOPPING BAG -->
            <div class="shopping_bag">
                <a class="shopping_bag_btn" href="javascript:void(0);" ><i class="fa fa-shopping-cart"></i><p>shopping bag</p><span>{{ Cart::count() }}</span></a>
                <div class="cart">
                    <ul class="cart-items">
                        @foreach( Cart::content()->all() as $item)
                        <li class="clearfix">
                            <img class="cart_item_product" src="{{ asset('upload/images/products/small/'.$item->options->img) }}" alt="" />
                            <a href="{{ url('product/'.$item->id.'/'.$item->name) }}" class="cart_item_title">{{$item->name}}</a>
                            <span class="cart_item_price">{{$item->qty}} × ${{$item->price}}.00</span>
                        </li>
                        @endforeach
                    </ul>
                    <div class="cart_total">
                        <div class="clearfix"><span class="cart_subtotal">bag subtotal: <b>${{Cart::total()}}</b></span></div>
                        <a class="btn active" href="{{ url('cart/show') }}">Shopping Bag</a>
                    </div>
                </div>
            </div><!-- //SHOPPING BAG -->
            
            
            <!-- LOVE LIST -->
            <div class="love_list">
                <a class="love_list_btn" href="javascript:void(0);" ><i class="fa fa-heart-o"></i><p>Love list</p><span>0</span></a>
                <div class="cart">
                    <ul class="cart-items">
                        <li>Cart is empty</li>
                    </ul>
                    <div class="cart_total">
                        <div class="clearfix"><span class="cart_subtotal">bag subtotal: <b>$0</b></span></div>
                        <a class="btn active" href="javascript:void(0);">Checkout</a>
                    </div>
                </div>
            </div><!-- //LOVE LIST -->
            
            
            <!-- MENU -->
            <ul class="navmenu center">
                <li class="sub-menu first active"><a href="{{ url('/') }}" >Home</a>
                   
                </li>
                <li class="sub-menu"><a href="{{ url('products/1/woman') }}" >women</a>
                </li>
                <li class="sub-menu"><a href="{{ url('products/2/woman') }}" >Men</a>
                </li>
                <li><a href="{{url('products/3/shoes')}}" >shoes</a></li>
                <li class="sub-menu"><a href="javascript:void(0);" >Pages</a>
                    <!-- MEGA MENU -->
                    <ul class="mega_menu megamenu_col3 clearfix">
                        <li class="col">
                            <ol>
                                <li><a href="javascript:void(0);" >About Us</a></li>
                                <li><a href="javascript:void(0);" >Gallery<span>new</span></a></li>
                                <li><a href="javascript:void(0);" >Product Page</a></li>
                                <li><a href="javascript:void(0);" >Love List</a></li>
                                <li><a href="javascript:void(0);" >Shopping Bag</a></li>
                                                              
                            </ol>
                        </li>
                    </ul><!-- //MEGA MENU -->
                </li>
                <li class="sub-menu"><a href="javascript:void(0);" >Blog</a>
                </li>
                <li class="last sale_menu"><a href="#" >Contact</a></li>
            </ul><!-- //MENU -->
        </div><!-- //MENU BLOCK -->
    </div><!-- //CONTAINER -->
</header>