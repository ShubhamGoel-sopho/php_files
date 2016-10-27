<?php

/*
 * Read input from stdin and provide input before running code

fscanf(STDIN, "%s\n", $name);
echo "Hi, ".$name;

*/
$nos;
fscanf(STDIN,"%d\n",$nos);

while($nos != 42)
{
	echo $nos;
	printf("\n");
	fscanf(STDIN,"%d\n",$nos);
	
}


?>
