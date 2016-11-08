<?php

/*
 * Read input from stdin and provide input before running code

fscanf(STDIN, "%s\n", $name);
echo "Hi, ".$name;

a - 2 times

*/
fscanf(STDIN,"%d",$T);

for($j=0;$j<$T;$j++){
        $hack = ['d'=>0,'o'=>0,'r'=>0,'a'=>0,'c'=>0,'k'=>0,'e'=>0];
        
        $i = trim(fgets(STDIN));
        
        $main = str_split($i);//spilts the string in to an Array
        $n = count($main);//counts the no. of blocks of the array gives no of blocks+1 as ;
        
        $countd = 0;
        $counto = 0;
        $countr = 0;
        $counta = 0;
        $countc = 0;
        $countk = 0;
        $counte = 0;
        
        for($i=0;$i<($n);$i++)
        {
        	if($main[$i] == 'd')
        	{
        		$hack['d'] = ++$countd;
        	}
        	else if($main[$i] == 'o')
        	{
        		$hack['o'] = ++$counto;
        	}
        	else if($main[$i] == 'r')
        	{
        		$hack['r'] = ++$countr;
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
        }
        
       
        
        $set = 0;
        
        while(true)
        {
        	if($countd >=1)
        	{
        		$countd -= 1;
        	}
        	else
        	{
        		break;
        	}
        	if($counto >= 1)
        	{
        		$counto -=1 ;
        	}
        	else
        	{
        		break;
        	}
        	if($countr >=1)
        	{
        		$countr -= 1 ;
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
        	if($countc >= 1)
        	{
        		$countc -=1 ;
        	}
        	else
        	{
        		break;
        	}
        	if($countk >= 1)
        	{
        		$countk -=1 ;
        	}
        	else
        	{
        		break;
        	}
        	if($counte >= 1)
        	{
        		$counte -= 1 ;
        	}
        	else
        	{
        		break;
        	}
        	
        	$set++;
        }
        
        echo $set;
        print("\n");
}
?>
