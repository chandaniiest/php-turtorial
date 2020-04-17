<?php
function MyFactorial($num) {
	$fact = 1;
	for($i=1; $i<=$num; $i++) {
		$fact = $fact * $i;
	}
	print "Factorial = $fact<br>";
}
MyFactorial(5);
MyFactorial(4);
MyFactorial(7);
?>