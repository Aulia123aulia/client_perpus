<?php
$id=$_GET['id'];

require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'http://127.0.0.1:8080',
    'timeout' => 5
]);

$response =  $client->request('PUT','/api/buku/'.$id,[
    'json' => [
        'kode' => '111234',
        'judul' => 'komputer',
        'penulis' => 'Ahmad Muhammad',
        'penerbit' => 'Gramedia',
        'tahun' => '2019'
    ]
]);

$body = $response->getBody();
header('location:buku.php');
