<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    
    <link rel = "stylesheet" href = "CSS/styles.css">
    <style>
    
    </style>
</head>
<body>



        <header>

        <?php
        session_start();
        include 'header\header1.php';
        $user="Manager";
        $salary=40000;
        $name="Shakira";
        $email="Shakira@gmail.com";
        $gender="female";
        $dob="1/7/1999";
        $nation= "Bangladeshi";

        $checkmale=$checkfemale=$checkother="";

   if ($gender=="Male")
   {

    $checkmale="checked";

   }
   else if($gender=="Female")
   {

     $checkfemale="checked";

   }
   else
   {
    $checkother="checked";
   }
        



  ?></header>

<section>
<nav>

<h1>Edit Profile</h1>
<img src="image/logo.png" alt="Cover_photo">
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
    header("location:loginpage.php");
    // echo "<script>location.href='login.php'</script>";
  }

 ?>

  
<article>
    

    <?php 



if (isset($_SESSION['username'])) {
    echo " <fieldset><legend><b> Edit Profile </legend>
    
   
    <br>User:<input type='text' name='name' value=".$user."><hr>
  <br>
  <br>Name::<input type='text' name='name' value=".$name."><hr>

  <br>Email:<input type='text' name='name' value=".$email."><hr>
  <br>
  Gender:
  <input type='radio' name='gender' value='male' ".$checkmale.">Male
  <input type='radio' name='gender'  value='female' ".$checkfemale.">Female
  <input type='radio' name='gender'  value='female'".$checkother.">Other
  <hr>
  <br><br>Date of birth:<input type='date' name='name' value=".$dob."><hr>
  <br>

  <br>Nationality:<input type='text' name='name' value=".$nation."><hr>
  <br>
  
  <br><a href='chngprofilepic.php'>Change Profile Picture</a>
  <img src='image\index.png' alt='Profile Picture' id='ep'>

  
  <br>


  </div>
  </b>

 

  </fieldset>";


}

 ?>

   
  </article>
</section>

<h2><input type="button" value="Update Profile"></h2>
    
</body>
</html>