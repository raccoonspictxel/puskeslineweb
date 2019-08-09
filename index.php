<?php session_start(); 
    class index {
    var $nama;
    function tampilkan_nama(){

    }

    }
    $index = new index();
    echo $index -> tampilkan_nama();
    ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>PUSKESLINE</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>

    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="top_menu row m0">
            <div class="container">
                <div class="float-left">
                    <a class="dn_btn" href="mailto:medical@example.com"><i class="ti-email"></i>puskesline@gmail.com</a>
                   
                </div>
                <div class="float-right">
                    <ul class="list header_social">
                        <li><a href="#"><i class="ti-google"></i></a></li>
                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                        
                    </ul>	
                </div>
            </div>	
        </div>	
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li> 
                            <li class="nav-item"><a class="nav-link" href="about-us.php">About</a></li> 
                            <li class="nav-item"><a class="nav-link" href="department.html">Artikel</a></li> 
                            <li class="nav-item"><a class="nav-link" href="doctors.php">Tanya Dokter</a></li>
                            <li class="nav-item"><a class="nav-link" href="scanresep.php">Scan Resep</a></li>    
                            
                           
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->

    <section class="banner-area d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <h1>Pusat Kesehatan Online<br>
                    </h1>
                    <p>Artikel, Tanya Dokter dan Scan Resep</p>
                    <?php
                        if(isset($_SESSION['status'])){ ?>
                            <a href="login/logout.php" class="main_btn_light">Logout</a>
                    <?php
                        }else{
                    ?>
                    <a href="login/" class="main_btn_light">Login Sekarang</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <!--================End Home Banner Area =================-->


    <!--================ Feature section start =================-->      
    <section class="feature-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-feature text-center text-lg-left">

                            <h3 class="card-feature__title"><span class="card-feature__icon">
                                <i class="ti-layers"></i>
                            </span>Artikel Kesehatan</h3>
                            <p class="card-feature__subtitle">Artikel Lengkap dan Akurat !</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-feature text-center text-lg-left">

                            <h3 class="card-feature__title"><span class="card-feature__icon">
                                <i class="ti-heart-broken"></i>
                            </span>Scan Resep</h3>
                            <p class="card-feature__subtitle">Anda Dapat Melakukan Scan Resep Disini !</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-feature text-center text-lg-left">

                            <h3 class="card-feature__title"><span class="card-feature__icon">
                                <i class="ti-headphone-alt"></i>
                            </span>Tanya Dokter</h3>
                            <p class="card-feature__subtitle">Konsultasikan Masalah Kesehatan Disini !</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!--================ Feature section end =================-->  

    <!--================ Service section start =================-->  

    <div class="service-area area-padding-top">
        <div class="container">
            <div class="area-heading row">
                <div class="col-md-5 col-xl-4">
                    <h3>Quote Today</h3>
                </div>
                <div class="col-md-7 col-xl-8">
                    <p>“Dalam kesehatan terdapat kebebasan. Kesehatan adalah hal paling pertama dalam semua kebebasan.” – Henri Frederic Amiel</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card-service text-center text-lg-left mb-4 mb-lg-0">
                        <span class="card-service__icon">
                            <i class="flaticon-brain"></i>
                        </span>
                        <h3 class="card-service__title">Pola Hidup Sehat untuk Atasi Bakteri Pneumonia</h3>
                        <p class="card-service__subtitle">...</p>
                        <a class="card-service__link" href="#">Baca Selengkapnya</a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card-service text-center text-lg-left mb-4 mb-lg-0">
                        <span class="card-service__icon">
                            <i class="flaticon-tooth"></i>
                        </span>
                        <h3 class="card-service__title">Lindungi Kepala agar Terhindar dari Pembengkakan Otak</h3>
                        <p class="card-service__subtitle">...</p>
                        <a class="card-service__link" href="#">Baca Selengkapnya</a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card-service text-center text-lg-left mb-4 mb-lg-0">
                        <span class="card-service__icon">
                            <i class="flaticon-face"></i>
                        </span>
                        <h3 class="card-service__title">Perlu Tahu, Terapi Fisik untuk Atasi Sakit Lutut
Baca Artikel Kesehatan di sini !</h3>
                        <p class="card-service__subtitle">...</p>
                        <a class="card-service__link" href="#">Baca Selengkapnya</a>
                    </div>
                </div>


            </div>
        </div>
    </div>    
    <!--================ Service section end =================-->      


    <!--================About  Area =================-->
    <section class="about-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10 offset-md-1 col-lg-6 offset-lg-6 offset-xl-7 col-xl-5">
                    <div class="about-content">
                        <h4>PUSKESLINE<br>
                            </h4>
                        <h6>Memiliki Dokter Dokter 
                        Berpengalaman Dibidangnya</h6>
                        <p>Kami memastikan Konsultasi anda dengan dokter kami, berjalan dengan lancar, dan nyaman<br><br></p>

                        <a class="link_one" href="konsultasi.php">Konsultasi Sekarang</a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================About Area End =================-->

    <!--================ Team section start =================-->  
    <section class="team-area area-padding">
        <div class="container">
            <div class="area-heading row">
                <div class="col-md-5 col-xl-4">
                    <h3>Profil<br>
                    Dokter </h3>
                </div>
                
            </div>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card card-team">
                        <img class="card-img rounded-0" src="img/team/1.jpg" alt="">
                        <div class="card-team__body text-center">
                           <h3><a href="konsultasi.php">dr. Ressa Yuneta, SpM</a></h3>
                            <p>Poli THT</p>
                            <div class="team-footer d-flex justify-content-between">
                               
                            </div> 
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card card-team">
                        <img class="card-img rounded-0" src="img/team/2.jpg" alt="">
                        <div class="card-team__body text-center">
                             <h3><a href="konsultasi.php">dr. Vebiona Kartini Putri, SpJP</a></h3>
                            <p>Poli Jantung</p>
                            <div class="team-footer d-flex justify-content-between">
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card card-team">
                        <img class="card-img rounded-0" src="img/team/3.jpg" alt="">
                        <div class="card-team__body text-center">
                             <h3><a href="konsultasi.php">dr. Fatmawati,SpPK</a></h3>
                            <p>Patalogi Klinik</p>
                            <div class="team-footer d-flex justify-content-between">
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Team section end =================-->  

  
        
       

    <!-- ================ Hotline Area Starts ================= -->  
    <section class="hotline-area text-center area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Hubungi Kami</h2>
                    <span>(+628) 2288 3959 77</span>
                    <p class="pt-3">Siap Melayani Anda 24 Jam
                </div>
            </div>
        </div>
    </section>
    <!-- ================ Hotline Area End ================= -->  

<br>

                        <div class="info"></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row footer-bottom d-flex justify-content-between">
            <p class="col-lg-8 col-sm-12 footer-text m-0">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Hak Cipta &copy;<script>document.write(new Date().getFullYear());</script> Raccoons x Springrolls - <i class="fa fa-heart" aria-hidden="true"></i> - <a href="https://colorlib.com" target="_blank">BPWL</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            
</footer>
<!-- End footer Area -->






<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/stellar.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/contact.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/theme.js"></script>
</body>
</html>