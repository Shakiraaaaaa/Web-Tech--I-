<!DOCTYPE html>
<html lang="en">
<head> 
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <link rel = "stylesheet" href = "CSS/styles.css">
</head>
<body>

   <header>
         <?php
         session_start();
            include ('header\header1.php');
            ?>
   </header>

 <section>
<nav>
<?php 



    if (isset($_SESSION['username'])) {
    echo "<h1> Hello ".$_SESSION['username'].", Welcome to ABC.COM"."</h1>";

    }
    else{
    $msg="error";
    header("location:login.php");
    // echo "<script>location.href='login.php'</script>";
    }

    ?>

         <img src="image/cover.png" alt="ABC.COM" id="dash">
             
            <ul>
                <li><a href="dashboard.php"><h4>Dashboard For Buyer</h4></a></li>
                <li><a href="category.php">Category</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="vds.php">View Delivery Status</a></li>
                <li><a href="adc.php">Add Coupon Code</a></li>
                <li><a href="viewprofile.php">View Profile</a></li>
                <li><a href="editprofile.php">Edit Profile</a></li>
                <li><a href="chngprofilepic.php">Change Profile Picture</a></li>
                <li><a href="changepassword.php">Change Password</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
                </nav>

        
            
    </section>

    </body>
    </html>
    <br>

    <footer>
  <?php include 'footer\footer.php';?>
  </footer>

        
    </body>
</html>


