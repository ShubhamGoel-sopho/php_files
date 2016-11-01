<?php

/*
 * Read input from stdin and provide input before running code

fscanf(STDIN, "%s\n", $name);
echo "Hi, ".$name;

*/


fscanf(STDIN, "%d\n", $n);

for ($i = 0; $i < $n; $i++) {
	
	 // code...
	 $str = trim(fgets(STDIN));
	 $str_arr = str_split($str);
	 $length = count($str_arr);
	 
	 if($length == 1)  //checked for length = 1
     {
     	echo "No";
     	printf("\n");
     }
     elseif ($length == 2) { //for length equal to 2
     	// code...
     	if($str_arr[0] == $str_arr[1])
     	{
     		echo "Yes";
     		printf("\n");
     	}
     	else
     	{
     		echo "No";
     		printf("\n");
     	}
     	
     }
     else  // for length > 2
     {
     	while($length > 2){
     		
	     	$mid = floor(($length-1)/2);
	     	if($length%2 == 1)
	     	{
	     	    //if we have a odd length the  we are in exact middle 
	     	    $temp1 = substr($str,0,$mid);
	     	    $temp2 = substr($str,$mid+1,$mid);
	     	    if($temp1 == $temp2)
	     	    {
	     	    	echo "Yes";
     				printf("\n");
     				break;
	     	    	
	     	    }
	     	    else{
	     	    	$temp = $temp1.$temp2;
	     	    }
	     	}
	     	else
	     	{
	     		//in even length is there then we are -1 place to the mid index
	     		$temp1 = substr($str,0,$mid+1);
	     		$temp2 = substr($str,$mid+1,$mid+1);
	     		if($temp1 == $temp2)
	     		{
	     			echo "Yes";
	     			printf("\n");	
	     			break;
	     		}
	     		else
	     		{
	     			$temp1 = substr($str,0,$mid);
	     	    	$temp2 = substr($str,$mid+1,$mid);
	     		}
	      	}
	     }
    }
}

?>
