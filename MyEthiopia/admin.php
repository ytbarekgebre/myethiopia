

<?php
require 'connect.php';
 if(isset($_POST['reload'])) {      
            header('Location: admin.php');
        }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">

</head>
<body>

<div class="mainheader">
    <h1>My Ethiopia | Dashboard</h1>
    <div class="rightcont">
    <img class="enve" src="img/team/ytbarek.jpg" alt="">
    <label style="font-size: 25px;" class="username">Ytbarek</label>
    </div>
</div>
<br> 
<br>
<br>
<br>
<br>
<div >
	<form method="POST">
		<div class="search">
             <span>
             	 <input class="input-field" type="text" placeholder="Search by name"  name="searchbynamevalue" >           
              	<button class="searchbtn" name="searchbyname" type="submit" >Search</button>
               	<button class="searchbtn" ><a href="admin.php">Reload</a></button>
             </span>
             
               
            </div>
    </form>

	<img src="">
</div>
 
 <section>
 	<div class="row">
 	
		<div class="front">
 		<img src="">
 		</div>
	
		<div class="middle">
 			<table class="table-responsive"> 
                   <tr>

                    <th>ID</th>
                  	<th>First Name</th>
                  	<th>Last Name</th>
                  	<th>Email</th>
                  	<th>Password</th>
                  	<th>Action</th>
                  </tr>
<?php
                     
                      $adminlistqry="SELECT * FROM `users`";
                      if(isset($_POST['searchbyname'])){
                       $valueforsearch=$_POST['searchbynamevalue'];
                        $adminlistqry="SELECT * FROM `users` WHERE  `firstname`='$valueforsearch' OR `lastname`='$valueforsearch'";}
    					$adminlistresl= mysqli_query($conn,$adminlistqry);
   						 while($tablerows=mysqli_fetch_row($adminlistresl)){
?>
                  <tr>
                  	<td><?php echo $tablerows[0]; ?> </td>
                  	<td><?php echo $tablerows[1]; ?> </td>
                  	<td><?php echo $tablerows[2]; ?></td>
                  	<td><?php echo $tablerows[3]; ?></td>
                  	<td><?php echo $tablerows[4]; ?></td>
                  	<td><a  class="btn btn-danger" href="delete.php?id=<?php echo $tablerows[0];?>">Delete</a></td>
                  </tr>
                      
                  <?php }
                  
               ?>
              </table>
                </div>
            </div>
           

<div class="left">
 		
 	</div>
 </section>
 



 <br><br><br>
 <h1>Admin List</h1>
 



 <section>
  <div class="row">
  
    <div class="front">
    <img src="">
    </div>
  
    <div class="middle">
      <table class="table-responsive"> 
                   <tr>

                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Action</th>
                  </tr>
<?php
                     
                      $adminlistqry="SELECT * FROM `adminuser`";
                      if(isset($_POST['searchbyname'])){
                       $valueforsearch=$_POST['searchbynamevalue'];
                        $adminlistqry="SELECT * FROM `users` WHERE  `firstname`='$valueforsearch' OR `lastname`='$valueforsearch'";}
              $adminlistresl= mysqli_query($conn,$adminlistqry);
               while($tablerows=mysqli_fetch_row($adminlistresl)){
?>
                  <tr>
                    <td><?php echo $tablerows[0]; ?> </td>
                    <td><?php echo $tablerows[1]; ?> </td>
                    <td><?php echo $tablerows[2]; ?></td>
                    <td><?php echo $tablerows[3]; ?></td>
                    <td><?php echo $tablerows[4]; ?></td>
                    <td><a  class="btn btn-danger" href="admindelete.php?id=<?php echo $tablerows[0];?>">Delete</a></td>
                  </tr>
                      
                  <?php }
                  
               ?>
              </table>
                </div>
            </div>
           

<div class="left">
    
  </div>
 </section>
   
</body>
</html>