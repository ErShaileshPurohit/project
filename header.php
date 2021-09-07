<?php 
include 'db.php';
$city=$_GET['cname'];

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<!-- <title>PHP Live MySQL Database Search</title> -->
<style>
     .search-box{
        width: 100%;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
     width: 100%;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;    
        background: black;
        color: white;    
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
        background: black;
    }
    .result p:hover{
        background: lightgray;
        color: black;
    }
</style>
  <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <!-- <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery-func.js"></script> -->
<link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script> -->
</head>
<body>

<!-- START PAGE SOURCE -->
<div class="container">
  <div id="header">
    <h1 id="temp" href="welcome.php">Movie Ticket Booking</h1>
    <div class="social"> <span>FOLLOW US ON:</span>
      <ul>
        <li><a class="twitter" href="#">twitter</a></li>
        <li><a class="facebook" href="#">facebook</a></li>
        <li><a class="vimeo" href="#">vimeo</a></li>
        <li><a class="rss" href="#">rss</a></li>
      </ul>
    </div>
    <div id="navigation">
      <ul>
        <?php 

        $city=$_GET['cname'];
         // $query = "select DISTINCT city from add_theatre";
        

        // $sql = mysqli_query($conn , $query);
        ?>
        <li><a class="active" href="welcome.php?cname=<?php echo $city;?>">HOME</a></li>
        <li><a href="news.php?cname=<?php echo $city;?>">NEWS</a></li>
        <li><a href="intheatre.php?cname=<?php echo $city;?>">IN THEATERS</a></li>
        <li><a href="city.php?cname=<?php echo $city;?>">SELECT CITY</a></li>
        
        <!--  <li> -->
              


        
     
   <!--   <select  name="city" style="background: none; color: white; border: none; font-weight: bold; font-size: 14px;" required> <option style="background-color:black; border:none;" value="">SELECT CITY</option><?php
      $query = "select DISTINCT city from add_movie";
    $sql = mysqli_query($conn , $query);
    
      while ($res= mysqli_fetch_assoc($sql)) {
?>
       
        
          <option  style="background-color:black; border:none;"value="<?php echo $res['city']; ?>"> <a href="comingsoon.php"> <?php echo $res['city']; ?></a></option>
         <?php }?> 
        </select></li> -->
        </li>
                <li><a href="comingsoon.php?cname=<?php echo $city;?>">COMING SOON</a></li>
               
                <li><a href="logoutsession.php">LOGOUT</a></li>
              </ul>

    </div> 

      <!-- </ul> -->


    

  </div>
  
       <div class="search-box">
        <?php 
        $city=$_GET['cname'];?>
         <input type="text" autocomplete="off" placeholder="Search movie" style="size: 100%;" />
        <div class="result"></div>
    </div>

 
</div>



<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php?cname=<?php echo $city;?>", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
</body>
</html>


