<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="jquery.js"></script>


<script> 
		$(document).ready(function(){
			$("#start").click(function(){
				$("div").animate({
					left: '+=150px'
				});
			});

			$("#back").click(function(){
				$("div").animate({
					left: '-=150px'
				});
			});
		});
	</script> 
</head>
<body>

<br><br>
	<div style="position:relative;"><img src = "cars.jpg"></div><br>
	<button id = "back">Backward</button>
	<button id = "start">Forward</button>
	<br>
</body>
</html>