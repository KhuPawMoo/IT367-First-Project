<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <input type="text" name="student_name" placeholder="Your name...">
        <!-- <input type="text" name="age" placeholder="Your age..."> -->
        <input type="text" name="address" placeholder="Your address...">
        <button type="submit">Submit</button>
</form>

<?php
if(isset($_GET['student_name']))
    echo $_GET['student_name'] . "\n";
if(isset($_GET['address']))
    echo $_GET['address'] . "\n";
?>
</body>
</html>