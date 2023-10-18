<?php

$con = mysqli_connect("localhost","root","","medical");





if ($_GET['surgeonid'])
 {
	# code...
$str = "Update surgeonmaster set status='approve' where surgeonid=".$_GET['surgeonid'];
mysqli_query($con,$str);
}



header("location:surgeonReg.php");
?>



