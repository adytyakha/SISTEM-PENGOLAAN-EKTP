<?php 
  include 'database.php'; 

      $id= $_GET['id'];

      $query = mysqli_query($koneksi, "UPDATE dataektp SET status='0' WHERE id='$id' ");
 
      if($query){
        echo ' 
            <script>
                  alert("Berhasil Batal Verifikasi!");
                  window.location = "../histori.php"
            </script>';
       } 
       else{
            echo '<script>
                  alert("Gagal Verifikasi!");
                  window.location = "../dashboard.php"
                  </script>';
          }
        

 ?>
