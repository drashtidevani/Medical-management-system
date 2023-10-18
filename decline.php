<?php

$con = mysqli_connect("localhost","root","","medical");


if ($_GET['surgeonid'])
{
	$str1 = "Update surgeonmaster set status='decline' where surgeonid=".$_GET['surgeonid'];
mysqli_query($con,$str1);

}


header("location:surgeonReg.php");
?>



