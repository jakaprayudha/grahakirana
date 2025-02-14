<?php
require '../database/connect.php';
if (isset($_POST['submit'])) {
   $kode = $_POST['kode'];
   $matakuliah = $_POST['matakuliah'];
   $prodi = $_POST['prodi'];
   $checkprodi = mysqli_query($koneksi, "SELECT * FROM ms_program_study WHERE id_prodi = '$prodi'");
   $dataprodi = mysqli_fetch_assoc($checkprodi);
   $fakultas = $dataprodi['id_faculty'];
   $deskripsi = $_POST['deskripsi'];
   $control = $_POST['control'];
   $inisial = $_POST['inisial'];
   $sks = $_POST['sks'];
   $user = $_SESSION['fullname'];
   if ($control == "add") {
      $sql = mysqli_query($koneksi, "INSERT INTO ms_matakuliah (id_faculty, id_program_study, matakuliah_code, matakuliah, matakuliah_description, matakuliah_sks, user_create, matakuliah_initial)VALUES('$fakultas','$prodi','$kode','$matakuliah','$deskripsi','$sks','$user','$inisial')  ");
      $message = "Data Berhasil di Simpan";
   } else if ($control == "update") {
      $id = $_POST['id'];
      $sql = mysqli_query($koneksi, "UPDATE ms_matakuliah SET matakuliah_code='$kode', matakuliah='$matakuliah', matakuliah_description='$deskripsi', matakuliah_sks='$sks', user_update='$user', update_at=now() WHERE id_matakuliah='$id' ");
      $message = "Data Berhasil di Update";
   } else if ($control == "delete") {
      $id = $_POST['id'];
      $sql = mysqli_query($koneksi, "DELETE FROM ms_matakuliah WHERE id_matakuliah='$id' ");
      $message = "Data Berhasil di Hapus";
   }

   if ($sql) {
      $_SESSION['sukses'] = $message;
   } else {
      $_SESSION['error'] = "Gagal Proses, Coba Lagi";
   }
   $_SESSION['redirectlogin'] = 'admin/mata_kuliah_details?id=' . $prodi;
}
