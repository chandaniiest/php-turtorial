<?php
$arr = ["Tom","Bill",123,34.56,false,"Harry"];
$arr[] = "Sam"; // [] Array Identifier

$length = count($arr);
//print $arr[2];
for($i=0; $i<$length; $i++) {
	print "$i $arr[$i]<br>";

}





?>