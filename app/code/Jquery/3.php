<html>
<head>
	<script src="jquery.js">
	</script>
	<script>
	$(document).ready(function(){
		$("#p1").mouseenter(function(){
			alert('You have entered the Paragraph');
		});
	});
	$(document).ready(function(){
		$("#p2").mouseleave(function(){
			alert('BYE !!');
		});
	});
	</script>
</head>
<body>
<h1>jQuery</h1>
	<p>Dont Click On Me </p>
	<p id = "p1">Please enter this paragraph.</p><BR>
	<p id = "p2">Hello</p>
</body>
</html>