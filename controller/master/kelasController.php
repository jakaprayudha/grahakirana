<?php
require '../database/connect.php';
if (isset($_POST['submit'])) {
   $kode = $_POST['kode'];
   $kelas = $_POST['kelas'];
   $prodi = $_POST['prodi'];
   $checkprodi = mysqli_query($koneksi, "SELECT * FROM ms_program_study WHERE id_prodi = '$prodi'");
   $dataprodi = mysqli_fetch_assoc($checkprodi);
   $fakultas = $dataprodi['id_faculty'];
   $deskripsi = $_POST['deskripsi'];
   $control = $_POST['control'];
   $user = $_SESSION['fullname'];
   if ($control == "add") {
      $sql = mysqli_query($koneksi, "INSERT INTO ms_class (id_faculty, id_program_study, class_code, class_name, class_description, user_create)VALUES('$fakultas','$prodi','$kode','$kelas','$deskripsi','$user')  ");
      $message = "Data Berhasil di Simpan";
   } else if ($control == "update") {
      $id = $_POST['id'];
      $sql = mysqli_query($koneksi, "UPDATE ms_class SET class_code='$kode', class_name='$kelas', class_description='$deskripsi', user_update='$user', update_at=now() WHERE id_class='$id' ");
      $message = "Data Berhasil di Update";
   } else if ($control == "delete") {
      $id = $_POST['id'];
      $sql = mysqli_query($koneksi, "DELETE FROM ms_class WHERE id_class='$id' ");
      $message = "Data Berhasil di Hapus";
   }

   if ($sql) {
      $_SESSION['sukses'] = $message;
   } else {
      $_SESSION['error'] = "Gagal Proses, Coba Lagi";
   }
   $_SESSION['redirectlogin'] = 'admin/kelas_details?id=' . $prodi;
}
