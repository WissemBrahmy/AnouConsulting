@extends('layouts.app')

@section('content')
<br><br>
<!--Page Title-->
<section class="page-title text-center" style="background-image:url('{{asset('images/background/3.jpg')}}');">
    <div class="container">
        <div class="title-text">
            <h1>NOS OFFRES</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.html">ACCUEIL &nbsp;/</a>
                </li>
                <li>Résultat de votre recherche</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Contact Section -->
<section class="blog-section section style-three pb-0">
    <div class="container">
    <div class="row">
    <div class="section-title text-center">
            <h3>LISTE DES OFFRES 
                <span>D’EMPLOI SELON VOTRE RECHERCHE</span>
                <p>Vous souhaitez rejoindre une société en pleine expansion et des projets à forte valeur ajoutée ?
                  Recherchez l’opportunité qui vous correspond et prenez part à l’aventure ANOU consulting ! </p>
               </div>
        </div>                    
    </div>
</section>
<!-- End Contact Section -->

<!--team section-->
<section class="team-section section">
    <div class="container">
   
                <div class="row">
                @if(count($offres))

                    @foreach($offres as $o)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="team-member">
                            
                            <div class="contents text-center">
                                <h4> OFFRE N° {{$o->id}}</h4>
                                <h6>{{$o->title}}</h6>
                                <p><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp Region: &nbsp {{$o->region}}</p>
                                <p>{{$o->domaine}} &nbsp|| &nbsp {{$o->niveau}}</p>
                                <p>{{$o->description}}</p><br>
                                <i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp {{\Carbon\Carbon::parse($o->created_at)->diffForHumans()}}
                                <br>
                                    
                        <a class="btn-style-one" href="{{route('postule_offres', $o->id) }}"><i class="fa fa-hand-pointer-o" aria-hidden="true"></i>&nbsp Postuler maintenant</a>
                            </div>
                        </div>
                    </div>
            @endforeach
            </div>
            </div>
            <div class="row">
                                <div class="col-md-4 col-md-offset-4">
                                    {{$offres->links()}}
                                </div>
            </div>

  
    
          
        
      
       @else
        <p class="alert alert-warning col-md-8">
        Aucune offre associée à votre recherche  !
        </p>
        
        @endif
   



   
@endsection