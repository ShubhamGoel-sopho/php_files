<?php

/*
 * Read input from stdin and provide input before running code

fscanf(STDIN, "%s\n", $name);
echo "Hi, ".$name;

*/
fscanf(STDIN, "%d", $n);
$x = array();
$y = array();
for ($i = 0; $i < $n; $i++) {
      // code...
      $test = trim(fgets(STDIN));
      $test_array = explode(" ",$test);
      array_push($x,$test_array[0]);
      array_push($y,$test_array[1]);
      unset($test_array);
      unset($test);
}

fscanf(STDIN, "%d", $q);
for ($i = 0; $i < $q; $i++) {
      // code...
      fscanf(STDIN, "%d", $radius);
      
      //processing starts here
     $count = 0;    
     for ($j = 0; $j < $n ; $j++) {
           // code...
          $sqx = pow($x[$j],2);
          $sqy = pow($y[$j],2);
          $sqr = pow($radius,2);
          if($sqx+$sqy <= $sqr)
          {
               $count = $count+1;
          }


           
     }
     
      echo $count."\n";
      /*unset($count);
      unset($radius);*/
      
}

unset($x);
unset($y);



?>
