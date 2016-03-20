<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
 <div class="modal-body">
    <div class="well">
      <div id="myTabContent" class="tab-content">
        
          <form class="form-horizontal"  method="POST">
            <fieldset>
              <div id="legend"></br><br>
                <legend class="">Add Coupon</legend>
              </div>    
              <div class="control-group">
                <!-- Username -->
               <div class="form-group">
                                          <label class="col-sm-2 col-sm-2 control-label">User id*</label>
                                          <div class="col-sm-4">
                                              <input type="text" class="form-control" placeholder="">
                                          </div>
                                      </div>
 <div class="form-group">
                                          <label class="col-sm-5 col-sm-2 control-label">Shop name*</label>
                                          <div class="col-sm-7">
                                              <input type="text" class="form-control" placeholder="Full name of your shop">
                                               
                                          </div>

                                      </div>
 <div class="form-group">
                                          <label class="col-sm-2 col-sm-2 control-label">Discount offer*</label>
                                          <div class="col-sm-6">
                                              <input type="text" class="form-control" placeholder="Give your discount gift">
                                          </div>
                                      </div>

             </div>
 <div class="form-group">
                                          <label class="col-sm-2 col-sm-2 control-label">Discount Description*</label>
                                          <div class="col-sm-5">
                                              <textarea rows="4" name="message" cols="40" placeholder="Provide describtion about your Describtion" ></textarea><br>
                                          </div>
                                      </div>
              						
              <div class="form-group">
                                          
                                      <div class="col-sm-5">  
                            <input type='submit' class="btn btn-primary" id='submitbutton' name='Enter detail' value="Submit">
</div>	
                        </div>  
        </fieldset>
        </form>
        </div>
        </div>
        </div>
        </div>
       
</html>


<?php

$connect=mysqli_connect('localhost','root','','placement_portal');
if(isset($_POST['submit']))
{
		$notice=mysqli_real_escape_string($connect, $_POST['data']);
		if(!empty($notice))
	{
		$test=mysqli_query($connect,"INSERT INTO notice (notice) VALUES ('$notice')") or die(mysqli_error($connect));
		if($test)
			echo "<script>alert('Notice board updated')</script>";
		else
   			echo "Error";	
	}
else
	echo "Please Enter something";
}

?>
			