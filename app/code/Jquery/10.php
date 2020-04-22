<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="jquery.js"></script>


<script> 
		$(document).ready(function(){
			$("button").click(function(){
				$("div").animate({left: '450px'});
			});
		});
	</script> 
</head>
<body>
<center>
<h1>Animate</h1>
<button>Start Animation</button>
</center>
	<div style="width:100px;height:100px;background:#ff3399;position:absolute;"></div><br>
</body>
</html>