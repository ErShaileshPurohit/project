<?php 
include('db.php');
 $m_id=$_GET['movie_name'];
	$qry2=mysqli_query($conn,"select * from add_movie where movie_name='$m_id'");
$movie=mysqli_fetch_array($qry2);
	?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">

    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
    .btn{
  
    	width:10%
    }

 </style>
</head>
<body>
	<table class="table table-hover table-bordered text-center">
							<?php
							    $tid=$_GET['theatre'];
							    $sid=$_GET['screen'];
							    $stid=$_GET['show'];

							    

								// $s=mysqli_query($con,"select * from tbl_shows where s_id='".$_SESSION['show']."'");
								// $shw=mysqli_fetch_array($s);
								
									$t=mysqli_query($conn,"select * from add_theatre where theatre_id='$tid'");
									$theatre=mysqli_fetch_array($t);
									?>
									<tr>
										<th colspan="2">Seat Booking</th>
									</tr>
									<tr>
										<td class="col-md-6">
											Theatre
										</td>
										<td>
											<?php echo $theatre['theatre_name'];?>
										</td>
										</tr>
										<tr>
											<td>
												Screen
											</td>
										<td>
											<?php 
												$ttm=mysqli_query($conn,"select  * from show_time where screen_id='$sid'");
												
												$ttme=mysqli_fetch_array($ttm);
												
												$sn=mysqli_query($conn,"select  * from screens where screen_id='".$ttme['screen_id']."'");
												
												$screen=mysqli_fetch_array($sn);
												echo $screen['screen_name'];
							
												?>
										</td>
									</tr>

									<!-- <tr>
										<td>
											Date
										</td>
										<td>
											<div class="container">
											<input type="text" name="selected_date" class="form-control datepicker" style="width: 150px;text-align: center;margin-left:220px " placeholder="Select Date" autocomplete="off">
							               </div>
										</td>
									</tr> -->
									<tr>
										<td>
											Show Time
										</td>
										<td>
											<?php $show="SELECT `name`, `start_time` FROM `show_time` WHERE st_id='$stid'";
											$result=mysqli_query($conn,$show);
											while($rows=mysqli_fetch_array($result)){
											echo date('h:i A',strtotime($rows['start_time']))." ".$rows['name'];
														$time = $rows['start_time']; 
										}?> Show
										</td>
									</tr>
									<tr>
										<td>
											Number of Seats
										</td>
										<td>
											<form  action="" method="post">
												<input type="hidden" name="screen" value="<?php echo $screen['screen_id'];?>"/>
											<input type="number" required tile="Number of Seats" max="<?php echo $screen['seats']-$avl[0];?>" min="0" name="seats" class="form-control" value="1" style="text-align:center; width:40%; margin-left: 210px; " id="seats"/>
											<input type="hidden" name="amount" id="hm" value="<?php echo $screen['charge'];?>"/>
											<input type="hidden" name="date" value="<?php echo $date;?>"/>
										</td>
										<div>
											<?php
											$av=mysqli_query($conn,"SELECT sum(no_seats) FROM `bookings` WHERE show_id=$stid");
											$avl=mysqli_fetch_array($av);
								
											?>
										</div>
									</tr>
									<tr>
										<td>
											Amount
										</td>
										<td id="amount" style="font-weight:bold;font-size:18px">
											Rs <?php echo $screen['charge'];?>
										</td>
									</tr>
									<tr>
										<td colspan="2"><?php if($avl[0]==$screen['seats']){?><button type="button" class="btn btn-danger" style="width:100%">House Full</button><?php } else { ?>
										<button class="btn btn-info" name="submit" value="submit" style="width:10%"><a href="pdf.php">Book Now</a></button>
										

										<?php } ?>
										</form></td>
									</tr>
						<table>
							<tr>
								<td></td>
							</tr>
						</table>
			</table>
<?php

$sh_id=$ttme['st_id'];
$uid = '1';
$no_seat=$_POST['seats'];
$amount=$_POST['amount'];
$date = $_GET["date"];
 $date1 = str_replace('/"', '-', $date);
  
    $newDate = date("Y-m-d", strtotime($date1));  


	// $sql1="INSERT INTO bookings('t_id', 'user_id', 'show_id', 'screen_id', 'no_seats', 'amount', 'date') VALUES ('$tid','1','$sh_id','$sid','$no_seat','$amount','$newDate')";

	$ins="INSERT INTO `bookings`( `t_id`, `user_id`, `show_id`, `screen_id`, `no_seats`, `amount`, `date`, `time`)VALUES ('$tid','$uid','$sh_id','$sid','$no_seat','$amount','$newDate','$time')";
	$res=mysqli_query($conn,$ins);

   

	
?>
	<script type="text/javascript">
 
//    $(function() {
//     $(".datepicker").datepicker();
    
//     $(".datepicker").on("change",function(){
//         var selected = $(this).val();
//         //alert(selected);
//         //document.writeln(selected);
//         window.location = '?val=' + selected;
//     });
// });



$('#seats').change(function(){
		var charge=<?php echo $screen['charge'];?>;
		amount=charge*$(this).val();
		$('#amount').html("Rs "+amount);
		$('#hm').val(amount);
	});
</script> 	 
</body>
</html>

