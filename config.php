<?php

$apikey = ""; //your steam api key
$address = ""; //IP address and port
//example: 12.345.67.89:1234

$url = "https://api.steampowered.com/IGameServersService/GetServerList/v1/?key=" . $apikey . "&filter=addr\\" . $address;

?>