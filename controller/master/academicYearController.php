<?php
require '../database/connect.php';
if (isset($_POST['submit'])) {
   $periode = $_POST['periode'];
   $user = $_SESSION['fullname'];
   $control = $_POST['control'];
   if ($control == "add") {
      $sql = mysqli_query($koneksi, "INSERT INTO ms_academic_year (periode, user_create)VALUES('$periode','$user')");
      $message = "Data Berhasil di Simpan";
   } else if ($control == "update") {
      $id = $_POST['id'];
      $sql = mysqli_query($koneksi, "UPDATE ms_academic_year SET periode='$periode', user_update='$user', update_at=now() WHERE id_academic_year='$id' ");
      $message = "Data Berhasil di Update";
   } else if ($control == "delete") {
      $id = $_POST['id'];
      $sql = mysqli_query($koneksi, "DELETE FROM ms_academic_year WHERE id_academic_year='$id' ");
      $message = "Data Berhasil di Hapus";
   }

   if ($sql) {
      $_SESSION['sukses'] = $message;
   } else {
      $_SESSION['error'] = "Gagal Proses, Coba Lagi";
   }
   $_SESSION['redirectlogin'] = 'admin/academic_year';
}
