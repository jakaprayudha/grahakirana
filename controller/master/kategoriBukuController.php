<?php
require '../database/connect.php';
if (isset($_POST['submit'])) {
   $kategori = $_POST['kategori'];
   $deskripsi = $_POST['deskripsi'];
   $control = $_POST['control'];
   $user = $_SESSION['fullname'];
   if ($control == "add") {
      $sql = mysqli_query($koneksi, "INSERT INTO ms_library_category_book (category_book, category_description, user_create)VALUES('$kategori','$deskripsi','$user')  ");
      $message = "Data Berhasil di Simpan";
   } else if ($control == "update") {
      $id = $_POST['id'];
      $sql = mysqli_query($koneksi, "UPDATE ms_library_category_book SET category_book='$kategori', category_description='$deskripsi', user_update='$user', update_at=now() WHERE id_category_book='$id' ");
      $message = "Data Berhasil di Update";
   } else if ($control == "delete") {
      $id = $_POST['id'];
      $sql = mysqli_query($koneksi, "DELETE FROM ms_library_category_book WHERE id_category_book='$id' ");
      $message = "Data Berhasil di Hapus";
   }

   if ($sql) {
      $_SESSION['sukses'] = $message;
   } else {
      $_SESSION['error'] = "Gagal Proses, Coba Lagi";
   }
   $_SESSION['redirectlogin'] = 'admin/kategori_buku';
}
