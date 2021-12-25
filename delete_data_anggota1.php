<?php
$id=$_GET['id'];

require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'http://127.0.0.1:8000',
    'timeout' => 5
]);

$response =  $client->request('delete','/api/anggota/'.$id);
//$rewurst = $client->delete('api/anggota/3');

$body = $response->getBody();
header('location:anggota1.php');
