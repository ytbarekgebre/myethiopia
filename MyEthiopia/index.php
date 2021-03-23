<?php
require 'connect.php';
   session_start();
    $_SESSION["id"] = 0;

 if(isset($_POST['login'])) {      
$email = $_POST['Email'];
$password = $_POST['Password'];


   $sqlqry="SELECT * FROM users WHERE email ='$email' AND  password ='$password'";
        $myresult=mysqli_query($conn,$sqlqry);
        $counter=0;
        while($rslt=mysqli_fetch_row($myresult)){
            $counter =$counter+1;
            $usern=$rslt[1];
            session_start();
   $_SESSION["id"] = 1;

    
        }
        if($counter==1){
             session_start();
             $_SESSION["loggedin"]=true;
            header('Location: main_page.php');
        }
        else
          $message="Invalid Email or Password Please try Again";
            echo "<script>alert('$message');</script>";
        
        $conn->close();
    
}

if(isset($_POST['Register'])) {  
$firstname = $_POST['FirstName'];
$lastname = $_POST['LastName'];
$email = $_POST['Email'];
$password = $_POST['Password'];
$password2 = $_POST['Password2'];
$nickname = $_POST['Nickname'];

 if ($password===$password2) {
   $sql = "INSERT INTO users (firstname,lastname,email,password,nickname)
    VALUES ('$firstname','$lastname', '$email', '$password','$nickname');";

    if ($conn->multi_query($sql) === TRUE) {
      echo '<script>alert("Registered successfully")</script>'; 
      
    } else {
      echo "Error: ". $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
else 
   echo '<script>alert("Password Doesn\'t Match please Try again")</script>'; 
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
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
    
          <form  method="POST" class="sign-in-form">
            <h2 class="title" >Login</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Email" name="Email" required />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="Password" required />
            </div>
            <a href="forget.php"  style="color: white; ">Forgot Password?</a>
            <input type="submit" value="Login" class="btn solid" name="login" /> 
          </form>

          <form method="POST" class="sign-up-form">
            <br> <br> <br> <br><br> <br>
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
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h2>
            If You Don't Have an Account Please register here</h2><br>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h2> If You Already Have An Account! </h2><br>
            <button class="btn transparent" id="sign-in-btn">
              Login
            </button><br>
          </div>
        
        </div>
      </div>
    </div>

    <script src="js/registerandlogin.js"></script>
  </body>
</html>
