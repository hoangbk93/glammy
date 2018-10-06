<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link rel="shortcut icon" href="images/favicon.ico">
    
    <!-- CSS -->
    <link href="{{ asset('css/frontend_css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/frontend_css/flexslider.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/frontend_css/fancySelect.css') }}" rel="stylesheet" media="screen, projection" />
    <link href="{{ asset('css/frontend_css/animate.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/frontend_css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/frontend_css/easyzoom.css') }}" rel="stylesheet" type="text/css" />
    
    <!-- FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    
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
    <script src="{{ asset('js/frontend_js/easyzoom.js') }}" type="text/javascript"></script>
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
    <script>
        // Instantiate EasyZoom instances
        var $easyzoom = $('.easyzoom').easyZoom();

        // Setup thumbnails example
        var api1 = $easyzoom.filter('.easyzoom--with-thumbnails').data('easyZoom');

        $('.thumbnails').on('click', 'a', function(e) {
            var $this = $(this);

            e.preventDefault();

            // Use EasyZoom's `swap` method
            api1.swap($this.data('standard'), $this.attr('href'));
        });

        // Setup toggles example
        var api2 = $easyzoom.filter('.easyzoom--with-toggle').data('easyZoom');

        $('.toggle').on('click', function() {
            var $this = $(this);

            if ($this.data("active") === true) {
                $this.text("Switch on").data("active", false);
                api2.teardown();
            } else {
                $this.text("Switch off").data("active", true);
                api2._init();
            }
        });
    </script>
</body>
</html>