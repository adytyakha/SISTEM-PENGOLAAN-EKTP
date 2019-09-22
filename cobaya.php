<?php 
session_start();

include_once 'myadmin/setting/database.php';
include_once 'controll/statussession.php';
$username = $_SESSION['username'];
$kk = $_SESSION['kk'];


$name = mysqli_query($koneksi, "SELECT kk FROM akun  WHERE username='$username'  ");

$data=mysqli_fetch_array($name);


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>E-KTP Online </title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>


 <?php 
    require 'myadmin/setting/database.php';
    $query = mysqli_query($koneksi, "SELECT * FROM datadiri WHERE kk = '$kk' ");
     while($array =  mysqli_fetch_array($query)){
     echo '
                <div class="col-12 col-lg-6">
                    <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="500ms">

                       
                        <div class="popular-course-content">
                           
                             <h7>     <td>  '.$array['nama_lengkap'].' </td></h7> <br><BR>
                             <h8>NIK  &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;         :  '.$array['nik'].'</h8> <br>

                             <h8>KK&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp; &nbsp; &nbsp;:  '.$array['kk'].'</h8> <br>
                              <h8>Tgl Lahir&nbsp; :     05/11/1998</h8> <br>
                            <h8>Pekrjaan&nbsp; :      '.$array['jenis_pekerjaan'].'</h8> <br><br>
                            <span>Sudah Terdaftar  | 15 Agustus 2019</span>
                            
                      
                          
                            <a href="#" class="btn academy-btn btn-sm">Daftar</a>

                        </div>
                      
                    

                    </div>

                </div>
              '; } ?> 

                  <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>