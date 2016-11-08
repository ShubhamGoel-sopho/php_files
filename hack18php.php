<?php

/*
 * Read input from stdin and provide input before running code

fscanf(STDIN, "%s\n", $name);
echo "Hi, ".$name;

*/

$x = fgets(STDIN);
$x_array = explode(" ", $x);
$n = $x_array[0];
$value = $x_array[1];
$main = fgets(STDIN);
$main_array = explode(" ", $main);
$max_count = 0;
$subarraysize = 1;
$count = 0;
for ($index=1; $index < $n  ; $index++) { 
	# code...
    for ($i=0; $i < $n ; $i += 1) { 
    	# code...
    	$count = 0;
    	$sum = 0;
    	for ($j=$i; $j < ($index+$i) ; $j++) { 
    		# code...
    		$sum += $main_array[$j];

    	}
    	if($sum > $value)
    	{
    		$count++;
    	}
	}
	if($count > $max_count)
	{
		$max_count = $count;
		$subarraysize = $index;
	}


}







?>
