<?php
require 'connect.php';


 if(isset($_POST['login'])) {      
$email = $_POST['Email'];
$password = $_POST['Password'];


   $sqlqryy="SELECT * FROM adminuser WHERE email ='$email' AND  password ='$password'";
        $myresult=mysqli_query($conn,$sqlqryy);
        $counter=0;
        while($rslt=mysqli_fetch_row($myresult)){
            $counter =$counter+1;
            $usern=$rslt[1];
             session_start();
  
    
    
        }
        if($counter==1){
             session_start();
             $_SESSION["loggedin"]=true;
            header('Location: admin.php');
        }
        else
          $message="Invalid Email or Password Please try Again";
            echo "<script>alert('$message');</script>";
        
        $conn->close();
    
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/registerandlogin.css" />
         <title>Admin Login</title>
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
    <div >
         
          <form  method="POST" class="sign-in-form">
            <h2 class="title" >Admin Login</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Email" name="Email" required />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="Password" required />
            </div>
            <a href="forget_admin.php"  style="color: white; ">Forgot Password?</a>
            <input type="submit" value="Login" class="btn solid" name="login" /> 
          </form>

      </div>
    

    <script src="js/registerandlogin.js"></script>
  </body>
</html>
