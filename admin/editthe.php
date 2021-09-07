<?php 
  include ('header.php'); 
  // include 'config.php';

  $tid= $_GET['id'];
  //$select = "SELECT * FROM add_theatre WHERE id ='$tid'";

  //$query = mysqli_query($conn, $select);

  // $stmt = $conn->prepare("SELECT add_theatre.theatre_id, add_theatre.theatre_name, city.c_name FROM add_theatre INNER JOIN city ON add_theatre.city = city.c_id WHERE  add_theatre.theatre_id ='$tid' ");
  // $stmt->execute();
  $stmt= $obj->select('add_theatre','city on add_theatre.city = city.c_id',"add_theatre.theatre_id ='$tid'");
  // $users = $stmt->fetch(); 
  // foreach($stmt as $users){  

 ?>

 <!DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
   
   <title></title>
 </head>
 <body>
  <div class="d-flex justify-content-center" style="padding-top: 85px;">
  <div class="card" style="width: 20rem;">
   <h5 class="card-header">Edit Theatre</h5>
   <form action="update.php" method="post">
    <ul class="list-group list-group-flush">
    <li class="list-group-item">
      <?php foreach ($stmt as $users) {
        ?>
        <input type="hidden" name="id" value="<?php echo $users['theatre_id']; ?>">
    </li>
    <li class="list-group-item">
     <input type="text" name="tname" value="<?php echo $users['theatre_name']; ?>">
    </li>
   <li class="list-group-item">
    <select name="tcity">
      <option value="<?php echo $users['city']; ?>" selected="selected"><?php $cname=$users['c_name']; echo $users['c_name']; ?></option>
      <?php }
                    // $stmt1 = $conn->prepare(
                    //             "SELECT * FROM `city` where c_name != '$cname' ");
                    //        $stmt1->execute();
      $stmt1=$obj->select('city',null,"c_name != '$cname' ");
                           // $rows = $stmt1->fetchAll();
                           foreach($stmt1 as $row) 
                        {  
                 ?>
                 <option value="<?php echo $row['c_id'];?>"><?php echo $row['c_name'];?></option>
              <?php } ?>

    </select>
  </li>
  <li class="list-group-item">
   <input type="submit" name="submit" value="Update" class="btn-primary">
  </li>
  </ul>
  </form>
 </div>
</div>
 </body>
 </html>

