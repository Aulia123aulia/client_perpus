<?php
session_start();
if (!isset($_SESSION["user"])) header("Location: index.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home Industry</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

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
<div class="w3-panel w3-opacity" style="padding:10px 16px">
  <h1 class="w3-xlarge w3-center">Form Data Buku</h1>

    <form action="add_data_anggota.php" method="POST">
      <div class="w3-section">
        <label>Nama</label>
        <input class="w3-input w3-border" type="text" name="nama" required>
      </div>
      <div class="w3-section">
        <label>Alamat</label>
        <input class="w3-input w3-border" type="text" name="alamat" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="email" required>
      </div>
      <div class="w3-section">
        <label>Hp</label>
        <input class="w3-input w3-border" type="text" name="hp" required>
      </div>
      <button class="w3-button w3-teal" type="submit" name="insert">Insert</button>
      <button class="w3-button w3-teal"><a href="anggota.php">Kembali</a></button>
    </form>
</div>
</div>
</body>

</html>