<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        li{
            color :indigo;
        }

        h1{
            color :indigo;
            text-align:center;
            background-color:lavender;
           
        }
    </style>

    <link rel="stylesheet" href="style.css">
  
</head>
<body>

<header>
<?php 

session_start();

 ?>
 </header>

<section>

<?php 



    if (isset($_SESSION['username'])) {
    echo "<h1> Hello ".$_SESSION['username'].", This is product Page"."</h1>";

    }
    else{
    $msg="error";
    header("location:login.php");
    // echo "<script>location.href='login.php'</script>";
    }

    ?>


  <?php 

if (isset($_SESSION['username'])) {
  echo "  
  <nav>
    <hr>
    <ul>

        <li><a href='dashboard.php'>Go to Dashboard For Buyer</a></li>
        <li><a href='category.php'>Category</a></li>
        <li><a href='products.php'>Products</a></li>
        <li><a href='logout.php'>Log Out</a></li>

    </ul>
  </nav>";


}
else{
    $msg="error";
    header("location:login.php");
   
  }

 ?>




<h4>Search Products: <input type="text" name="" id=""></h4>
<button class="buy-now-button">Submit</button>


 
              
              <ul>
                  <li> <img src="products/1.png" alt=""><h2>Mobile Phone</h2></li>
                  <li> <img src="products/2.png" alt=""><h2>Laptop</h2></li>
                  <li> <img src="products/3.png" alt=""><h2>Smart Tv</h2></li>
              </ul>
              
            


<h4>Add Products: <button class="buy-now-button">ADD</button></h4>
<h4>Delete Products: <button class="buy-now-button">DELETE</button></h4>

              
          
        
    
</body>
</html>