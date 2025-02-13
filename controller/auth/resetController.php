<?php
require 'database/connect.php';
session_start();
if (isset($_POST['reset'])) {
   $email = $_POST['email'];
   $pass = md5($_POST['password']);
   $check = mysqli_query($koneksi, "SELECT * FROM ms_user WHERE username='$email'");
   $data = mysqli_fetch_array($check);
   $user_id = $data['username'];
   if ($user_id == $email) {
      $newPassword = rand(1111, 9999);
      $encrypt = md5($newPassword);
      $update = mysqli_query($koneksi, "UPDATE ms_user SET password='$encrypt' WHERE username='$email'");
      if ($update) {
         $_SESSION["sukses"] = 'Berhasil Reset Password : ' . $newPassword;
      }
   } else {
      $_SESSION["error"] = 'Username anda tidak terdaftar !!!';
   }

   $_SESSION['redirectlogin'] = 'index';
}
