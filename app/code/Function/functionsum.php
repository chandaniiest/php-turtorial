<?php
function Summation() {
	$a = 50;
	$b = 50;
	$c = $a + $b;
	//print "Summation is $c";
	return $c;
}
print "Summation is = ".Summation();
?>
<hr>
<?php
function MySummation($a,$b) {

	$c = $a + $b;
	print "My Summation is $c";
}
MySummation(40,50);
?>
