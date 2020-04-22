<?php
include "connection.php";

$up_id		= $_POST['up_id'];
$name		= $_POST['cname'];
$phone		= $_POST['cphone'];
$email		= $_POST['cemail'];
$address	= $_POST['caddress'];
$gender		= $_POST['cgender'];
$state		= $_POST['state_id'];

$sql = "UPDATE `customer` SET `cname` = '$name',`cphone` = '$phone',`cemail` = '$email',`caddress` = '$address',`cgender` = '$gender',`city` = '$state' WHERE `cid` = '$up_id'";
$db->query($sql);

header('location:index.php');


?>