<?php 
session_start();

include_once 'myadmin/setting/database.php';
include_once 'controll/statussession.php';

$nik = $_SESSION['nik'];
$_SESSION['user'];


$username = mysqli_query($koneksi, "SELECT username FROM akun ");
$data=mysqli_fetch_array($username);



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
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">

            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(https://2.bp.blogspot.com/-3fvI4sCxjWU/WsXQ5qeOuEI/AAAAAAAAJZo/9GhYJac5c0c_W1ifNMpTgDSt-rKbw1wxACLcBGAs/s1600/WhatsApp%2BImage%2B2018-04-05%2Bat%2B13.28.27%25283%2529.jpeg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content" >
                              <br> <br><br><br><br><br><br><br>
                              

                                <h2 style="color:#FF0000;" data-animation="fadeInUp" data-delay="400ms"><br>Sistem Informasi<br>  E-KTP DISDUKCAPIL<br> Kota Semarang</h2>
                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(https://pbs.twimg.com/media/D6LwI4hVUAA5TCI.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                       
                              <br> <br><br><br><br><br><br><br>
                              

                                <h2 style="color:#FF0000;" data-animation="fadeInUp" data-delay="400ms">Sistem Informasi<br>  E-KTP DISDUKCAPIL<br> Kota Semarang</h2>
                        
                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Top Feature Area Start ##### -->
    <div class="top-features-area wow fadeInUp" data-wow-delay="300ms">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="features-content">
                        <div class="row no-gutters">
                            <!-- Single Top Features -->
                            <div class="col-12 col-md-4">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <i class="icon-agenda-1"></i>
                                    <h5>Online Courses</h5>
                                </div>
                            </div>
                            <!-- Single Top Features -->
                            <div class="col-12 col-md-4">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <i class="icon-assistance"></i>
                                    <h5>Amazing Teachers</h5>
                                </div>
                            </div>
                            <!-- Single Top Features -->
                            <div class="col-12 col-md-4">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <i class="icon-telephone-3"></i>
                                    <h5>Great Support</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Top Feature Area End ##### -->

    <!-- ##### Course Area Start ##### -->
    <div class="academy-courses-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Single Course Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <div class="course-icon">
                            <i class="fa fa-child "></i>
                        </div>
                        <div class="course-content">
                            <h4>Akta Kelahiran</h4>
                            <p>Cras vitae turpis lacinia, lacinia la cus non, fermentum nisi.</p>
                        </div>
                    </div>
                </div>
                <!-- Single Course Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div  class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="400ms">
                        <div   class="course-icon">
                            <i class="icon-contract" ></i>
                        </div>
                        <div   class="course-content">
                            
                            <h4  >Akta Kematian</h4>
                            <a href="#">Lacinia, lacinia la cus non, fermen tum nisi.</a>
                        </div>
                    </div>
                </div>
                <!-- Single Course Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <div class="course-icon">
                            <i class="icon-id-card"></i>
                        </div>
                        <div class="course-content">
                            <h4>KTP Elektronik</h4>
                            <p>Cras vitae turpis lacinia, lacinia la cus non, fermentum nisi.</p>
                        </div>
                    </div>
                </div>
                <!-- Single Course Area -->
   
                <!-- Single Course Area -->
 
                <!-- Single Course Area -->
       
            </div>
        </div>
    </div>


    <!-- ##### Course Area End ##### -->

    <!-- ##### Testimonials Area Start ##### -->

    <!-- ##### Testimonials Area End ##### -->

    <!-- ##### Top Popular Courses Area Start ##### -->

    <!-- ##### Top Popular Courses Area End ##### -->

    <!-- ##### Partner Area Start ##### -->

    <!-- ##### Partner Area End ##### -->


    <!-- ##### CTA Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
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