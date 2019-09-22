<?php 
  include 'database.php'; 

       $id_akun= $_POST['id_akun'];
     $nama_lengkap = $_POST['nama_lengkap'];
        $kk = $_POST['kk'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $email = $_POST['email'];
         $username = $_POST['username'];
        $password = $_POST['password'];
       

      // $ekstensi_diperbolehkan = array('png','jpg');
      // $nama = $_FILES['file']['name'];
      // $x = explode('.', $nama);
      // $ekstensi = strtolower(end($x));
      // $ukuran = $_FILES['file']['size'];
      // $file_tmp = $_FILES['file']['tmp_name'];  


 
      // if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
      //   if($ukuran < 1044070){      
      //     move_uploaded_file($file_tmp, 'images/'.$nama);


$sql = "UPDATE `akun` SET  `id_akun`='$id_akun',`nama_lengkap`='$nama_lengkap',`kk`='$kk',`nama_lengkap`='$nama_lengkap',`email`='$email',`username`='$username',`password`=MD5('$password') WHERE id_akun=$id_akun";

$query=mysqli_query($koneksi, $sql); 



      // $sql = "UPDATE `data_user` SET `username`='$username',`nama`='$nama',`alamat`='$alamat',`jenis_kelamin`='$jenis_kelamin',`agama`='$agama' WHERE id=$id";
      //   $query = mysqli_query($link, $sql);


//,`kk`='$kk',`nama_lengkap`='$nama_lengkap',`email`='$email',`username`='$username',`password`=MD5('$password')

      //     $query = mysqli_query($koneksi, "UPDATE member SET `nama_lengkap`='$nama_lengkap', `jk`='$jk', `alamat`='$alamat', `username`='$username', `password`='$password', `asal_sekolah`='$asal_sekolah', `hp`='$hp', `tglahir`='$tglahir', `agama`='$agama', `email`='$email', WHERE `id_member`='$id_member' ");
          if($query){
            echo ' 
             <script>
                  alert("Berhasil Di edit!");
                  window.location = "../admin/page/tabeldatasiswa.php"
                 </script>';
          }else{
            echo '<script>
                  alert("Gagal Di edit!");
                  window.location = "../admin/page/editbox.php"
                  </script>';
          }
       
     
 ?>











