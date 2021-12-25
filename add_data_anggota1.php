<?php

require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'http://127.0.0.1:8000',
    'timeout' => 5
]);

$response =  $client->request('POST','/api/anggota',[
    'json' => [
        'nama' => $_POST['nama'],
        'alamat' => $_POST['alamat'],
        'email' => $_POST['email'],
        'hp' => $_POST['hp']
    ]
]);

$body = $response->getBody();
header('location:anggota1.php');
