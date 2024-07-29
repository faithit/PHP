<?php
//displaying data
echo("this is sometext<br>");
echo "hello<br>";
print'This is php<br>';
print("hello world<br>");
echo"she said\"hello\"<br>";
echo'it\'s a good day <br>';
//He said, 'How are you?'
echo'he said\'how are you\'<br>';
echo"this is some text<br>this will print in a new line";
//variables
$fname="jane";
$age=20;
$x=21.5;
$isstudent=True;
//displaying the variables
echo $fname."<br>";
//concatinating a string and a variable
echo "my name is ".$fname."<br>";
echo "my name is $fname and am $age years old <br>";
//defining constants
define("PI",3.14);
define("SALESTAX",10);
//displaying the constants
echo PI;
echo "<br>";
echo SALESTAX;
echo "<br>";
//checking the datatype
var_dump($fname);
echo "<br>";
var_dump($age);
echo "<br>";
var_dump($x);
echo "<br>";
var_dump($isstudent);


?>