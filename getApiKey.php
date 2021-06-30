<?php

$url = 'http://api.weatherapi.com/v1/current.json';

$options = [
    'key' => '00e77b736f004a33b0585450212506',
    'q' => 'Kharkiv',
    'aqi' => 'no'
];

$optionsString = http_build_query($options);;

$request = curl_init();

curl_setopt($request,CURLOPT_URL, $url . '?' . $optionsString);
curl_setopt($request,CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($request);
$result = json_decode($result, true);

curl_close($result);

echo '<pre>';
var_dump($result);
echo '</pre>';

$json = json_encode($result);
$file = fopen('getApiKeyData.json','w+');
fwrite($file, $json);
fclose($file);