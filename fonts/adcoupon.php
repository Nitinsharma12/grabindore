<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <form action="update.php" method="POST">
    <div class="container text-center">
      <div class="col-md-4 text-center">
        <br>
        <input type="text" class="form-control" name="data">
        <br>
        <div class="text-center">
          <input type="submit" value="Add" class="btn btn-success" name="submit">
        </div>
      </div>  
    </div>
  </form>
</body>
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
      