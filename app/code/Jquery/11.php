<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="jquery.js"></script>


<script> 
		$(document).ready(function(){
			$("button").click(function(){
				$("div").animate({
					left: '400px',
					opacity: '0.5',
					height: '150px',
					width: '150px'
				});
			});
		});
	</script> 
</head>
<body>
<center>
<h1>Animate(Multiple Properties)</h1>
<button>Start Animation</button>
</center>
	<div style="width:100px;height:100px;background:#003366;position:fixed;"></div><br>
</body>
</html>