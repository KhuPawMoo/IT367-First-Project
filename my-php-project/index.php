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
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .profile {
            background-color: white;
            width: 350px;
            padding: 30px;
            text-align: center;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-bottom: 10px;
        }

        .info {
            text-align: left;
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
    <div class="profile">

        <h1><?php echo $FullName; ?></h1>

        <p>Hello! Welcome to my profile.</p>

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

    </div>
</body>
</html>