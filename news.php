 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
<!-- <div id="news"> -->
      <div class="head">
        <h3>NEWS</h3>
        <p class="text-right"><a href="#">See all</a></p>
      </div>
      <div class="content">
        <p class="date">12.04.09</p>
        <h4>Disney's A Christmas Carol</h4>
        <p>&quot;Disney's A Christmas Carol,&quot; a multi-sensory thrill ride re-envisioned by Academy Award&reg;-winning filmmaker Robert Zemeckis, captures... </p>
        <a href="#">Read more</a> </div>
      <div class="content">
        <p class="date">11.04.09</p>
        <h4>Where the Wild Things Are</h4>
        <p>Innovative director Spike Jonze collaborates with celebrated author Maurice Sendak to bring one of the most beloved books of all time to the big screen in &quot;Where the Wild Things Are,&quot;...</p>
        <a href="#">Read more</a> </div>
      <div class="content">
        <p class="date">10.04.09</p>
        <h4>The Box</h4>
        <p>Norma and Arthur Lewis are a suburban couple with a young child who receive an anonymous gift bearing fatal and irrevocable consequences.</p>
        <a href="#">Read more</a> </div>
    </div>
   
    <!-- <div class="cl">&nbsp;</div> -->
  </div>
</div>
<?php }
else{
        header("location:index.php");
}?>
</body>
  </html>