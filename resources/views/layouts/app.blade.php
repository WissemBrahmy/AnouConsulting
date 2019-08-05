<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>ANOU | Consulting</title>

  
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- FancyBox -->
  <link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">
  
  <!-- Stylesheets -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>


<body>
  <div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- Preloader -->

  

<!--header top-->
<div class="header-top">
      <div class="container clearfix">
            <div class="top-left">
                  <h6>Horaires de travail : Lundi - Vendredi - 8am à 5pm</h6>
            </div>
            <div class="top-right">
                  <ul class="social-links">
                        <li>
                              <a href="#">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                              </a>
                        </li>
                        <li>
                              <a href="#">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                              </a>
                        </li>
                        <li>
                              <a href="#">
                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                              </a>
                        </li>
                        <li>
                              <a href="#">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                              </a>
                        </li>
                        <li>
                              <a href="#">
                                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                              </a>
                        </li>
                  </ul>
            </div>
      </div>
</div>
<!--header top-->

<!--Header Upper-->
<section class="header-uper">
      <div class="container clearfix">
            <div class="logo">
                  <figure>
                        <a href="{{route("index")}}">
                              <img src="images/ANOU.png" alt="" width="150">
                        </a>
                  </figure>
            </div>
            <div class="right-side">
                  <ul class="contact-info">
                        <li class="item">
                              <div class="icon-box">
                                    <i class="fa fa-envelope-o"></i>
                              </div>
                              <strong>Email</strong>
                              <br>
                              <a href="#">
                                    <span>contact@anou-dsi.eu</span>
                              </a>
                        </li>
                        <li class="item">
                              <div class="icon-box">
                                    <i class="fa fa-phone"></i>
                              </div>
                              <strong>Téléphone</strong>
                              <br>
                              <span>+33 1 73 70 86 97 || +33 6 36 34 95 40</span>
                        </li>
                  </ul>
                  <div class="link-btn">
                        <a href="#" class="btn-style-one">MESSAGE</a>
                  </div>
            </div>
      </div>
</section>
<!--Header Upper-->


<!--Main Header-->
<nav class="navbar navbar-default">
      <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                        aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                  </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                        <li class="active">
                              <a href="{{route("index")}}">ACCUEIL</a>
                        </li>
                      
                        <li class="active">
                              <a href="{{route("services")}}">SERVICES</a>
                        </li>
                       
                        <li class="active">
                              <a href="{{route("equipes")}}">EQUIPES</a>
                        </li>
                      
                        <li class="active">
                              <a href="{{route("offres")}}">NOS OFFRES</a>
                        </li>
                        <li class="active">
                              <a href="{{route("actualites")}}">ACTUALITES</a>
                        </li>
                        <li class="active">
                              <a href="{{route("apropos")}}">NOUS CONNAITRE</a>
                        </li>
                        <li class="active">
                              <a href="{{route("contact")}}">CONTACT</a>
                        </li>
                      
                  </ul>
            </div>
            <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
</nav>


@yield('content')
<!--footer-main-->
<footer class="footer-main">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="about-widget">
            <div class="footer-logo">
              <figure>
                <a href="index.html">
                  <img src="images/ANOU.png" alt="" width="325" height="150">
                </a>
              </figure>
            </div>
            <p>ANOU Consulting est une société de conseil IT de nouvelle génération mise au service des stratégies de transformation 
                et de Gestion d’infrastructure informatique et des systèmes d’informations des entreprises.</p>
            <ul class="location-link">
              <li class="item">
                <i class="fa fa-map-marker"></i>
                <p>70 Bis Boulevard Diderot, 75012, Paris</p>
              </li>
              <li class="item">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                <a href="#">
                  <p>contact@anou-dsi.eu</p>
                </a>
              </li>
              <li class="item">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <p>+33 1 73 70 86 97  </p>
               <p> +33 6 36 34 95 40</p>
              </li>
            </ul>
            <ul class="list-inline social-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <h6>Services</h6>
          <ul class="menu-link">
            <li>
              <a href="{{route("services")}}">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Conseil Stratégique</a>
            </li>
            <li>
              <a href="{{route("services")}}">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Ingénierie Applicative</a>
            </li>
            <li>
              <a href="{{route("services")}}">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Production Et Infrastructure</a>
            </li>
            <li>
              <a href="{{route("services")}}">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Big Data</a>
            </li>
          
          </ul>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="social-links">
            <h6>CONTACT</h6>
            <ul>
              <li class="item">
                <div class="media">
                 
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#">Prenez contact avec nous et démarrez votre projet !</a></h4>
                    <a href="{{route("contact")}}" class="btn btn-style-one">Contactez ANOU consulting!</a>
                  </div>
                </div>
              </li>
         
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container clearfix">
      <div class="copyright-text">
        <p>&copy; Copyright 2019. All Rights Reserved by
          <a href="index.html">ANOU Consulting</a>
        </p>
      </div>
      <ul class="footer-bottom-link">
        <li>
          <a href="{{route("index")}}">ACCUEIL</a>
        </li>
        <li>
          <a href="{{route("apropos")}}">A PROPOS</a>
        </li>
        <li>
          <a href="{{route("contact")}}">CONTACT</a>
        </li>
      </ul>
    </div>
  </div>
</footer>
<!--End footer-main-->

</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top">
  <span class="icon fa fa-angle-up"></span>
</div>

<script src="plugins/jquery.js"></script>
<script src="plugins/bootstrap.min.js"></script>
<script src="plugins/bootstrap-select.min.js"></script>
<!-- Slick Slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- FancyBox -->
<script src="plugins/fancybox/jquery.fancybox.min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="plugins/google-map/gmap.js"></script>

<script src="plugins/validate.js"></script>
<script src="plugins/wow.js"></script>
<script src="plugins/jquery-ui.js"></script>
<script src="plugins/timePicker.js"></script>
<script src="js/script.js"></script>
</body>

</html>

