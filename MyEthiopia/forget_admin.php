<?php
require 'connect.php';
 
 if(isset($_POST['forget'])) {      
$email = $_POST['Email'];
$nickname = $_POST['Nickname'];


   $sqlqry="SELECT * FROM adminuser WHERE email ='$email' AND  nickname ='$nickname'";
        $myresult=mysqli_query($conn,$sqlqry);
        $counter=0;
        while($rslt=mysqli_fetch_row($myresult)){
            $counter =$counter+1;
            $password=$rslt[4];
        }
        if($counter==1){
             
          $messages="Your Password is : ".$password;
            echo "<script>alert('$messages');</script>";
        }
        else{
          $message="Invalid Email or Nickname Please try Again";
            echo "<script>alert('$message');</script>";
        }
        
        $conn->close();
    
}
 
if (isset($_POST['login-btn'])) {
  header('Location: admin_login.php');
}
?>

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/registerandlogin.css" />
         <title>Forgot Password</title>
<style type="text/css">
  .wave{
  position: fixed;
  bottom: 0;
  left: 0;
  height: 100%;
  z-index: -1;
}
</style>
  </head>
  
  <body>
    <img class="wave" src="img/wavy.png">
    <br><br><br><br><br><br><br><br>
            <form  method="POST" >
            <h2 class="title" >Forgot Password</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Email" name="Email" required />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Enter Your Nick Name" name="Nickname" required />
            </div>
            <input type="submit" value="Search" class="btn solid" name="forget" /> 
             
          </form>
<form method="POST" class="sign-in-form">
             <input type="submit" value="Login" class="btn solid" name="login-btn" /> 
          </form>
    <script src="js/registerandlogin.js"></script>
  </body>
</html>
