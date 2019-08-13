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
  <link href="css/bootstrap-table.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/landing-page.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">

<link href="css/bootstrap-table.css" rel="stylesheet">
<link rel="stylesheet" href="css/messi.min.css" />
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
            <h3>Admin Dashboard</h3>
            <br>
                  <h6>anouConsulting</h6>
           
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            
                                            <b>     Déconnexion </b>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    
                
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
                              <a href="{{route("home_admin")}}">ACCUEIL</a>
                        </li>
                        <li class="active">
                              <a href="{{route("offres_admin")}}">ESPACE OFFRES</a>
                        </li>
                        <li class="active">
                              <a href="{{route("news_admin")}}">ESPACE ACTUALITES</a>
                        </li>
                        <li class="active">
                              <a href="{{route("candidatures_admin")}}">ESPACE CONDIDATURES</a>
                        </li>
                        <li class="active">
                              <a href="{{route("messages_admin")}}">ESPACE MESSAGES</a>
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
  
  <div class="footer-bottom">
    <div class="container clearfix">
      <div class="copyright-text">
      <p>&copy; ANOU Consulting, 2019 - Tous droits réservés
          <a href="{{route("index")}}"></a>
        </p>
      </div>
      <ul class="footer-bottom-link">
        <li>
          <a href="{{route("index")}}">ACCUEIL</a>
        </li>
        <li>
          <a href="{{route("apropos")}}">OFFRES</a>
        </li>
        <li>
          <a href="{{route("apropos")}}">NEWS</a>
        </li>
        <li>
          <a href="{{route("apropos")}}">CANDUDATURES</a>
        </li>
        <li>
          <a href="{{route("contact")}}">MESSAGES</a>
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
<script src=”//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js”></script>
</body>

</html>
