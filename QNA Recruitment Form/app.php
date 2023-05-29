<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">

    <title>Quiet Ninjas Association</title>
</head>
<body>
    <h1>Welcome to the Quiet Ninjas Association Recruitment Form</h1>

    <form name="appForm" onsubmit="return validateForm();" action="#" method="post">
        
        <div class="row">
            <label>Code Name</label>
            <input type="text" name="codeName">
            <div class="error" id="codeNameErr"></div>
        </div>

        <div class="row">
            <label>Country of Origin</label>
            <input type="text" name="country">
            <div class="error" id="countryErr"></div>
        </div>

        <!-- <div class="row">
            <label>Do you have any of the following specializations useful to the Quiet Ninjas Association?</label>
            <div class="form-inline">
                <label><input type="checkbox" name="specializations" value="hacking"> Hacking</label>
                <label><input type="checkbox" name="specializations" value="disguise"> Disguise</label>
                <label><input type="checkbox" name="specializations" value="lockpicking"> Lockpicking</label>
                <label><input type="checkbox" name="specializations" value="interrogation"> Interrogation</label>
            </div>
            <div class="error" id="specializationsErr"></div>
        </div> -->

        <div class="row">
            <label>Have you undergone any form of training for covert skills such as stealth, intelligence gathering, or weapons expertise?</label>
            <div class="form-inline">
                <label><input type="radio" name="training" value="yes"> Yes</label>
                <label><input type="radio" name="training" value="no"> No</label>
            </div>
            <div class="error" id="trainingErr"></div>
        </div>
        
        <div class="row">
            <label>Are you prepared to take an oath of loyalty and maintain secrecy about the association's activities?</label>
            <div class="form-inline">
                <label><input type="radio" name="oath" value="yes"> Yes</label>
                <label><input type="radio" name="oath" value="no"> No</label>
            </div>
            <div class="error" id="oathErr"></div>
        </div>
        
        <div class="row">
            <input type="submit" value="submit">
        </div>
        



    </form>
</body>
</html>
