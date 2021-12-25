<?php

require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'http://127.0.0.1:8080',
    'timeout' => 5
]);

$response =  $client->request('POST','/api/peminjaman',[
    'json' => [
        'judul' => $_POST['judul'],
        'tanggalpinjam' => $_POST['tanggalpinjam'],
        'tanggalkembali' => $_POST['tanggalkembali'],
        'status' => $_POST['status']
    ]
]);

$body = $response->getBody();
header('location:peminjaman.php');
