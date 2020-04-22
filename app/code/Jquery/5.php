<!-- 
jQuery Effects

Examples

jQuery hide()
Demonstrates a simple jQuery hide() method.
jQuery hide()
Another hide() demonstration. How to hide parts of text.
jQuery slideToggle()
Demonstrates a simple slide panel effect.
jQuery fadeTo()
Demonstrates a simple jQuery fadeTo() method.
jQuery animate()
Demonstrates a simple jQuery animate() method.
-->

<!DOCTYPE html>
<html>
<head>
<script src="jquery.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $(this).parents(".ex").hide(4000);
  });
});
</script>
<style> 
div.ex
{
	background-color:#e5eecc; WIDTH: 400px;
	padding:7px;
	border:solid 1px #c3c3c3;
}
</style>
</head>
<body>
<h3>Island Trading</h3>
<div class = "ex">123</div>
<div class = "ex" style = "border: 2px solid red;">
hello
<div class = "ex">Hi
	<br>
		<button class="btn">Hide me</button>
		<p>Contact: Helen Bennett</p>
</div>
</div>
<div class = "ex" style= "border:1px solid green">HEllo12334</div>

</body>
</html>

