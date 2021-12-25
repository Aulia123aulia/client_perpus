<?php
session_start();
if (!isset($_SESSION["user"])) header("Location: index.php");

require __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'http://127.0.0.1:8000',
    'timeout' => 5
]);

$response =  $client->request('POST', '/api/anggota', [
    'json' => [
        'nama' => $_POST['alamat'],
        'alamat' => $_POST['alamat'],
        'email' => $_POST['email'],
        'hp' => $_POST['hp']
    ],
    'headers' => [
        'Authorization' => "Bearer {$_SESSION["token"]}"
    ]
]);


$body = $response->getBody();
$data_body = json_decode($body, true);
if ($data_body['success'] = true) {
    header('location:home.php');
};
