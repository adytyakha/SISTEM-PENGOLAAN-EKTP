<?php
  include_once 'database.php';
  if (isset($_POST['submit_login'])) {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi,(md5($_POST['password'])) );
    
    
    $query = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
    $data = mysqli_fetch_array($query);
    $id = $data['id'];
    $username = $data['username'];
    $email = $data['email'];
    $nama_lengkap   = $data['nama_lengkap'];
  
   
     
    if ($username==$username && $password ==$password) {
      session_start();
      $_SESSION['id'] = $id;
      $_SESSION['username'] = $username;
      $_SESSION['email'] = $email;
      $_SESSION['nama_lengkap'] =$nama_lengkap;
 

    
        echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
     
    }else{
      echo "<script>alert('Username dan Password Tidak Ditemukan');</script>";
      echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    }
  }
?>