<?php

/*
 * Read input from stdin and provide input before running code

fscanf(STDIN, "%s\n", $name);
echo "Hi, ".$name;

*/
$x = trim(fgets(STDIN));
$x_array = explode(" ",$x);
$left_height = array();
$right_height = array();
$main = array();

for ($i = 0; $i < $x_array[0]; $i++) {
	 // code...
	 $height = trim(fgets(STDIN));
	 $height_array = explode(" ",$height);
	
	 
	 	array_push($main,$height_array[0]);
	 	array_push($main,$height_array[1]);
	 	
	 
}
for($i = 0;$i< $x_array[1];$i++)
{
	fscanf(STDIN, "%d", $q);
	 $prev = 0;
	for ($index = 0; $index < count($main); $index +=2) {
		 // code...
		 $left = $main[$index];
		 $right = $main[$index+1];
		
		 if((($right - $left + 1 )+$prev) >= $q)
		 {
		 	echo ($left+$q-1-$prev)."\n";
		 	break;
		 }
		 else {
		 	$prev += $right - $left + 1 ;
		 }
		 
	}
	
	
}	
	
//	echo $q."\n";
	
	
	
	
//	echo $main[$q-1]."\n";




?>
