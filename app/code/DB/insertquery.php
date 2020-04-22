<?php
include "connection.php";

$name		= $_POST['cname'];
$phone		= $_POST['cphone'];
$email		= $_POST['cemail'];
$address	= $_POST['caddress'];
$gender		= $_POST['cgender'];
$state_id	= $_POST['state_id'];
$skills		= $_POST['skills']; //

$imp		=implode(",",$skills);

$sql = "INSERT INTO `customer` (`cid`,`cname`,`cphone`,`cemail`,`caddress`,`cgender`,`city`,`skills`) VALUES(NULL,'$name','$phone','$email','$address','$gender','$state_id','$imp')";
$db->query($sql);

header('location:index.php')


?>