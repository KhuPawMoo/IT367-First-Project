<?php
$FirstName = "Khu";
$MiddleName = "Paw";
$LastName = "Moo";
$FullName = $FirstName . " " . $MiddleName . " " . $LastName;

$Age = 20;
$Country = "Myanmar";
$Major = "Information Technology";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First PHP Project</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
            margin: 40px;
        }
        h1 {
            margin-bottom: 10px;
        }
        .info {
            margin-top: 20px;
        }
        .info p {
            margin: 12px 0;
        }
        .label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1><?php echo $FullName; ?></h1>
    <p>Welcome to my profile.</p>
    <div class="info">
        <p>
            <span class="label">Age:</span>
            <?php echo $Age; ?>
        </p>
        <p>
            <span class="label">Country:</span>
            <?php echo $Country; ?>
        </p>
        <p>
            <span class="label">Major:</span>
            <?php echo $Major; ?>
        </p>
    </div>
</body>
</html>