 <?php
// require_once "db.php";
// include('config.php');
 include('header.php');
$t_id = $_GET['theatre_id'];
echo $t_id;
$result = mysqli_query($conn,"SELECT * FROM `screens` WHERE t_id='$t_id'");
?>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row['screen_id'];?>"><?php echo $row['screen_name'];?></option>
<?php
}
?><?php
 error_reporting(E_ALL);
ini_set('display_errors', 'On');

// $servername = "localhost";
// $username = "admin";
// $password = "Admin@123";

// try {
//   $conn = new PDO("mysql:host=$servername;dbname=moviedb", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
// } catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
// }
 // include('config.php');


ini_set('display_errors', 'On');
if (isset($_POST['create'])){
// $theatre_id=$_POST['theatre_id'];
$mname=$_POST['mname'];
$description=$_POST['description'];
$language=$_POST['language'];
$launch_date=$_POST['launch_date'];
// $screen_id=$_POST['screen_id'];
 // $images=$_POST['images'];
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

        // $sql="insert into addmovie (t_id,description,language,launch_date,screen_id,image)value('$theatre_id','$description','$language','$launch_date','$screen_id','$photofile_name')";
            
           $insert_data = array(  
                't_id' => $obj->escapeString($_GET['theatre_id']),
                'screen_id' => $obj->escapeString($_POST['screen_id']),
                'movie_name' => $obj->escapeString($_POST['mname']),
                'description' => $obj->escapeString($_POST['description']),
                'language' => $obj->escapeString($_POST['language']),
                'lunch_date' => $obj->escapeString($_POST['launch_date']),
                'image' => $obj->escapeString($_FILES['images']['name'])

                     ); 

              // print_r($insert_data); 
     $insert = $obj->insert('add_movie',$insert_data);
     // echo $insert;
// $sql="INSERT INTO `add_movie`(`t_id`, `screen_id`, `movie_name`, `description`, `language`, `lunch_date`, `image`) VALUES ('$theatre_id','$screen_id','$mname','$description','$language','$launch_date','$photofile_name')";
 //print_r($sql);
        // $conn->exec($sql);
      
          move_uploaded_file($photofile_tmp,"poster/".$photofile_name);
   if( $insert){
              echo "Movie Added Sucessfully";
              // header("Location: movielist.php");   
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
     var theatre_id = document.forms["regiform"]["theatre_id"];
     var name = document.forms["regiform"]["mname"];
     var description = document.forms["regiform"]["description"];
     var language = document.forms["regiform"]["language"];
     var launch_date = document.forms["regiform"]["launch_date"];
     var screen_id = document.forms["regiform"]["screen_id"];
     var city = document.forms["regiform"]["city"];
     var images = document.forms["regiform"]["images"];

     if(theatre_id.value == "") {
            document.getElementById("etheatre_id").innerHTML = "Please enter theatre theatre_id";
            return false;
     }
     else {
            document.getElementById("etheatre_id").innerHTML = "";
     }
     if(theatre_id.value == "") {
            document.getElementById("etheatre_id").innerHTML = "Please enter theatre theatre_id";
            return false;
     }
     else {
            document.getElementById("etheatre_id").innerHTML = "";
     }
     if(name.value == "") {
            document.getElementById("ename").innerHTML = "Please enter movie name";
            return false;
     }
     else {
            document.getElementById("ename").innerHTML = "";
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
      document.getElementById("elaunch_date").innerHTML = "Please enter no of launch_date";
        return false;
     }
     else {
      document.getElementById("elaunch_date").innerHTML = "";
     }
     if(screen_id.value == "") {
      document.getElementById("escreen_id").innerHTML = "Please select screen_id";
        return false;
     }
     else {
      document.getElementById("escreen_id").innerHTML = "";
     }
     if(city.value == "") {
      document.getElementById("ecity").innerHTML = "Please select city";
        return false;
     }
     else {
      document.getElementById("ecity").innerHTML = "";
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
    <h1 class="well">Add movie</h1>

  <div class="col-lg-12 well">
  <div class="row">
<div class="col-sm-12">
<!--   <div class="row">    
         <         
           $result1=$obj->select('add_theatre',null,null,null,null);
           //echo $result;
          // $result = $conn->prepare("select * from add_theatre");
          //$result->execute();?>
        
               
                        <div class="col-sm-12">

            
              <div class="col-sm-6 form-group"> 
               <label for="theatre_id">Choose a Theatre_name:</label><br>
                  <select name="theatre_id" class="form-control" id="theatre_id1">
               <php
        // while ($data = $result->fetch(PDO::FETCH_ASSOC)){
               //     while($data = mysqli_fetch_assoc($result)){
               foreach($result1 as $data){
            ?> 
            <option value="<php echo $data['theatre_id'];?>"><?php echo $data['theatre_name'];?></option>

            <php
            
          }
          ?> 
        </select>

        <span id="etheare_id" style="color:red;"></span>
              </div>
 -->

            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Movie Name</label>
                 <input  type="text" name="mname" class="form-control" placeholder="Enter Your Movie Name" /> <br><span id="ename" style="color:red;"></span>
              </div>

              <div class="row">
              <div class="col-sm-12 form-group">
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
              <?php
      
                     // echo $t_id;
                   $result1 = $obj->select('screens',null,"t_id='$t_id'",null,null);
                  // print_r($result1);
                  // $result1 = $conn->prepare("SELECT * from screens");
                  // $result1->execute();
              ?>
      
            <div class="row">
               <label for="screen">Choose a screen:</label>
                        <div class="row"> 
              <div class="col-sm-7 form-group">
               
                 <select name="screen_id" class="form-control" id="screen_id">
                  <?php                
               foreach($result1 as $res1)
                   { ?>   
                <option value="<?php echo $res1['screen_id'];?>"><?php echo $res1['screen_name'];?></option>
              <?php } ?>
             </select>
                 <span id="escreen_id" style="color:red;"></span>
              </div> 
</div>
</div>
</div>
 
                
          <div class="col-sm-12 form-group">
            <label>Image: </label>
            <input type="file" name="images" id="images" class="form-control" placeholder="Enter Your image" />
            <br><span id="eimages" style="color:red;"></span>
          </div>   
       
<center>
              <div class="col-lg-12">
           <input type="submit" name="create" value="save" class="btn btn-lg btn-info"  />
           <a href="movielist.php"class="btn btn-lg btn-info">View Movies</a> 
                  
          </div>
        </center>
                 </form> 
        </div>
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

<script>
  $(document).ready(function() {
$('#theatre_id1').on('change', function() {
var t_id = this.value;
$.ajax({
url: "addmovie.php",
type: "POST",
data: {
t_id: t_id
},
cache: false,
success: function(result){
$("#screen_id").html(result);
}
});
}); 
</script>
  </body>
</html>

