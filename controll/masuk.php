<?php
  include_once '../myadmin/setting/database.php';
  if (isset($_POST['submit_login'])) {
    $user = mysqli_real_escape_string($koneksi, $_POST['username']);
    $pass = mysqli_real_escape_string($koneksi,(md5($_POST['password'])) );
    
    
    $query = mysqli_query($koneksi, "SELECT * FROM akun WHERE username='$user' AND password='$pass'");
    $data = mysqli_fetch_array($query);

    $username = $data['username'];
    $password = $data['password'];
        $id_akun = $data['id_akun'];
    $nik = $data['nik'];
    $kk = $data['kk'];
    $nama_lengkap   = $data['nama_lengkap'];
  
   
     
    if ($user == $username && $pass == $password) {
      session_start();

      $_SESSION['id_akun'] = $id_akun;
      $_SESSION['nik'] = $nik;
      $_SESSION['kk'] = $kk;
      $_SESSION['user'] =$username;
      $_SESSION['nama_lengkap'] =$nama_lengkap;
 

    
        echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
     
    }else{
      echo "<script>alert('Username dan Password Tidak Ditemukan');</script>";
      echo "<meta http-equiv='refresh' content='0; url=../login.php'>";
    }
  }
?>