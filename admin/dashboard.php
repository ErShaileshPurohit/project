

<?php
session_start();
if (isset($_SESSION['alogin'])){
include('header.php');
?>
<h3 style="color:white;text-align: center;">
	<?php
echo "Welcome ".$_SESSION['alogin'];
?></h3>
<?php }
else
{
	header("location:index.php");
}
?>

