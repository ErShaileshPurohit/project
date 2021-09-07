
<?php 
session_start();
// echo $_SESSION['login'];
if(isset($_SESSION['login']))
{
  session_start();
    // $city=$_GET['cname'];
  // $city1=$_SESSION['cityy'];
// echo $city1;
// print_r($_SESSION);
include('config.php');
include('header.php');
require('slider1.php');
require('slider2.php');

}
else{
        header("location:index.php");
}

?>
<!DOCTYPE html>
<html>
<head>



   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    

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

        $query=$obj->select('add_movie',null,"movie_name='$movie'");


        
    //   $query = "select * from add_movie where movie_name='$movie'";     
    // $sql = mysqli_query($conn , $query);
foreach($movie as $res){



      // while ($res= mysqli_fetch_array($sql)) {
            $path="images/".$res['image'];


?>        
             


              <div class="col-md-3 card border-0 bg-transparent"><a href="movie.php?movie_name=<?php echo $res['movie_name'];?>"> <img style="border-radius: 25px;"class="card-img-top my-3  " src="<?php echo $path ;?>"  alt="Card image "> </a>
               </div>


    <div class="xyz">
                <h3><?php echo strtoupper($res['movie_name']);  ?></h3> 
                <br>


                <h4><?php echo $res['description'];  ?></h4> <br><br>
                <h5 style="color:white;"><?php echo $res['language'];  ?></h5> <br>

                <a href="hello.php"><button type="submit"  name="book_ticket"  class="btn btn-light" style="color: black;">Book Ticket</button></a> 

</div>

            <!-- <div  class="col-md-3 card border-0 bg-transparent"><a href="movie.php?movie_name=<?php echo $res['movie_name'];?>"> <img class="card-img-top my-3 " src="<?php echo $path ;?>"  alt="Card image "> </a>
               </div> -->

           
         
    
         </div>
      </div>  
   

  

</div>


                  <br><br>
                

          </div>
             
     <?php
          }?> </div>

</body>
</html>

 
