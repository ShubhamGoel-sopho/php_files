<?php

/*
 * Read input from stdin and provide input before running code

fscanf(STDIN, "%s\n", $name);
echo "Hi, ".$name;

*/
function IsPrime($n)  
{  
 for($x=2; $x<$n; $x++)  
   {  
      if($n %$x ==0)  
          {  
           return 0;  
          }  
    }  
  return 1;  
   } 
$T = fgets(STDIN);
$case = array();
$case1 = array();

while($T >= 1)
{
	$i = trim(fgets(STDIN));
	$j = trim(fgets(STDIN));
	
	$case = explode(" ",$i);
	$case1 = explode(" ",$j);
	$count = 1;
	$flag = 0;
	foreach($case1 as $no)
	{
		$flag = IsPrime($no);
		if($flag)
		{
			$count++;
		}
	}
	$f = gmp_fact($count);
	$mod = fmod($f,1000000007);
	
	echo $mod;
	printf("\n");
	$T = $T - 1;
	$case = array();
	$case1 = array();
}


?>
