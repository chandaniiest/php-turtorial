<html>
<head>
	<script src = "jquery.js"></script>
	<script>
		$(document).ready(function(){
			$("button").dblclick(function(){
				$("#demo").hide(4000);
			});
		});
	</script>
</head>
<body>
	<p id = "demo"> Let me disappear</p>
	<p> Let me disappear</p>
	<button>Click Me!!</button>
</body>
</html>