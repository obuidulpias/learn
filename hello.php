<?php

    $myArray = [1,2,3,4,5,6,7,8,9];
    $arrlength = count($myArray);
    //echo $arrlength;

    $sum = 0;
    for( $i=0; $i<$arrlength; $i++) {
        //echo  "$myArray[$i]<br>";

        $value =$myArray[$i];
        $sum = $sum + $value;
        echo "$sum<br>";
    };
    echo $sum;

    
    for ($i=0; $i<5; $i++) {
        for($j=0; $j<$i; $j++) {
            //echo $i, $j;
            echo "*";
        }; echo "<br>";
    };
    for ($i=0; $i<5; $i--) {
        for($j=0; $j<$i; $j++) {
            //echo $i, $j;
            echo "*";
        }; echo "<br>";
    };

    
    
?>