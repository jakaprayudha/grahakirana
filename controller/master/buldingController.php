<?php
require '../database/connect.php';
if (isset($_POST['submit'])) {
   $kode = $_POST['kode'];
   $gedung = $_POST['gedung'];
   $deskripsi = $_POST['deskripsi'];
   $control = $_POST['control'];
   $inisial = $_POST['inisial'];
   $user = $_SESSION['fullname'];
   if ($control == "add") {
      $sql = mysqli_query($koneksi, "INSERT INTO ms_building (building_code, building_initial, building_name, building_description, user_create)VALUES('$kode','$inisial','$gedung','$deskripsi','$user')  ");
      $message = "Data Berhasil di Simpan";
   } else if ($control == "update") {
      $id = $_POST['id'];
      $sql = mysqli_query($koneksi, "UPDATE ms_building SET building_code='$kode', building_initial='$inisial', building_name='$gedung', building_description='$deskripsi', user_update='$user', update_at=now() WHERE id_building='$id' ");
      $message = "Data Berhasil di Update";
   } else if ($control == "delete") {
      $id = $_POST['id'];
      $sql = mysqli_query($koneksi, "DELETE FROM ms_building WHERE id_building='$id' ");
      $message = "Data Berhasil di Hapus";
   }

   if ($sql) {
      $_SESSION['sukses'] = $message;
   } else {
      $_SESSION['error'] = "Gagal Proses, Coba Lagi";
   }
   $_SESSION['redirectlogin'] = 'admin/gedung';
}
