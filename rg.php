<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);

include('config.php');

if(isset($_POST['register']))
{
  
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $contact_no = $_POST['contact_no'];
    

    $query = "INSERT INTO user_registration(name,email,password,contact_no) VALUES('$name','$email','$password','$contact_no')";


    $q1=$conn->prepare($query);     
     $q1->execute();
     //echo $query;
    if($q1)
    {
        echo"Account created successfully";
        //   header("location:welcome.php");
//echo "<script>alert('CREATE')</script>";
        
    }
    else
    {
        echo "Failed" ;
       
          // echo "<script>window.location.href='setexam.php';</script>";
       
    }
}

?>
<!DOCTYPE html>
<html>
<head>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
 <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="js/jquery-func.js"></script>


    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
 
        <!-- <script src="vendor/jquery/dist/jquery.min.js"></script>
        <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
        <script src="js/form-validation.js"></script>
 -->

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
<body>
<div class = "section">
    <div class = "container">
        <div class = "row justify-content-center">
            <div class = "col-md-5 my-5">
                    
                    <div class = "card-header">
                        
                    </div>
                    <div class="card-body">

                        <form name="register" action="#" id="register" method="POST">
                            <h4 class="font">REGISTER!</h4>

                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" id="name" class="form-control" minlength="3" placeholder="Enter name" required>
                            </div><br>

                            <div class="form-group">
                                <label for="">E-mail</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email" required>
                            </div><br>

                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" id="password" name="password" class="form-control" minlength="6"placeholder="Create Password" required></div></br>

                                <div class="form-group">
                                <label for="">Contact Number</label>
                                <input type="tel" name="contact_no" id="contact_no" class="form-control" minlength="10" placeholder="Enter Contact Number" required></div></br>

                            <br>
                        
                             
                            <div class="form-group" style="text-align: center;">
                                <button type="submit" name="register" class="btn btn-light">REGISTER</button><br><br><br>
                                <h5>Already have an account?</h5><a href="userlogin.php"> LOGIN </a>
                            </div>    
                        </form>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>

<script>$(document).ready(function() {
$("#register").validate();
});</script>
</body>
</html>