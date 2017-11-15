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
<link type="text/css" rel="stylesheet" href="libs/css/main.css">
<style media="screen">
.fdb-block .fdb-touch {
  border-top-color: #FFFF00
}
.carousel {margin-bottom: 0}
.form-control:focus {
  border-color: #FFFF00;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(255,255,0, .6);
          box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(255,255,0, .6);
}
.bg-fif {background: rgba(0,0,0,0.7)}
.navbar-dark .navbar-nav .active>.nav-link, .navbar-dark .navbar-nav .nav-link.active, .navbar-dark .navbar-nav .nav-link.show, .navbar-dark .navbar-nav .show>.nav-link {
    color: #FFFF00;
}
.phonenumber {
font-weight: bold;
font-size: 15px;
  color: #FFFF00;
}
.navbar-dark {margin:20px;}
.bg-light {background:#FFFF00!important; }
.bg-light .phonenumber{color:#000000!important; }
.navbar-dark , .navbar-light {
  transition: all 0.5s ease;
}
.imgfl {height:100px;width:auto}
.carousel-caption {padding: 15px;background: rgba(0, 0, 0, 0.5); }
.carousel-caption h1 ,.carousel-caption p {!important;color:#FFFF00 !important;margin-bottom:0}
.serv {margin-bottom: 15px;}
</style>
    <!-- Bootstrap CSS -->
  </head>
  <body>






<?php
include 'inc/navbar.php';



include 'inc/carousel.php';


include 'inc/apk.php';

include 'inc/services.php';
// include 'inc/services2.php';

  include 'inc/contact.php';



include 'inc/social.php';
include 'inc/footer.php';

 ?>















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
