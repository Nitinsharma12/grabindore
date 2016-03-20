<?php 
    include 'includes/login/connect.inc.php';
    include 'includes/login/core.inc.php';

    if (isset($_POST['registerButton'])) {

      if (isset($_POST['first_name']) and isset($_POST['last_name']) and isset($_POST['mail_id']) and 
          isset($_POST['personal_contact_number']) and isset($_POST['office_contact_number']) and 
          isset($_POST['address']) and isset($_POST['nearby_location']) and 
          isset($_POST['password']) and isset($_POST['confirm_password'])) {

          if ($_POST['password'] == $_POST['confirm_password']) {
                      
              $first_name = $_POST['first_name'];
              $last_name = $_POST['last_name'];
              $mail_id = $_POST['mail_id'];
              $password = $_POST['password'];
              $personal_contact_number = $_POST['personal_contact_number'];
              $office_contact_number = $_POST['office_contact_number'];
              $address = $_POST['address'];
              $nearby_location = $_POST['nearby_location'];

              //$passwordHash = md5($password);
          
              $insertQuery = mysqli_query($con, "INSERT INTO `users`(`user_id`, `username`, `password`, `is_admin`) 
                                                VALUES ('', '$mail_id', '$password', 0)") 
                              or die("Unable to register user:".mysqli_error($con));
              
              $selectUserQuery = mysqli_query($con, "SELECT * FROM `users` WHERE `username` = '".$mail_id."'") 
                                  or die(mysqli_error($con));

              $row = mysqli_fetch_array($selectUserQuery);

              $user_id = $row['user_id'];

              $insertShopkeeperQuery = mysqli_query($con, "INSERT INTO `shopkeeper`(`shopkeeper_id`, `first_name`, `last_name`, `user_id`, `mail_id`, `personal_contact_no`, `office_contact_no`, `address`, `nearby_location`, `photo`) 
                                                          VALUES ('', '$first_name', '$last_name', '$user_id', '$mail_id', '$personal_contact_number', '$office_contact_number', '$address', '$nearby_location', '')")
                                        or die("Unable to register shopkeeper:".mysqli_error($con));


              $_SESSION['username'] = $mail_id;
              header('location: userpage.php'); #return back to index page

              mysqli_close($con); 
          }

          else {
            echo "Passord did not match.";
          }

      }

    }
?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>Director | Dashboard</title>
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

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.php" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Director
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
                                <span>Jane Doe <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                <li class="dropdown-header text-center">Account</li>

                                <li>
                                    <a href="#">
                                    <i class="fa fa-clock-o fa-fw pull-right"></i>
                                        <span class="badge badge-success pull-right">10</span> Registraion</a>
                                    <a href="#">
                                    <i class="fa fa-envelope-o fa-fw pull-right"></i>
                                        <span class="badge badge-danger pull-right">5</span>Coupons</a>
                                    <a href="#"><i class="fa fa-magnet fa-fw pull-right"></i>
                                        <span class="badge badge-info pull-right">3</span> Discount</a>
                                    <a href="#"><i class="fa fa-question fa-fw pull-right"></i> <span class=
                                        "badge pull-right">11</span>Delete old data</a>
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
                                    <a href="#"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-right -->
            </nav>
        </header>

        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <div class="row">

                <div class="col-lg-10">
                    <div class="well">
                        <section class="panel">
                            <header class="panel-heading">
                                <b>Registration of your precious place</b>
                            </header>
                            
                            <div class="panel-body">
                                <form class="form-horizontal tasi-form" method="post" action="<?php echo $currentFile; ?>">
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">First Name*</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" name="first_name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Last Name*</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" name="last_name">
                                        </div>
                                    </div>
                                    <!--
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">User id*</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" placeholder="Four digit integer value">
                                        </div>
                                    </div>
                                    -->
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Mail id* (Mail id will be user_id)</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" placeholder="abc@xyz.com" name="mail_id">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Password*</label>
                                        <div class="col-sm-3">
                                            <input type="password" class="form-control" placeholder="************" name="password">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Confirm Password*</label>
                                        <div class="col-sm-3">
                                            <input type="password" class="form-control" placeholder="************" name="confirm_password">
                                        </div>
                                    </div>
                                    <!--
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Shop name*</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" placeholder="Full name of your shop">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Type of shop*</label>
                                        <div class="col-lg-3">                                 
                                            <select class="form-control m-b-10">
                          
                                                <option>Restautant</option>
                                                <option>Student zone</option>
                                                <option>Coaching</option>
                                                <option>Shopping</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    -->
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Personal Contact number*</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" name="personal_contact_number" placeholder="9876543210">
                                        </div>
                                    </div> 
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Office Contact*</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" name="office_contact_number" placeholder="9876543210">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Address*</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" name="address">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Most nearby location*</label>
                                        <div class="col-lg-3">                                 
                                            <select class="form-control m-b-10" name="nearby_location">
                                                <option>Bhawarkua</option>
                                                <option>Palasia</option>
                                                <option>Vijay nagar</option>
                                                <option>Annapurna</option>
                                                <option>LIG</option>
                                                <option>Zanzirwala</option>
                                                <option>Rajwada</option>
                                                <option>Kalani nagar</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!--
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label" for="exampleInputFile">Upload Picture of your shop</label>
                                        <input type="file" id="exampleInputFile3">
                                        <p class="col-sm-3 col-sm-3  control-label">This image would be identity of your shop.</p>
                                    </div>
                                    -->
                                    <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button type="submit" class="btn btn-danger" name="registerButton">Submit</button>
                                          </div>
                                    </div>
                                </form>
                            </div><!-- /.panel-body -->
                        </section>
                    </div><!-- /.well -->
                </div><!-- /.col-lg-10 -->
            </div><!-- /.row -->
        </div><!-- /.wrapper -->
                      
        
        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>

        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Director App -->
        <script src="js/Director/app.js" type="text/javascript"></script>
    </body>
</html>