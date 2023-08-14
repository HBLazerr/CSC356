<?php
// Starts new session
session_start();
// Stores welcome message
$welcomeMsg = "";

// Evaluates if user is logged in
if ($_SESSION['isLoggedIn'] == 'true') {
    // Capitalizes first letter of username
    $username = ucfirst($_SESSION["username"]);

    // Sets custom welcome message
    // Applies special color to username
    $welcomeMsg = "Greetings Agent <span style='color: rgb(0, 255, 0);'>$username</span>.";
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

    <link rel="icon" href="media/tempIcon.png" type="image/png">
    <link rel="stylesheet" href="home.css">

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="home.js"></script>

    <title>Phantom Operations Agency</title>
</head>

<body>

    <div class="navbar" id="poaNavbar">
        <div class="navbar-links" id="navbarLinks">
            <a href="home.php">Home</a>
            <a href="stats.php" style="text-decoration: line-through;">Stats</a> <!-- Under Construction -->
            <a href="missions.php">Missions</a>
            <a href="contracts.php" style="text-decoration: line-through;">Contracts</a> <!-- Under Construction -->
            <a href="puzzle.php">Hide Site</a>
        </div>
        <a href="#" class="icon" onclick="toggleNavbar()">
            <img src="media/POALogo.png" alt="POA Logo">
        </a>
    </div>

    <h1 class="title"><?php echo $welcomeMsg; ?></h1>

    <div class="container">
        <a href="stats.php">
            <div class="tile">
                <h2 class="shownHead" style="text-decoration: line-through;">STATS</h2> <!-- Under Construction -->
                <p class="hiddenDesc">Access Personal Agent Profile to View Statistics.</p>
            </div>
        </a>
        <a href="missions.php">
            <div class="tile">
                <h2 class="shownHead">MISSIONS</h2>
                <p class="hiddenDesc">Explore Classified Assignments and View Assigned Mission.</p>
            </div>
        </a>
        <a href="contact.php">
            <div class="tile">
                <h2 class="shownHead" style="text-decoration: line-through;">CONTRACTS</h2> <!-- Under Construction -->
                <p class="hiddenDesc">Ongoing Contracts for Free Agents or Those with "Mission Status: Inactive".</p>
            </div>
        </a>
    </div>

</body>

</html>