<?php

$x = trim(fgets(STDIN));
$x_array = explode(" ", $x);
$val1 = $x_array[0];
$val2 = $x_array[1];
$heightl = array();
$heightg = array();
for ($index=0; $index < $val1; $index++) { 
	# code...
    $x1 = trim(fgets(STDIN));
	$x1_array = explode(" ", $x1)
	array_push($heightl, $x1_array[0]);
	array_push($heightg, $x1_array[1]);

	unset($x1_array);
	unset($x1);
}


for ($i=0; $i < $val2; $i++) { 
	# code...
	fscanf(STDIN,"%d",$height);
	$index = 0;
	while (true) {
		# code...
		$increment = $heightl[$index];
        while ($heightl[$index]<=$heightg[$index]) {
         	# code...
            

         } 


	}


}



?>