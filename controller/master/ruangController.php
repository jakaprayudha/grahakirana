<?php
require '../database/connect.php';
if (isset($_POST['submit'])) {
   $gedung = $_POST['gedung'];
   $kelas = $_POST['kelas'];
   $deskripsi = $_POST['deskripsi'];
   $control = $_POST['control'];
   $user = $_SESSION['fullname'];
   $kategori = $_POST['kategori'];
   if ($control == "add") {
      $sql = mysqli_query($koneksi, "INSERT INTO ms_classroom (id_building, classroom_name, classroom_description, user_create, classroom_category)VALUES('$gedung','$kelas','$deskripsi','$user','$kategori')  ");
      $message = "Data Berhasil di Simpan";
   } else if ($control == "update") {
      $id = $_POST['id'];
      $sql = mysqli_query($koneksi, "UPDATE ms_classroom SET id_building='$gedung', classroom_name='$kelas', classroom_description='$deskripsi', user_update='$user', update_at=now(), classroom_category='$kategori' WHERE id_classroom='$id' ");
      $message = "Data Berhasil di Update";
   } else if ($control == "delete") {
      $id = $_POST['id'];
      $sql = mysqli_query($koneksi, "DELETE FROM ms_classroom WHERE id_classroom='$id' ");
      $message = "Data Berhasil di Hapus";
   }

   if ($sql) {
      $_SESSION['sukses'] = $message;
   } else {
      $_SESSION['error'] = "Gagal Proses, Coba Lagi";
   }
   $_SESSION['redirectlogin'] = 'admin/ruang_kelas';
}
