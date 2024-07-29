<?php
//associative arrays
//Associative arrays use named keys that you assign to values
$ages=array(
    "jane"=>20,
    "john"=>21,
    "james"=>22,
    "mark"=>18,
);
print_r($ages);
echo "<br>";
//accesing the elements
echo $ages["jane"]."<br>";
echo $ages["mark"]."<br>";
//adding elements
$ages["mary"]=24;
print_r($ages);
//looping through the associative array
foreach($ages as $key=>$value){
    echo $key." ".$value."<br>";
}
echo "james is ".$ages["james"]."years old"
?>