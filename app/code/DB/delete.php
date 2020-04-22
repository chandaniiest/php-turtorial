<?php
include "connection.php";
$sql = "DELETE FROM `customer` WHERE `cid` = '$_GET[del_id]'";
$db->query($sql);

header('location:index.php');

?>