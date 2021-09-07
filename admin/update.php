<?php
include 'config.php'; 
  error_reporting(E_ALL);
   ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


   $tid = $_POST['id'];
   $tname = $_POST['tname'];
   $city =  $_POST['tcity'];

   // $insert_data = array(  
   //              'theatre_name',
   //              'city' 

   //                   ); 
   // // $update = "UPDATE add_theatre SET theatre_name ='$tname', city = '$city' WHERE theatre_id = '$tid'";
   // $update=$obj->update('add_theatre',$insert_data,"theatre_id = '$tid'");
   // echo $update;



    // if(isset($_POST["edit"]))  
  
      $update_data = array(  
         'theatre_name'=>  $obj->escapeString($_POST['tname']),
         'city' => $obj->escapeString($_POST['tcity'])
     );  
      $ab= $obj->update("add_theatre", $update_data,"theatre_id = '$tid'");
      if($ab)
      {  
           header("location:vpdo.php");  
      }  
  


?>

<?php
   // if(mysqli_query($conn, $update))
   // {
   //    header("Location: view.php");  
   // }
   // else
   // {
   //        header("Location: editthe.php");
   // }
   // $stmt = $conn->prepare($update);
   // $stmt->execute();
  //  if ($update) {
  //    header("Location: vpdo.php");
  //  } 
  // else {
  //   header("Location: editthe.php");
  //  }?>