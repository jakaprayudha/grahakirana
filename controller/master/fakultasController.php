<?php
require '../database/connect.php';
if (isset($_POST['submit'])) {
   $kode = $_POST['kode'];
   $fakultas = $_POST['fakultas'];
   $deskripsi = $_POST['deskripsi'];
   $control = $_POST['control'];
   $inisial = $_POST['inisial'];
   $user = $_SESSION['fullname'];
   if ($control == "add") {
      $sql = mysqli_query($koneksi, "INSERT INTO ms_faculty (code, faculty_long, faculty_short, description, user_create)VALUES('$kode','$fakultas','$inisial','$deskripsi','$user')  ");
      $message = "Data Berhasil di Simpan";
   } else if ($control == "update") {
      $id = $_POST['id'];
      $sql = mysqli_query($koneksi, "UPDATE ms_faculty SET code='$kode', faculty_long='$fakultas', faculty_short='$inisial', description='$deskripsi', user_update='$user' WHERE id_faculty='$id' ");
      $message = "Data Berhasil di Update";
   } else if ($control == "delete") {
      $id = $_POST['id'];
      $sql = mysqli_query($koneksi, "DELETE FROM ms_faculty WHERE id_faculty='$id' ");
      $message = "Data Berhasil di Hapus";
   }

   if ($sql) {
      $_SESSION['sukses'] = $message;
   } else {
      $_SESSION['error'] = "Gagal Proses, Coba Lagi";
   }
   $_SESSION['redirectlogin'] = 'admin/fakultas';
}
