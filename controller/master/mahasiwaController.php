<?php
require '../database/connect.php';
if (isset($_POST['submit'])) {
   $npm = $_POST['npm'];
   $nama_mahasiswa = $_POST['nama_mahasiswa'];
   $agama = $_POST['agama'];
   $gender = $_POST['gender'];
   $tempatlahir = $_POST['tempatlahir'];
   $tanggallahir = $_POST['tanggallahir'];
   $status = $_POST['status'];
   $alamat = $_POST['alamat'];
   $fakultas = $_POST['fakultas'];
   $prodi = $_POST['prodi'];
   $degree = $_POST['degree'];
   $tahun = $_POST['tahun'];
   $semester = $_POST['semester'];
   $kelas = $_POST['kelas'];
   $category = $_POST['kategori'];
   $dosen = $_POST['dosen_pendamping'] ?? 0;
   $kelas = $_POST['kelas'];
   $user = $_SESSION['fullname'];
   $uid = md5(date('Ymd') . rand(1111, 9999));
   $checkdata = mysqli_query($koneksi, "SELECT npm FROM ms_student WHERE npm='$npm'");
   $datastudent = mysqli_fetch_array($checkdata);
   if ($datastudent == NULL) {
      $sql = mysqli_query($koneksi, "INSERT INTO ms_student (npm, student_name, student_gender, student_religion, student_datebirth, student_addressbirth, student_address, student_status, student_semester, student_year, id_faculty, id_program_study, degree, student_category, id_academic_advisor, user_create, student_uid, student_class)VALUES('$npm','$nama_mahasiswa','$gender','$agama','$tanggallahir','$tempatlahir','$alamat','$status','$semester','$tahun','$fakultas','$prodi','$degree','$category','$dosen','$user','$uid','$kelas')  ");
      $message = "Data Berhasil di Simpan";
   } else {
      $id = $_POST['id'];
      $telepon = $_POST['telepon'];
      $email = $_POST['email'];
      $ayah = $_POST['ayah'];
      $ibu = $_POST['ibu'];
      $telepon_orangtua = $_POST['telepon_orangtua'];
      $alamat_orangtua = $_POST['alamat_orangtua'];
      $email_orangtua = $_POST['mail_orangtua'];
      $sekolah = $_POST['sekolah'];
      $sekolah_lulus = $_POST['sekolah_lulus'];
      $cuti = isset($_POST['student_leave']) ? 1 : 0;
      $sql = mysqli_query($koneksi, "UPDATE ms_student SET npm='$npm',  student_name='$nama_mahasiswa', student_gender='$gender', student_religion='$agama', student_datebirth='$tanggallahir', student_addressbirth='$tempatlahir', student_address='$alamat',student_status='$status',student_semester='$semester', student_year='$tahun',  id_faculty='$fakultas',id_program_study='$prodi', degree='$degree', student_category='$category',  id_academic_advisor='$dosen', user_update='$user', update_at=now(), student_class='$kelas', student_phone='$telepon', student_mail='$email', student_leave='$cuti' WHERE student_uid='$id'");
      $checkprofile = mysqli_query($koneksi, "SELECT * FROM ms_student_details WHERE student_uid='$id'");
      $dataprofile = mysqli_fetch_array($checkprofile);
      if ($dataprofile == NULL) {
         $sqlprofile = mysqli_query($koneksi, "INSERT INTO ms_student_details (student_uid, name_father, name_mother, parents_address, parents_phone, parents_mail, school, school_graduate)VALUES('$id','$ayah','$ibu','$alamat_orangtua','$telepon_orangtua','$email_orangtua','$sekolah','$sekolah_lulus') ");
      } else {
         $sqlprofile = mysqli_query($koneksi, "UPDATE ms_student_details SET name_father='$ayah', name_mother='$ibu', parents_address='$alamat_orangtua', parents_phone='$telepon_orangtua', parents_mail='$email_orangtua', school='$sekolah', school_graduate='$sekolah_lulus' WHERE student_uid='$id' ");
      }
      $message = "Data Berhasil di Update";
   }
   if ($sql) {
      $_SESSION['sukses'] = $message;
   } else {
      $_SESSION['error'] = "Gagal Proses, Coba Lagi";
   }
   $_SESSION['redirectlogin'] = 'admin/mahasiswa';
}


if (isset($_POST['submit-delete'])) {
   $id = $_POST['id'];
   $sql = mysqli_query($koneksi, "DELETE FROM ms_student WHERE id_student='$id'");
   $message = "Data berhasil di hapus";
   if ($sql) {
      $_SESSION['sukses'] = $message;
   } else {
      $_SESSION['error'] = "Gagal Proses, Coba Lagi";
   }
   $_SESSION['redirectlogin'] = 'admin/mahasiswa';
}
