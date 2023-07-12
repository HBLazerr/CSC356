<?php
    session_start();

    $welcomeMsg = "";

    if ($_SESSION['isLoggedIn'] == 'true') {
        $welcomeMsg = "Welcome " . $_SESSION["username"];
    } else {
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="info.css">
    <script src="info.js"></script>

    <title>Spot the Hidden Object</title>
</head>

<body>

    <div id="puzzleScreen">
        <div id="hiddenObject" onclick="unlockPOA()"></div>

        <div class="puzzleText">
            <h1>Spot the Bucket!</h1>

            <p>Can you find the hidden empty water bucket? Click on it to win!</p>
        </div>
    </div>

    <div id="phantomSite">
        <h1>Welcome to Phantom Operations Agency</h1>

        <p>Placeholder text. This is where I plan to have all of my content for Phantom Operations Agency.</p>

    </div>

</body>
</html>