<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
    <link rel = "stylesheet" href = "CSS/styles.css">
</head>
<body>


        <?php 
              if (empty($_SESSION['username'])) {

                 echo "<div><a href='Home.php'> Home</a> |
               <a href='login.php'>Log in</a> |
            <a href='registration.php'>Registration</a></div>";
                            
  }
           else{
             $msg="error";
             echo "<div> Logged in as <a href='viewprofile.php'>".$_SESSION['username']."</a> | <a href='logout.php'>Log Out</a></div>";
                     }
                    
        ?>


</body>
</html>