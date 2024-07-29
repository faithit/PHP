<?php
/*
$arrayname=array("element1","element2",..)*/
//indexed array
$fruits=array("oranges","bananas","apples","mangoes");
//accessing elememnts
echo $fruits[0];
echo "<br>";
echo $fruits[3];
echo "<br>";
var_dump($fruits);
echo "<br>";
//adding elements
$fruits[4]="grapes";
$fruits[1]="kiwi";
print_r($fruits);
echo "<br>";
//arrray length
echo count($fruits);
echo "<br>";
//looping through the array
for($x=0;$x<count($fruits);$x++){
    echo "$fruits[$x]<br>";
}
//array_push adds elemnt to the end
array_push($fruits,"watermelon");
print_r($fruits);
echo "<br>";
//array_shift removes the first element
array_shift($fruits);
print_r($fruits);
//array_pop removes the last element
echo "<br>";
array_pop($fruits);
print_r($fruits);
echo "<br>";
array_splice($fruits,2,1);
print_r($fruits);


?>