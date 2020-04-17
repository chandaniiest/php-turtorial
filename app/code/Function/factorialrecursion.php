<?php
function MyFactorial($num) {
	if($num==1) {
		return 1;
	}

	return $num * MyFactorial($num-1);	
}

print "<br>Factorial = ".MyFactorial(5);
print "<br>Factorial = ".MyFactorial(4);
print "<br>Factorial = ".MyFactorial(7);
?>