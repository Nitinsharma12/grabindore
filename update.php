<?php 
    include 'includes/login/connect.inc.php';
    include 'includes/login/core.inc.php';

    if (isset($_POST['Entercoupon'])) {

      if (isset($_POST['shop_id']) and isset($_POST['shop_name']) and isset($_POST['coupon_code']) and 
          isset($_POST['coupon_description'])) {

         
                      
              $shop_id = $_POST['shop_id'];
              $shop_name = $_POST['shop_name'];
              $coupon_code = $_POST['coupon_code'];
              $coupon_description = $_POST['coupon_description'];
             

              //$passwordHash = md5($password);
          
              $insertQuery = mysqli_query($con, "INSERT INTO `coupon`(`shop_id_`, `coupon_code`, `coupon_description`, `shop_name`) VALUES ('','$coupon_code','$coupon_description','$shop_name')") 
                              or die("Unable to register user:".mysqli_error($con));
              
              $selectUserQuery = mysqli_query($con, "SELECT `shop_name`, `coupon_code`, `coupon_description`, `shop_id` FROM `coupon` WHERE 1") 
                                  or die(mysqli_error($con));

              $row = mysqli_fetch_array($selectUserQuery);

              $shop_id = $row['shop_id'];
               $_SESSION['shop_id'] = $shop_id;
              header('location: register.php'); #return back to index page

              mysqli_close($con); 
          }

          else {
            echo "Enter right information.";
          }

      }
              

             
     

   
?>

<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
 <div class="modal-body">
    <div class="well">
      <div id="myTabContent" class="tab-content">
        
          <form class="form-horizontal"  method="POST" >
            <fieldset>
              <div id="legend"></br><br>
                <legend class="">Add Coupon</legend>
              </div>    
              <div class="control-group">
                <!-- Username -->
               <div class="form-group">
                                          <label class="col-sm-2 col-sm-2 control-label">Shop id*</label>
                                          <div class="col-sm-4">
                                              <input type="text" class="form-control" placeholder="" name="shop_id">
                                          </div>
                                      </div>
 <div class="form-group">
                                          <label class="col-sm-5 col-sm-2 control-label">Shop name*</label>
                                          <div class="col-sm-7">
                                              <input type="text" class="form-control" placeholder="Full name of your shop" name="shop_name">
                                               
                                          </div>

                                      </div>
 <div class="form-group">
                                          <label class="col-sm-2 col-sm-2 control-label">Coupon code*</label>
                                          <div class="col-sm-4">
                                              <input type="text" class="form-control" placeholder="Enter your unique coupon code" name="coupon-code">
                                          </div>
                                      </div>

             </div>
 <div class="form-group">
                                          <label class="col-sm-2 col-sm-2 control-label">Coupon Description*</label>
                                          <div class="col-sm-5">
                                              <textarea rows="4" name="message" cols="40" placeholder="Provide describtion about your coupon" ></textarea><br>
                                          </div>
                                      </div>
              						
              <div class="form-group">
                                          
                                      <div class="col-sm-5">  
                            <input type='submit' class="btn btn-primary" id='submitbutton' name='Entercoupon' value="Submit">
</div>	
                        </div>  
        </fieldset>
        </form>
        </div>
        </div>
        </div>
        </div>
       
</html>


