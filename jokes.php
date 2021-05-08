<?php
require_once 'api/RESTful.php';
$url = 'http://api.serri.codefactory.live/random/';
$result = curl_get($url);
$jokes = json_decode($result);
// var_dump($jokes);

//.----------------------------------------------