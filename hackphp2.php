<?php
 
/*
 * Read input from stdin and provide input before running code
 
fscanf(STDIN, "%s\n", $name);
echo "Hi, ".$name;
 
*/
 
$N;
$x;
fscanf(STDIN, "%d\n", $N);
$i=trim(fgets(STDIN));
$a = explode(" ",$i);
 
$count1 = 0;
for($i =0;$i<$N;$i +=3)
{
	
	$count1 += $a[$i];
}
$count2 = 0;
for($i =1;$i<$N;$i +=3)
{
	
	$count2 += $a[$i];
}
 
$count3 = 0;
for($i = 2;$i<$N;$i +=3)
{
	
	$count3 += $a[$i];
}
 
echo $count1.' '.$count2.' '.$count3;
 
?>
