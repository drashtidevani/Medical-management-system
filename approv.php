<?php

$con = mysqli_connect("localhost","root","","medical");


$a = $_POST["a"] ;
echo $a;


if ($_GET['surgeonid'] && $a == 'approv')
 {
	# code...
$str = "Update surgeonmaster set status='approve' where surgeonid=".$_GET['surgeonid'];
mysqli_query($con,$str);
}
if ($_GET['surgeonid'] && $a == 'decline')
{
	$str1 = "Update surgeonmaster set status='decline' where surgeonid=".$_GET['surgeonid'];
mysqli_query($con,$str1);

}


header("location:surgeonapproval.php");
?>



