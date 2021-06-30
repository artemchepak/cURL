<?php

$url = 'http://api.weatherapi.com/v1/current.json';

$options = [
    'key' => '00e77b736f004a33b0585450212506',
    'q' => 'Kharkiv',
    'aqi' => 'no'
];

$optionsString = http_build_query($options);

$ch = curl_init();

curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, true);
curl_setopt($ch,CURLOPT_POSTFIELDS, $optionsString);

curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);
$result = json_decode($result, true);

curl_close($result);

echo '<pre>';
var_dump($result);
echo '</pre>';