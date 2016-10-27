<?php

/*
 * Read input from stdin and provide input before running code

fscanf(STDIN, "%s\n", $name);
echo "Hi, ".$name;

*/

$fact = 1;
$n;
fscanf(STDIN, "%d", $n);

while($n > 0)
{
	$fact = $fact* $n;

	$n--;
}
echo $fact;
?>
