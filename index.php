<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from admin.pixelstrap.com/viho/theme/landing-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Sep 2021 03:28:11 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>Penggajian Tobadak</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owlcarousel.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
  </head>
  <body class="landing-wrraper" background = "assets/images/bg.jpg">
    
      <!-- Session   -->
    <?php 
	    session_start();
    
      if($_SESSION['status']!="login"){
        header("location:login.php");
      }
	    
	  ?>
        <section class="framework section-py-space light-bg" id="framework">
          <div class="custom-container">
            <div class="row">   
              <div class="col-sm-12 framworks">                 
                
                <div  id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <ul class="framworks-list">
                      <li class="fadeInUp" style="width:500px; hight:300px">
                        <div><a href="pegawai-pns.php"><img style="width:100px; hight:100px" src="assets/images/pns.png" alt=""></a></div>
                        <h6>Pegawai PNS</h6>
                      </li>
                      <br>
                      <li class="fadeInUp" style="width:500px; hight:300px">
                        <div><a href="absensi-pns.php"><img style="width:100px; hight:100px" src="assets/images/absen1.png" alt=""></a></div>
                        <h6>Data Absen</h6>
                      </li>
                      <br>
                      <li class="fadeInUp" style="width:500px; hight:300px">
                        <div><a href="eselon.php"><img style="width:100px; hight:100px" src="assets/images/gear.png" alt=""></a></div>
                        <h6>Pengaturan</h6>
                      </li>
                      <!-- <li class="fadeInUp" style="width:300px; hight:300px">
                        <div><a href="absensi-pegawai-kontrak.php"><img style="width:100px; hight:100px" src="assets/images/absen2.png" alt=""></a></div>
                        <h6>Absen Pegawai Kontrak</h6>
                      </li> -->
                    </ul>
                  </div>
                  
                </div>
                
              </div>
            </div>
          </div>
        </section>
       
  
    <!-- latest jquery-->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    
    <script src="assets/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    <script src="assets/js/owlcarousel/owl.carousel.js"></script>
    <script src="assets/js/owlcarousel/owl-custom.js"></script>
    <script src="assets/js/landing_sticky.js"></script>
    <script src="assets/js/landing.js"></script>
    <script src="assets/js/jarallax_libs/libs.min.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>

<!-- Mirrored from admin.pixelstrap.com/viho/theme/landing-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Sep 2021 03:28:28 GMT -->
</html>