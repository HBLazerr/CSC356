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

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <title>Phantom Operations Agency</title>
</head>

<body>
    <?php
    echo $welcomeMsg;
    ?>
    <h1>This is where content will go</h1>
</body>

</html>