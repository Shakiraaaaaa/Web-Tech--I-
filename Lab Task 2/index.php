<!DOCTYPE HTML>
<html>
<head>
<style>
.error {
    color:red;
}


</style>
</head>
<body>

<?php

$degreeErr = $bloodErr = $birthErr = $nameErr = $emailErr = $genderErr = $websiteErr = "";
$BloodGroup = $birthDate = $birthMonth = $birthYear = $name = $email = $gender = $comment = $website = "";
$i=1;
$Degree1 = $Degree2 = $Degree3 = $Degree4="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {

       $name = test_input($_POST["name"]);

      if (!preg_match("/^[a-zA-Z-. ]*$/",$name)) {
         $nameErr = "Only letters and white space are allowed";
       }
    else  {
             if(str_word_count($name)<2)
          {
           $nameErr = "Name must be contains at least two words ";

          }
      else {
        $name = test_input($_POST["name"]);
      }
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  }
   else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["birthDate"]) || empty($_POST["birthMonth"]) || empty($_POST["birthYear"])) {
    $birthErr = "Date,Month and Year is required";
  } else {

    $birthDate=test_input($_POST["birthDate"]);
    $birthMonth=test_input($_POST["birthMonth"]);
    $birthYear=test_input($_POST["birthYear"]);

        if($birthDate>31 || $birthDate<1)
          {
              $birthErr=" Input a Date between 1 to 31";
          }
           else {
             if($birthMonth>12 || $birthMonth<1)
              {
                  $birthErr=" Input a Month between 1 to 12";
              }
            else 
                {
              if($birthYear>1998 || $birthYear<1953)
                  {
                    $birthErr=" Input a Year between 1953 to 1998";
                  }
                  else {
                    $birthErr=" ";
                  }
              }
          }
    }
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if(empty($_POST["BloodGroup"]))
  {
    $bloodErr="Blood group is required";
  }
  else {
    $BloodGroup= test_input($_POST["BloodGroup"]);

  }
  if(empty($_POST["SSC"]) && empty($_POST["HSC"]) && empty($_POST["BSc"]) && empty($_POST["MSc"]))
  {
    $degreeErr="Degree is required";
  }
  else {


  if(!empty($_POST["SSC"]))
  {
    $i=$i+1;
    $Degree1=test_input($_POST["SSC"]);
  }

  if(!empty($_POST["HSC"]))
  {
    $i=$i+1;
      $Degree2=test_input($_POST["HSC"]);
  }

  if(!empty($_POST["BSc"]))
  {
    $i=$i+1;
    $Degree3=test_input($_POST["BSc"]);
  }

  if(!empty($_POST["MSc"]))
  {
    $i=$i+1;
    $Degree4=test_input($_POST["MSc"]);
  }

  if($i<3)
  {
    $degreeErr="At least two degree is required";
  }
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<form style="border:2px; border-style:solid; border-color:black; padding: 10px;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <fieldset>
            <legend><b>NAME</b></legend>
            <input type="text" name="name" value="<?php echo $name;?>">
            <span class="error">* <?php echo $nameErr;?></span>
    </fieldset>
    <br>
    <fieldset>
    <legend><b>EMAIL</b></legend>
        <input type="text" name="email" value="<?php echo $email;?>">
    <span class="error">* <?php echo $emailErr;?></span>
    </fieldset>
    <br>
  
    <fieldset>
            <legend><b>DATE OF BIRTH</b></legend>
        <input type="text" size="1" placeholder="dd" name="birthDate" value="<?php echo $birthDate; ?>"> /
        <input type="text" size="1" placeholder="mm" name="birthMonth" value="<?php echo $birthMonth; ?>"> /
        <input type="text" size="2" placeholder="yyyy" name="birthYear" value="<?php echo $birthYear; ?>">
        <span class="error">* <?php echo $birthErr;?></span>
    </fieldset>
    <br>
   
    <fieldset>
    
            <legend><b>GENDER</b></legend>
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
        <span class="error">* <?php echo $genderErr;?></span>
    </fieldset>
    <br>
    
 
   <fieldset>
   <legend><b>DEGREE</b></legend>
        <input type="checkbox"  name="SSC" value="SSC">
        <label for="SSC">SSC</label>
        <input type="checkbox" name="HSC" value="HSC">
        <label for="HSC">HSC</label>
        <input type="checkbox" name="BSc" value="BSc">
        <label for="Bsc"> BSc</label>
        <input type="checkbox" name="MSc" value="MSc">
        <label for="Msc"> MSc</label>
        <span class="error">* <?php echo $degreeErr;?></span>
   </fieldset>
    <br>


  <fieldset>
        <legend><b>BLOOD GROUP</b></legend> 
        <select name="BloodGroup" required>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="A-">B+</option>
        <option value="A-">B-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
        </select>
        <span class="error">* <?php echo $bloodErr;?></span>
  </fieldset>
   <br>
  <input type="submit" name="submit" value="Submit">
</form>

  <?php
        echo "<b> You Submitted :</b>";
        echo"<br>";
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";

        echo $gender;
        echo "<br>";
        echo $birthDate;
        echo "/";
        echo $birthMonth;
        echo "/";
        echo $birthYear;
        echo "<br>";
        echo $Degree1;
        echo "<br>";
        echo $Degree2;
        echo "<br>";
        echo $Degree3;
        echo "<br>";
        echo $BloodGroup;
        echo "<br>";
       
    ?>
  </body>
</html>

 