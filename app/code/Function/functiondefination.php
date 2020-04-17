PHP User Defined Functions:-
	Besides the built-in PHP functions, we can create our own functions.

	A function is a block of statements that can be used repeatedly in a program.

	A function will not execute immediately when a page loads.

	A function will be executed by a call to the function.


Function Declaration:-
	A user-defined function declaration starts with the word function:

Example:-
<hr>
<?php
function writeMsg() {
    echo "Hello world!";
}
writeMsg(); // call the function
?>
<hr>
PHP Function Arguments:-

Information can be passed to functions through arguments. An argument is just like a variable.

Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want, just separate them with a comma.

The following example has a function with one argument ($fname). When the familyName() function is called, we also pass along a name (e.g. Jani), and the name is used inside the function, which outputs several different first names, but an equal last name:

Example:-
<hr>
<?php

function familyName($fname,$lname) {
    echo "$fname $lname.<br>";
}
//print $lname;
//familyName();

//familyName();
familyName("Jani","Refsnes");
familyName("Hege","Refsnes");

//familyName("Stale");
//familyName("Kai Jim");
//familyName("Borge");
?>
<hr>
<?php
date_default_timezone_set("Asia/Kolkata");
$time = time(); //1970 1st Jan milliseconds  timestamp //5678990 // 1:15 - 28th june
print $time."<hr>";

$date = date("D-d-m-y,H:i:s ",$time); // H for 24 hrs,h for 12 hrs and give a
print $date;
?>