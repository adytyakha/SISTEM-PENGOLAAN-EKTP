<?php

include("../myadmin/setting/database.php");
// session_start();
// $session_id = $_SESSION['id'];
// if (isset($session_id)) {


// cek apakah tombol daftar sudah diklik atau blum?
    // if (isset($_POST['register'])) {
if($_POST){
        // ambil data dari formulir


    $nik = $_POST['nik'];
    $kk = $_POST['kk'];



   $nama_lengkap = $_POST['nama_lengkap'];
  $tmp_lahir = $_POST['tmp_lahir'];
  $jk = $_POST['jk'];
 $ttl = $_POST['ttl'];
    $provinsi = $_POST['provinsi'];
  $kabupaten = $_POST['kabupaten'];
$alamat = $_POST['alamat'];
 $rt = $_POST['rt'];
 $rw = $_POST['rw'];
  $kelurahan = $_POST['kelurahan'];
  $kecamatan = $_POST['kecamatan'];
  $agama = $_POST['agama'];
  $statuskawin = $_POST['statuskawin'];
$jenis_pekerjaan = $_POST['jenis_pekerjaan'];
  $create = date('d F Y');






     
        
        $cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM dataektp WHERE nik='$nik'"));
 if ($cek > 0){
    echo "<script>window.alert('Maaf , Nik yang anda masukan sudah terdaftar E-KTP, Silahkan cek email !')
    window.location='../daftarektp.php'</script>";
    }else {


        // buat query

   
       // $sql = "INSERT INTO `dataektp`(`id`,`nik`, `kk`, `nama_lengkap`, `tmp_lahir`, `ttl`, `alamat`, `rt`, `rw`, `kelurahan`, `kecamatan`, `agama`, `statuskawin`, `jenis_pekerjaan`, `kewarganegaraan`) VALUES (NULL, '$nik', '$kk', '$nama_lengkap', '$tmp_lahir',  '$ttl', '$alamat', '$rt', '$rw', '$kelurahan', '$kecamatan', '$agama', '$statuskawin', '$jenis_pekerjaan')";


       $sql = "INSERT INTO `dataektp`(`id`,`nik`, `kk`, `nama_lengkap`, `tmp_lahir`, `jk`, `ttl`, `provinsi`, `kabupaten`, `alamat`, `rt`, `rw`, `kelurahan`, `kecamatan`, `agama`, `statuskawin`, `jenis_pekerjaan`, `create`) VALUES (NULL, '$nik', '$kk', '$nama_lengkap', '$tmp_lahir','$jk',  '$ttl',  '$provinsi',  '$kabupaten', '$alamat', '$rt', '$rw', '$kelurahan', '$kecamatan', '$agama', '$statuskawin', '$jenis_pekerjaan','$create')";
 $query = mysqli_query($koneksi, $sql);





 







        // apakah query simpan berhasil?
        if ($query) {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
         echo ' 
						 <script>
        					alert("Selamat Anda Berhasil Mendaftar!");
        					window.location = "../daftarektp.php"
      					 </script>';
      }else{
						echo '<script>
        					alert("Gagal Ditambahkan!");
        					window.location = "../pendaftaranektp.php"
      					 	</script>';
					}

        }
        }
  
?>