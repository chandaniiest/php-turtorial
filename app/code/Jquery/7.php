<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="jquery.js"></script>


<script>
		$(document).ready(function(){
			$("#b1").click(function(){
				$("img").toggle(1000); //speed parameter
			});
		});
		
	</script>
</head>
<body>
	<img src = "smiley.jpg" width = 450><br><br>
	<button id = "b1">Show/Hide</button>
</body>
</html>