<?php 
  include('database.php');
  $id = $_GET['id'];
  $query = mysqli_query($koneksi, "DELETE FROM dataektp WHERE id= '$id' ");
  if($query){
    echo '
      <script>
      alert("Daftar E-ktp berhasil dihapus !");
      window.location = "../ektp.php";
      </script>
    ';
  }

 ?>
