<body class="single-product travel_tour-page travel_tour archive">

<header id="masthead" class="site-header sticky_header affix-top">
        <div class="header_top_bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <aside id="text-15" class="widget_text">
                            <div class="textwidget">
                                <ul class="top_bar_info clearfix">
                                    <li><i class="fa fa-clock-o"></i> Mon - Sat 10.00 am - 06.00 pm. Sunday CLOSED</li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                    <div class="col-sm-8 topbar-right">
                        <aside id="text-7" class="widget widget_text">
                            <div class="textwidget">
                                <ul class="top_bar_info clearfix">
                                    <li><i class="fa fa-phone"></i> 0123456789</li>
                                    <li class="hidden-info">
                                        <i class="fa fa-map-marker"></i> 1230, Dhaka, Bangladesh
                                    </li>
                                </ul>
                            </div>
                        </aside>
                        
                            <span class="show_from login"><i class="fa fa-user"></i><a href="login.php">Login</a></span>

                            <span class="register_btn"><a href="sign-up.php">Register</a></span>
                            
                            
                            
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <div class="navigation-menu">
            <div class="container">
                <div class="menu-mobile-effect navbar-toggle button-collapse" data-activates="mobile-demo">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </div>
                <div class="width-logo sm-logo">
                    <a href="#" title="Travel" rel="home">
                        <img src="images/logo_sticky.png" alt="Logo" width="474" height="130" class="logo_transparent_static">
                        <img src="images/logo_sticky.png" alt="Sticky logo" width="474" height="130" class="logo_sticky">
                    </a>
                </div>
                <nav class="width-navigation">
                    <ul class="nav navbar-nav menu-main-menu side-nav" id="mobile-demo">
                        
                      
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('packages')}}" >Packages</a></li> 
                        <!--add custome pack-->
                <li><a href="{{route('transpotations')}}">Transpotation</a></li>
                        <!--add vehicle typ-->
                <li><a href="{{route('accommodation')}}">Accommodation</a></li>
                        <!--add hotels, restaurants-->
                <li><a href="{{route('gallery')}}">Gallery</a></li>
                <li><a href="{{route('blog')}}">Blog</a></li>
                <li><a href="{{route('contact')}}">Contact us</a></li>
                    <li class="menu-right">
                            <ul>
                                <li id="travel_social_widget-2" class="widget travel_search">
                                    <div class="search-toggler-unit">
                                        <div class="search-toggler">
                                            <i class="fa fa-search"></i>
                                        </div>
                                    </div>
                                    <div class="search-menu search-overlay search-hidden">
                                        <div class="closeicon"></div>
                                        <form method="get" class="search-form" action="search.php">
                                            <input type="search" class="search-field" placeholder="Search ..." value="" name="search" title="Search for:">
                                            <input type="submit" class="search-submit font-awesome" value="&#xf002;" name="submit">
                                        </form>
                                        <div class="background-overlay"></div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>