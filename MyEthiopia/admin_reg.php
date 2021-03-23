<?php
require 'connect.php';
 
if(isset($_POST['Register'])) {  
$firstname = $_POST['FirstName'];
$lastname = $_POST['LastName'];
$email = $_POST['Email'];
$password = $_POST['Password'];
$password2 = $_POST['Password2'];
$nickname = $_POST['Nickname'];

 if ($password===$password2) {
   $sql = "INSERT INTO adminuser (firstname,lastname,email,password,nickname)
    VALUES ('$firstname','$lastname', '$email', '$password','$nickname');";

    if ($conn->multi_query($sql) === TRUE) {
      echo '<script>alert("New Admin is being Registered Please wait for Approval...")</script>'; 
      
    } else {
      echo "Error: ". $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
else 
   echo '<script>alert("Password Doesn\'t Match please Try again")</script>'; 
 }

 if(isset($_POST['Login'])) {
header('Location: admin_login.php');
 }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/registerandlogin.css" />
         <title>Login</title>

  </head>
  <body>
    <div >
          <form method="POST" >
            
            <h2 class="title">Sign up here</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="First name" name="FirstName" required />
            </div>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Last name" name="LastName" required />
            </div>

            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="Email" required />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="Password" required />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Re type Password" name="Password2" required />
            </div>
             <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="text" placeholder="Nickname" name="Nickname" required />
            </div>
            <input type="submit" class="btn" value="Register" name="Register" />
           
          </form>
       <form method="POST" class="sign-in-form">
             <input type="submit" value="Login" class="btn solid" name="Login" /> 
          </form>
    </div>

    <script src="js/registerandlogin.js"></script>
  </body>
</html>
