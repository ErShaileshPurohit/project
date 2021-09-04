<?php
if (isset($_POST['create'])){
  $id=$_GET['id'];
$movie_name=$_POST['movie_name'];
$description=$_POST['description'];
$language=$_POST['language'];
$launch_date=$_POST['launch_date'];
$time=$_POST['time'];
$screen_no=$_POST['screen_no'];
$city=$_POST['city'];
$amount=$_POST['amount'];

$file=$_FILES["image"]["name"];
        $array=explode('.', $file);
        $fileName=$array[0];
        $fileExt=$array[1];
        $newfile=$fileName."_".time().".".$fileExt;

$image = $_FILES['image']['name'];
  $fileElementName = 'file';
  $path = 'images/'.$newfile;; 
  $location = $path . $_FILES['file']['name'];
  move_uploaded_file($_FILES['file']['tmp_name'], $location);

// $image = $_FILES["image"]["name"];
//          $tempname = $_FILES["image"]["tmp_name"];  
//          $folder = "images/".$newfile;

$sql="update thester_admin set id = $id, movie_name='$movie_name',description='$description',language='$language',launch_date='$launch_date',time='$time',screen_no='$screen_no',city='$city',amount='$amount',newfile='$newfile' where id='$id'";

$query=mysqli_query($conn,$sql);
echo "$sql";
if($query){
  
              $msg ="user created successfully";
               
               
           }
          else{
             echo "not successfully";
           
}     

}
?>
<!doctype html>
<html lang="en">
  <head>
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
   <?php 
              include('config.php');
                $id=intval($_GET['update']);
                   $sql="select * from thester_admin where id='$id'" ;
                   $query=mysqli_query($conn , "select * from thester_admin where id='$id'");
                   if(mysqli_num_rows($query))
                   {
                        while ($v=mysqli_fetch_assoc($query)) {
                          
                ?>
        <?php }}?>

  
      </header>

      <section>
        
        <form align="center" name="regiform" method="POST" enctype="multipart/form-data" onsubmit="return validateform()" >
          <div class="container">
            <?php
    echo "$msg";
    ?>
    <h1 class="well">UPDATE MOVIE</h1>

  <div class="col-lg-12 well">
  <div class="row">

        <form>
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-6 form-group">
                <label>movie_name</label>
                <input type="textbox" name="movie_name" value="<?php echo $v['movie_name'];?>" placeholder="Enter movie_name Here.." class="form-control">
              </div>
              <div class="col-sm-6 form-group">
                <label>Description</label>
                 <textarea name="description" value="<?php echo $v['description'];?>" class="form-control" placeholder="Enter Your description" rows="3" /> </textarea>
              </div>
            </div>          
            <div class="form-group">
               <label for="language">Choose a Language:</label>
                  <select name="language" id="language" class="form-control">
                    <option value="English">English</option>
                    <option value="Hindi">Hindi</option>
                    <option value="gujarati">gujarati</option>
                   
                  </select>
            </div>  
           
            <div class="row">
              <div class="col-sm-4 form-group">
                <label>Launch_date </label>
                <input type="date" name="launch_date" value="<?php echo $v['launch_date'];?>"class="form-control" placeholder="Enter Your launch_date" />
              </div>  
              <div class="col-sm-4 form-group">
                <label>Time</label>
                <input type="time" name="time" value="<?php echo $v['time'];?>"class="form-control" placeholder="Enter Your time" /><br><br>
              </div>  
              <div class="col-sm-4 form-group">
                <label>Screen_no</label>
                 <input type="textbox" name="screen_no" value="<?php echo $v['screen_no'];?>"class="form-control" placeholder="Enter Confirm screen_no" />
              </div>    
            </div>
            <div class="row">
              <div class="col-sm-6 form-group">
               <label for="city">Choose a City:</label>
                  <select name="city" class="form-control" id="city">
                    <option value="Ahmedabad">Ahmedabad</option>
                    <option value="Mumbai">Mumbai</option>
                    <option value="Pune">Pune</option>
                   
                  </select>
              </div> 
                 
              <div class="col-sm-6 form-group">
                <label>Amount</label>
                <input type="textbox" name="amount"value="<?php echo $v['amount'];?>" class="form-control" placeholder="Enter Confirm amount" />
              </div>  
            </div>            
          <div class="form-group">
            <label>Image: </label>
            <input type="file" name="image" id="image"value="<?php echo $v['image'];?>" class="form-control" placeholder="Enter Your image" />
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

  </body>
</html>


