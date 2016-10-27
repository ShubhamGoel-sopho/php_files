<?php

/*
 * Read input from stdin and provide input before running code

fscanf(STDIN, "%s\n", $name);
echo "Hi, ".$name;

*/
$bob = array();
$alice = array();
$bob_sum = 0;
$alice_sum = 0;
$T;
fscanf(STDIN, "%d", $T);
while($T >= 1)
{
	fscanf(STDIN, "%d", $N);
    $x = trim(fgets(STDIN));
    $y = trim(fgets(STDIN));
    $bob = explode(" ",$x);
    $alice = explode(" ",$y);
    
    $bob_sum = array_sum($bob);
    $alice_sum = array_sum($alice);
    $bob = array();
    $alice = array();
    
    if($bob_sum > $alice_sum)
    {
    	echo 'Bob';
    	printf("\n");
    }
    elseif($alice_sum > $bob_sum) {
    	// code...
    	echo 'Alice';
    	printf("\n");
    	
    }
    else{
    	echo "Tie";
    	printf("\n");
    }
     
	$T= $T - 1;
}

?>
