<?php
require '../database/connect.php';
if (isset($_POST['submit'])) {
   $penulis = $_POST['penulis'];
   $deskripsi = $_POST['deskripsi'];
   $control = $_POST['control'];
   $user = $_SESSION['fullname'];
   if ($control == "add") {
      $sql = mysqli_query($koneksi, "INSERT INTO ms_library_author (author_name, author_description, user_create)VALUES('$penulis','$deskripsi','$user')  ");
      $message = "Data Berhasil di Simpan";
   } else if ($control == "update") {
      $id = $_POST['id'];
      $sql = mysqli_query($koneksi, "UPDATE ms_library_author SET author_name='$penulis', author_description='$deskripsi', update_at=now(), user_update='$user' WHERE id_author='$id' ");
      $message = "Data Berhasil di Update";
   } else if ($control == "delete") {
      $id = $_POST['id'];
      $sql = mysqli_query($koneksi, "DELETE FROM ms_library_author WHERE id_author='$id' ");
      $message = "Data Berhasil di Hapus";
   }

   if ($sql) {
      $_SESSION['sukses'] = $message;
   } else {
      $_SESSION['error'] = "Gagal Proses, Coba Lagi";
   }
   $_SESSION['redirectlogin'] = 'admin/penulis';
}
