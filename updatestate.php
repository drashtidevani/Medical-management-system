
<?php
$con =  mysqli_connect("localhost","root","","medical");
                    
$a=$_POST['statename'];
$b=$_POST['status'];

$str = "UPDATE statemaster SET statename='$a', status='$b' where stateid=".$_GET['stateid']; 
mysqli_query($con,$str);

//var_dump($str);
header("location:state_master.php");
?>