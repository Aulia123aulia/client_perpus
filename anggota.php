<?php
session_start();
if (!isset($_SESSION["user"])) header("Location: index.php");

require __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'http://127.0.0.1:8000',
    'timeout' => 5
]);

$response =  $client->request('GET', '/api/anggota',  [
    'headers' => [
        'Authorization' => "Bearer {$_SESSION["token"]}"
    ]
]);

$body = $response->getBody();
$data_body = json_decode($body, true);
//var_dump($data_body);

?>

<!DOCTYPE html>
<html>
<title>Sistem Informasi Perpustakaan</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
  <h3 class="w3-bar-item">DASHBOARD</h3>
  <div class="w3-dropdown-hover">
    <button class="w3-button">Input Data
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="w3-dropdown-content w3-bar-block">
      <a href="add_buku.php" class="w3-bar-item w3-button">Form Buku</a>
      <a href="add_anggota.php" class="w3-bar-item w3-button">Form Anggota</a>
      <a href="add_pinjam.php" class="w3-bar-item w3-button">Form Peminjaman</a>
    </div>
  </div> 
  <div class="w3-dropdown-hover">
    <button class="w3-button">Data
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="w3-dropdown-content w3-bar-block">
      <a href="buku.php" class="w3-bar-item w3-button">Data Buku</a>
      <a href="anggota.php" class="w3-bar-item w3-button">Data Anggota</a>
      <a href="peminjaman.php" class="w3-bar-item w3-button">Data Peminjaman</a>
    </div>
  </div>
</div>

<!-- Page Content -->
<div style="margin-left:25%">

<div class="w3-container w3-teal">
  <h1>Sistem Informasi Perpustakaan</h1>
</div>
<div class="w3-panel w3-center w3-opacity" style="padding:10px 16px">
  <h1 class="w3-xlarge">Data Buku</h1>
  
  <div class="w3-padding-32">
    <div class="w3-bar w3-border">
      <a href="home.php" class="w3-bar-item w3-button">HOME</a>
      <a href="add_anggota.php" class="w3-bar-item w3-button">Tambah</a>
      <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
      
    </div>
  </div>
    <table class="w3-table-all w3-hoverable">
    <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Hp</th>
                            <th>Aksi</th>
                        </tr>

        <!-- dimulainya connection -->
        <?php
                        $no = 1;
                        foreach ($data_body['data'] as $data) :
                            
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['alamat']; ?></td>
                                <td><?php echo $data['email']; ?></td>
                                <td><?php echo $data['hp']; ?></td>
                                <td>
                                <button class="w3-button w3-teal"><a href="edit_data_anggota.php?id=<?= $data['id']; ?>">Update</a></button>
                                <button class="w3-button w3-teal"><a href="delete_data_anggota.php?id=<?= $data['id']; ?>">Delete</a></button>
                                </td>
                            </tr>
                        <?php
                        endforeach ?>
    </table>
        </div>
</div>
      
</body>
</html>