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
<div class="container">
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary" >
                <div class="panel-btn btn-style-one col-md-12">Connexion ADMINISTRATEUR AnouConsulting</div>
                <br>
                <div class="panel-body">
                
                        <div class="section-title text-center">
                                
                            @if(session('message'))
                                <p class="alert alert-success">
                                <b>    {{session('message')}}</b>
                                </p>
                            @endif
     
                        <figure>
                                <a href="">
                                    <img src="{{asset('images/ANOU.png')}}" alt="" width="150">
                                </a>
                        </figure>
                        </div>
                        <br>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __(' Adresse email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control main @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control main @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="btn btn-style-one" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label center" for="remember">
                                        {{ __('Rappelez moi !') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0 ">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-style-one">
                                <span class="fa fa-unlock-alt">    {{ __('Connecter') }}  </span>
                                </button>

                               
                            </div>
                        </div>
                    </form>
                </div>
           </div>
        </div>
    </div>
</div>

</body>
