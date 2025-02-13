<?php
require 'database/connect.php';
session_start();
if (isset($_POST['login'])) {
   $email = $_POST['email'];
   $pass = md5($_POST['password']);
   $check = mysqli_query($koneksi, "SELECT * FROM ms_user WHERE username='$email'");
   $data = mysqli_fetch_array($check);
   $user_id = $data['username'];
   if ($user_id == $email) {
      $check_pass = $data['password'];
      if ($check_pass == $pass) {
         if ($data['status'] == 1) {
            session_start();
            $_SESSION['uid'] = $data['uid'];
            $_SESSION['fullname'] = $data['fullname'];
            $_SESSION['username'] = $data['username'];
            $_SESSION['status'] = $data['status_user'];
            $_SESSION['path'] = $data['path'];
            $_SESSION['roles'] = $data['roles'];
            $roles = $data['roles'];
            $path = $data['path'];
            $_SESSION["sukses"] = 'Selamat Anda Berhasil Login Sebagai ' . $roles;
            $_SESSION['redirectlogin'] = $roles;
         } else {
            $_SESSION["error"] = 'Akun Anda tidak aktif. Hubungi administrator!';
         }
      } else {
         $_SESSION["error"] = 'Password anda salah !!!';
      }
   } else {
      $_SESSION["error"] = 'Username anda tidak terdaftar !!!';
   }
   if ($roles == NULL) {
      $_SESSION['redirectlogin'] = 'index';
   } else {
      $_SESSION['redirectlogin'] = $roles;
   }
}
