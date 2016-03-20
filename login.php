<!--<?php
 session_start();
?>-->
<html>
<head>
  <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
  .gateway {
      margin-left: 0px;
      padding: 10px 10px 10px 10px;
      background-color: rgb(42,52,81);
      width: 100%;
      font-family:Georgia;
    }
</style>
<body>
  
  <div class="gateway">
    <a href="index.html" style="color:white" class="icon-home"> GrabIndore</a>
  </div>              

  <div class="container">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <div class="" id="loginModal">
          <div class="modal-header">
            <!--button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button-->
            <h3>Have an Account?</h3>
          </div><!-- /.modal-header -->
          
          <div class="modal-body">
            <div class="well">
              <div id="myTabContent" class="tab-content">
                <div class="tab-pane active in" id="login">
                  <form class="form-horizontal" action="signin.php" method="POST">
                    <fieldset>
                      
                      <div id="legend"><br>
                        <legend class="">Login</legend>
                      </div>    
                      
                      <div class="control-group">
                        <!-- Username -->
                        <label class="control-label" for="username">Username</label>
                        <div class="controls">
                          <input type="text" name="admin_name" placeholder="" class="form-control">
                        </div>
                      </div>
              
                      <div class="control-group">
                        <!-- Password-->
                        <label class="control-label" for="password">Password</label>
                        <div class="controls">
                          <input type="password" name="admin_pass" placeholder="" class="form-control">
                        </div> <br/>
                      </div> <br/>
              
                      <div class="form-group">
                        <div class="col-lg-offset-.5 col-lg-10">
                          <div class="checkbox">
                              <label>
                                  <input type="checkbox"> Remember me
                              </label>
                          </div>
                        </div>
                      </div>
                      
                      <div class="form-group">
                          <div class="col-lg-offset-.5 col-lg-10">
                              <button type="submit" class="btn btn-danger">Sign in</button>
                          </div>
                      </div>
                    </fieldset>
                  </form>                
                </div><!-- /#login -->
        
              </div><!-- /.tab-content -->
            </div><!-- /.well -->
          </div><!-- /.modal-body -->
        </div><!-- /#loginModal -->
      </div><!-- /.col-md-4 -->
    </div><!-- /.row -->
  </div><!-- /.container -->

  <script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>

</body>
</html>
<?php
    mysql_connect('localhost','root','');
    mysql_select_db('grabindore');

      if(isset($_POST['submit'])) {

        $admin_name =$_POST['admin_name'];
        $admin_pass =$_POST['admin_pass'];
     $_SESSION['admin'] = $admin_name;

        $query= "select * from admin where username='$admin_name' AND password='$admin_pass' ";
        $run= mysql_query($query);

        if(mysql_num_rows($run)>0) {

          echo "<script>window.open('userpage.html','_self')</script>";
        }
        else {
          echo "<script>alert('Admin details are incorrect')</script>";
      }
    }
?>
 
 