@extends('layouts.app')

@section('content')
<br><br>
<!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/background/3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>ACTUALITES</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="{{route("index")}}">ACCUEIL &nbsp;/</a>
                </li>
                <li>Actualités</li>
            </ul>
        </div>
    </div>
</section>
<BR>
<div class="section-title text-center">
<h3>L'actualité 
                <span> - ANOU Consulting </span>
            </h3>
            </DIV>
<!--End Page Title-->
<section class="story">


@if(count($news))

@foreach($news as $n)
    <div class="container">
    
        <div class="row">
       
            <div class="col-md-6">
           
                <img src="{{$n->image}}" class="responsive" alt="story">
            </div>
            <div class="col-md-6">
                <div class="story-content">
                    <H4>ANOU Consulting</H4>
                    <h2>{{$n->title}}</h2>
                    
                    <h5 class="tagline">ANOU Consulting | créer le {{$n->created_at}}</h6>
                  <h5>  {{$n->content}}.    </h5>
                  <br>
                </div>
                             <div class="link-btn">
                                <a href="{{route("actualites")}}" class="btn-style-one"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp En savoir plus</a>
                              
                            </div>
            </div>
        </div>
    </div>
    <br><br>
    @endforeach   
    @else
  <p class="alert alert-warning">
       Aucune actualité !
        </p>
 @endif
</section>

                  
                    
    <div class="row">
                                <div class="col-md-4 col-md-offset-4">
                                    {{$news->links()}}
                                </div>
   </div>
   
@endsection