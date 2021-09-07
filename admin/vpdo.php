<?php 
  ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'header.php';
// include 'config.php';
//include 'Database.php';
?>
<!DOCTYPE html>
<html>
<head></head>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script> -->


 <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
 <link rel="stylesheet" 
 href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
 <script type="text/javascript" 
 src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
 <script type="text/javascript" 
 src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 
<script type="text/javascript">
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>

<body>
<h1>Theatre Data</h1>
 <table id="myTable">
    <thead>
        <tr class="header">
            <th scope="col">Sr no</th>
            <th scope="col">Theather Name</th>
            <th scope="col">City</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
                           
                           $a=1;
                           // $stmt = $conn->prepare("SELECT add_theatre.theatre_id, add_theatre.theatre_name, city.c_name FROM add_theatre INNER JOIN city ON add_theatre.city = city.c_id");
                           // $stmt->execute();
                           // $stmt=$obj->select('add_theatre,city','INNER JOIN','add_theatre.city = city.c_id');
                           $stmt=$obj->select('add_theatre','city on add_theatre.city = city.c_id');

                           // $users = $stmt->fetchAll();
                           // $users=mysqli_fetch_array($stmt);
                           foreach($stmt as $users) 
                        {  
        ?>
        <tr>
            <td><?php echo $users['theatre_id'];?></td>
            <td><?php echo $users['theatre_name'];?></td>
            <td><?php echo $users['c_name'];?></td>
            <td>
                <button type="button" class="btn btn-success"><a href= "editthe.php?id=<?php echo $users["theatre_id"]; ?>" style="text-decoration:none; color:white">Update</a></button>
                <button type="button" class="btn btn-danger"><a href= "deletethe.php?id=<?php echo $users["theatre_id"]; ?>" style="text-decoration:none; color:white" onclick="return confirm('Do you really want to delete ?')">Delete</a></button>
            </td>
        </tr>
        <?php } ?>
    </tbody>
 </table>
 </body>
 </html>


