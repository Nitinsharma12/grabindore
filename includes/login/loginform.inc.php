<?php
  include 'connect.inc.php';
  include 'core.inc.php';

	if(isset($_POST['signinButton'])) {
		# code...

		if(isset($_POST['username']) and isset($_POST['password'])){
			$userName = $_POST['username']; 
			$password = $_POST['password'];

			//$passwordHash = md5($password);

			//check if username and password are not empty
			if(!empty($userName) and !empty($password)){

				//query to select username password from database
				$result = mysqli_query($con,"Select * from users where `username` ='".$userName."' AND `password` = '".$password."'") or die(mysqli_error($con));
			
				if ($result) {
					# compute the number of rows returned from query execution
					$queryNumRows = mysqli_num_rows($result);

					if ($queryNumRows == 0) {
						# check if username/password wrong 
						echo " <center> <h3> Invalid Username/Password Combination1 </h3> </center>";
					}
					elseif ($queryNumRows == 1) {
						# get data retrieved from sucessful exection of query
						$row = mysqli_fetch_array($result);
						
						#check if username/password combination is correct
						if($row['username']==$userName and $row['password']==$password){

							$_SESSION['username'] = $userName;
							header('location: ../../userpage.php');	#return back to index page
						}
					}
				}
				else{
					echo " <center> <h3> Invalid Username/Password Combination2 </h3> </center>";
				}
				mysqli_close($con);
			}
		}
	}

?>

<head>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>
	  .gateway {
	      margin-left: 0px;
	      padding: 10px 10px 10px 10px;
	      background-color: rgb(42,52,81);
	      width: 100%;
	      font-family:Georgia;
	    }
	</style>
</head>

<body>
  
  <div class="gateway">
    <a href="../../index.php" style="color:white" class="icon-home"> GrabIndore</a>
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
                  <form class="form-horizontal" action="<?php echo $currentFile; ?>" method="POST">
                    <fieldset>
                      
                      <div id="legend"><br>
                        <legend>Login</legend>
                      </div>    
                      
                      <div class="control-group">
                        <!-- Username -->
                        <label class="control-label" for="username">Username (email is username)</label>
                        <div class="controls">
                          <input type="text" name="username" placeholder="" class="form-control" name="username" id="username">
                        </div>
                      </div>
              
                      <div class="control-group">
                        <!-- Password-->
                        <label class="control-label" for="password">Password</label>
                        <div class="controls">
                          <input type="password" name="password" placeholder="" class="form-control" id="password">
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
                              <button type="submit" class="btn btn-danger" id="signinButton" name="signinButton">Sign in</button>
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