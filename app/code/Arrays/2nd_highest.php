<?php
$arr = [34,67,45,12,77,68,1,89,99];

for($i=0;$i<count($arr);$i++) {
	for($j=$i+1;$j<count($arr);$j++) {
		if($arr[$i]<$arr[$j]) {

			$temp		= $arr[$i];
			$arr[$i]	= $arr[$j];
			$arr[$j]	= $temp;
		}	
	}
	print "$arr[$i]<br>";	
}
print "2nd Highest Number: $arr[1]";


?>
