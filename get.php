<?php

$url = 'https://api.chucknorris.io/jokes/random';

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);
$result = json_decode($result, true);

curl_close($result);

echo '<pre>';
var_dump($result);
echo '</pre>';