<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">

    <title>Mission Launch Countdown</title>
</head>

<body>
    <div class="navbar">
        <ul>
            <li><a href="timer.php">Countdown</a></li>
            <li><a href="app.php">Recruitment Form</a></li>
        </ul>
    </div>

    <h1>Quiet Ninjas Mission Countdown</h1>
    <div id="countdown">
        <?php
        // Get currentTime
        $currentTime = new DateTime();
        // Set targetTime. Can be changed for testing
        $targetTime = new DateTime('+1 week');
        // Calculate time difference between currentTime and targetTime
        $timeLeft = $targetTime->diff($currentTime);

        // eval remaining time and display message
        if ($currentTime > $targetTime) {
            echo "Mission is in progress!";
        } elseif ($timeLeft->d > 0) {
            echo "Begin return to headquarters.";
        } elseif ($timeLeft->h > 0) {
            echo "Prepare for mission departure in " . $timeLeft->h . " hours.";
        } elseif ($timeLeft->i > 0) {
            echo "Mission launching soon. Time remaining: " . $timeLeft->i . " minutes.";
        } else {
            echo "Mission launching in less than a minute!";
        }
        ?>

        <div id="clock"></div>

</body>

</html>