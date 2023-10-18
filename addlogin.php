<?php

$a = $_POST['uname'];
$b = $_POST['pass'];


if($a == 'admin' && $b == 'admin')
{
    header("location:home.php");
}



?>