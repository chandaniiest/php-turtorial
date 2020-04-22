<!DOCTYPE html>
<html>
<head>
<script src="jquery.js"></script>


<script>
		$(document).ready(function(){
			$("#b1").click(function(){
				$("img").hide(1000); //speed parameter
			});
		});
		$(document).ready(function(){
			$("#b2").click(function(){
				$("img").show(1000);
			});
		});
	</script>
</head>
<body>
	<img src = "cat.jpg" width = 450><br><br>
	<button id = "b1">Hide</button>&nbsp;&nbsp;<button id = "b2">Show</button>
</body>
</html>