<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>

    <link rel = "stylesheet" href = "CSS/styles.css">
</head>
<body>


<header>
  <?php 

session_start();
  include 'header\header1.php';?>
</header>
<hr>

<h1>Change Profile Picture</h1>
<img src="image/logo.png" alt="">

<section>
  <?php 



if (isset($_SESSION['username'])) {
  echo "  
  <nav>
     
    
    <ul>

        <li><a href='dashboard.php'>Dashboard For Buyer</a></li>
        <li><a href='category.php'>Category</a></li>
        <li><a href='products.php'>Products</a></li>
        <li><a href='vds.php'>View Delivery Status</a></li>
        <li><a href='adc.php'>Add Coupon Code</a></li>
        <li><a href='viewprofile.php'>View Profile</a></li>
        <li><a href='editprofile.php'>Edit Profile</a></li>
        <li><a href='chngprofilepic.php'>Change Profile Picture</a></li>
        <li><a href='changepassword.php'>Change Password</a></li>
        <li><a href='logout.php'>Log Out</a></li>

    </ul>
  </nav>";


}
else{
    $msg="error";
    header("location:login.php");
    // echo "<script>location.href='login.php'</script>";
  }

 ?>

  
  <article>
  <form action="uploadpp.php" method="post" enctype="multipart/form-data">
  <fieldset>
	<legend><b>PROFLE PICTURE</b></legend>
	<img src="image\index.png" alt="" id="cpp" ><br>

  <input type="file" name="fileToUpload" id="fileToUpload"><hr>
  <input type="submit" value="Submit" name="submit">
</fieldset>
</form>
   
  </article>
</section>


</body>
</html>
    
</body>
</html>