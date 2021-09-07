<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
// include('header.php');
include("config.php");
session_start();

?>
<head>
<style>

    .dropbtn {
  background: none; color: white; border: none; font-weight: bold; font-size: 24px;
}

.dropbtn:hover {
color: gray;
}

/*.dropdown {
  position: relative;
  display: inline-block;
}
*/
.dropdown-content {
        display: none;
    background: black;
        color: white;    
        z-index: 999;
        top: 100%;
        left: 0;
        font-size: 15px;

  /*display: none;
  position: absolute;
  background-color: black;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;*/
}

.dropdown-content a {
  color: lightgray;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover { color: powderblue;}

.show {display: block;}

.body{
    border: 2px solid black;
  padding: 25px;
  background: url('images/city1.jpg') ;
  background-repeat: no-repeat;
  background-size: 100% 100%;
  text-align: center;
  background-position: center;
}


</style>


 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
 <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
  <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
  <script type="text/javascript" src="js/jquery-func.js"></script>
  </head>

  

  <?php


      // $query=$obj->select("city");




        // $query = "select DISTINCT c_name from city";
        

        // $sql = mysqli_query($conn , $query);


    
         //while ($res= mysqli_fetch_assoc($sql)) {
?>


<body class="body">
  <div class="dropdown">

    <br><br>

<button name="d" onclick="myFunction()" class="dropbtn">SELECT CITY</button>

  <div id="myDropdown" class="dropdown-content">
    
 
    <?php

// $city = $_GET['cname'];

      $sql = $obj->select('city');
      // echo $sql;
  
      foreach($sql as $row){
     // while($row = mysqli_fetch_assoc($query)) { 

  
    
    

        ?>
     <a href="welcome.php?cname=<?php echo $row['c_name'];?>"><?php echo $row['c_name'];?></a>

  <?php 

    // $_SESSION['cityy'] = $rows['c_name']  ;
    } 
    
?>
  </div>
</div>
</body>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

<?php

// $city = $_GET['cname'];

// //echo $city; 


// $sel = "select * from add_movie where city='$city'";
// $res = mysqli_query($conn,$sel);
// if($res)
// {
//     while($row=mysqli_fetch_assoc($res))
//     {
      
//         //echo "Theatre Name=".$row['movie_name'];

//     }

// }

?>