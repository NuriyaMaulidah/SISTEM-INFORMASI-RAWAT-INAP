<?php
require 'koneksi.php';
session_start();
if($_SESSION['login'] != true){
  header('location:index.php');
}

?>

<html>
<head>
  <title>RS HARAPAN BUNDA</title> <link rel="icon" href="aa.png">
  <link href="admin.css" rel="stylesheet">
</head>
<body>
<div class="wrap">
    <div class="header">
      <h1>RS HARAPAN BUNDA</h1>
      <p>Admin <?php echo $_COOKIE['ambil'];?></p>
      <a onclick="logout()">Logout</a>
    </div>

    <div class="headerkecil">
      <span class="menubawah">
        <a href="admin.php" class="aa">Profil Rumah Sakit</a>
        <a href="masuk/rawat/laporan.php" class="bb">Laporan Rawat</a>
  			<a href="masuk/ruangan/tampil.php" class="cc">Data Ruangan</a>
  			<a href="masuk/dokter/tampil.php" class="dd">Data Dokter</a>
        <a href="masuk/pasien/tampilpasien.php" class="ee">Data Pasien</a>
      </span>
    </div><br>
<script type="text/javascript">
function logout(){
var result = confirm("Yakin");

if(result){
  window.location.href="logout.php";
}
  else return false;
}
</script>
    <div class="content">
      <h2>Profil Rumah Sakit</h2><br>
        <span class="contentkecil">
            <a class="c1">RS HARAPAN BUNDA</a><a class="c11">Nama Rumah Sakit</a><br><br><br>
            <a class="c2">Jl. Pb. Sudirman No.14, Karangasem, Patokan, Kec. Situbondo, Kabupaten Situbondo, Jawa Timur 68312RAMBUTAN NO 99 KOTA MAKASSAR</a><a class="c22">Alamat</a><br><br><br><br><br><br>
            <a class="c3">JAWA TIMUR</a><a class="c33">Provinsi</a><br><br><br>
            <a class="c4">SITUBONDO</a><a class="c44">Kabupaten/Kota</a><br><br><br>
            <a class="c5">021-123456</a><a class="c55">No Telpon</a>
        </span>
        <span class="logo">
           <p>Logo :</p> <img src="mario.png" width="200px" class="letak">
        </span>
    </div>

    <div class="clear"></div><br>

    <div class="titik" style="border-bottom: 1px dashed #262626"></div>

    <div class="footer">
        <center><p>All Right Reserved</p></center>
    </div>

</div>
</body>
</html>
