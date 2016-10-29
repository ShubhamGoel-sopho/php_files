<?php

/*
 * Read input from stdin and provide input before running code

fscanf(STDIN, "%s\n", $name);
echo "Hi, ".$name;

*/
$N;
fscanf(STDIN,"%d\n",$N);
$temp;    
$rating = array();
for($i=0;$i<$N;$i++)
{
	fscanf(STDIN,"%d\n",$temp);
	array_push($rating,$temp);
	unset($temp);
	
}

    $sum=0;
    $index = count($rating) -1;
 
 while($index >= 1)
 {
 	if($rating[$index] == 0)
	{
		$rating[$index-1] = 0;
		$index = $index-2;
	}
	else
	{
		$index = $index-1;
	}

 } 
 
 
 
    for($i=0;$i<$N;$i++)
    {
    	$sum += $rating[$i];
    }
    
echo $sum;


?>
