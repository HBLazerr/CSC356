<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="login.css">
    <script src="validate.js"></script>

    <title>Login</title>
</head>

<body>
    <!-- Adds header content, including menu -->
    <?php include 'header.php'; ?>
    
    <video src="media/video (2160p).mp4" autoplay loop muted></video>
    <h1>Welcome to Form Practice</h1>

    
    <form name="loginForm" onsubmit="return validateForm();">
        <h2>LOGIN</h2>
        
        <label for="username" id="usernameLabel">Username</label>
        <input type="text" name="username" id="username">
        
        <label for="password" id="passwordLabel">Password</label>
        <input type="password" name="password" id="password">
        
        <button type="submit">Submit</button>
        
    </form>

    <div id="errorMessage"></div>

    <!-- Includes footer content -->
    <?php include 'footer.php'; ?>
</body>

</html>