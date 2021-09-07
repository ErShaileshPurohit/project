<?php
include("config.php");
include('header.php');
if(isset($_POST['add']))
{
  
    $c_name = $_POST['c_name'];

    $insert_data = array(  
                'c_name' => $obj->escapeString($_POST['c_name'])

                     ); 
$q1=$obj->insert("city", $insert_data);


    // $query = "INSERT INTO city(c_name) VALUES('$c_name')";
    // $q1=$conn->prepare($query);     
     // $q1->execute();
     //echo $query;
    if($q1)
    {
        echo"City added successfully!";
         // header("location:viewcity.php");
//echo "<script>alert('CREATE')</script>";
        
    }
    else
    {
        echo "Failed" ;
       
          // echo "<script>window.location.href='setexam.php';</script>";
       
    }
}




?>


<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
 <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="js/jquery-func.js"></script>

	 <style>
    .font{
        font-size: 30px;
        font-family: arial;
        color: #f3b12b;
        text-align: center;
    }

    .form-group{
        font-size: 18px;
        font-family: Monaco;
        color: lightgray;
        text-align: left;

    }

    form .error {
  color: #FF5733;
}

</style>

</head>


<div class = "section">
    <div class = "container">
        <div class = "row justify-content-center">
            <div class = "col-md-5 my-5">
                    
                    <div class = "card-header">
                        
                    </div>
                    <div class="card-body">

                        <form action="" method="POST" name="add" id="add">
                            <h4 class="font">ADD CITY</h4><br>


                            <div class="form-group">
                            <label for="">City</label>
                            <input type="text" id="c_name" name="c_name" class="form-control" placeholder="Enter City" required>
                        </div><br>

                        
                            <br>
                        
                             
                            <div class="form-group" style="text-align: center;">
                                <button type="submit" name="add" class="btn btn-light">ADD</button>
                            </div>    
                        </form>
                    </div>
                </div>
            </div>
        </div>    
    </div>
<center><a href="viewcity.php" class="btn btn-light">View Cities </a></center>

    <script>$(document).ready(function() {
$("#add").validate();
});</script>
