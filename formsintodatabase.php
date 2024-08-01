<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="formsintodatabase.php" method="POST">
   <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname">
        <br><br>

        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname"><br><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age"><br><br>

        <label for="phonenumber">Phone Number:</label>
        <input type="tel" id="phonenumber" name="phonenumber" >
        <br><br>

        <input type="submit" value="Submit">
</form >
<?php
//retrieve form data
$firstname = $_POST['firstname'];
$lastname=$_POST["lastname"];
$age=$_POST["age"];
$phonenumber=$_POST["phonenumber"];

//database connection
$servername="localhost";
$username="root";
$password="";
$dbname="mydb";
//$port=3306;
//create a connection
 $conn=new mysqli($servername,$username,$password,$dbname);
 //check the connection
 if($conn ->connect_error){
    die("connection failed:".$conn->connect_error);
 }
 //insert data into database
 $sql="INSERT INTO students (firstname,lastname,age,phonenumber)
 VALUES ('$firstname','$lastname','$age','$phonenumber')";
 if($conn->query($sql)==TRUE){
    echo "record created successfully";
 }
 else{
    echo "error:".$sql."<br>".$conn->error;
 }
// else{
//     echo "connection successful";
//  }
 //close the connection
 $conn->close();

?>
</body>
</html>
