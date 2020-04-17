<?php
$arr = [34,67,45,12,77,68,1,89,99];
for($i=0;$i<count($arr);$i++) {
	$sum = $sum + ($arr[$i]*$arr[$i]);
}
print "Summation: $sum";
?>
