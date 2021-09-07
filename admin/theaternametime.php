 <?php  

include('Database.php');
 
 // $sql = "SELECT * FROM add_theatre RIGHT JOIN temp ON add_theatre.city=temp.city";  
 $sql = "SELECT add_theatre.theatre_name,temp.time1, temp.time2, temp.time3, temp.time4, temp.city, add_theatre.screen_no FROM add_theatre INNER JOIN temp ON add_theatre.city=temp.city";
 $result = mysqli_query($connect, $sql);


?>
 <!DOCTYPE html>  
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
      </head>  
      <body>  
           <br/>
         
           <div class="container">  

                  <input type="text" name="selected_date" class="form-control datepicker" style="width: 100px;" placeholder="Select Date" autocomplete="off">
          </div>
    
    </br>
</body>
     
<script type="text/javascript">
 
    $('.datepicker').datepicker({ 
        startDate: new Date()
    });

</script>    
                <div >  
                     <table class="table"> 
                     <thead>
                     </thead>
                          <tbody>
                          <?php  
                          if(mysqli_num_rows($result) > 0)  
                          {  
                               while($row = mysqli_fetch_array($result))  
                               {  
                          ?>  

                          <tr>
                               <td ><?php echo $row["theatre_name"];?></td>  
                               <td><?php echo $row["screen_no"]; ?></td> 
                               <td class=""><?php echo $row["city"]; ?></td>
                               <td  class=""><button type="button" class="btn default mr-4"><a href="addbooking.php"><?php echo $row["time1"]; ?></a></button>  
                               <button type="button" class="btn default mr-4"><a href="addbooking.php"><?php echo $row["time2"]; ?></a>  
                               <button type="button" class="btn mr-4 default"><a href="addbooking.php"><?php echo $row["time3"]; ?></a>  
                               <button type="button" class="btn mr-4 default"><a href="addbooking.php"><?php echo $row["time4"]; ?></a></td>  

                          </tr>  
                          <?php  
                               }  
                          }  
                          ?>  
                     </tbody>
                     </table>  
                </div>  
           </div>  
           <br/>  
      </body>  
 </html>  


 