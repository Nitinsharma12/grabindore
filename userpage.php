<?php
    include 'includes/login/connect.inc.php';
    include 'includes/login/core.inc.php';  
?>


<!DOCTYPE html>
<html lang="en-US">

    <?php 
        if(loggedIn()){ #This function is in /includes/login/core.inc.php for verfying user session

            $username = $_SESSION['username'];

            // Query to fetch User data
            $selectUserQuery = mysqli_query($con, "SELECT * FROM `users` WHERE `username` ='".$username."'") or die(mysqli_error($con));
            $userRow = mysqli_fetch_array($selectUserQuery);

            if ($userId = $userRow['user_id']) {
                // Query to fetch shopkeeper data
                $selectUserDataQuery = mysqli_query($con, "SELECT * FROM `shopkeeper` WHERE `user_id` = ".$userId) or die(mysqli_error($con));
                $row = mysqli_fetch_array($selectUserDataQuery);

                $fullUserName = $row['first_name']." ".$row['last_name'];
            }

            
    ?>
    <head>
        <title>User page| Grab-indore</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Favicons -->
        <link rel="shortcut icon" href="./img/favicon.ico">
        <link rel="apple-touch-icon-precomposed" href="./img/favicon.ico">
        
        <!-- Google fonts styles -->
        <link rel="stylesheet" id="google-fonts-Roboto-css" href="http://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic&amp;ver=3.9.1" type="text/css" media="all">
        <link rel="stylesheet" id="google-fonts-Playfair+Display-css" href="http://fonts.googleapis.com/css?family=Playfair+Display%3Aregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;ver=3.9.1" type="text/css" media="all">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <meta name="description" content="Developed By M Abdur Rokib Promy">
        <meta name="keywords" content="Admin, Bootstrap 3, Template, Theme, Responsive">
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min1.css" rel="stylesheet" type="text/css" />
         <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min1.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min1.css" rel="stylesheet" type="text/css" />
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />

        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <!-- Theme style -->
        <link href="css/style1.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />

        <!-- Aside styles -->
        <link rel="stylesheet" id="bootstrap-css" href="./styles/bootstrap.css" type="text/css" media="screen">
        <link rel="stylesheet" id="font-awesome-css" href="./styles/font-awesome.min.css" type="text/css" media="screen">
        <link rel="stylesheet" id="lightbox-css" href="./js/lightbox/css/lightbox.css" type="text/css" media="screen">
        <link rel="stylesheet" id="pagebuild-css" href="./styles/pagebuild.css" type="text/css" media="screen">
        <link rel="stylesheet" id="ux-aside-css" href="./styles/style.css" type="text/css" media="screen">
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
                 
            <header id="header" class="">
                <h1 id="logo-mobile"><a href="index.html" title="Aside Responsive HTML Theme">GrabIndore</a></h1>    
            </header>
            <!--End Header-->
            <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                GrabIndore
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    
                    
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar3.png" class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li><!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Director Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                       <!-- <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                                <span class="label label-danger">9</span>
                            </a> -->
                         
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i>
                                <span><?php echo $fullUserName; ?><i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                <li class="dropdown-header text-center">Account</li>

                                <li>
                                    <a href="shop_registration.php">
                                        <i class="fa fa-clock-o fa-fw pull-right"></i>
                                        <span class="badge badge-success pull-right">10</span> 
                                        Registraion
                                    </a>
                                    <a href="coupon.php">
                                        <i class="fa fa-envelope-o fa-fw pull-right"></i>
                                        <span class="badge badge-danger pull-right">5</span>
                                        Coupons
                                    </a>
                                    <a href="discount.php">
                                        <i class="fa fa-magnet fa-fw pull-right"></i>
                                        <span class="badge badge-info pull-right">3</span> 
                                        Discount
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-question fa-fw pull-right"></i> 
                                        <span class="badge pull-right">11</span>
                                        Delete old data
                                    </a>
                                </li>

                                <li class="divider"></li>

                                    <li>
                                        <a href="#">
                                        <i class="fa fa-user fa-fw pull-right"></i>
                                            Profile
                                        </a>
                                        <a data-toggle="modal" href="#modal-user-settings">
                                        <i class="fa fa-cog fa-fw pull-right"></i>
                                            Settings
                                        </a>
                                        </li>

                                        <li class="divider"></li>

                                        <li>
                                            <a href="includes/logout.inc.php"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
                                        </li>
                                    </ul>

                        </li>
                    </ul>
                </div>
            </nav>
        </header>
     
            <!-- Left side column. contains the logo and sidebar -->
            <!--#main-wrap-->
            
                <div id="main" style="-webkit-transform-origin: 100% 700px;">
                    <div id="content">
                        <div id="post-100" class="post-50 page type-page status-publish hentry">
                            <div class="row-fluid " style="min-height: 1000px;">
                                <div id="content_wrap" class="">
                                    <div class="content-wrap-inn ">
                                        <div class="container">
                                            <div class="title-bar-wrap title-centered" id="title-bar">
                                                <div id="title-wrap">
                                                    <div class="title-wrap-inn">
                                                        <div id="main-title">
                                                            <h1 class="main-title">Welcome</h1>
                                                        </div>
                                                        <div class="post-expert">Here is your home page. You can register for your shop, provide coupons and discount for your shop and delete your old data if you gave wrong information or you want to go from our world.</div>
                                                    </div>
                                                </div>
                                                <!--End #title-wrap-->
                                            </div>
                                            <!--End #title-bar-wrap"-->
                                        </div>
                                        <div class="pagebuilder-wrap">
                                            <div class="fullwrap_moudle">
                                                <div class="row-fluid">
                                                    <div id="" class="fullwidth-wrap parallax" style="background-position: 50% 0px;" data-speed="19">
                                                        <div class="row-fluid">
                                                            <div class="span12 moudle moudle_has_animation animation-default-ux animation-scroll-ux  bottom-space-no  animation_hidden fadeined"
                                                                style="opacity: 1;">
                                                                <!--Portfolio isotope-->
                                                                
                                                                    <!--End filter-->
                                                                    <div class="container-isotope clear" data-post="20140424-122148-321">
                                                                        <div id="isotope-load" style="display: none;">
                                                                            <div class="ux-loading"></div>
                                                                            <div class="ux-loading-transform">
                                                                                <div class="loading-dot1">&nbsp;</div>
                                                                                <div class="loading-dot2">&nbsp;</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="isotope masonry less-space isotope_fade" data-space="0px"
                                                                            data-size="medium">
                                                                            <div class="filter_architecture filter_blog filter_portfolio width2 isotope-item container3d animation-default-ux animation-scroll-ux fadeined">
                                                                                <div class="inside card">
                                                                                    <div class="flip_wrap_back back face">
                                                                                        <div class="flip_wrap_back_con centered-ux"
                                                                                           >
                                                                                            <h2>
                                                                                                <a href="shop_registration.php">Registration</a>
                                                                                            </h2>
                                                                                            <ul class="hover_thumb_wrap">
                                                                                                <li class="hover_thumb_unit"><a
                                                                                                    href="img/register.jpg"
                                                                                                    title="IMG_4783" class="imgwrap lightbox"
                                                                                                    data-rel="post671"><img
                                                                                                        src="img/register.jpg"></a></li>
                                                                                                <li class="hover_thumb_unit"><a
                                                                                                    href="http://ximudesign.com/aside/wp-content/uploads/sites/17/2014/04/IMG_4784.jpg"
                                                                                                    title="IMG_4784" class="imgwrap lightbox"
                                                                                                    data-rel="post671"><img
                                                                                                        src="img/register.jpg"></a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div class="flip_wrap_back_bg post-bgcolor-default" ></div>
                                                                                    </div>
                                                                                    <img src="img/register.jpg" class="front face">
                                                                                </div>
                                                                                <!--End inside-->
                                                                            </div>
                                                                            <div class="filter_illustration filter_portfolio filter_uncategorized width2 isotope-item container3d animation-default-ux animation-scroll-ux fadeined">
                                                                                <div class="inside card">
                                                                                    <div class="flip_wrap_back back face">
                                                                                        <div class="flip_wrap_back_con centered-ux">
                                                                                            <h2>
                                                                                                <a href="coupon.php">Coupon</a>
                                                                                            </h2>
                                                                                            <ul class="hover_thumb_wrap">
                                                                                                <li class="hover_thumb_unit"><a
                                                                                                    href="coupon.html"
                                                                                                    title="Expired-shapes-1" class="imgwrap lightbox"
                                                                                                    data-rel="post183"><img
                                                                                                        src="img/cou.jpg"></a></li>
                                                                                                <li class="hover_thumb_unit"><a
                                                                                                    href="coupon.html"
                                                                                                    title="Expired-shapes-2" class="imgwrap lightbox"
                                                                                                    data-rel="post183"><img
                                                                                                        src="img/cou.jpg"></a></li>
                                                                                                <li class="hover_thumb_unit"><a
                                                                                                    href="coupon.html"
                                                                                                    title="Expired-shapes-3" class="imgwrap lightbox"
                                                                                                    data-rel="post183"><img
                                                                                                        src="img/cou.jpg"></a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div class="flip_wrap_back_bg bg-theme-color-10"
                                                                                            ></div>
                                                                                    </div>
                                                                                    <img src="img/cou.jpg" class="front face">
                                                                                </div>
                                                                                <!--End inside-->
                                                                            </div>
                                                                            <div class="filter_branding filter_illustration filter_portfolio filter_slider filter_uncategorized width2 isotope-item container3d animation-default-ux animation-scroll-ux fadeined">
                                                                                <div class="inside card">
                                                                                    <div class="flip_wrap_back back face">
                                                                                        <div class="flip_wrap_back_con centered-ux"
                                                                                           >
                                                                                            <h2>
                                                                                                <a href="discount.php">Discount</a>
                                                                                            </h2>
                                                                                            <ul class="hover_thumb_wrap">
                                                                                                <li class="hover_thumb_unit"><a
                                                                                                    href="discount.html"
                                                                                                    title="Paper-Hot-Cup-Mock-Up-vol-2"
                                                                                                    class="imgwrap lightbox" data-rel="post176"><img
                                                                                                       
                                                                                                        src="img/disc.jpg"></a></li>
                                                                                                <li class="hover_thumb_unit"><a
                                                                                                    href="discount.html"
                                                                                                    title="Paper-Hot-Cup-Mock-Up-vol-2"
                                                                                                    class="imgwrap lightbox" data-rel="post176"><img
                                                                                                       
                                                                                                        src="img/disc.jpg"></a></li>
                                                                                                <li class="hover_thumb_unit"><a
                                                                                                    href="discount.html"
                                                                                                    title="Paper-Hot-Cup-Mock-Up-vol-0"
                                                                                                    class="imgwrap lightbox" data-rel="post176"><img
                                                                                                       
                                                                                                        src="img/disc.jpg"></a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div class="flip_wrap_back_bg post-bgcolor-default"
                                                                                            ></div>
                                                                                    </div>
                                                                                    <img
                                                                                        src="img/disc.jpg"
                                                                                        class="front face">
                                                                                </div>
                                                                                <!--End inside-->
                                                                            </div>
                                                                            <div class="filter_blog filter_illustration filter_portfolio filter_uncategorized width2 isotope-item container3d animation-default-ux animation-scroll-ux fadeined">
                                                                                <div class="inside card">
                                                                                    <div class="flip_wrap_back back face">
                                                                                        <div class="flip_wrap_back_con centered-ux"
                                                                                           >
                                                                                            <h2>
                                                                                                <a href="content-portfolio-images-on-left.html">Information</a>
                                                                                            </h2>
                                                                                            <ul class="hover_thumb_wrap">
                                                                                                <li class="hover_thumb_unit"><a
                                                                                                    href="http://ximudesign.com/aside/wp-content/uploads/sites/17/2014/04/Hipster-Wizard-2.jpg"
                                                                                                    title="Hipster-Wizard-2" class="imgwrap lightbox"
                                                                                                    data-rel="post162"><img
                                                                                                        src="img/info.jpg"></a></li>
                                                                                                <li class="hover_thumb_unit"><a
                                                                                                    href="http://ximudesign.com/aside/wp-content/uploads/sites/17/2014/04/Hipster-Wizard-3.jpg"
                                                                                                    title="Hipster Wizard 3" class="imgwrap lightbox"
                                                                                                    data-rel="post162"><img
                                                                                                        src="img/info.jpg"></a></li>
                                                                                                <li class="hover_thumb_unit"><a
                                                                                                    href="http://ximudesign.com/aside/wp-content/uploads/sites/17/2014/04/Hipster-Wizard-4.jpg"
                                                                                                    title="Hipster Wizard 4" class="imgwrap lightbox"
                                                                                                    data-rel="post162"><img
                                                                                                        src="img/info.jpg"></a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div class="flip_wrap_back_bg post-bgcolor-default"
                                                                                            ></div>
                                                                                    </div>
                                                                                    <img
                                                                                        src="img/info.jpg"
                                                                                        class="front face">
                                                                                </div>
                                                                                <!--End inside-->
                                                                            </div>
                                                                           
                                                                                <!--End inside-->
                                                                            </div>
                                                                          
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
            <div id="hot-close-sidebar-touch"></div>
        </div><!--End #wrap-->    
        <div id="float-bar" class="hidden-phone">
            <div class="float-bar-inn-wrap">
                <div class="float-bar-inn">
                    <!--Social network share icon-->
                    <div class="float-bar-social-share">
                        <button class="social-share-facebook" onclick="javascript:window.open('http://www.facebook.com/share.php?u=http://ximudesign.com/aside/','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-facebook"></i></button>

                        <button class="social-share-twitter" onclick="javascript:window.open('https://twitter.com/share?url=http://ximudesign.com/aside/','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-twitter"></i></button>

                        <button class="social-share-google-plus" onclick="javascript:window.open('https://plus.google.com/share?url=http://ximudesign.com/aside/','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-google-plus"></i></button>

                        <button class="social-share-pinterest" onclick="javascript:window.open('http://pinterest.com/pin/create/bookmarklet/?url=http://ximudesign.com/aside/&amp;is_video=false&amp;media=','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-pinterest"></i></button>

                        <button class="social-share-vk" onclick="javascript:window.open('http://vkontakte.ru/share.php?url=http://ximudesign.com/aside/','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-vk"></i></button>

                        <button class="social-share-linkedin" onclick="javascript:window.open('http://www.linkedin.com/shareArticle?mini=true&amp;url=http://ximudesign.com/aside/','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-linkedin"></i></button>

                    </div>
                </div>
                <!--End float inn wrap-->
            </div><!--End float inn-->
            <div id="float-bar-triggler"><i class="float-bar-triggler-inn"></i></div> 
        </div>
        <!--End #float bar-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>

        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Director App -->
        <script src="js/Director/app.js" type="text/javascript"></script>
    
        <script type="text/javascript" src="./js/bootstrap.js"></script>
        <script type="text/javascript" src="./js/lightbox/js/lightbox.min.js"></script>
        <script type="text/javascript" src="./js/waypoints.min.js"></script>
        <script type="text/javascript" src="./js/jquery.flexslider-min.js"></script>
        <script type="text/javascript" src="./js/jquery.jplayer.min.js"></script>
        <script type="text/javascript" src="./js/jquery.gray.min.js"></script>
        <script type="text/javascript" src="./js/main.js"></script>
        <script type="text/javascript" src="./js/custom.theme.isotope.js"></script>
        <script type="text/javascript" src="./js/custom.theme.js"></script>
        <script type="text/javascript" src="./js/theme.pagebuilder.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function() {
                var ux_pb = new ThemePageBuilder();
                ux_pb.init();
            });
        </script>

        <?php 
            }  #End of LoggedIn function
        ?>
    </body>
</html>