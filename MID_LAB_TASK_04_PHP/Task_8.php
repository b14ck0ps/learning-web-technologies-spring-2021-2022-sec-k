<?php
    $array = [
        [1,2,3,'A'],
        [1,2,'B','C'],
        [1,'D','E','F']
    ];
    foreach ($array as $i => $arr){
        foreach ($arr as $i){
            if(is_int($i)){
                echo $i." ";
            }
        }
        echo "<br>";
     }

?>
