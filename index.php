<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="libs/bootstrap4/css/bootstrap.min.css" >
<link href="https://fonts.googleapis.com/css?family=Amatic+SC:700" rel="stylesheet">

<!-- <link rel="stylesheet" href="libs/main/css/main-froala.css"> -->
<link type="text/css" rel="stylesheet" href="libs/froala/css/froala_blocks.css">
<link type="text/css" rel="stylesheet" href="libs/font-awesome/css/font-awesome.css">
<link type="text/css" rel="stylesheet" href="libs/css/carousel.css">
<style media="screen">

.bg-fif {background: rgba(0,0,0,0.7)}
.navbar-dark .navbar-nav .active>.nav-link, .navbar-dark .navbar-nav .nav-link.active, .navbar-dark .navbar-nav .nav-link.show, .navbar-dark .navbar-nav .show>.nav-link {
    color: #FFFF00;
}
.navbar-dark {margin:20px;}
.bg-light {background:#FFFF00!important; }
.navbar-dark , .navbar-light {
  transition: all 0.5s ease;
}
.imgfl {height:100px;width:auto}

.carousel-caption h1 ,.carousel-caption p {background: rgba(0, 0, 0, 0.5); !important;color:#FFFF00 !important;margin-bottom:0}

</style>
    <!-- Bootstrap CSS -->
  </head>
  <body>






<?php include 'inc/navbar.php'; ?>



<?php include 'inc/carousel.php'; ?>


















      <section class="fdb-block pb-0">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-10 col-sm-6 col-md-5 col-lg-4 m-auto pb-5 pb-md-0">
                <img alt="image" class="img-fluid br-0" src="libs/froala/imgs/img_tall.png">
              </div>

              <div class="col-12 ml-md-auto col-md-7 col-lg-5 pb-5 pb-md-0">
                <img alt="image" class="fdb-icon" src="libs/froala/imgs/img_square_1.svg">
                <h1>Télécharger l'application dz services</h1>
                <p class="text-h3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
                <p class="mt-4"><a class="btn" href="#">Download</a><a class="btn" href="#">Telecharger</a></p>
              </div>
            </div>
          </div>
        </section>



        <section class="fdb-block fdb-image-bg" style="background: url(libs/froala/imgs/img_bg.jpg)">
            <div class="container">
              <div class="row text-center">
                <div class="col-12">
                  <h1 style="color:#FFFF00">Les sercives</h1>
                </div>
              </div>
            </div>
          </section>


<?php include 'inc/services.php'; ?>









<?php include 'inc/contact.php'; ?>


  <section class="fdb-block">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-10 col-md-8 col-lg-4 text-center">
            <p class="text-h3">
              Follow us and ask more on:
            </p>
            <p class="text-h2">
              <a href="#"><i class="fa fa-facebook"></i></a>&nbsp;&nbsp;&nbsp;
              <a href="#"><i class="fa fa-twitter"></i></a>&nbsp;&nbsp;&nbsp;
              <a href="#"><i class="fa fa-instagram"></i></a>&nbsp;&nbsp;&nbsp;
              <a href="#"><i class="fa fa-google"></i></a>&nbsp;&nbsp;&nbsp;
              <a href="#"><i class="fa fa-pinterest"></i></a>
            </p>
          </div>
        </div>
      </div>
    </section>












    <footer class="fdb-block footer-small bg-dark">
        <div class="container">
          <div class="row text-center align-items-center">
            <div class="col">
              <ul class="nav justify-content-center">
                <li class="nav-item">
                  <a class="nav-link active" href=#>Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Privacy Policy</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Terms</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
              </ul>

              <p class="text-h5 mt-5">© 2013-2017 FREQUENCY</p>
            </div>
          </div>
        </div>
      </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="libs/bootstrap4/js/jquery-3.2.1.slim.min.js" ></script>
    <script src="libs/bootstrap4/js/popper.min.js" ></script>
    <script src="libs/bootstrap4/js/bootstrap.min.js" ></script>

<script type="text/javascript">
function testScroll(ev){
  var winH = window.innerHeight	;
  if(window.pageYOffset> (winH - 200)) {
    document.querySelector('nav').classList.add('bg-light');
  document.querySelector('nav').classList.remove('navbar-dark');
  document.querySelector('nav').classList.remove('bg-fif');
  document.querySelector('#logo').src="img/logo.png";
}else {
  document.querySelector('nav').classList.remove('bg-light');
  document.querySelector('nav').classList.add('bg-fif');
  document.querySelector('nav').classList.add('navbar-dark');
  document.querySelector('#logo').src="img/logoy.png";
}
}
testScroll();
window.onscroll=testScroll;
</script>

  </body>
</html>
