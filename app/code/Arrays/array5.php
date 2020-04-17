<?php
$arr = ["Tom","Bill",123,34.56,false,"Harry"];
$arr[] = "Sam"; // [] Array Identifier
$arr[50] = 3456;

foreach($arr as $index=>$value) {
	print "$index - $value<br>";
}





?>