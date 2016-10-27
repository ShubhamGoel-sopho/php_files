<?php

/*
 * Read input from stdin and provide input before running code

fscanf(STDIN, "%s\n", $name);
echo "Hi, ".$name;
h - 2 times
a - 2 times
e - 2 times
r - 2 times
*/

$hack = ['h'=>0,'a'=>0,'c'=>0,'k'=>0,'e'=>0,'r'=>0,'t'=>0];
$n = trim(fgets(STDIN));
$i = trim(fgets(STDIN));

$main = str_split($i);//spilts the string in to an Array
$n = count($main);//counts the no. of blocks of the array gives no of blocks+1 as ;

$counth = 0;
$counta = 0;
$countc = 0;
$countk = 0;
$counte = 0;
$countr = 0;
$countt= 0;

for($i=0;$i<($n-1);$i++)
{
	if($main[$i] == 'h')
	{
		$hack['h'] = ++$counth;
	}
	else if($main[$i] == 'a')
	{
		$hack['a'] = ++$counta;
	}
	else if($main[$i] == 'c')
	{
		$hack['c'] = ++$countc;
	}
	else if($main[$i] == 'k')
	{
		$hack['k'] = ++$countk;
	}
	else if($main[$i] == 'e')
	{
		$hack['e'] = ++$counte;
	}
	else if($main[$i] == 'r')
	{
		$hack['r'] = ++$countr;
	}
	else if($main[$i] == 't')
	{
		$hack['t'] = ++$countt;
	}
}

/*$logic1 = $hack['t'];
$flag = false;

while($logic1--)
{
	if($hack['h'] == 2*$logic1 && $hack['a'] == 2*$logic1 && $hack['c'] == $logic1 && $hack['k'] == $logic1 && $hack['e'] == 2*$logic1 && $hack['r'] == 2*$logic1){
	
		$flag  = true;
		break;
	}
	
}
if($flag)
{
	echo $logic1;
}*/


$set = 0;

while(true)
{
	if($counth >=2)
	{
		$counth -= 2;
	}
	else
	{
		break;
	}
	if($counta >=2)
	{
		$counta -=2 ;
	}
	else
	{
		break;
	}
	if($countc >=1)
	{
		$countc-- ;
	}
	else
	{
		break;
	}
	if($countk >=1)
	{
		$countk-- ;
	}
	else
	{
		break;
	}
	if($counte >= 2)
	{
		$counte -=2 ;
	}
	else
	{
		break;
	}
	if($countr >= 2)
	{
		$countr -=2 ;
	}
	else
	{
		break;
	}
	if($countt >= 1)
	{
		$countt -= 1 ;
	}
	else
	{
		break;
	}
	
	$set++;
}

echo $set;
?>
