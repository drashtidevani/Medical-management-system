<?php

$con = mysqli_connect("localhost","root","","medical");

$str = "Update patient set status='approve' where patient_id=".$_GET['patient_id'];

mysqli_query($con,$str);
header("location:patientapproval.php");
?>


<?php

$con = mysqli_connect("localhost","root","","medical");


$a = $_POST["a"] ;
echo $a;


if ($_GET['patient_id'] && $a == 'approv')
 {
	# code...
$str = "Update patient set status='approve' where patient_id=".$_GET['patient_id'];
mysqli_query($con,$str);
}
if ($_GET['patient_id'] && $a == 'decline')
{
	$str1 = "Update patient set status='decline' where patient_id=".$_GET['patient_id'];
mysqli_query($con,$str1);

}


header("location:patientapproval.php");
?>



