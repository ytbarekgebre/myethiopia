
<?php
include 'connect.php';
$id =$_GET['id'];
 $deletequery="DELETE FROM `adminuser` WHERE `id`=".$id;
  if ($conn->multi_query($deletequery) === TRUE) {
      echo '<script>alert("Admin Successfully Deleted")</script>'; 
        header('Location: admin.php');
      
    } else {
      echo "Error: ". $deletequery . "<br>" . $conn->error;
    }
    $conn->close();

?>
