<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link rel="shortcut icon" href="{{ asset('images/frontend_images/favicon.ico') }}">
    
    <!-- CSS -->
    <link href="{{ asset('css/frontend_css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/frontend_css/flexslider.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/frontend_css/fancySelect.css') }}" rel="stylesheet" media="screen, projection" />
    <link href="{{ asset('css/frontend_css/animate.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/frontend_css/style.css') }}" rel="stylesheet" type="text/css" />
    
    
    <!-- FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <script src="{{ asset('js/frontend_js/jquery-1.8.3.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/frontend_js/jquery.elevatezoom.js') }}" type="text/javascript"></script>
</head>
<body>

<!-- PRELOADER -->
<div id="preloader"><img src="{{ asset('images/frontend_images/preloader.gif')}}" alt="" /></div>
<!-- //PRELOADER -->
<div class="preloader_hide">

    <!-- PAGE -->
    <div id="page">
        @include('layouts.frontLayout.front_header')
        @yield('content')
        @include('layouts.frontLayout.front_footer')
    </div><!-- //PAGE -->
</div>

<!-- TOVAR MODAL CONTENT -->
<div id="modal-body" class="clearfix">
    <div id="tovar_content"></div>
    <div class="close_block"></div>
</div><!-- TOVAR MODAL CONTENT -->

    <!-- SCRIPTS -->
    <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE]><html class="ie" lang="en"> <![endif]-->
    
    <script src="{{ asset('js/frontend_js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/frontend_js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/frontend_js/jquery.sticky.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/frontend_js/parallax.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/frontend_js/jquery.flexslider-min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/frontend_js/jquery.jcarousel.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/frontend_js/fancySelect.js') }}"></script>
    <script src="{{ asset('js/frontend_js/animate.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/frontend_js/myscript.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/frontend_js/jqueryui.custom.min.js') }}" type="text/javascript"></script>
    <script>
        if (top != self) top.location.replace(self.location.href);
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            filter_data();
            function filter_data(){
                $('.filter_data').html('<div id="loading" style="" > </div>');
                var action = 'fetch_data';
                var minimum_price = $(#hidden_minimum_price).val();
                var maximum_price = $(#hidden_maximum_price).val();
                var brand = get_filter('brand');
                $.ajax({
                    url:"{{ asset('filter') }}",
                    method:"POST",
                    data:{action:action, miximum_price:miximum_price, maximum_price:maximum_price, brand:brand},
                    success:function(data){
                        $('.filter_data').html(data);
                    }
                });
            }
            function get_filter(class_name){
                var filter = [];
                $('.'+class_name+':checked').each(function(){
                    filter.push($(this).val());
                });
                return filter;
            }
            $('.common_selector').click(function(){
                filter_data();
            });

            $('#price_range').slider({
                range:true,
                min:1000,
                max:65000,
                values:[1000, 65000],
                step:500,
                stop:function(event, ui)
                {
                    $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
                    $('#hidden_minimum_price').val(ui.values[0]);
                    $('#hidden_maximum_price').val(ui.values[1]);
                    filter_data();
                }
            });
        });
    </script>

</body>
</html>