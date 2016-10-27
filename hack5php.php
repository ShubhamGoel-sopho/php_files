<?php

/*
 * Read input from stdin and provide input before running code

fscanf(STDIN, "%s\n", $name);
echo "Hi, ".$name;

*/

$luck = trim(fgets(STDIN));
$flag1 = strpos($luck,"111111");
$flag2 = strpos($luck,"000000");
if($flag1 != false && $flag2 != false)
{
	echo "Good luck!";
}
else {
	// code...
	echo "Sorry, sorry!";
}
?>
