<?php

/*
 * Read input from stdin and provide input before running code

fscanf(STDIN, "%s\n", $name);
echo "Hi, ".$name;

*/
$n;
$str;
$count = 0;
$arr = array();
fscanf(STDIN, "%s\n", $n);
for ($i = 0; $i < $n; $i++) {
	 // code...
	 $str = trim(fgets(STDIN));
	 $arr = str_split($str) ; //spilts the string in to the array;
	 $flag = true;
	 $index = 0;
	 $len = count($arr);
	 
	 
     while(!empty($arr))
     {
     	$temp = end($arr);
     	array_pop($arr);
     	if($temp ==  'A')
     	{
     		if(end($arr) == 'A')
     		{
     			array_pop($arr);
     		}
     		else
     		{
     			array_pop($arr);
     		
     			if(end($arr) == 'A')
     			{$flag = false;
     			break;}
     		}
     		
     	}
     	else
     	{
     		if(end($arr) == 'B')
     		{
     			array_pop($arr);
     		}
     		else
     		{
     			array_pop($arr);
     		
     			if(end($arr) == 'B')
     			{$flag = false;
     			break;}
     		}
     	}
     }
	
	 if($flag == true)
     {
     	$count++;
     }	 
}
echo $count;

?>
