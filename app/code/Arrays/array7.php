<?php
$a = ["Tom","Bill",123,34.56,true,"Harry"];
$b = ["Tommy","Billy",23,340.89];
$c = ["Rose","Butterfly",false];
$arr = [$a,$b,$c]; //2D array
//print $b[2];
print "Array:".$arr[1][3];

foreach($arr as $i=>$v) {
	print "<br>$i - $v<br>";

	foreach($v as $key=>$val) {
		print "<br>$key = $val<br>";
	}
}
?>
