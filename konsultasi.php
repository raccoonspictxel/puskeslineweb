<?php 
class konsultasi{

}
    
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
              <h2>Dokter</h2>
              <p>Silahkan Berkonsultasi</p>
            </div>
            
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->


   

    <!--================ Team section end =================-->  

<div class="container mb-3">
    <h2 align="center" style="margin: 60px 10px 10px 10px;">Konsultasi</h2><hr>
    <form method="POST" id="form_komen">
        <div class="form-group">
            <input type="text" name="nama_pengirim" id="nama_pengirim" class="form-control" placeholder="Masukkan Nama" />
        </div>
        <div class="form-group">
            <textarea name="komen" id="komen" class="form-control" placeholder="Tulis Konsultasi" rows="5"></textarea>
        </div>
        <div class="form-group">
            <input type="hidden" name="komentar_id" id="komentar_id" value="0" />
            <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
        </div>
    </form>
    <hr>
    <h4 class="mb-3">Konsultasi :</h4>
    <span id="message"></span>
   
    <div id="display_comment"></div>
</div>

</div>
        <!-- ================ Hotline Area Starts ================= -->  
       
        <!-- ================ Hotline Area End ================= --> 


        

        <!--================ Start Brands Area =================-->
     
            
            <div class="row footer-bottom d-flex justify-content-between">
                <p class="col-lg-8 col-sm-12 footer-text m-0">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Hak Cipta &copy;<script>document.write(new Date().getFullYear());</script> Raccoons x Springrolls - <i class="fa fa-heart" aria-hidden="true"></i> - <a href="https://colorlib.com" target="_blank">BPWL</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                
            </div>
        </div>
    </footer>
    <!-- End footer Area -->






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script>
    $(document).ready(function(){
        $('#form_komen').on('submit', function(event){
            event.preventDefault();
            var form_data = $(this).serialize();
            $.ajax({
                url:"tambah_komentar.php",
                method:"POST",
                data:form_data,
                success:function(data)
                {
                    $('#form_komen')[0].reset();
                    $('#komentar_id').val('0');
                    load_comment();
                }
            })
        });
 
        load_comment();
 
        function load_comment()
        {
            $.ajax({
                url:"ambil_komentar.php",
                method:"POST",
                success:function(data)
                {
                    $('#display_comment').html(data);
                }
            })
        }
 
        $(document).on('click', '.reply', function(){
            var komentar_id = $(this).attr("id");
            $('#komentar_id').val(komentar_id);
            $('#nama_pengirim').focus();
        });
    });
</script>
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