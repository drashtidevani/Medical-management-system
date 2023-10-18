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
	# code...
$str = "Update patient set status='approve' where patient_id=".$_GET['patient_id'];
mysqli_query($con,$str);


}


header("location:patientReg.php");
?>



