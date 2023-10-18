<?php

$con = mysqli_connect("localhost","root","","medical");

$str = "Update patient set status='approve' where patient_id=".$_GET['patient_id'];

mysqli_query($con,$str);
header("location:patientapproval.php");
?>




<?php

$con = mysqli_connect("localhost","root","","medical");


if ($_GET['patient_id'])
{
	$str1 = "Update patient set status='decline' where patient_id=".$_GET['patient_id'];
mysqli_query($con,$str1);

}


header("location:patientReg.php");
?>



