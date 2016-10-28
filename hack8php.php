<?php






$n = trim(fgets(STDIN));

$i = trim(fgets(STDIN));

$j = trim(fgets(STDIN));

$ai = explode(" ",$i);

$aj = explode(" ",$j);

$ak = array();


for($i=0;$i<$n;$i++)

{
	
$x = $aj[$i]+$ai[$i];
	
$ak[] = $x;
}




for($i=0;$i<$n;$i++)

{
	
echo($ak[$i].' ');


}





?>
