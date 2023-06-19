//display error message on php page
function printError(elemId, msg) {
    document.getElementById(elemId).innerHTML = msg;
}

//function will ensure the form inputs are valid
function validateForm() {

    //inputs from php text/input elements
    var codeName = document.appForm.codeName.value;
    var country = document.appForm.country.value;
    // var specializations = document.appForm.specializations[i].checked;
    var training = document.querySelector('input[name="training"]:checked');
    var oath = document.querySelector('input[name="oath"]:checked');

    //track which inputs are valid
    var codeNameValid = true;
    var countryValid = true;
    // var specializationsValid = false;
    var trainingValid = true;
    var oathValid = true;

    //clears resubmission errors
    printError("codeNameErr", "");
    printError("countryErr", "");
    // printError("specializationsErr", "");
    printError("trainingErr", "");
    printError("oathErr", "");

    //evaluate user input for proper error message
    if (codeName == "") {
        printError("codeNameErr", "Please enter alias.");
        codeNameValid = false;
    }
    if (country == "") {
        printError("countryErr", "Please enter country of origin.");
        countryValid = false;
    }
    if (specializations.length == 0) {
        printError("specializationsErr", "Please select specialization(s). If you do not have at least one, form will not be accepted.");
        specializationsValid = false;
    }

    for (var i = 0; i < specializations.length; i++) {
        if (specializations[i].checked) {
            specializationsValid = true;
            break;
        }
    }

    if (!training) {
        printError("trainingErr", "Please select a choice.");
        trainingValid = false;
    }
    if (!oath) {
        printError("oathErr", "Please select a choice.");
        oathValid = false;
    }


    if ((!codeNameValid || !countryValid || !trainingValid || !oathValid)) { // !specializationsValid
        return false;
    }
}


function updateClock() {
    var currentTime = new Date();
    var formattedTime = currentTime.toLocaleTimeString();

    var clockElement = document.getElementById("clock");
    clockElement.textContent = "Current Time: " + formattedTime;

    setTimeout(updateClock, 1000);
}

window.onload = updateClock;