<?php

$id=$_GET['id'];

require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'http://127.0.0.1:8080',
    'timeout' => 5
]);

$response =  $client->request('PUT','/api/peminjaman/'.$id,[
    'json' => [
        'judul' => 'Matematika',
        'tanggalpinjam' => '22-11-2020',
        'tanggalkembali' => '22-12-2020',
        'status' => 'Pinjam'
    ]
]);

$body = $response->getBody();
header('location:peminjaman.php');

?>
