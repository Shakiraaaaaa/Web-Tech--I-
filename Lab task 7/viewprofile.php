<!DOCTYPE html>
<html>
<head>
<title>View Profile</title>
<link rel = "stylesheet" href = "CSS/styles.css">
</head>
<body>





<header>

	<?php
	session_start();
	 include 'header\header1.php';

     $user="Manager";
     $salary=40000;
	 $name="Dip";
     $email="dipahmed@gmail.com";
	 $gender="Male";
     
	 $dob="1/7/1998";
     



	 ?></header>

   <h1>View Profile</h1>
   <img src="image/cover.png" alt="">



<section>
<nav>
   <?php 





if (isset($_SESSION['username'])) {
  echo "<hr>
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

  

    <?php 



if (isset($_SESSION['username'])) {
    echo " <fieldset><legend><b> View Profile </legend>
    User: ".$user."<hr>
    <br>Salary:".$salary."<hr>
  <br>Name:".$name."<hr>
  <br>Email: ".$email."<hr>
  <br>Gender: ".$gender."<hr>
  <br>Date Of Birth: ".$dob."<hr> 
  
  <br><a href='editprofile.php'>Edit Profile</a>
  <img src='image\index.png' alt='Profile Picture' id='vp'>

  </div>
  </b>

  </fieldset>";


}

 ?>

   
  </article>
</section>

</body>
</html>
