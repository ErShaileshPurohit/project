<?php
include('header.php');
   // include('config.php');
   error_reporting(E_ALL);
ini_set('display_errors', 'On');

if(isset($_REQUEST['delete']))
{
$did=intval($_GET['delete']);
 // $result = $conn->prepare("select * from add_movie where m_id ='$did'");
 // $result->execute();
$result=$obj->select('add_movie',null,"m_id='$did'");
 // while ($row = $result->fetch(PDO::FETCH_ASSOC))
  foreach ($result as $row )
{
    
     $filepath="poster/".$row['image'];
    

    
}
unlink($filepath);

// $sql = "delete from add_movie  WHERE  m_id='$did'";
// echo $sql;
// $conn->exec($sql);
$sql=$obj->delete('add_movie',"m_id='$did'");
if ($sql) {
    // mysqli_close($conn);
    header('Location: movielist.php'); 
    exit;
} else {
    echo "Error deleting record";
}

}

?>
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <style>
      /*
 * Base structure
 */

/* Move down content because we have a fixed navbar that is 50px tall */
body {
  padding-top: 50px;
  color: white;
}


/*
 * Global add-ons
 */

.sub-header {
  padding-bottom: 10px;
  border-bottom: 1px solid #eee;
}

/*
 * Top navigation
 * Hide default border to remove 1px line.
 */
.navbar-fixed-top {
  border: 0;
}

/*
 * Sidebar
 */

/* Hide for mobile, show later */
.sidebar {
  display: none;
}
@media (min-width: 768px) {
  .sidebar {
    position: fixed;
    top: 51px;
    bottom: 0;
    left: 0;
    z-index: 1000;
    display: block;
    padding: 20px;
    overflow-x: hidden;
    overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
    background-color: #f5f5f5;
    border-right: 1px solid #eee;
  }
}

/* Sidebar navigation */
.nav-sidebar {
  margin-right: -21px; /* 20px padding + 1px border */
  margin-bottom: 20px;
  margin-left: -20px;
}
.nav-sidebar > li > a {
  padding-right: 20px;
  padding-left: 20px;
}
.nav-sidebar > .active > a,
.nav-sidebar > .active > a:hover,
.nav-sidebar > .active > a:focus {
  color: #fff;
  background-color: #428bca;
}


/*
 * Main content
 */

.main {
  padding: 20px;
}
@media (min-width: 768px) {
  .main {
    padding-right: 40px;
    padding-left: 40px;
  }
}
.main .page-header {
  margin-top: 0;
}


/*
 * Placeholder dashboard ideas
 */

.placeholders {
  margin-bottom: 30px;
  text-align: center;
}
.placeholders h4 {
  margin-bottom: 0;
}
.placeholder {
  margin-bottom: 20px;
}
.placeholder img {
  display: inline-block;
  border-radius: 50%;
}
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>movie list </title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines!
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body style="color: white;">

      

   
    
         

          <!-- <h2 class="sub-header">List Movie</h2> -->
      <div class="container">
          <div class="table-responsive">
            <table class="table table-dark" >
              <thead style="color: white;">
                <tr>
                   <th>ID</th>
                        <th>Movie_Name</th>
                        <th>Description</th>
                        <th>Language</th>
                        <th>Launch_date</th>
                        <!-- <th>Time</th> -->
                        <th>Screen_no</th>
                         <!-- <th>City</th> -->
                        <!-- <th>Amount</th> -->
                        <th>Image</th>
                        <th>status</th>
                </tr>
              </thead>
              <tbody style="text-decoration-color: white;">
                      
                    <?php

                  
          // $result = $conn->prepare("select * from add_movie");
        // $result->execute();
                    $result=$obj->select('add_movie');
        // while ($data = $result->fetch(PDO::FETCH_ASSOC)){
               foreach($result as $data){
                    
                                       
             $filepath="poster/".$data['image'];
            

            ?>
          
                    <tr>
                        <td><?php echo $data['m_id'];?></td>
                        <td><?php echo $data['movie_name'];?></td>
                        <td><?php echo $data['description'];?></td>
                        <td><?php echo $data['language'];?></td>
                        <td><?php echo $data['lunch_date'];?></td>
                        <!-- <td> echo $data['duration'];?></td> -->
                        <td><?php echo $data['screen_id'];?></td>
                    
                        <!-- <td>< echo $data['amount'];></td> -->
                        <td><?php echo "<img src='$filepath' width='80'/>";?></td>

                        <td><center>
                        <button class="editbtn"><a href="movielist.php?delete=<?php echo $data['m_id'];?>" onclick="return confirm('Do you really want to delete ?')">Delete</a></button></center></td>
                       
                    </tr>
                    <?php
                }
                ?>  
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    </div>

    
  </body>
</html>




