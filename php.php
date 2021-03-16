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
	
	//indexed array
$people = array('pias', 'sami', 'sazzad');
//echo $people[2];

$ids = array(23, 55, 12);
$cars =['honda', 'Toyota', 'Ford'];

//echo $cars[1];

//echo count($cars);
//print_r($cars);

//associative arrays
$people = array(
  'name' => 'Pias', 
  'age' => 32, 
  'address' => array('Bashundhara','Ghulshan', 'Badda'),
  );

//echo $people['Brad'];
//print_r($people);
//var_dump($people);

//Multi DImensional 
$cars = array(
  array('Honda', 20, 10),
  array('Toyota', 30, 20),
  array('Ford', 23, 12),
  );
//echo $cars[1][2];
 //echo "My name {$people['name']} and age {$people['age']} ";
//echo $people['address'][0];

foreach($cars as $key=>$value){
  echo '<p>.$key.':'.$value.'</p>'; 
};
    
?>