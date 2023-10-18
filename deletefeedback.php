<?php include_once 'top_header.php';?>
<?php 
if(!empty($_GET['id'])){
    $id=$_GET['id'];
    $query = "DELETE FROM `feedback` WHERE `feed_id` = ".$id;
	$result= $mysqli->query($query);
    echo "<script>location.href = 'viewfeedback.php';</script>";
}
?>