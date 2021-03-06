<?php 
    include 'includes/login/connect.inc.php';
    include 'includes/login/core.inc.php';
?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title> HOME | Grab-indore</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Favicons -->
        <link rel="shortcut icon" href="./img/favicon.ico">
        <link rel="apple-touch-icon-precomposed" href="./img/favicon.ico">
        
        <!-- Google fonts styles -->
        <link rel="stylesheet" id="google-fonts-Roboto-css" href="http://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic&amp;ver=3.9.1" type="text/css" media="all">
        <link rel="stylesheet" id="google-fonts-Playfair+Display-css" href="http://fonts.googleapis.com/css?family=Playfair+Display%3Aregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;ver=3.9.1" type="text/css" media="all">

        <!-- GrabInd styles -->
        <link rel="stylesheet" id="bootstrap-css" href="./styles/bootstrap.css" type="text/css" media="screen">
        <link rel="stylesheet" id="font-awesome-css" href="./styles/font-awesome.min.css" type="text/css" media="screen">
        <link rel="stylesheet" id="pagebuild-css" href="./styles/pagebuild.css" type="text/css" media="screen">
        <link rel="stylesheet" id="ux-GrabInd-css" href="./styles/style.css" type="text/css" media="screen">
        <link rel="stylesheet" id="icons-css" href="./styles/icons.css" type="text/css" media="screen">
        
        <!-- Jquery Lib version 1.11.0 -->
        <script type="text/javascript" src="./js/jquery.min.js"></script>
        
        <!-- IE hack -->
        <!--[if lte IE 9]>
        <link rel='stylesheet' id='cssie'  href='./styles/ie.css' type='text/css' media='screen' />
        <![endif]-->
        <!--[if lt IE 9]>
        <script type="text/javascript" src="./js/ie.js"></script>
        <link rel='stylesheet' id='cssie8'  href='./styles/ie8.css' type='text/css' media='screen' />
        <![endif]-->
        <!--[if lte IE 7]>
        <div style="width: 100%;" class="messagebox_orange">Your browser is obsolete and does not support this webpage. Please use newer version of your browser or visit <a href="http://www.ie6countdown.com/" target="_new">Internet Explorer 6 countdown page</a>  for more information. </div>
        <![endif]-->
    </head>
    <body class="home page page-template-default responsive-ux boxed-line GrabInd-layout-ux">
        <!-- Page Loading -->
        <div class="page-loading visible">
            <div class="page-loading-inn">
                <div class="page-loading-transform">
                    <div class="ux-loading"></div>
                    <div class="ux-loading-transform">
                        <div class="loading-dot1">&nbsp;</div>
                        <div class="loading-dot2">&nbsp;</div>
                    </div>
                    <div class="site-loading-logo centered-ux">Grab-indore</div>
                </div>
            </div>
        </div>

        <!-- Jplayer -->
        <div id="jquery_jplayer" class="jp-jplayer"></div>
        
        <!--Mobile Header meta-->
        <div id="mobile-header-meta">
            
            <!--Search Form-->
            <form id="search_form" name="" method="get" class="search-form_header" action="http://ximudesign.com/GrabInd/">
                <input type="text" onblur="if (this.value == '') {this.value = 'SEARCH';}" onfocus="if (this.value == 'SEARCH') {this.value = '';}" id="s" name="s" value="SEARCH" class="textboxsearch">
                <span class="submit-wrap">
                    <input type="submit" value="" class="submitsearch" name="submitsearch">
                    <i class="fa fa-long-arrow-right middle-ux"></i>
                </span>
            </form>
    
            <!--Social icons-->
           <div class="social-icons-sidebar">
                <a class="icons-sidebar-unit" href="https://twitter.com/uiueux" title="Follow us"><i class="fa fa-twitter-square"></i></a>
                <a class="icons-sidebar-unit" href="https://www.facebook.com/Uiueux/" title="Follow us"><i class="fa fa-facebook-square"></i></a>
                <a class="icons-sidebar-unit" href="#" title=""><i class="fa fa-google-plus-square"></i></a>
          
                <a class="icons-sidebar-unit" href="#" title=""><i class="fa fa-vimeo-square"></i></a>
            </div>

            <div class="mobile-meta-con">
                <div class="copyright">Copyright Indview.nit</div>
            </div>
            <!--End header-info-mobile-->

        </div>
        <!--End mobile-header-meta-->
        <div id="wrap">
            <!--Sidebar-->
            <GrabInd id="sidebar" class="sidebar_show">
                <div id="sidebar-trigger">
                    <div class="menu-icon"><i class="icon-m-menu"></i></div>
                </div>
                <!--End sidebar-trigger-->
                <div class="sidebar-main">
                      
                    <!--Logo-->
                    <h1 id="logo"><a href="index.html" title="Explore places with benefit">GrabInd</a></h1>

                    <!--Menu-->
                    <nav id="navi" class="clearfix">
                        <div id="navi_wrap" class="menu-demo-menu-container">
                            <ul class="menu">
                                <li id="menu-item-885" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-122 current_page_item menu-item-has-children">
                                    <a>Login</a>
                                    <ul class="sub-menu">
                                       
                                        <li id="menu-item-896" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="registration.php">Sign-up</a></li>
                                        <li id="menu-item-895" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="index-fullscreen-slide.html">Sign-in</a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-883" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-883">
                                    <a>Interest</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-889" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="portfolio-interblock.html">Hangout places</a></li>
                                        <li id="menu-item-889" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="portfolio-interblock.html">Restaurants</a></li>
                                        <li id="menu-item-889" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="portfolio-interblock.html">Movie</a></li>
                                       
                                    </ul>
                                </li>
                                <li id="menu-item-887" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
                                    <a href="blog-standard.html">Offers</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-886" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="blog-masonry.html">Discounts</a></li>
                                        <li id="menu-item-886" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="blog-masonry.html">Coupons</a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-935" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-935">
                                    <a>Need Advice</a>
                                    <ul class="sub-menu">
                                       <li id="menu-item-955" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="page-coming-soon.html">COMING SOON</a></li>
                                        <li id="menu-item-942" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="page-about-us.html">ABOUT US</a></li>
                                        <li id="menu-item-888" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="page-about-me.html">ABOUT ME</a></li>
                                        <li id="menu-item-934" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="page-jobs.html">JOBS</a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-882" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-882">
                                    <a>ELEMENTS</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-893" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="elements-typography.html">TYPOGRAPHY</a></li>
                                        <li id="menu-item-892" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="elements-infographic.html">INFOGRAPHIC</a></li>
                                        <li id="menu-item-891" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="elements-imagebox.html">IMAGE BOX</a></li>
                                        <li id="menu-item-890" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="elements-controls.html">CONTROLS</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--End #navi_wrap-->
                    </nav>
                    <!-- End Menu -->
                    <div class="sidebar-bottom-wrap">
                        <!--Search bar-->
                        <form id="search_form_1" name="" method="get" class="search-form_header" action="#">
                            <input type="text" onblur="if (this.value == '') {this.value = 'SEARCH';}" onfocus="if (this.value == 'SEARCH') {this.value = '';}" id="search" name="search" value="SEARCH" class="textboxsearch">
                            <span class="submit-wrap"><input type="submit" value="" class="submitsearch" name="submitsearch"><i class="fa fa-long-arrow-right middle-ux"></i></span>
                        </form>
                        <!--Social icons-->
                        <div class="social-icons-sidebar">
                            <a class="icons-sidebar-unit" href="https://twitter.com/uiueux" title="Follow us"><i class="fa fa-twitter-square"></i></a>    
                            <a class="icons-sidebar-unit" href="https://www.facebook.com/Uiueux/" title="Follow us"><i class="fa fa-facebook-square"></i></a>
                            <a class="icons-sidebar-unit" href="#" title=""><i class="fa fa-google-plus-square"></i></a>
                            
                           
                           
                            <a class="icons-sidebar-unit" href="#" title=""><i class="fa fa-linkedin-square"></i></a>
                            <a class="icons-sidebar-unit" href="#" title=""><i class="fa fa-instagram"></i></a>
                            <a class="icons-sidebar-unit" href="#" title=""><i class="fa fa-github-square"></i></a>
                            
                        </div>
                        <!--Copyright-->
                        <div class="copyright">Copyright Grabindore</div>
                        <!--End copyright-->
                    </div>
                    <!--END sidebar-bottom-wrap-->
                </div>
                <!--end sidebar-main-->
            </GrabInd>
            <!--Header-->
            <header id="header">
                <h1 id="logo-mobile"><a href="index.html" title="GrabInd Responsive HTML Theme">GrabInd</a></h1>
            </header>
            <!--End Header-->
            <!--#main-wrap-->
            <div id="main-wrap">
                <div id="main">
                    <div id="content">
                        <div id="post-122" class="page type-page status-publish hentry">
                            <div class="row-fluid">
                                <div id="content_wrap" class="">
                                    <div class="content-wrap-inn ">
                                        <div class="pagebuilder-wrap">
                                            <div class="fullwrap_moudle">
                                                <div class="row-fluid">
                                                    <div id="full" class="fullwidth-wrap bg-theme-color-10">
                                                        <div class="row-fluid">
                                                            <div class="span12 moudle bottom-space-no">
                                                                <!--Portfolio isotope-->
                                                                <div class="row-fluid">
                                                                    <!--Filter-->
                                                                    <div class="clearfix filters filter-floating filter-floating-fixed">
                                                                        <ul>
                                                                            <li class="active"><a href="#" data-filter="*">All</a></li>
                                                                            
                                                                            <li><a data-filter=".filter_illustration" href="#">LOGIN</a></li>
                                                                           
                                                                        </ul>
                                                                        <div class="filter-floating-triggle hidden-phone"><i class="fa fa-filter"></i></div>
                                                                    </div>
                                                                    <!--End filter-->
                                                                    <div class="container-isotope" data-post="20140402-063639-867">
                                                                        <div id="isotope-load">
                                                                            <div class="ux-loading"></div>
                                                                            <div class="ux-loading-transform">
                                                                                <div class="loading-dot1">&nbsp;</div>
                                                                                <div class="loading-dot2">&nbsp;</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="isotope masonry isotope_fade" data-space="1px" data-size="brick" style="margin: -1px 0px 0px -1px;">
                                                                            <!--Item-->
                                                                            <div class="filter_architecture filter_blog filter_portfolio width-and-small isotope-item  brick-with-img">
                                                                                <div class="inside brick-inside post-bgcolor-default" style=" margin:1px 0 0 1px;">
                                                                                    <a href="content-portfolio-images-on-right.html" title="advice" class="brick-link">
                                                                                        <div class="brick-hover-mask brick-hover">
                                                                                            <h3 class="brick-title">WE WILL SUGGEST YOU A PERFECT PLACE</h3>
                                                                                        </div>
                                                                                        <div class="brick-content">
                                                                                            <img src="img/help.jpg" class="attachment-imagebox-thumb wp-post-image" alt="IMG_4783">
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <!--Item-->
                                                                                 <div class="filter_blog filter_branding filter_portfolio filter_uncategorized width-and-long isotope-item  brick-with-img">
                                                                                <div class="inside brick-inside post-bgcolor-default" style=" margin:1px 0 0 1px;">
                                                                                    <a href="content-portfolio-images-on-right.html" title="LONG TEXT CONTENT ON LEFT" class="brick-link">
                                                                                       <div class="brick-hover-mask brick-hover">
                                                                                            <h3 class="brick-title">Find out best hangout places in your city.!!</h3>
                                                                                        </div>
                                                                                        <div class="brick-content"> 
                                                                                            <img src="img/mumbai.jpg" class="attachment-standard-blog-thumb wp-post-image" alt="Creative_Business_Card_Vol03_1">
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <!--Item-->
                                                                            <div class="filter_blog filter_branding filter_portfolio filter_uncategorized width-and-long isotope-item  brick-with-img">
                                                                                <div class="inside brick-inside post-bgcolor-default" style=" margin:1px 0 0 1px;">
                                                                                    <a href="content-portfolio-images-on-right.html" title="LONG TEXT CONTENT ON LEFT" class="brick-link">
                                                                                        <div class="brick-hover-mask brick-hover">
                                                                                            <h3 class="brick-title">List of best restaurants because indore known for its food</h3>
                                                                                        </div>
                                                                                        <div class="brick-content"> 
                                                                                            <img src="img/rest.jpg" class="attachment-standard-blog-thumb wp-post-image" alt="Creative_Business_Card_Vol03_1">
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <!--Item-->
                                                                            <div class="filter_blog filter_branding filter_portfolio filter_uncategorized width-and-height isotope-item  brick-with-img">
                                                                                <div class="inside brick-inside post-bgcolor-default" style=" margin:1px 0 0 1px;">
                                                                                    <a href="content-portfolio-fullwidth.html" title="FULLWIDTH PORTFOLIO POST SLIDER" class="brick-link">
                                                                                        <div class="brick-hover-mask brick-hover">
                                                                                            <h3 class="brick-title">Cut the MRP..!!</h3>
                                                                                        </div>
                                                                                        <div class="brick-content"> 
                                                                                            <img src="img/cou.png" alt="Perspective-App-Screen-Presentation-MockUp">
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <!--Item
                                                                            <div class="filter_illustration filter_portfolio filter_uncategorized width-and-small isotope-item  brick-with-img">
                                                                                <div class="inside brick-inside post-bgcolor-default" style=" margin:1px 0 0 1px;">
                                                                                    <a href="content-portfolio-fullwidth.html" title="FULLWIDTH PORTFOLIO POST SLIDER" class="brick-link">
                                                                                        <div class="brick-hover-mask brick-hover">
                                                                                            <h3 class="brick-title">FULLWIDTH PORTFOLIO POST SLIDER</h3>
                                                                                        </div>
                                                                                        <div class="brick-content"> 
                                                                                            <img src="http://ximudesign.com/GrabInd/wp-content/uploads/sites/17/2014/04/Paper-Hot-Cup-Mock-Up-vol-0-400x400.png" class="attachment-imagebox-thumb wp-post-image" alt="Paper-Hot-Cup-Mock-Up-vol-0">
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <!--Item-->
                                                                            <div class="filter_blog filter_branding filter_portfolio filter_uncategorized width-and-long isotope-item  brick-with-img">
                                                                                <div class="inside brick-inside post-bgcolor-default" style=" margin:1px 0 0 1px;">
                                                                                    <a href="content-portfolio-images-on-right.html" title="LONG TEXT CONTENT ON LEFT" class="brick-link">
                                                                                        <div class="brick-hover-mask brick-hover">
                                                                                            <h3 class="brick-title">Discounts on your favourite items because you are special</h3>
                                                                                        </div>
                                                                                        <div class="brick-content"> 
                                                                                            <img src="img/disc.jpg" class="attachment-standard-blog-thumb wp-post-image" alt="Creative_Business_Card_Vol03_1">
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>

                                                                            <!--Item-->
                                                                              <div class="filter_illustration filter_portfolio filter_uncategorized width-and-long isotope-item  brick-with-img">
                                                                                <div class="inside brick-inside post-bgcolor-default" style=" margin:1px 0 0 1px;">
                                                                                    <a href="includes/login/loginform.inc.php" title="LONG TEXT CONTENT ON LEFT" class="brick-link">
                                                                                        <div class="brick-hover-mask brick-hover">
                                                                                            <h3 class="brick-title">Login for retail users only and dear customer this world is free for you.!!</h3>
                                                                                        </div>
                                                                                        <div class="brick-content"> 
                                                                                            <img src="img/iii.jpg" class="attachment-standard-blog-thumb wp-post-image" alt="Creative_Business_Card_Vol03_1">
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <!--Item-->
                                                                            <div class="filter_blog filter_branding filter_portfolio filter_uncategorized width-and-long isotope-item  brick-with-img">
                                                                                <div class="inside brick-inside post-bgcolor-default" style=" margin:1px 0 0 1px;">
                                                                                    <a href="content-portfolio-images-on-right.html" title="LONG TEXT CONTENT ON LEFT" class="brick-link">
                                                                                        <div class="brick-hover-mask brick-hover">
                                                                                            <h3 class="brick-title">Wanna go for movie?? See movie timing of different theatres!!</h3>
                                                                                        </div>
                                                                                        <div class="brick-content"> 
                                                                                            <img src="img/movie.jpg" alt="Creative_Business_Card_Vol03_1">
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <!--Item-->
                                                                             <div class="filter_blog filter_branding filter_portfolio filter_uncategorized width-and-long isotope-item  brick-with-img">
                                                                                <div class="inside brick-inside post-bgcolor-default" style=" margin:1px 0 0 1px;">
                                                                                    <a href="content-portfolio-images-on-right.html" title="LONG TEXT CONTENT ON LEFT" class="brick-link">
                                                                                        <div class="brick-hover-mask brick-hover">
                                                                                            <h3 class="brick-title">Contact us!!</h3>
                                                                                        </div>
                                                                                        <div class="brick-content"> 
                                                                                            <img src="img/contact.gif" alt="Creative_Business_Card_Vol03_1">
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>

                                                                           
                                                                            <!--Item-->
                                                                          <!--  <div class="filter_blog filter_illustration filter_portfolio filter_uncategorized width-and-big isotope-item  brick-with-img">
                                                                                <div class="inside brick-inside post-bgcolor-default" style=" margin:1px 0 0 1px;">
                                                                                    <a href="content-portfolio-images-on-left.html" title="MASONRY PORTFOLIO WITH RIGHT SIDEBAR" class="brick-link">
                                                                                        <div class="brick-hover-mask brick-hover">
                                                                                            <h3 class="brick-title">MASONRY PORTFOLIO WITH RIGHT SIDEBAR</h3>
                                                                                        </div>
                                                                                        <div class="brick-content"> 
                                                                                            <img src="http://ximudesign.com/GrabInd/wp-content/uploads/sites/17/2014/03/Twin-Peaks-tribute-Character-design.jpg" class="attachment-image-thumb-1 wp-post-image" alt="Twin-Peaks-tribute-Character-design">
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <!--Item-->
                                                                          <!--  <div class="filter_illustration filter_portfolio filter_slider width-and-small isotope-item  brick-with-img">
                                                                                <div class="inside brick-inside post-bgcolor-default" style=" margin:1px 0 0 1px;">
                                                                                    <a href="content-portfolio-images-on-right.html" title="VERTICAL LIST PORTFOLIO LEFT CONTENT" class="brick-link">
                                                                                        <div class="brick-hover-mask brick-hover">
                                                                                            <h3 class="brick-title">VERTICAL LIST PORTFOLIO LEFT CONTENT</h3>
                                                                                        </div>
                                                                                        <div class="brick-content"> 
                                                                                            <img src="http://ximudesign.com/GrabInd/wp-content/uploads/sites/17/2014/04/didelis-web2-400x400.jpg" class="attachment-imagebox-thumb wp-post-image" alt="didelis-web2">
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <!--Item-->
                                                                           <!-- <div class="filter_illustration filter_portfolio width-and-small isotope-item  brick-with-img">
                                                                                <div class="inside brick-inside post-bgcolor-default" style=" margin:1px 0 0 1px;">
                                                                                    <a href="content-portfolio-images-on-left.html" title="SLIDER PORTFOLIO WITH RIGHT SIDEBAR" class="brick-link">
                                                                                        <div class="brick-hover-mask brick-hover">
                                                                                            <h3 class="brick-title">SLIDER PORTFOLIO WITH RIGHT SIDEBAR</h3>
                                                                                        </div>
                                                                                        <div class="brick-content"> 
                                                                                            <img src="http://ximudesign.com/GrabInd/wp-content/uploads/sites/17/2014/03/London-Market-illustrated-1-400x400.jpg" class="attachment-imagebox-thumb wp-post-image" alt="London Market illustrated 1">
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <!--Item-->
                                                                            <!--<div class="filter_blog filter_illustration filter_portfolio width-and-small isotope-item  brick-with-img">
                                                                                <div class="inside brick-inside post-bgcolor-default" style=" margin:1px 0 0 1px;">
                                                                                    <a href="content-portfolio-slider.html" title="MOVEMBER" class="brick-link">
                                                                                        <div class="brick-hover-mask brick-hover">
                                                                                            <h3 class="brick-title">MOVEMBER</h3>
                                                                                        </div>
                                                                                        <div class="brick-content"> 
                                                                                            <img src="http://ximudesign.com/GrabInd/wp-content/uploads/sites/17/2014/04/Short-Film-Poster-Design-1-400x400.jpg" class="attachment-imagebox-thumb wp-post-image" alt="Short Film Poster Design 1">
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <!--Item-->
                                                                            <!--<div class="filter_branding filter_illustration filter_portfolio width-and-small isotope-item brick-with-img">
                                                                                <div class="inside brick-inside bg-theme-color-10" style=" margin:1px 0 0 1px;">
                                                                                    <a href="content-portfolio-fullwidth.html" title="PORTFOLIO WITH VERTICAL LIST" class="brick-link">
                                                                                        <div class="brick-hover-mask brick-hover">
                                                                                            <h3 class="brick-title">PORTFOLIO WITH VERTICAL LIST</h3>
                                                                                        </div>
                                                                                        <div class="brick-content"> 
                                                                                            <img src="http://ximudesign.com/GrabInd/wp-content/uploads/sites/17/2014/03/BS001-400x400.jpg" class="attachment-imagebox-thumb wp-post-image" alt="BS001">
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <!--Item-->
                                                                            <!--<div class="filter_branding filter_portfolio filter_uncategorized width-and-small isotope-item  brick-with-img">
                                                                                <div class="inside brick-inside post-bgcolor-default" style=" margin:1px 0 0 1px;">
                                                                                    <a href="content-portfolio-fullwidth.html" title="FULLWIDTH PORTFOLIO" class="brick-link">
                                                                                        <div class="brick-hover-mask brick-hover">
                                                                                            <h3 class="brick-title">FULLWIDTH PORTFOLIO</h3>
                                                                                        </div>
                                                                                        <div class="brick-content"> 
                                                                                            <img src="http://ximudesign.com/GrabInd/wp-content/uploads/sites/17/2014/03/Tracks-05-400x400.jpg" class="attachment-imagebox-thumb wp-post-image" alt="Tracks 05">
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--End container-isotope-->
                                                                </div>
                                                                <!--End row-fluid-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <script type="text/javascript">
                                            jQuery(document).ready(function(){
                                                var ux_pb = new ThemePageBuilder();
                                                ux_pb.init();
                                            });
                                            </script>
                                        </div>
                                    </div>
                                    <!--End content-wrap-inn-->
                                </div>
                                <!--end content_wrap-->
                            </div>
                        </div>
                        <!--end post-->
                    </div>
                    <!--end content-->
                </div>
                <!--End #main-->        
            </div>
            <!--End #main-wrap-->
        </div><!--End #wrap-->
        <div id="float-bar" class="hidden-phone">
            <div class="float-bar-inn-wrap">
                <div class="float-bar-inn">
                    <!--Social network share icon-->
                    <div class="float-bar-social-share">
                        <button class="social-share-facebook" onclick="javascript:window.open('http://www.facebook.com/share.php?u=http://ximudesign.com/GrabInd/','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-facebook"></i></button>
                        <button class="social-share-twitter" onclick="javascript:window.open('https://twitter.com/share?url=http://ximudesign.com/GrabInd/','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-twitter"></i></button>
                        <button class="social-share-google-plus" onclick="javascript:window.open('https://plus.google.com/share?url=http://ximudesign.com/GrabInd/','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-google-plus"></i></button>
                        <button class="social-share-pinterest" onclick="javascript:window.open('http://pinterest.com/pin/create/bookmarklet/?url=http://ximudesign.com/GrabInd/&amp;is_video=false&amp;media=','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-pinterest"></i></button>
                        <button class="social-share-vk" onclick="javascript:window.open('http://vkontakte.ru/share.php?url=http://ximudesign.com/GrabInd/','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-vk"></i></button>
                        <button class="social-share-linkedin" onclick="javascript:window.open('http://www.linkedin.com/shareArticle?mini=true&amp;url=http://ximudesign.com/GrabInd/','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-linkedin"></i></button>
                    </div>
                </div>
                <!--End float inn wrap-->
            </div><!--End float inn-->
            <div id="float-bar-triggler"><i class="float-bar-triggler-inn"></i></div> 
        </div>
        <!--End #float bar-->
        <script type="text/javascript" src="./js/bootstrap.js"></script>
        <script type="text/javascript" src="./js/waypoints.min.js"></script>
        <script type="text/javascript" src="./js/jquery.flexslider-min.js"></script>
        <script type="text/javascript" src="./js/jquery.jplayer.min.js"></script>
        <script type="text/javascript" src="./js/jquery.gray.min.js"></script>
        <script type="text/javascript" src="./js/main.js"></script>
        <script type="text/javascript" src="./js/custom.theme.isotope.js"></script>
        <script type="text/javascript" src="./js/custom.theme.js"></script>
        <script type="text/javascript" src="./js/theme.pagebuilder.js"></script>
    </body>
</html>