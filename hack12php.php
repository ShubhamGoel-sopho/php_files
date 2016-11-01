<?php

/*
 * Read input from stdin and provide input before running code

fscanf(STDIN, "%s\n", $name);
echo "Hi, ".$name;

*/

$str = trim(fgets(STDIN)); //will take the standard input as  a string
$arr = str_split($str); //converts the string in to the arrary

$len = count($arr); //count the lenght of the string 
$main = array();





$main =array_count_values($arr); // this is heart of programm counts the no of value associated with each key

$value = max($main); // find the maximum element of the array
$key = array_search($value, $main); //returns the corresponding key 

echo $key.' '.$value



?>
