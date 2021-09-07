
<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
include 'db.php';
$city=$_GET['cname'];

?>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */


// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
if(isset($_REQUEST["term"])){
    // Prepare a select statement
    $sql = "SELECT * FROM add_movie WHERE movie_name LIKE ?";
    
    if($stmt = mysqli_prepare($conn, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        
        // Set parameters
        $param_term = $_REQUEST["term"] . '%';
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            
            // Check number of rows in the result set
            if(mysqli_num_rows($result) > 0){
                // Fetch result rows as an associative array
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    // $id=$row['id'];
                   // $q="select * from add_movie where id='$id'";
                   // $s=mysqli_query($con,$q);
                   // while($row = mysqli_fetch_array($s))
                    // $city=$_GET['cname'];
                   { 

                    ?>
 <?php 
// $q="select c_name from city where c_id=$row['city']";
// $sql=mysqli_query($conn,$q);

// $city=$_GET['cname']; 
// echo $city;

?>

                    <a href="movie.php?cname=<?php echo $city; ?>& movie_name=<?php echo $row['movie_name'];?>">
             <?php       echo "<p>" . $row["movie_name"] . "</p>";?></a>
                <?php }
                }
            } else{
                echo "<p>No matches found</p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
}
 
// close connection
// mysqli_close($link);
?>