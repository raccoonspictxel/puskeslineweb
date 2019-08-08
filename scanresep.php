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
                    <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li> 
                            <li class="nav-item"><a class="nav-link" href="about-us.html">About</a></li> 
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
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
              <h2>Scan Resep</h2>
              <p>Scan Resep Anda Sekarang!</p>
            </div>
            
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->


     
    <!--================ Team section start =================-->  
   <section class="team-area area-padding">
        <div class="container">
            <div class="area-heading row">
<div class="col-5 col-md-3 col-lg-6">
<form action="scanresep.php" enctype="multipart/form-data" method="post">
<table border="0" align="center">
<tbody>


<h2>Upload Resep Anda</h2>


<colspan="2" align="center"><input name="gambar" type="file" />
<input name="tombol" type="submit" value="Upload !" />
</tr>
</tbody>
</table>
<?php
   
  include("fungsi_koneksi.php");
   
    
  $koneksi = koneksi_db();
  $sql  = "select * from dtimage";
  $aksi = mysqli_query($koneksi, $sql);
   
  echo "";
         
  $no = 1;
  $data = mysqli_fetch_array($aksi)
    
?>
     
         <img src="img/<?php echo $data['nama_image']; ?>" border="0"/> 
  
  

</div>
</div>
</div>
</section>

<?php
  // code A

  // end of code A
   
  // code B
  $lokasi_file = $_FILES['gambar']['tmp_name'];
  $tipe_file   = $_FILES['gambar']['type'];
  $nama_file   = $_FILES['gambar']['name'];
  $direktori   = "img/$nama_file";
  // end of code B
   
  if (!empty($lokasi_file)) {
    move_uploaded_file($lokasi_file,$direktori); 
   
    // code C
    $sql = "insert into dtimage values (null,'$nama_file')";
    $aksi = mysqli_query($koneksi,$sql);
    // end of code C
     
    // code D
    if (!$aksi) {
    echo "maaf gagal memasukan gambar";
    }else{
    
    }
    // end of code D
     
  }else{
    echo "terjadi kesalahan";  
  }
  ?>

</body>
</html>

