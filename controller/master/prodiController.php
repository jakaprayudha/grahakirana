<?php
require '../database/connect.php';
if (isset($_POST['submit'])) {
   $kode = $_POST['kode'];
   $fakultas = $_POST['fakultas'];
   $prodi = $_POST['prodi'];
   $deskripsi = $_POST['deskripsi'];
   $control = $_POST['control'];
   $inisial = $_POST['inisial'];
   $user = $_SESSION['fullname'];
   if ($control == "add") {
      $sql = mysqli_query($koneksi, "INSERT INTO ms_program_study (id_faculty, code_program, program_study_short, program_study_long, program_study_description, user_create)VALUES('$fakultas','$kode','$inisial','$prodi','$deskripsi','$user')  ");
      $message = "Data Berhasil di Simpan";
   } else if ($control == "update") {
      $id = $_POST['id'];
      $sql = mysqli_query($koneksi, "UPDATE ms_program_study SET code_program='$kode', program_study_short='$inisial', program_study_long='$prodi', program_study_description='$deskripsi', user_update='$user' WHERE id_prodi='$id' ");
      $message = "Data Berhasil di Update";
   } else if ($control == "delete") {
      $id = $_POST['id'];
      $sql = mysqli_query($koneksi, "DELETE FROM ms_program_study WHERE id_prodi='$id' ");
      $message = "Data Berhasil di Hapus";
   }

   if ($sql) {
      $_SESSION['sukses'] = $message;
   } else {
      $_SESSION['error'] = "Gagal Proses, Coba Lagi";
   }
   $_SESSION['redirectlogin'] = 'admin/prodi';
}
