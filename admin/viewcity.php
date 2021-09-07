<?php
 $conn=mysqli_connect("localhost","admin","Admin@123","moviedb");


$cnt=0;
$sql = "SELECT * FROM city";
$result =mysqli_query($conn,$sql);

?>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
 <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />

 <style>
 .font{
 	color: yellow;
 }
</style>
</head>

<body>
    <center>
    <section>
        <h1>CITY</h1><br><br><br>

        
      
         <table class="table table-dark table-striped">        
            <tr>
                <th>Id</th>
                <th>Name</th>

                

               
                
            </tr>
  
            <?php   
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
             
                <td><?php echo ++$cnt;?></td>
                <td><?php echo $rows['c_name'];?></td>

                
                
            </tr>
            <?php
                }
             ?>
        </table>
    </section>
</center>
</body>
  
</html>