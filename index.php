

<?php     
include('config.php');
session_start();
if(isset($_POST['login_btn'])){
     
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    // $sql ="SELECT email,password FROM user_registration WHERE email='$email' and password='$password'";   

    //     $query= $conn-> prepare($sql);     
          
    //       $query-> execute();
        $email = $obj->escapeString($_POST['email']);
            $password = md5($obj->escapeString($_POST['password']));
          
            $obj->select('user_registration',null,"email = '{$email}' AND password = '{$password}'",null,null);
            $response = $obj->getResult();


              


            if(!empty($response)){
                if(count($response[0]) > 1){
            
                    /* Set session variables */
                    $_SESSION['login']=$email;
                    header('location:city.php');
             
                    
                    echo json_encode(array('success'=>'Logged In Successfully.')); exit;
                }else{
                   echo json_encode(array('error'=>'Username and Password not matched.')); exit;
                }
            }else{
                echo json_encode(array('error'=>'Username and Password not matched.')); exit;
                    // header('location:city.php');

            }





           //   if($query->rowCount()) {                   
           //  $_SESSION['login']=$email;
           //  //echo "Connected";
           //  header('location:city.php');
             
           // }               
           // else {

           //  echo "Invalid email or password!";
           //  //echo "<script>alert('Invalid Details');</script>";   
           // }
         }
?>




<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
   <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
   <script type="text/javascript" src="js/jquery-func.js"></script>


   <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

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
    <?php
// print_r($_SESSION['cityy']);
    ?>
    <div class = "container">
        <div class = "row justify-content-center">
            <div class = "col-md-5 my-5">
                    
                    <div class = "card-header">
                        
                    </div>
                    <div class="card-body">

                        <form action="" method="POST" name="login_btn" id="login_btn">
                            <h4 class="font">USER LOGIN</h4>
                            <div class="form-group">
                                <label for="">Email id</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email" required>
                            </div><br>

                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Create Password" required>
                            </div>

                            <br>
                        
                             
                            <div class="form-group" style="text-align: center;">
                                <button type="submit" name="login_btn" class="btn btn-light">LOGIN</button><br><br><br>
                                <h5>Don't have an account? Create one!</h5><a href="registeruser.php"> REGISTER </a>
                            </div>    
                        </form>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>

<script>$(document).ready(function() {
$("#login_btn").validate();
});</script>