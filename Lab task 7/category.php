<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel = "stylesheet" href = "CSS/styles.css">
    
 
</head>
<body>

<header>
  <?php
  session_start();

   include 'header\header1.php';?>
</header>

<h1>Category</h1>
<img  id="cat" src="image/cover.png" alt="">

<ul>
              
                <li><a href="products.php">Laptop</a></li>
                <li><a href="products.php">Mobile Phone</a></li>
                <li><a href="products.php">Smart Tv</a></li>
                <li><a href="products.php">Air Conditionar</a></li>
                <li><a href="products.php">Washing Machine</a></li>

                
            
            </ul>

            <h3><a href='dashboard.php'>Go to Dashboard</a>


</ul>
    
</body>
</html>