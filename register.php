<?php
$con= mysqli_connect("localhost", "root", "", "social"); // Connection to database
if(mysqli_connect_errno()) {
    echo "Fail to connect: ". mysqli_connect_errno();
}
//Declaring variables to prevent errors
$fname =""; //First name
$lname=""; // Last name
$em = "";
$em2 = ""; // confirming email
$password ="";
$password2 = ""; // confirming password
$date = ""; // signup date
$error_array =""; //Holds error message

if(isset($_POST['register_button'])) {

    //First name
    $fname = strip_tags($_POST['reg_fname']); //remove html tags
    $fname = str_replace(' ', '', $fname); //remove spaces
    $fname = ucfirst(strtolower($fname)); //upper case first letter

     //last name
     $lname = strip_tags($_POST['reg_lname']); //remove html tags
     $lname = str_replace(' ', '', $lname); //remove spaces
     $lname = ucfirst(strtolower($lname)); //upper case first letter

      //email 
    $em = strip_tags($_POST['reg_email']); //remove html tags
    $em = str_replace(' ', '', $em); //remove spaces
    $em = ucfirst(strtolower($em)); //upper case first letter

     //confirm email 
    $em2 = strip_tags($_POST['reg_email2']); //remove html tags
    $em2 = str_replace(' ', '', $em); //remove spaces
    $em2 = ucfirst(strtolower($em)); //upper case first letter

    //password
    $password = strip_tags($_POST['reg_password']);
    $password2 = strip_tags($_POST['reg_password2']);

    //date
    $date = date("Y-m-d"); // current date

    if ($em == $em2) {
        if(filter_var($em, FILTER_VALIDATE_EMAIL)) {

            $em = filter_var($em, FILTER_VALIDATE_EMAIL);
        }
            else {
                echo "invalid format";
            }
    }    
    else {
        echo "Emails don't match";
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Swirlfeed</title>
</head>
<body>
   <form action="register.php" method="POST">
       <input type="text" name="reg_fname" placeholder="First name" required>
       <br>
       <input type="text" name="reg_lname" placeholder="Last name" required>
       <br>
       <input type="text" name="reg_email" placeholder="Email" required>
       <br>
       <input type="text" name="reg_email2" placeholder="Confirm Email" required>
       <br>
       <input type="text" name="reg_password" placeholder="Password" required>
       <br>
       <input type="text" name="reg_password2" placeholder="Confirm password" required>
       <br>
       <input type="text" name="reg_fname" placeholder="Firstname" required>
       <br>
       <input type="submit" name="register_button" value="Register">
   </form>
</body>
</html>