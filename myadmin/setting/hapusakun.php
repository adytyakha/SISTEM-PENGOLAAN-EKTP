<?php 
  include('database.php');
  $id_akun = $_GET['id_akun'];
  $query = mysqli_query($koneksi, "DELETE FROM akun WHERE id_akun= '$id_akun' ");
  if($query){
    echo '
      <script>
      alert("Akun berhasil dihapus !");
      window.location = "../akun.php";
      </script>
    ';
  }

 ?>
