<?php
//multidimensional arrays array is
// an array containing one or more arrays
$students=array(
    "mary"=>array(
        'email'=>"maryjane@gmail.com",
        'age'=>25,
        'course'=>"IT"
    ),
    "john"=>array(
        'email'=>"john@gmail.com",
        'age'=>20,
        'course'=>"BCOM"
    ),
    "jack"=>array(
        'email'=>"jack@gmail.com",
        'age'=>21,
        'course'=>"BAIR"
    ),
);
print_r($students);
echo "mary age is ".$students["mary"]["age"]."<br>";
echo "jack is learning ".$students["jack"]["course"]."<br>";
echo "john email is ".$students["john"]["email"]."<br>";


?>