<?php

/*
 * Read input from stdin and provide input before running code

fscanf(STDIN, "%s\n", $name);
echo "Hi, ".$name;

*/
	$a1 = 1;
    $a2 = 10;
function calculate($t)
{
	
	
	global $memo;
    if($t == 1)
    {
    	return $GLOBALS['a1'];
    }
    if($t == 2)
    {
    	return $GLOBALS['a2'];
    }
    if($memo[$t] != -1)
    {
    	return $memo[$t];
    }
   
    
    	$memo[$t]  = ((calculate($t-1))+(2*calculate($t-2)));
    	return $memo[$t];
    
   
}

function calcmod($compute)
{
	
    
   $X = pow(10,9)+7;
   $modulo = 0;

   for ($i=0; $i < count($compute); $i++) { 
   	# code...
   		$modulo = (($compute[$i] % $X) + ($modulo % $X))%X;
   }

   return modulo;
  
}



fscanf(STDIN, "%d", $T);

$memo = array();
for($q = 0;$q <100001;$q++)
{
	array_push($memo,-1);
}



for($i=0;$i<$T;$i++)
{
	$compute = array();

	$temp = trim(fgets(STDIN));
	$temp_array = explode(" ",$temp);
	$m = $temp_array[0];
	$n = $temp_array[1];
	
	$sum = 0;
	if($m > 1){
		$calval = calculate($m);
		$calval1 = calculate($m-1);
		array_push($compute,$calval);
	    for($j = $m+1;$j<= $n;$j++)
	    {
	    	$tempval = $calval + 2*$calval1;
	
	    	array_push($compute,$tempval);
	        	$calval1 = $calval;
	    	$calval = $tempval;
	    
	    }
	}
	elseif($m == 1)
	{
		$calval = 10;
		$calval1 = 1;
		array_push($compute,$calval1);
	    array_push($compute,$calval);
		
	    for($j = $m+2;$j<= $n;$j++)
	    {
	    	$tempval = $calval + 2*$calval1;
	
	    	array_push($compute,$tempval);
	    	$calval1 = $calval;
	    	$calval = $tempval;
	    	
	    }
	}
	//$sum = array_sum($compute);
	//unset($compute);
	$mod = calcmod($compute);
	echo $mod;
	print("\n");
	unset($mod);
	unset($calval);
	unset($calval1);
	unset($tempval);
	
}



?>
