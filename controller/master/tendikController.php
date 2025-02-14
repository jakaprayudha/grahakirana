<?php
require '../database/connect.php';
if (isset($_POST['submit'])) {
   $code = $_POST['kode'];
   $nama = $_POST['nama'];
   $telepon = $_POST['telepon'];
   $email = $_POST['email'];
   $inisial = $_POST['inisial'];
   $alamat = $_POST['alamat'];
   $control = $_POST['control'];
   $program_studi = $_POST['program_studi'];
   $fakultas = $_POST['fakultas'];
   $user = $_SESSION['fullname'];
   if ($control == "add") {
      $sql = mysqli_query($koneksi, "INSERT INTO ms_educational_staff (staff_number, staff_name, staff_phone_number, staff_mail, staff_address, id_faculty, id_program_study, user_create, staff_initial)VALUES('$code','$nama','$telepon','$email','$alamat','$fakultas','$program_studi','$user','$inisial')  ");
      $message = "Data Berhasil di Simpan";
   } else if ($control == "update") {
      $id = $_POST['id'];
      $sql = mysqli_query($koneksi, "UPDATE ms_educational_staff SET staff_number='$code', staff_name='$nama', staff_phone_number='$telepon', staff_mail='$email', staff_address='$alamat', id_faculty='$fakultas', id_program_study='$program_studi', user_update='$user', update_at=NOW(), staff_initial='$inisial' WHERE id_staff='$id' ");
      $message = "Data Berhasil di Update";
   } else if ($control == "delete") {
      $id = $_POST['id'];
      $sql = mysqli_query($koneksi, "DELETE FROM ms_educational_staff WHERE id_staff='$id' ");
      $message = "Data Berhasil di Hapus";
   }

   if ($sql) {
      $_SESSION['sukses'] = $message;
   } else {
      $_SESSION['error'] = "Gagal Proses, Coba Lagi";
   }
   $_SESSION['redirectlogin'] = 'admin/tenaga_kependidikan';
}
