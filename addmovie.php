<?php
error_reporting(0);
ini_set('display_errors', 'On');
include('Database.php');
if (isset($_POST['create'])){
$movie_name=$_POST['movie_name'];
$description=$_POST['description'];
$language=$_POST['language'];
$launch_date=$_POST['launch_date'];
$time=$_POST['time'];
$screen_no=$_POST['screen_no'];
$city=$_POST['city'];
$amount=$_POST['amount'];
//  $images=$_POST['images'];
// echo "<pre>";
// print_r($_FILES);
// exit();
if(isset($_FILES['images'])){
      $errorsphoto= array();

      $photofile_name = $_FILES['images']['name'];


      $photofile_size =$_FILES['images']['size'];

      $photofile_tmp =$_FILES['images']['tmp_name'];

      $photofile_type=$_FILES['images']['type'];

      $tmp = explode('.', $photofile_name);
      $photofile_ext = end($tmp);


      // $photofile_ext=strtolower(end(explode('.',$_FILES['images']['name'])));

      $photoextensions= array("jpeg","jpg","png");

      if(in_array($photofile_ext,$photoextensions)=== false){
         $errorsphoto[]="extension not allowed, please choose a JPEG or PNG file.";
         
      }
       if($photofile_size > 20971525248){
         $errorsphoto[]='File size must be excately 2 MB';
         
        
      }
       if(empty($errorsphoto)==true){
        $sql="insert into thester_admin (movie_name,description,language,launch_date,time,screen_no,city,amount,image)value('$movie_name','$description','$language','$launch_date','$time','$screen_no','$city','$amount','$photofile_name')";

 
        $conn->exec($sql);
        move_uploaded_file($photofile_tmp,"poster/".$photofile_name);
   if($conn){


    
              $msg= "ok";
               
               
           }
         } else{
             echo "not successfully";
           }
    }
}
      ?>
<!doctype html>
<html lang="en">
  <head>
    <script type="text/javascript">
    function formValidation() {
     var movie_name = document.forms["regiform"]["movie_name"];
     var description = document.forms["regiform"]["description"];
     var language = document.forms["regiform"]["language"];
     var launch_date = document.forms["regiform"]["launch_date"];
     var screen_no = document.forms["regiform"]["screen_no"];
     var city = document.forms["regiform"]["city"];
     var amount = document.forms["regiform"]["amount"];
     var images = document.forms["regiform"]["images"];

     if(movie_name.value == "") {
            document.getElementById("emovie_name").innerHTML = "Please enter movie_name";
            return false;
     }
     else {
            document.getElementById("emovie_name").innerHTML = "";
     }
     if(description.value == "") {
            document.getElementById("edescription").innerHTML = "Please enter description";
            return false;
     }
     else {
            document.getElementById("edescription").innerHTML = "";
     }
     if(language.value == "") {
      document.getElementById("elanguage").innerHTML = "Please select language";
        return false;
     }
     else {
      document.getElementById("elanguage").innerHTML = "";
     }
     if(launch_date.value == "") {
      document.getElementById("elaunch_date").innerHTML = "Please enter of launch_date";
        return false;
     }
     else {
      document.getElementById("elaunch_date").innerHTML = "";
     }
     if(screen_no.value == "") {
      document.getElementById("escreen_no").innerHTML = "Please select screen_no";
        return false;
     }
     else {
      document.getElementById("escreen_no").innerHTML = "";
     }
     if(city.value == "") {
      document.getElementById("ecity").innerHTML = "Please select city";
        return false;
     }
     else {
      document.getElementById("ecity").innerHTML = "";
     }
     if(amount.value == "") {
      document.getElementById("eamount").innerHTML = "Please select amount";
        return false;
     }
     else {
      document.getElementById("eamount").innerHTML = "";
     }
     if(images.value == "") {
      document.getElementById("eimages").innerHTML = "Please select images";
        return false;
     }
     else {
      document.getElementById("eimages").innerHTML = "";
     }
     
     
   }
   </script>
    <link rel="stylesheet" type="text/css" href="fileinput.min.css">
    <style>
      @import "font-awesome.min.css";
@import "font-awesome-ie7.min.css";
/* Space out content a bit */
body {
  padding-top: 20px;
  padding-bottom: 20px;
}

/* Everything but the jumbotron gets side spacing for mobile first views */
.header,
.marketing,
.footer {
  padding-right: 15px;
  padding-left: 15px;
}

/* Custom page header */
.header {
  border-bottom: 1px solid #e5e5e5;
}
/* Make the masthead heading the same height as the navigation */
.header h3 {
  padding-bottom: 19px;
  margin-top: 0;
  margin-bottom: 0;
  line-height: 40px;
}

/* Custom page footer */
.footer {
  padding-top: 19px;
  color: #777;
  border-top: 1px solid #e5e5e5;
}

/* Customize container */
@media (min-width: 768px) {
  .container {
    max-width: 730px;
  }
}
.container-narrow > hr {
  margin: 30px 0;
}

/* Main marketing message and sign up button */
.jumbotron {
  text-align: center;
  border-bottom: 1px solid #e5e5e5;
}
.jumbotron .btn {
  padding: 14px 24px;
  font-size: 21px;
}

/* Supporting marketing content */
.marketing {
  margin: 40px 0;
}
.marketing p + h4 {
  margin-top: 28px;
}

/* Responsive: Portrait tablets and up */
@media screen and (min-width: 768px) {
  /* Remove the padding we set earlier */
  .header,
  .marketing,
  .footer {
    padding-right: 0;
    padding-left: 0;
  }
  /* Space out the masthead */
  .header {
    margin-bottom: 30px;
  }
  /* Remove the bottom border on the jumbotron for visual effect */
  .jumbotron {
    border-bottom: 0;
  }
}
    </style>
  </head>
<body>
  
      </header>

      <section>
        
        <form align="center" name="regiform" method="POST" enctype="multipart/form-data" onSubmit="return formValidation()">
          <div class="container">
             <?php
    echo "$msg";
    ?> 
    <h1 class="well">Add movie</h1>

  <div class="col-lg-12 well">
  <div class="row">

        <form>
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-6 form-group">
                <label>movie_name</label>
                <input type="textbox" name="movie_name"  placeholder="Enter movie_name Here.." class="form-control"><br><span id="emovie_name" style="color:red;"></span>
              </div>
              <div class="col-sm-6 form-group">
                <label>Description</label>
                 <textarea name="description" class="form-control" placeholder="Enter Your description" rows="3" /> </textarea><br><span id="edescription" style="color:red;"></span>
              </div>
            </div>          
            <div class="form-group">
               <label for="language">Choose a Language:</label>
                  <select name="language" id="language" class="form-control">
                    <option value="English">English</option>
                    <option value="Hindi">Hindi</option>
                    <option value="gujarati">gujarati</option>
                  </select><br>
               <span id="elanguage" style="color:red;"></span>
            </div>  
           
            <div class="row">
              <div class="col-sm-4 form-group">
                <label>Launch_date </label>
                <input type="date" name="launch_date" class="form-control" placeholder="Enter Your launch_date" />
                <br><span id="elaunch_date" style="color:red;"></span>
              </div>  
              <div class="col-sm-4 form-group">
                <label>Time</label>
                <input type="time" name="time" class="form-control" placeholder="Enter Your time" /><br><br>
                <span id="etime" style="color:red;"></span>
              </div>  
              <div class="col-sm-4 form-group">
                <label>Screen_no</label>
                 <input type="textbox" name="screen_no" class="form-control" placeholder="Enter Confirm screen_no" />
                 <br><span id="escreen_no" style="color:red;"></span>
              </div>    
            </div>
            <div class="row">
              <div class="col-sm-6 form-group">
               <label for="city">Choose a City:</label>
                  <select name="city" class="form-control" id="city">
                    <option value="Ahmedabad">Ahmedabad</option>
                    <option value="Mumbai">Mumbai</option>
                    <option value="Pune">Pune</option>
                  </select><br>
                  <span id="ecity" style="color:red;"></span>
              </div> 
                 
              <div class="col-sm-6 form-group">
                <label>Amount</label>
                <input type="textbox" name="amount" class="form-control" placeholder="Enter Confirm amount" />
                <br><span id="eamount" style="color:red;"></span>
              </div>  
            </div>            
          <div class="form-group">
            <label>Image: </label>
            <input type="file" name="images" id="images" class="form-control" placeholder="Enter Your image" />
            <br><span id="eimages" style="color:red;"></span>
          </div>    

           <input type="submit" name="create" value="save" class="btn btn-lg btn-info"  /> 
                  
          </div>
        </form> 
        </div>
  </div>
  </div>
        </form>
    </section>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script src="fileinput.js"></script>
  </body>
</html>


