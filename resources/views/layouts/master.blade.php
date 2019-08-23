<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>ANOU | Consulting</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="{{asset('plugins/slick/slick.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/slick/slick-theme.css')}}">
  <link href="{{asset('css/bootstrap-table.css" rel="stylesheet')}}">
  <link href="{{asset('css/bootstrap.min.css" rel="stylesheet')}}">

<!-- Custom CSS -->
<link href="{{asset('css/landing-page.css" rel="stylesheet')}}">
<link href="{{asset('css/bootstrap.min.css" rel="stylesheet')}}">
<link href="{{asset('css/datepicker3.css" rel="stylesheet')}}">

<link href="{{asset('css/bootstrap-table.css" rel="stylesheet')}}">
<link rel="stylesheet" href="{{asset('css/messi.min.css')}}" />
  <!-- FancyBox -->
  <link rel="stylesheet" href="{{asset ('plugins/fancybox/jquery.fancybox.min.css')}}">
  
  <!-- Stylesheets -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
		<script src="{{asset('js/bootstrap-table.js')}}"></script>


            
  
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/icofont.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
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
                              <img src="{{asset('images/ANOU.png')}}" alt="" width="150">
                        </a>
                  </figure>
            </div>
            <div class="right-side">
            <h3>Admin Dashboard</h3>
            <br>
                  
                        <h4></h4>
                                        
                                    
                                        <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
  <i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp {{ Auth::user()->name }}
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu " aria-labelledby="dropdownMenu1">
  <li><a href="{{route("edit_admin")}}"><i class="fa fa-wrench" aria-hidden="true"></i>&nbsp Modifier informations</a></li>
  <li><a href="{{route("liste_admins")}}"><i class="fa fa-users" aria-hidden="true"></i>&nbsp Liste  des administrateurs</a></li>
    
  <li><a href="{{route("reg_admin")}}"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp Ajouter nouveau admin</a></li>
    
    <li role="separator" class="divider"></li>
   

    <li><a href="{{ route('logout') }}"
      onclick="event.preventDefault();
      document.getElementById('logout-form').submit();"                                      
     <b> <i class="fa fa-lock" aria-hidden="true"></i>&nbsp&nbsp     Déconnexion </b>
     </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      {{ csrf_field() }}
      </form>
      </li>
  </ul>
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
                              <a href="{{route("home_admin")}}">ACCUEIL</a>
                        </li>
                        <li class="active">
                              <a href="{{route("index_offres")}}">ESPACE OFFRES</a>
                        </li>
                        <li class="active">
                              <a href="{{route("index_news")}}">ESPACE ACTUALITES</a>
                        </li>
                        <li class="active">
                              <a href="{{route("index_candidatures")}}">ESPACE CONDIDATURES</a>
                        </li>
                        <li class="active">
                              <a href="{{route("index_messages")}}">ESPACE MESSAGES</a>
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
      <p>&copy; ANOU Consulting 2019 - Tous droits réservés
          <a href="{{route("home_admin")}}"></a>
        </p>
      </div>
      <ul class="footer-bottom-link">
        <li>
          <a href="{{route("home_admin")}}">ACCUEIL</a>
        </li>
        <li>
          <a href="{{route("index_offres")}}">OFFRES</a>
        </li>
        <li>
          <a href="{{route("index_news")}}">NEWS</a>
        </li>
        <li>
          <a href="{{route("apropos")}}">CANDUDATURES</a>
        </li>
        <li>
          <a href="{{route("index_messages")}}">MESSAGES</a>
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

