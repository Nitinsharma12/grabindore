<?php
    include 'includes/login/connect.inc.php';
    include 'includes/login/core.inc.php';  
?>

<html>
	<div class="modal-body">
		<div class="container">
			<div class="well">
				<div id="myTabContent" class="tab-content">
					<h3>List of coupons</h3>
					<ul>
						<?php
							$selectCouponQuery = mysqli_query($con, "SELECT * FROM `coupon`") or die("Unable to select coupons");
							echo "before while";
							while($queryRow = mysqli_fetch_assoc($selectCouponQuery);) {
								$coupon_code = $queryRow['coupon_code'];
								$coupon_description = $queryRow['coupon_description'];
								echo $coupon_description;
								echo "<li>".$coupon_code." - ".$coupon_description."</li>";
							}
							echo "after while";
						?>
					</ul>
				</div>
			</div>
		</div>	
	</div>	
</html>



