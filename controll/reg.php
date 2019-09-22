<?php

include_once '../myadmin/setting/database.php';


$nik  = $_POST['nik'];
$kk    = $_POST['kk'];
$nama_lengkap    = $_POST['nama_lengkap'];
$username  = $_POST['username'];
$email  = $_POST['email'];
$password = $_POST['password'];





// $nama_lengkap_daftar    = $_POST['nama_lengkap_daftar'];
// $jk_daftar          = $_POST['jk_daftar'];
// $alamat_daftar          = $_POST['alamat_daftar']; 
// $username_daftar        = $_POST['username_daftar']; 
// $password_daftar        = md5($_POST['password_daftar']);
// $asal_sekolah_daftar = $_POST['asal_sekolah_daftar'];
// $hp_daftar					= $_POST['hp_daftar'];
// $tglahir_daftar			= $_POST['tglahir_daftar'];
// $agama_daftar			= $_POST['agama_daftar'];
// $email_daftar			= $_POST['email_daftar'];


$cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT id FROM datadiri WHERE nik='$nik' and kk='$kk' "));
 if ($cek > 0){

$cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM akun WHERE nik='$nik'"));
 if ($cek > 0){
    echo "<script>window.alert('Username yang anda masukan sudah terdaftar')
    window.location='../register.php'</script>";
    }else


 $sql = "INSERT INTO akun(id_akun, nik, kk, nama_lengkap, email, username, password) VALUES('NULL','$nik','$kk','$nama_lengkap','$email' ,'$username',MD5('$password') )";
  echo "<script>window.alert('Selamat Pendafataran Anda Sudah Berhasil')
   window.location='../login.php'</script>";

 $query = mysqli_query($koneksi, $sql);
    }else {
    echo "<script>window.alert('NIK dan KK yang anda masukan tidak terdaftar')
   window.location='../register.php'</script>";

// $seleksi = mysqli_query($koneksi, "SELECT id FROM datadiri WHERE nik='$nik'  ");
// $jumlah_baris = mysqli_num_rows($seleksi);

 


// if ($jumlah_baris == 1) {
//   $isi = mysqli_query($koneksi, "INSERT INTO akun(id_akun, nik, kk, nama_lengkap, email, username, password) VALUES('NULL','$nik','$kk','$nama_lengkap','$email' ,'$username','$password' )");
//   die(pesan(1,"Pendaftaran Berhasil, Silahkan Login" windows));
// }
// else {
//   die(pesan(0,"Pendaftaran Gagal, Username Member sudah terdaftar"));
// }


        if ($query) {
          
          
          echo ' 
                         <script>
                            alert("Selamat, Anda Berhasil Mendaftar!");
                            window.location = "../login.php"
                         </script>';
        } else {
            echo '<script>
                            alert("Gagal Ditambahkan!");
                            window.location = "../register.php"
                            </script>';
                    }
    }

// function pesan($status,$teks) {
// 	return '{"status":'.$status.',"teks":"'.$teks.'"}';
// }






?>