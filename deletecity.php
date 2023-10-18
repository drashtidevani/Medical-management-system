<?php include_once 'top_header.php';?>
<?php 
if(!empty($_GET['id'])){
    $id=$_GET['id'];
    $query = "DELETE FROM `city` WHERE `city_id` = ".$id;
	$result= $mysqli->query($query);
    echo "<script>location.href = 'viewcity.php';</script>";
}
?>