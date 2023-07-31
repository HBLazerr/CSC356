<?php
// Stores error message
$errorMsg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  session_start(); // starts session
  require_once('dbconnect.php'); // includes database connect file

  // Gets username from the form
  // Gets password from the form
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Create SQL query to select a user from the database using inputted username and password
  $sql = "SELECT * FROM users WHERE username='$username' AND password='$password' ";
  $result = mysqli_query($conn, $sql);
  $check = mysqli_fetch_array($result);

  // Evaluates if user exists
  if (isset($check)) {
    $_SESSION['id'] = session_id();
    $_SESSION['isLoggedIn'] = 'true';
    $_SESSION['username'] = $check["username"];

    // Redirects user to home web page
    header('Location: home.php');
  } else {
    $errorMsg = 'Login failed, please try again.';
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="login.css" />
  <script src="validate.js"></script>

  <title>Login | Phantom Operations Agency</title>
</head>

<body>
  <video src="media/CodeScrollVideo.mp4" autoplay loop muted></video>
  <h1>Welcome to Phantom Operations Agency</h1>

  <form name="loginForm" onsubmit="return validateForm();" method="post" action="login.php">
    <h2>LOGIN</h2>

    <label for="username" id="usernameLabel">Username</label>
    <input type="text" name="username" id="username" />

    <label for="password" id="passwordLabel">Password</label>
    <input type="password" name="password" id="password" />

    <button type="submit">Submit</button>
  </form>

  <div id="errorMessage">
    <?php
    echo $errorMsg
    ?>

  </div>

</body>

</html>