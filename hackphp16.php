<?php

/*
 * Read input from stdin and provide input before running code

fscanf(STDIN, "%s\n", $name);
echo "Hi, ".$name;

*/

fscanf(STDIN,"%d\n",$n);
$xor = trim(fgets(STDIN));
$xor_array = explode(" ",$xor);
$assoc_array = array();
for($i=0;$i<$n;$i++)
{
    $sum = 0;
    $copy =$xor_array[$i];
    while($copy != 0)
    {
        $sum += $copy % 10;
        $copy = $copy/10;
    }
    $XOR = $xor_array[$i] ^ ($sum);
    array_push($assoc_array,$XOR);
}
print_r(array_count_values($assoc_array));



?>
