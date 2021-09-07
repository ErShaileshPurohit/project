<?php

  include 'config.php';
  include 'header.php';

  $tid= $_GET['id'];

  // $del = "DELETE from add_theatre WHERE theatre_id = '$tid'";


  $stmt=$obj->delete('add_theatre',"theatre_id='$tid'");
  //$result = mysqli_query($conn, $del);

  // $stmt = $conn->prepare($del);
  if($stmt)
   {
        header("Location: vpdo.php");
   }
   else
   {
        echo "Error";
   }
?>