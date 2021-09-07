<?php
include('db.php');
$m_id=$_GET['movie_name'];
// echo "komoom".$m_id;
// $qry2=mysqli_query($conn,"select * from add_movie where movie_name='Bell Bottom'");
//   $movie=mysqli_fetch_array($qry2);
if(isset($_GET["val"])){
     $sent = $_GET["val"];
     }

?>

<html>
<head>
     <title></title> 
            <meta charset="utf-8"/>
           <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no"/>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
           <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
          <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
          <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
          <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
          <style>
           .btn {
               border: 1px solid black;
               background-color: white;
               color: black;
               padding: 10px 20px;
               font-size: 15px;
               cursor: pointer;
               }
           .default {
               border-color: #e7e7e7;
               color: black;
               }

          </style>
<script type="text/javascript">
 
   $(function() {
    $(".datepicker").datepicker();
    
    $(".datepicker").on("change",function(){
        var selected = $(this).val();
        //alert(selected);
        //document.writeln(selected);
        window.location = '?val=' + selected;
    });
});
</script>
</head>
<body>
<div class="content">
</br>
     <td>
     <div class="container">
     <input type="text" name="selected_date" class="form-control datepicker" style="width: 150px;text-align: center;" placeholder="Select Date" autocomplete="off" value="<?php echo $sent;?>"></div></td></br>
     <?php $s=mysqli_query($conn,"select * from add_movie where movie_name='$m_id'");

                                   if(mysqli_num_rows($s))
                                   {?>
                                   <table class="table table-hover table-bordered text-center">
                                   <?php
                                        
                                        while($shw=mysqli_fetch_array($s))
                                        {
                                             $t=mysqli_query($conn,"select * from add_theatre where theatre_id='".$shw['t_id']."'");
                                             $theatre=mysqli_fetch_array($t);
                                             ?>
                                             <tr>
                                                  <td>
                                                       <?php echo $theatre['theatre_name'];?>
                                                  </td>
                                                  <td>
                                                       <?php $tr=mysqli_query($conn,"select * from add_movie where movie_name='".$shw['movie_name']."' and t_id='".$shw['t_id']."'");
                                                       while($shh=mysqli_fetch_array($tr))
                                                       {
                                                            
                                                            $ttm=mysqli_query($conn,"select  * from show_time where screen_id='".$shh['screen_id']."'");
                                                            //$ttme=mysqli_fetch_array($ttm);
                                                            while($ttme=mysqli_fetch_array($ttm)){
                                                            ?>
                                                            <a href="show.php?show=<?php echo $ttme['st_id'];?>&theatre=<?php echo $shw['t_id'];?>&screen=<?php echo $shh['screen_id'];?>&date=<?php echo $sent?>"><button class="btn btn-default mr-3"><?php echo date('h:i A',strtotime($ttme['start_time']));?></button></a>
                                                            <?php
                                                       }}

                                                  ?>
                                                       
                                                  </td>
                                             </tr>
                                             <?php
                                        }
                                   ?>
                              </table>
                                   <?php
                                   }
                              
                                   else
                                   {
                                        ?>
                                        <h3>No Show Available</h3>
                                        <?php
                                   }
                                   ?>
                              
                         </div>
</body>
</html>