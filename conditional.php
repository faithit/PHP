<?php
//if..else
$age=12;
if($age>=18){
    echo "you can drive";
}else{
    echo "you cannot drive";
}
echo "<br>";
//if ..elseif..else
$x=date("D");
//echo $x;
if($x=="Mon"){
    echo "Today is Monday";
}elseif($x=="Tue")
{
    echo "Today is Tuesday";
}else{
    echo "Today is not Monday or Tuesday";
}
echo "<br>";
/*switch statement
switch (expression) {
    case value1:
        // code to be executed if expression matches value1
        break;
    case value2:
        // code to be executed if expression matches value2
        break;
    // add more cases as needed
    default:
        // code to be executed if none of the cases match
}
a PHP script that takes an integer representing the day of the week
(1 for Monday through 7 for Sunday) 
and prints the corresponding day.*/
$daynumber=4;
switch($daynumber){
    case 1:
        echo"today is monday";
        break;
    case 2:
        echo"today is tuesday";
        break;
    case 3:
        echo"today is wednesday";
        break;
    case 4:
        echo"today is thursday";
        break;
    default:
     echo "invalid day number";
}

?>