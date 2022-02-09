<?php
function piramidStar(){
    for ($i=1; $i<=5; $i++)	
    {	 
        for($j=1;$j<=$i;$j++)	  
        {	  	
            echo "*"." ";	 
        }	  	
        echo "<br/>";   	
    }
}

function abcPiramid(){
    $n = 3;
    $num = 65;
    for ($i = 0; $i < $n; $i++)
    {
        for ($j = 0; $j <= $i; $j++ )
        {
            $ch = chr($num);
            echo $ch." ";
            $num = $num + 1;
        }
        echo "<br>";
    }
}

function revPiramid(){ 
    for($i=0;$i<=2;$i++){  
        for($j=$i+1;$j<=3;$j++){  
        echo $j." ";
        $j=0;  
        }  
        echo "<br>";  
        }   
}

    piramidStar();
    echo "<br>";
    abcPiramid();
    echo "<br>";
    revPiramid();

    

?>

