<?php

/*
 * Read input from stdin and provide input before running code

fscanf(STDIN, "%s\n", $name);
echo "Hi, ".$name;

*/


$actual = array();
$Narray = array();
fscanf(STDIN,"%d",$T);



//print_r($actual);
//print_r($Narray);




while($T>=1){
    $N = trim(fgets(STDIN));
    $Narray = explode(" ",$N);
    $Array =trim(fgets(STDIN));
    $actual = explode(" ",$Array);
    
    unset($N);
    unset($Array);
    $rotations = $Narray[1];
    $coun = count($actual);
    
   
    for($i=0;$i<$rotations;$i++)
    {
        $last = $actual[$coun-1];
        for($j=1;$j<=($coun-1);$j++)
        {
            $actual[$coun-$j] = $actual[$coun-$j-1];
        }
        $actual[0] = $last;
        unset($last);
    }
    
    
    
    echo implode(" ",$actual);
	echo "\n";
    unset($actual);
    $T = $T-1;
}



?>
