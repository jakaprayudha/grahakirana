<?php
require 'database/connect.php';
session_start();
if (isset($_POST['sign-up'])) {
   $username = $_POST['username'];
   $password = $_POST['password'];
   $confirm = $_POST['confirm-password'];
   $toc = $_POST['toc'];
   if ($toc != 1) {
      $_SESSION["error"] = 'Anda Belum Check Terms & Condition';
   } else {
      $check = mysqli_query($koneksi, "SELECT npm, student_mail,student_name  FROM ms_student WHERE npm='$username' or student_mail='$username'");
      $data = mysqli_fetch_array($check);
      if ($data != NULL) {
         $uid = md5($data['npm']);
         $fullname = $data['student_name'];
         $pass = md5($password);
         $sqlUsers = mysqli_query($koneksi, "INSERT INTO ms_user (uid, fullname, username, password, roles, path)VALUES('$uid','$fullname','$username','$pass','student','student')");
         if ($sqlUsers) {
            $_SESSION["sukses"] = 'Selamat Anda Berhasil Registrasi Sebagai Students';
         } else {
            $_SESSION["error"] = 'Gagal Registrasi, Coba Kembali';
         }
      } else {
         $_SESSION["error"] = 'Email or NPM anda Belum terdaftar pada sistem, apakah anda mahasiswa baru, Jika ia silahkan daftar sebagai mahasiswa baru.';
         $_SESSION['redirectlogin'] = 'registration';
      }
   }
   $_SESSION['redirectlogin'] = 'signup';
}
