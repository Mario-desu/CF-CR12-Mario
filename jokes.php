<?php
require_once 'RESTful.php';
$url = 'http://api.serri.codefactory.live/random/';
$result = curl_get($url);
$jokes = json_decode($result);


//.----------------------------------------------