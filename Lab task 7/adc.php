<!DOCTYPE html>
<html lang="en">
<head>

<style>
    img{
        width:95px;
    }
    h1{
        font-family:verdana;    
        color :indigo;
    text-align: center;  
    background-color:lavender;
    }
    h3{
        font-family:verdana; 
    }
    
    </style>
    
    <title>Document</title>
</head>
<body>


<header>
<?php 

session_start();

 ?>
 </header>

 <?php 



    if (isset($_SESSION['username'])) {
    echo "<h1> Hello ".$_SESSION['username'].", Welcome to COUPON CODE Page"."</h1>";

    }
    else{
    $msg="error";
    header("location:login.php");
    // echo "<script>location.href='login.php'</script>";
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



<img src="products/1.png" alt="" ;>
<h3>Add coupon for product 1</h3>
<input type="number" name="first" id="first">
<br> <br>

<img src="products/2.png" alt="" ;>
<h3>Add coupon for product 2</h3>
<input type="number" name="second" id="second">
<br> <br>

<img src="products/3.png" alt="" ;>
<h3>Add coupon for product 3</h3>
<input type="number" name="third" id="third">
<br> <br>

<input type="button" value="Submit">



    
</body>
</html>