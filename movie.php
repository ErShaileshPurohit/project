<?php
session_start();

include('config.php');
error_reporting(E_ALL);
ini_set('display_errors', 'On');
//echo "string";
// include("config.php");

if(isset($_SESSION['login']))

{

include 'db.php';
include('header.php');?>
<!DOCTYPE html>
<html>
<head>
  <!-- <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery-func.js"></script> -->
<!--[if IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script> -->
    

  <style>




.xyz{

  float: right; width: 70%; margin-top: 10px; margin-left: 50px;


}
/* Clear floats after the columns */

</style>

    <meta charset="utf-8">
    <title></title>
</head>
<body>


      <!-- <hr class="my-4"> -->

 <div class="container my-3"> 
          <div class="row "> 
   
        <?php
        $movie=$_GET['movie_name'];
        $city=$_GET['cname'];

        // $query = "select * from add_movie inner join city on add_movie.city=city.c_id where city.c_name='$city'";


    $query=$obj->select1('city','add_theatre','city.c_id=add_theatre.city','add_movie','add_theatre.theatre_id=add_movie.t_id',"city.c_name='$city' AND add_movie.movie_name='$movie'");





       



// $query="SELECT * FROM city INNER JOIN add_theatre ON city.c_id=add_theatre.city INNER JOIN add_movie ON add_theatre.theatre_id=add_movie.t_id WHERE city.c_name='$city'";
        
      // $query = "select movie_name,image,description from add_movie ,city where add_movie.city=city.c_id";     
    // $sql = mysqli_query($conn , $query);
    //   while ($res= mysqli_fetch_array($sql)) 


    foreach($query as $res){


            $path="admin/poster/".$res['image'];

$city=$_GET['cname'];
?>        
             



              <div class="col-md-3 card border-0 bg-transparent"><a href="movie.php?cname=<?php echo $city;?>&movie_name=<?php echo $res['movie_name'];?>"> <img class="card-img-top my-3" src="<?php echo $path ;?>"  alt="Card image "> </a>
               </div>


    <div class="xyz">
                <h3><?php echo strtoupper($res['movie_name']);  ?></h3> 
                <br>


                <h4><?php echo $res['description'];  ?></h4><br> 
                <h5 style="color: white"><?php echo $res['language'];  ?></h5> 










<br>








                <a href="show.php?cname=<?php echo $city;?>& movie_name=<?php echo $res['movie_name'];?>"><button type="submit"  name="book_ticket"  class="btn btn-light" style="color: black;">Book Ticket</button></a>  

</div>

          
           
         
    
         </div>
      </div>  
   

  

</div>


                  <br><br>
                

          </div>
             
     <?php
          }?> </div>

</body>
</html>
<?php
}
else{
        header("location:index.php");
}?>

