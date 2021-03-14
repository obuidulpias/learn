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

        
    $salary=array("Sonoo"=>"550000","Vimal"=>"250000","Ratan"=>"200000");  
    foreach($salary as $k => $v) {  
        echo "Key: ".$k." Value: ".$v."<br/>";  
    }    

    $emp = array (  
        array(1,"sonoo",400000),  
        array(2,"john",500000),  
        array(3,"rahul",300000)  
    );  
        
    for ($row = 0; $row < 3; $row++) {  
        for ($col = 0; $col < 3; $col++) {  
            echo $emp[$row][$col]."  ";  
        }  
        echo "<br/>";  
  
    }
    
?>