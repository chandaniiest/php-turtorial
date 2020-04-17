<?php
//$arr = ["John","Gates",89,"Orange"]; //Indexing Array
$arr = [
		"Name"=>"John",
		"Address"=>"Kolkata",
		"Gates",
		45,
		"Phone"=>75895959,
		true
		];
foreach($arr as $index=>$value) {
	print "$index - $value<br>";
}
?>
