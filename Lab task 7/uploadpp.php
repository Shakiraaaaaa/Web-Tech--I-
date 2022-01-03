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
   include 'header\header.php';?></header>


<?php
$target_dir = "image/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 400000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
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

  
  
    <fieldset>
<legend><b>PROFILE PICTURE</b></legend> <br>
<br><img src="image/<?php echo($_FILES["fileToUpload"]["name"]) ?>" alt="Profile Picture" width="50" height="50">
</fieldset>

 
</section>



</body>
</html>
    
</body>
</html>