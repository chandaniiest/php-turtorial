<html>
<!--	The :eq() selector selects an element with a specific index number.

		The index numbers start at 0, so the first element will have the index number 0 (not 1). -->

   <head>
      <title>The JQuery Example</title>
      <script 
         src = "jquery.js">
      </script>
		
      <script>
         $(document).ready(function() {
			 $("li").css({"font-size": "200%"})
            $("li").eq(8).addClass("selected");
         });
      </script>
		
      <style>
         .selected { color:red; }
      </style>
   </head>
	
   <body>
      <div>
         <ul>
            <li>list item 1</li>
            <li>list item 2</li>
            <li >list item 3</li>
            <li>list item 4</li>
            <li>list item 5</li>
            <li>list item 6</li>
         </ul>
		 <ul>
            <li>list item 1</li>
            <li>list item 2</li>
            <li >list item 3</li>
            <li>list item 4</li>
            <li>list item 5</li>
            <li>list item 6</li>
         </ul>
      </div>
   </body>
</html>