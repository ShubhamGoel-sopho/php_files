<?php

/*
 * Read input from stdin and provide input before running code

fscanf(STDIN, "%s\n", $name);
echo "Hi, ".$name;

*/

$N;
$T;
fscanf(STDIN, "%d", $T);
$Array = array();

for ($i = 0; $i < $T; $i++) {
	 // code...
	 fscanf(STDIN,"%d",$N);
	 $temp = trim(fgets(STDIN));
	 $Array = explode(" ",$temp);
	 $Array2 = array_count_values($Array);
	 
	$max = max($Array2); // find the maximum element of the array
    $key1 = array_search($value, $Array2); //returns the corresponding key 
    $min =min($Array2); // find the minimum element of the array
    $key2 = array_search($min, $Array2); //returns the corresponding key
    
    if($max-$min > 0)
    {
    	echo $max-$min;
    	print("\n");
    }
    else
    {
    	echo "-1";
    	print("\n");
    }
	 
}



?>
