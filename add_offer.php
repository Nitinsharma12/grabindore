<?php 
    include 'includes/login/connect.inc.php';
    include 'includes/login/core.inc.php';

    if (isset($_POST['add_offer'])) {
        
        if (isset($_POST['shop_id']) and isset($_POST['discount_offer']) 
            and isset($_POST['discount_description'])) {

            $shop_id = $_POST['shop_id'];
            $discount_offer = $_POST['discount_offer'];
            $discount_description = $_POST['discount_description'];

            $addOfferQuery = mysqli_query($con, "INSERT INTO `discount`(`discount_id`, `discount_code`, `discount_description`, `shop_id`, `photo`) 
                                                  VALUES ('', '$discount_offer', '$discount_description', '$shop_id', '')") 
                                          or die("Offer registration failed.");

            if ($addOfferQuery) {
                echo "offer registered";
            }
            else {
                echo "offer registration failed.";
            }
        }
        else {
            echo "Provide correct input.";
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
              
                <form class="form-horizontal"  method="POST" action="" role="form">
                    <fieldset>
                        <div id="legend"><br><br>
                            <legend class="">Add Offer</legend>
                        </div>    
                        <div class="control-group">
                            <!-- Username -->
                            <!--
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">User id*</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            -->
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Select shop</label>
                                <div class="col-sm-4">
                                    <select class="form-control" name="shop_id">
                                        <?php 
                                            $selectShopQuery = mysqli_query($con, "SELECT DISTINCT * FROM `shop`");

                                            while ($shopRow = mysqli_fetch_assoc($selectShopQuery)) {
                                                $serviceIdValue = $shopRow['shop_id'];
                                                $serviceName = $shopRow['shop_name'];
                                                echo "<option value=".$serviceIdValue.">".$serviceName."</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Discount offer*</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Give your discount gift" name="discount_offer">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Discount Description*</label>
                            <div class="col-sm-5">
                                <textarea rows="4" name="discount_description" cols="40" placeholder="Provide describtion about your Describtion" ></textarea><br>
                            </div>
                        </div>			
                        <div class="form-group">                        
                            <div class="col-sm-5">  
                                <input type='submit' class="btn btn-primary" id='submitbutton' name='add_offer' value="Submit">
                            </div>	
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</html>

<?php
/*
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
*/
?>
			