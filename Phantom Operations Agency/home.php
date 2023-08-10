<?php
// Starts new session
session_start();
// Stores welcome message
$welcomeMsg = "";

// Evaluates if user is logged in
if ($_SESSION['isLoggedIn'] == 'true') {
    // Sets custom welcome message
    $welcomeMsg = "Greetings Agent " . $_SESSION["username"] . ".";
} else {
    // Redirect user to login page if not logged in
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="home.css">

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="home.js"></script>

    <title>Phantom Operations Agency</title>
</head>

<body>
    <h1 class="title"><?php echo $welcomeMsg; ?></h1>

    <div class="container">
        <a href="stats.php" style="text-decoration: none;">
            <div class="tile">
                <h2>Stats</h2>
                <p>This may pop up description when hovered.</p>
            </div>
        </a>
        <a href="missions.php" style="text-decoration: none;">
            <div class="tile">
                <h2>Missions</h2>
                <p>This may pop up description when hovered.</p>
            </div>
        </a>
        <div class="tile">
            <h2>Contracts</h2>
            <p>This may pop up description when hovered.</p>
        </div>
    </div>
</body>

</html>