<?php 
session_start();

include_once 'myadmin/setting/database.php';
include_once 'controll/statussession.php';
$nik = $_SESSION['nik'];
$kk = $_SESSION['kk'];
$_SESSION['user'];
$_SESSION['nik'];


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

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <a href="index.html"><img src="img/core-img/abc.png" alt=""></a>
                            </div>
                            <div class="login-content">
                                <a class="fa fa-user"> <?php

echo " ".$_SESSION['user']. "<br>";
?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                              <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="cekdata.php">Cek Data KTP</a>   
                                    </li>
                                    <li><a href="daftarektp.php">Pendaftaran E-KTP</a>   
                                    </li>
                            
                                    <li><a href="dataektp.php">DATA E-KTP</a></li>
                                      <li><a href="controll/keluar.php">Keluar</a></li>
                                    
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Calling Info -->
                        <div class="calling-info">
                            <div class="call-center">
                                <a href="http://www.dispendukcapil.semarangkota.go.id"><i class="icon-worldwide"></i> <span>DISPENDUKCAPIL Kota Semarang</span></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
   
     




<div class="top-popular-courses-area mt-50 section-padding-100-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <h3>CEK-KTP</h3>
                        <span>Anda dapat cek KTP anda menu ini</span>
                       
                    </div>
                </div>
            </div>



           
           

  <div class="box-body">
 

  <?php
    include 'myadmin/setting/database.php';
    $id = $_GET['id'];
    $query = mysqli_query($koneksi,"SELECT * FROM datadiri WHERE id='$id'");
    while($data = mysqli_fetch_array($query)){
        ?>

            <form >
              <div class="box-body">
                   <div class="form-group has-feedback">
        <label>NIK</label>
        <input id="nik" name="nik" type="text" class="form-control" placeholder="nik" value="<?php echo $data['nik']; ?>" readonly>
       
              </div>

               <div class="form-group has-feedback">
        <label>KK</label>
        <input id="kk" name="kk" type="text" class="form-control" placeholder="kk" value="<?php echo $data['kk']; ?>" readonly>
       
              </div>
                
                <div class="form-group has-feedback">
        <label>Nama Lengkap</label>
        <input id="nama_lengkap" name="nama_lengkap" type="text" class="form-control" placeholder="Nama Lengkap" value="<?php echo $data['nama_lengkap']; ?>" readonly>
      
              </div>
                      <div class="form-group has-feedback">
        <label>Jenis Kelamin</label>
        <input id="jk" name="jk" type="text" class="form-control" placeholder="Jenis Kelamin" value="<?php echo $data['jk']; ?>" readonly>
      
              </div>

                <div class="form-group has-feedback">
        <label>Tempat Lahir</label>
        <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" placeholder="tmp lahir" value="<?php echo $data['tmp_lahir']; ?>" readonly>

      </div>

         <div class="form-group has-feedback">
        <label>Tgl Lahir</label>
        <input id="ttl" name="ttl" type="text" class="form-control" placeholder="tgl Lahir" value=" <?php echo $data['ttl']; ?>" readonly>

      </div>

<div class="form-group has-feedback">
        <label>Provinsi</label>
        <input id="provinsi" name="provinsi" type="text" class="form-control" placeholder="Provinsi" value="<?php echo $data['provinsi']; ?>" readonly>
      
      </div>
      <div class="form-group has-feedback">
        <label>Kabupaten</label>
        <input id="kabupaten" name="kabupaten" type="text" class="form-control" placeholder="Provinsi" value="<?php echo $data['kabupaten']; ?>" readonly>
      
      </div>

                  <div class="form-group has-feedback">
        <label>Alamat</label>
        <input id="alamat" name="alamat" type="text" class="form-control" placeholder="Alamat" value="<?php echo $data['alamat']; ?>" readonly>
      
      </div>

                <div class="form-group has-feedback">
        <label>RT</label>
        <input id="rt" name="rt" type="text" class="form-control" placeholder="Rt" value="<?php echo $data['rt']; ?> " readonly>
      
      </div>

       <div class="form-group has-feedback">
        <label>RW</label>
        <input id="rw" name="rw" type="text" class="form-control" placeholder="rw" value=" <?php echo $data['rw']; ?>" readonly>
      
      </div>
                <div class="form-group has-feedback">
        <label>Kel/Desa</label>
        <input id="kelurahan" name="kelurahan" type="text" class="form-control" placeholder="kelurahan" value="<?php echo $data['kelurahan']; ?>" readonly>
      
      </div>
                   <div class="form-group has-feedback">
        <label>Kecamatan</label>
        <input id="kecamatan" name="kecamatan" type="text" class="form-control" placeholder="Kecamatan" value="<?php echo $data['kecamatan']; ?>" readonly>
      
      </div>  
                <div class="form-group has-feedback">
        <label>Agama</label>
        <input id="agama" name="agama" type="text" class="form-control" placeholder="Agama" value="<?php echo $data['agama']; ?>" readonly>
      
      </div>    
       <div class="form-group has-feedback">
        <label>Status Perkawinan</label>
        <input id="statuskawin" name="statuskawin" type="text" class="form-control" placeholder="status kawin" value="<?php echo $data['statuskawin']; ?>" readonly>
      
      </div> 

       <div class="form-group has-feedback">
        <label>Pekerjaan</label>
        <input id="jenis_pekerjaan" name="jenis_pekerjaan" type="text" class="form-control" placeholder="jenis pekerjaan " value="<?php echo $data['jenis_pekerjaan']; ?>" readonly>
      
      </div>

       <div class="form-group has-feedback">
        <label>Kewarganegaraan</label>
        <input id="kewarganegaraan" name="kewarganegaraan" type="text" class="form-control" placeholder="Kewarganegaraan" value="<?php echo $data['kewarganegaraan']; ?>" readonly>
      
      </div>


         
               


              










              </div>

              <!-- /.box-body -->

              
            


     
        <div class="col-xs-8">
          
        </div>
        <!-- /.col -->
      

         
        <!-- /.col -->
     
    </form>

     <?php } ?>
    
 
   
  </div>
</div>
</div>





     



    


<footer class="footer-area">
        <div class="main-footer-area section-padding-100-0">
            <div class="container">
                <div class="row">
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <a href="#"><img src="img/core-img/logo2.png" alt=""></a>
                            </div>
                            <p>Dinas Kependudukan dan Pencatatan Sipil Kota Semarang.</p>
                            <div class="footer-social-info">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
               
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Informasi</h6>
                            </div>
                            <div class="gallery-list d-flex justify-content-between flex-wrap">
                                <a href="http://www.dispendukcapil.semarangkota.go.id/files/slides/FgT6xZD7Cl5b3d76c1ef2e8.jpg" class="gallery-img" title="Gallery Image 1"><img src="http://www.dispendukcapil.semarangkota.go.id/files/slides/FgT6xZD7Cl5b3d76c1ef2e8.jpg" alt=""></a>
                                <a href="http://www.dispendukcapil.semarangkota.go.id/files/slides/tEOTZdjLs5589d54d3174e5.jpg" class="gallery-img" title="Gallery Image 2"><img src="http://www.dispendukcapil.semarangkota.go.id/files/slides/tEOTZdjLs5589d54d3174e5.jpg" alt=""></a>
                                <a href="http://www.dispendukcapil.semarangkota.go.id/files/slides/cmJCqIy0je5c639a7606b1f.jpg" class="gallery-img" title="Gallery Image 3"><img src="http://www.dispendukcapil.semarangkota.go.id/files/slides/cmJCqIy0je5c639a7606b1f.jpg" alt=""></a>
                                <a href="http://www.dispendukcapil.semarangkota.go.id/files/slides/YvUwJbsC0A5ab457516ebeb.jpg" class="gallery-img" title="Gallery Image 4"><img src="http://www.dispendukcapil.semarangkota.go.id/files/slides/YvUwJbsC0A5ab457516ebeb.jpg" alt=""></a>
                                <a href="http://www.dispendukcapil.semarangkota.go.id/files/slides/sOZjgX5FoR5b555d7578752.jpg" class="gallery-img" title="Gallery Image 5"><img src="http://www.dispendukcapil.semarangkota.go.id/files/slides/sOZjgX5FoR5b555d7578752.jpg" alt=""></a>
                                <a href="http://www.dispendukcapil.semarangkota.go.id/files/slides/DsE034pIwz56690d798008a.jpg" class="gallery-img" title="Gallery Image 6"><img src="http://www.dispendukcapil.semarangkota.go.id/files/slides/DsE034pIwz56690d798008a.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Contact</h6>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-placeholder"></i>
                                <p>Jl. Kanguru Raya No.3, Gayamsari, Kec. Gayamsari, Kota Semarang, Jawa Tengah 50248</p>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-telephone-1"></i>
                                <p>Telp: (024) 6712563 <br>Fax. 024 6707203</p>
                            </div>
                            <div class="single-contact d-flex">
                                <i class="icon-worldwide"></i>
                                <p>www.dispendukcapil.semarangkota.go.id</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | E-KTP Online <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Adytya_Kha</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
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