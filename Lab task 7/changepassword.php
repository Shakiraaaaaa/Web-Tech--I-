<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
    <link rel = "stylesheet" href = "CSS/styles.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
  <?php
  session_start();

   include 'header\header1.php';?>
</header>

<h1>Change Password</h1>


    <?php
$cpassErr = $npassErr = $rpassErr = "";
$cpass = $npass = $rpass = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {



  if(empty($_POST["cpassword"]))
  {
    $cpassErr="Current Password is required";
    $cpass="";
  }
  else
  {
   $cpass =$_POST["cpassword"];
  }

  if(empty($_POST["npassword"]))
  {
    $npassErr="Enter The New Password";
    $npass="";
  }

  else 
  {
    $npass=$_POST["npassword"];
    if(strcmp($cpass, $npass)==0)
    {
      $npassErr="New Password should not be same as the Current Password";
      $npass="";

    }
  }

  if(empty($_POST["rpassword"]))
  {
    $rpassErr="Retype the New Password";
    $rpass="";
  }
  else
  {
     $rpass=$_POST["rpassword"];
    if(!strcmp($npass, $rpass)==0)
    {
      $rpassErr="New Password & Retyped Password Dosen't Match";
      $rpass="";
    

    }

  }
  
}


  ?>


<section>

      <?php 



if (isset($_SESSION['username'])) {
  echo "  
  <nav>
    <hr>
    <ul>

        <li><a href='dashboard.php'>Dashboard For Buyer</a></li>
        <li><a href='category.php'>Category</a></li>
        <li><a href='products.php'>Products</a></li>
        <li><a href='vdstatus.php'>View Delivery Status</a></li>
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
    header("location:loginpage.php");
    
  }

 ?>



  
  <article>
  <br>



  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<fieldset>
  <legend><h1>CHANGE PASSWORD</h1></legend>
   <b> Current Password: </b><input type="password" name="cpassword" value="<?php echo $cpass;?>">
  <span class="error">*<?php echo $cpassErr;?></span>
  <br><br>
  <b style="color: green;">New Password: </b><input type="password" name="npassword" value="<?php echo $npass;?>">
  <span class="error">*<?php echo $npassErr;?></span>
  <br><br>
  <b style="color: red;">Retype New Password: </b><input type="password" name="rpassword" value="<?php echo $rpass;?>">
  <span class="error">*<?php echo $rpassErr;?></span>
  <br> <br>

  <button class="buy-now-button">Submit</button>
</fieldset>


  </article>
</section>





</body>
</html>

    
</body>
</html>