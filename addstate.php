<?php
$con =  mysqli_connect("localhost","root","","medical");
$a=$_POST['statename'];
$b=$_POST['status'];

$str = "INSERT INTO statemaster(statename, status) values('$a','$b')"; 
mysqli_query($con,$str);

//var_dump($str);
header("location:state_master.php");
?>