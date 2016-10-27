<?php

/*
 * Read input from stdin and provide input before running code

fscanf(STDIN, "%s\n", $name);
echo "Hi, ".$name;

*/

$init = trim(fgets(STDIN));

$array_init = str_split($init);
$n = count($array_init);
$x = 0 ;
$y = 0;

for($i = 0;$i<$n;$i++)
{
	if($array_init[$i] == 'L')
	{
		--$x;
	}
	elseif($array_init[$i] == 'R')
	{
		++$x;
	}
	elseif($array_init[$i] == 'D')
	{
		--$y;
	}
	else
    {
    	++$y;
    }
}

echo $x.' '.$y;

?>
