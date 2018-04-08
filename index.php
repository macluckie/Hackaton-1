<?php

require 'vendor/autoload.php';
use GuzzleHttp\Client;

$client = new GuzzleHttp\Client([
       'base_uri' => 'https://akabab.github.io/superhero-api/api/',
        'timeout'  => 2.0,
         ]);


$player = 'id/70.json';

$client = new GuzzleHttp\Client(['base_uri' => 'https://akabab.github.io/superhero-api/api/']);
$response = $client->request('GET',$player);

$body = $response->getBody();
$json= $body->getContents();



echo '<pre>';

$BigObject = json_decode($json);
var_dump($BigObject->{'images'}->{'md'});

echo '<img src='.$BigObject->{'images'}->{'sm'}.'>';
//var_dump($BigObject);

$player = 'id/298.json';

$client = new GuzzleHttp\Client(['base_uri' => 'https://akabab.github.io/superhero-api/api/']);
$response = $client->request('GET',$player);

$body = $response->getBody();
$json= $body->getContents();



echo '<pre>';

$BigObject = json_decode($json);
var_dump($BigObject->{'images'}->{'md'});

echo '<img src='.$BigObject->{'images'}->{'sm'}.'>';
//var_dump($BigObject);
