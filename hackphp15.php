<?php

/*
 * Read input from stdin and provide input before running code

fscanf(STDIN, "%s\n", $name);
echo "Hi, ".$name;

*/
function compare_common_chars($jhool,$comp)
{
    $count = 0;
    
    $tes = str_split($comp);
    $test = array_unique($tes);
    $ct = count($test);
    for($i = 0;$i<$ct;$i++)
    {
        if(stripos($jhool,$test[$i]) !== false)
        {
            $count++;
        }
    }
    
    return $count;
}

fscanf(STDIN, "%d\n", $n);
$jhool = "littlejhool";
for($i=0;$i<$n;$i++)
{
    $result = array();
    
    $query = trim(fgets(STDIN));
    $query_array = explode(" ",$query);
    $strings = trim(fgets(STDIN));
    $strings_array = explode(" ",$strings);
    $count_strings = count($strings_array);
    
    for($j=0;$j<$count_strings;$j++)
    {
        $r = compare_common_chars($jhool,$strings_array[$j]);
        $result[] = array($strings_array[$j] => $r);
    }
   //asort($result);
    /*foreach($result as $k => $k_value)
    {
        print($k." ".$k_value);
        print("\n");
    }*/
    print_r($result);
   
    
    
    
}


?>
