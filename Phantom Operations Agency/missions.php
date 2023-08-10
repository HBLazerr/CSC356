<?php
$jsonData = '[
    {
        "missionId": 1,
        "title": "Retrieve Confidential Documents",
        "description": "Infiltrate the enemys facility and recover highly classified documents.",
        "location": "Unknown Facility",
        "status": true
    },
    {
        "missionId": 2,
        "title": "Eliminate Rogue Agent",
        "description": "Neutralize a former agent who has gone rogue and become a threat.",
        "location": "City Center",
        "status": false
    },
    {
        "missionId": 3,
        "title": "Secure VIP Escort",
        "description": "Ensure the safe transport of a high-profile VIP through a hostile zone.",
        "location": "Hostile Zone",
        "status": false
    },
    {
        "missionId": 4,
        "title": "Retrieve Stolen Artifacts",
        "description": "Track down stolen artifacts and apprehend the thieves responsible.",
        "location": "International Museums",
        "status": false
    }
]';

$missionsData = json_decode($jsonData, true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="missions.css">

    <title>Missions | Phantom Operations Agency</title>
</head>

<body>
    <main>
        <h2 class="missionTitle">Current Mission</h2>

        <section class="currContainer">

            <div class="currMissionBox">
                <img src="notyet.png" alt="Picture of ___">

                <div class="currMissionContent">
                    <div class="currMissionTop">
                        <h3 class="missionName"><?php echo $missionsData[0]['title']; ?></h3>
                        <h4 class="locationName"><?php echo $missionsData[0]['location']; ?></h4>
                    </div>
                    <div class="currMissionBottom">
                        <h3 class="descTitle">Description</h3>
                        <p class="missionDesc"><?php echo $missionsData[0]['description']; ?></p>
                    </div>
                </div>
            </div>

            <h1 class="pageTitle">MISSIONS</h1>
        </section>

        <h2 class="missionTitle">Other Missions</h2>
        <section class="othContainer">

            <div class="missions">
                <div class="mission">
                    <h3 class="missionName"><?php echo $missionsData[1]['title']; ?></h3>
                    <h4 class="locationName"><?php echo $missionsData[1]['location']; ?></h4>
                    <p class="missionDesc"><?php echo $missionsData[1]['description']; ?></p>
                </div>
                <div class="mission">
                    <h3 class="missionName"><?php echo $missionsData[2]['title']; ?></h3>
                    <h4 class="locationName"><?php echo $missionsData[2]['location']; ?></h4>
                    <p class="missionDesc"><?php echo $missionsData[2]['description']; ?></p>
                </div>
                <div class="mission">
                    <h3 class="missionName"><?php echo $missionsData[3]['title']; ?></h3>
                    <h4 class="locationName"><?php echo $missionsData[3]['location']; ?></h4>
                    <p class="missionDesc"><?php echo $missionsData[3]['description']; ?></p>
                </div>
            </div>
        </section>
    </main>
</body>

</html>