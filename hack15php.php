<?php

/*
 * Read input from stdin and provide input before running code

fscanf(STDIN, "%s\n", $name);
echo "Hi, ".$name;

*/

fscanf(STDIN, "%d", $T);

for ($i = 0; $i < $T; $i++) {
	 // code...
	 $str = trim(fgets(STDIN));
	 $doub = (float) $str;
	// var_dump($doub);
	 //$str_array = str_split($str);
	 
echo rtrim(sprintf('%.'.ini_get('serialize_precision').'f', $doub),'0')."\n"; 
	 
	 
	 
	 
	 
	 
	 
}


?>
