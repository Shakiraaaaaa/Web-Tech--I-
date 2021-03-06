<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <link rel = "stylesheet" href = "style.css">


</head>

<h2 align='center' >ABC.COM</h2>
<body>  

<?php include 'header\header.php';?>




<?php
    $flag=1;
    $nameErr = $emailErr = $genderErr = $dobErr = $name = $email = $dob = $gender = "";
    $username = $password = "";
    $userNameErr = $passErr = $confirmpassErr = $confirmpass = "";
    $message = '';  
    $error = ''; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    $flag=0;
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-.' ]*$/",$name)) {
      $nameErr = "Only letters white space, period & dash allowed";
      $name ="";
      $flag=0;
    }
    else if (str_word_count($name)<2) {
      $nameErr = "At least two words needed";
      $name ="";
      $flag=0;
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    $flag=0;
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $email ="";
      $flag=0;
    }
  }

  if (empty($_POST["birthday"])) {
    $dobErr = "DOB is required";
    $flag=0;
  } else {
    $dob = test_input($_POST["birthday"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
    $flag=0;
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["username"])) {
    $userNameErr = "User Name is required";
    $flag=0;
  } else {
    $username = test_input($_POST["username"]);
    if (!preg_match("/^[a-zA-Z-._]*$/",$username)) {
      $userNameErr = "Only alpha numeric characters, period, dash or underscore allowed";
      $username ="";
      $flag=0;
    }
    else if (strlen($username)<2) {
      $userNameErr = "At least two charecters needed";
      $username ="";
      $flag=0;
    }
  }
  
  if (empty($_POST["Password"])) {
    $passErr = "Password is required";
    $flag=0;
  } else {
    $password = test_input($_POST["Password"]);
    if (strlen($password)<5) {
      $passErr = "Password must be 5 charecters";
      $password ="";
      $flag=0;
    }
    else if (!preg_match("/[@,#,$,%]/",$password)) {
      $passErr = "Password must contain at least one of the special characters (@, #, $,%)";
      $password ="";
      $flag=0;
    }
  }
  if (empty($_POST["confirmpass"])) {
    $confirmpassErr = "Retype The Current Password";
    $flag=0;
  } else {
    $confirmpass = test_input($_POST["confirmpass"]);
    if (strcmp($password, $confirmpass)==1) {
      $confirmpassErr = "Password & Retyped Password Dosen't Match";
      $confirmpass ="";
      $flag=0;
    }
  } 
 if ($flag==1) {
 	if(isset($_POST["submit"]))  
    {
 	if(file_exists('data.json'))
 		{
 			$current_data = file_get_contents('data.json');  
            $array_data = json_decode($current_data, true);  
            $extra = array(  
                 'name'  =>  $_POST["name"],
                 'email' =>  $_POST["email"],
                 'username'=> $_POST["username"],
                 'password' => $_POST["confirmpass"],  
                 'gender' => $_POST["gender"],  
                 'dateOfBirth' => $_POST["birthday"]  
                );  
            $array_data[] = $extra;  
            $final_data = json_encode($array_data);  
            if(file_put_contents('data.json', $final_data))  
            {  
                 $message = "<p>Data Recorded Successfully</p>";  
            }  
        }  
        else  
        {  
           $error = 'JSON File not exits';  
        }  
    }
 }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

  <br>

<!-- 
      <img src="image/cover.png" alt="ABC.COM"> -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <span>
    <fieldset>
        <legend id="registration"><h3> REGISTRATION:</h3></legend>  
        Name:    <input type="text" name="name">
        <span class="error">* <?php echo $nameErr;?></span>
        <br> <br>
        E-mail: <input type="text" name="email">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
        User Name: <input type="text" name="username">
        <span class="error">* <?php echo $userNameErr;?></span>
        <br><br>
        Password: <input type="Password" name="Password">
        <span class="error">* <?php echo $passErr;?></span>
        <br><br>
        Confirm Password: <input type="Password" name="confirmpass">
        <span class="error">* <?php echo $confirmpassErr;?></span>
        <br><br>
        <fieldset>
        <legend>Gender</legend>
        Gender:
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="other">Other
        <span class="error">* <?php echo $genderErr;?></span>
        </fieldset>
       <br>
  <fieldset>
        <legend>Date Of Birth</legend>
        <input type="date" name="birthday">
        <span class="error">* <?php echo $dobErr;?></span>
        <br></fieldset> <br>
        <!-- <input type="submit" name="submit" value="Submit"> <input type="reset" value="Reset">  -->
        <button class="buy-now-button" type="submit" name="submit" value="Submit">Submit</button>
   </fieldset>

    
    </span>
        
</form>
<?php
echo $error;
echo "<br>";
echo $message;
echo "<br>";
?>
</body>
</html>