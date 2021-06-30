<?php

$url = 'https://api.chucknorris.io/jokes/random';

$request = curl_init();

curl_setopt($request, CURLOPT_URL, $url);

curl_setopt($request, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($request);
$result = json_decode($result, true);

curl_close($result);

echo '<pre>';
var_dump($result);
echo '</pre>';

$json = json_encode($result);
$file = fopen('getData.json','w+');
fwrite($file, $json);
fclose($file);