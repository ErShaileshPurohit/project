<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
  include 'header.php';
  // include 'config.php'; 
  if(isset($_POST['submit'])) 
  {
    $name = $_POST['tname'];
    $city = $_POST['tcity'];
    
        $insert_data = array(  
                'theatre_name' => $obj->escapeString($_POST['tname']),
                'city' => $obj->escapeString($_POST['tcity'])

                     ); 

       // $ins = "insert into add_theatre (theatre_name, city) values ('$name', '$city')";
    $ins=$obj->insert('add_theatre',$insert_data);
           if($ins) {
              // header("Location: vpdo.php");?>
            <h4 style="color: white;"><?php echo"Theatre Added Sucessfully";?></h4>
           <?php }
           else { 
              echo '<script>alert("Not Added Theatre")</script>';
           }
    
}
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
   <script type="text/javascript">
      function formValidation() {
       var name = document.forms["add"]["tname"];
       var tcity = document.forms["add"]["tcity"];

       if(name.value == "") {
            document.getElementById("etname").innerHTML = "Please enter theatre name";
            return false;
     }
     else {
            document.getElementById("etname").innerHTML = "";
     }
    
     if(tcity.value == "") {
      document.getElementById("ecity").innerHTML = "Please select city";
        return false;
     }
     else {
      document.getElementById("ecity").innerHTML = "";
     }
     
   }
   </script>
   <title></title>
</head>
<body>
 <div class="d-flex justify-content-center" style="padding-top: 85px;">
    
   <div class="card" style="width: 20rem;">
   <h5 class="card-header">Add Theatre</h5>
   <form name="add" method="POST" onSubmit="return formValidation()">
   <ul class="list-group list-group-flush">
    <li class="list-group-item">
      <input type="text" name="tname" placeholder="Enter Theatre Name"><br>
      <span id="etname" style="color:red;"></span>
    </li>
    
    
    <li class="list-group-item">
      <select name="tcity">
            <option value="">Select City</option>
                 <?php 
                    // $stmt1 = $conn->prepare(
                                // "SELECT * FROM `city`");
                           // $stmt1->execute();
                 $stmt1= $obj->select('city');
                           // $users = $stmt1->fetchAll();
                 foreach($stmt1 as $user)
                 // $users = mysqli_fetch_array($stmt1);
                           // foreach($users as $user) 
                        {  
                 ?>
                 <option value="<?php echo $user['c_id'];?>"><?php echo $user['c_name'];?></option>
              <?php } ?>
                
             </select><br>
          <span id="ecity" style="color:red;"></span>
    </li>
    <li class="list-group-item">
       <input type="submit" name="submit" value="Add" class="btn btn-primary">
       <a class="btn btn-primary" href="vpdo.php">View Theatres</a>

    </li>
  </ul>
  </form>
</div>
</div>
</body>
</html>