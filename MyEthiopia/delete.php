<?php
include 'connect.php';
$id =$_GET['id'];
 $deletequery="DELETE FROM `users` WHERE `id`=".$id;
  if ($conn->multi_query($deletequery) === TRUE) {
      echo '<script>alert("Successfully Deleted")</script>'; 
        header('Location: admin.php');
      
    } else {
      echo "Error: ". $deletequery . "<br>" . $conn->error;
    }
    $conn->close();

?>
