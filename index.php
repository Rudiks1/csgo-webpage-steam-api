<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSGO SERVER API</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php
include 'config.php';

//making the request
$response = file_get_contents($url);
$data = json_decode($response, true);
$server = $data['response']['servers'][0];

//get the needed data out of the response
$name = $server['name']; //server name
$players = $server['players']; //number of online players
$maxplayers = $server['max_players']; //number of maximum players
$map = $server['map']; //the map
$version = $server['version']; //server version

//there are a lot more informations in the api response
?>

<!--Set the bar's line width-->
<style>
    .line{
        width: <?= $players/$maxplayers * 100?>%;
    }
</style>

<body>
    <h1><?= $name?></h1>
    <p>Map: <?= $map?></p>
    <p>Version: <?= $version?></p>
    <p>Players: <?= $players?></p>
    <p>Maximum players: <?= $maxplayers?></p>
    <h2>Player number bar</h2>
    <p class="pnumb"><?= $players . "/" . $maxplayers?> Player</p>
    <div class="pbar"><div class="line"></div></div>
</body>

</html>
