<?php
$arr = [34,67,45,12,77,68,1,89,99];
$max = $arr[0]; //34
$min = $arr[0];
for($i=0;$i<count($arr);$i++) {
	if($arr[$i]>$max) {
		$max = $arr[$i];
	}
	if($arr[$i]<$min) {
		$min = $arr[$i];
	}
}
print "Maximum Value = $max<br> Minimum Value = $min";
?>
