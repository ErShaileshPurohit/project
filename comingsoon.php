<!DOCTYPE html>
<html>
<head>
  <title>MovieHunter</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery-func.js"></script>
<!--[if IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
</head>
<body>
  <?php
  session_start();
  if(isset($_SESSION['login']))
{
   include('header.php');?>
  <div class="container">
  <div id="shell">
 <div id="coming">
  <div id="shell">
      <div class="head">
        <h3>COMING SOON<strong>!</strong></h3>
        <p class="text-right"><a href="#">See all</a></p>
      </div>
      <div class="content">
        <h4>The Princess and the Frog </h4>
        <a href="#"><img src="css/images/coming-soon1.jpg" alt="" /></a>
        <p>Walt Disney Animation Studios presents the musical &quot;The Princess and the Frog,&quot; an animated comedy set in the great city of New Orleans...</p>
        <a href="#">Read more</a> </div>
      <div class="cl">&nbsp;</div>
      <div class="content">
        <h4>The Princess and the Frog </h4>
        <a href="#"><img src="css/images/coming-soon2.jpg" alt="" /></a>
        <p>Walt Disney Animation Studios presents the musical &quot;The Princess and the Frog,&quot; an animated comedy set in the great city of New Orleans...</p>
        <a href="#">Read more</a> </div>
    </div>
    <div class="cl">&nbsp;</div>
  </div>
</div>

<?php 
}
else{
        header("location:index.php");
}?>
 </body>
</html>