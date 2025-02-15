<?php
require '../database/connect.php';
if (isset($_POST['submit'])) {
   $kode = $_POST['kode'];
   $penerbit = $_POST['penerbit'];
   $alamat = $_POST['alamat'];
   $telepon = $_POST['telepon'];
   $email = $_POST['email'];
   $control = $_POST['control'];
   $user = $_SESSION['fullname'];
   if ($control == "add") {
      $sql = mysqli_query($koneksi, "INSERT INTO ms_library_publisher (publisher_code, publisher_name, publisher_address, publisher_phone, publisher_mail, user_create)VALUES('$kode','$penerbit','$alamat','$telepon','$email','$user')  ");
      $message = "Data Berhasil di Simpan";
   } else if ($control == "update") {
      $id = $_POST['id'];
      $sql = mysqli_query($koneksi, "UPDATE ms_library_publisher SET publisher_code = '$kode', publisher_name='$penerbit', publisher_phone='$telepon', publisher_mail='$email', publisher_address='$alamat', update_at=now(), user_update='$user' WHERE id_publisher='$id' ");
      $message = "Data Berhasil di Update";
   } else if ($control == "delete") {
      $id = $_POST['id'];
      $sql = mysqli_query($koneksi, "DELETE FROM ms_library_publisher WHERE id_publisher='$id' ");
      $message = "Data Berhasil di Hapus";
   }

   if ($sql) {
      $_SESSION['sukses'] = $message;
   } else {
      $_SESSION['error'] = "Gagal Proses, Coba Lagi";
   }
   $_SESSION['redirectlogin'] = 'admin/penerbit';
}
