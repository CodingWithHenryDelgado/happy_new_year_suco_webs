<!DOCTYPE html>
<html>

<head>
    <title>Countdown to New Year</title>
    <style>
        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
        // Set the timezone to your local timezone
        date_default_timezone_set('America/New_York');
        
        // Get next year
        $nextYear = date('Y') + 1;
        
        // Set the next New Year's date
        $newYear = strtotime("January 1, $nextYear");
        
        // Calculate the difference between the current date and the next New Year's date
        $daysUntilNewYear = round(($newYear + 1 - time()) / (60 * 60 * 24));
        
        // Display the countdown in an H1 tag
        echo "<h1>Days until New Year: $daysUntilNewYear</h1>";
    ?>
</body>

</html>