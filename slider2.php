<?php
// include('config.php');
// error_reporting(E_ALL);
// ini_set('display_errors', 'On');
// echo "string";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>




</head>
<body>
    <hr class="my-4">

 <div class="container my-4">
          <div class="row">
   
        <?php

$city=$_GET['cname'];
// $m_name=$_GET['movie_name'];




  // $stmt= $obj->select('add_theatre','city on add_theatre.city = city.c_id',"add_theatre.theatre_id ='$tid'");


  // $stmt= $obj->select('city,add_theatre,add_movie','add_theatre on city.c_id=add_theatre.city, add_movie ON add_theatre.theatre_id=add_movie.t_id', "city.c_name='$city'");
        
      // $query = "select * from add_movie where city='$city' and status='active' order by rand() LIMIT 8 ";

    // $query="SELECT * FROM add_movie , city , add_theatre  where add_movie.t_id=add_theatre.theatre_id and city.c_name='$city' order by rand() limit 8 ";


        // $query=$obj->select();


// $query="SELECT * FROM city INNER JOIN add_theatre ON city.c_id=add_theatre.city INNER JOIN add_movie ON add_theatre.theatre_id=add_movie.t_id WHERE city.c_name='$city'";
     $sql=$obj->select1('city','add_theatre','city.c_id=add_theatre.city','add_movie','add_theatre.theatre_id=add_movie.t_id',"city.c_name='$city'");

    // $sql=$obj->select1($city);



    // $query="SELECT * FROM add_movie inner join city on add_movie.city=city.c_id where city.c_name='$city' ";
// $query="SELECT * FROM add_movie where city = $city";

    // $sql = mysqli_query($conn,$query);
    //   while ($res= mysqli_fetch_array($sql)) {
  foreach($sql as $res) {
      
            $path="admin/poster/".$res['image'];
?>         

            <div  class="col-md-3 card border-0  bg-transparent">
              <div class="round"><a href="movie.php?cname=<?php echo $city;?>& movie_name=<?php echo $res['movie_name'];?>">
              </div>
                 
                 <img style="border-radius: 15px;"class="card-img-top mb-1" src="<?php echo $path ;?>"  alt="Card image ">
   
                  <h4 class="card-title text-white mb-5"><?php echo strtoupper($res['movie_name']);  ?></h4> 
              </a></div>
     <?php


          }?>
         </div>
      </div> 
</body>
</html>