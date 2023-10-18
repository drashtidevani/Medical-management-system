<?php include_once 'top_header.php';?>
<?php 
if(!empty($_GET['id'])){
    $id=$_GET['id'];
    $query = "DELETE FROM `package` WHERE `package_id` = ".$id;
	$result= $mysqli->query($query);
    echo "<script>location.href = 'viewpackage.php';</script>";
}
?>