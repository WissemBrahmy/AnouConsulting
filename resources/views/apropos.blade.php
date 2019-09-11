@extends('layouts.app')

@section('content')
<br><br>
<!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/background/3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>À PROPOS</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="{{route("index")}}">home &nbsp;/</a>
                </li>
                <li>à propos</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Our Story -->
<section class="story">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="images/services/cc.png" class="responsive" alt="story">
            </div>
            <div class="col-md-6">
                <div class="story-content">
                    <h2>Qui sommes-nous</h2>
                    <H4>ANOU Consulting</H4>
                    <h5 class="tagline">Au cœur de votre transformation digitale !</h6>
                    Nous sommes une société de service du numérique spécialisée en conseil et en ingénierie 
                    dans les technologies de l’information. <BR>
                    Nous accompagnons nos clients dans leurs projets d’innovation et de transformation.<br>
                    Partenaire de confiance, ANOU Consulting met au service de ses clients des compétences à 
                    forte valeur ajoutée couvrant l’ensemble de la chaîne de valeur des systèmes d’information : la 
                    production et les infrastructures informatiques, l’ingénierie applicative et le conseil.    
                </div>
            </div>
        </div>
    </div>
</section>






<!-- End Contact Section -->
@endsection