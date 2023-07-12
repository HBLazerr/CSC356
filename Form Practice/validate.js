function validateForm() {
    // Assigns and gets user name and password
    var username = document.loginForm.username.value;
    var password = document.loginForm.password.value;

    // clear error message
    document.getElementById("errorMessage").innerHTML = "";
    document.getElementById("usernameLabel").style.backgroundColor = "white";
    document.getElementById("passwordLabel").style.backgroundColor = "white";

    // Evaluate username for emptiness & alert
    if (username == null || username == "") {
        document.getElementById("errorMessage").innerHTML = "Username cannot be blank."
        document.getElementById("usernameLabel").style.backgroundColor = "yellow";
        document.getElementById("username").focus();
        return false;

    }
    // Evaluate password for emptiness/length & alert
    else if (password.length < 8 || password == "") {
        document.getElementById("errorMessage").innerHTML = "Password must be at least 8 characters long."
        document.getElementById("passwordLabel").style.backgroundColor = "yellow";
        document.getElementById("password").focus();
        return false;
    }
}