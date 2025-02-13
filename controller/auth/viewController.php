<?php
session_start();
require "../database/connect.php";
// require '../../controller/service/url.php';
if (empty($_SESSION['username'])) {
   echo "<script>alert('Maaf, Untuk Akses Halaman Ini, anda Harus Login Terlebih Dahulu');
document.location='../index'</script>";
}
function tampildata($query)
{
   global $koneksi;
   $result = mysqli_query($koneksi, $query);
   $rows = [];
   while ($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
   }
   return $rows;
}
