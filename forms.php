<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php forms</title>
</head>
<body>
    
    <form action="forms.php" method="GET">
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" >
        <br><br>

        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" ><br><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" ><br>
        <input type="submit" value="SUBMIT">
    </form>
    <?php
    echo "hello,good morning" .$_GET["firstname"]." ".$_GET["lastname"];
    echo "<br>";
    echo "your age is ".$_GET["age"]

    ?>
    
</body>
</html>