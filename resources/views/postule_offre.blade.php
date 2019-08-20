@extends('layouts.app')

@section('content')
<!--Page Title-->
<section class="page-title text-center" style="background-image:url('{{asset('images/background/3.jpg')}}');">
    <div class="container">
        <div class="title-text">
            <h1>NOS OFFRES</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.html">ACCUEIL &nbsp;/</a>
                </li>
                <li>Postuler</li>
            </ul>
        </div>
    </div>
</section>
<div class="container">
            <div class="row">
            <BR>
            <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-INFO" >
             
                <br>
                <div class="panel-body">
               
                  <div class="contact-area style-one">
                  <div class="col-md-8 ">
                  <div class="panel panel-primary" >
                        
                        <br>
                        <div class="panel-body">
                    <div class="section-title ">
                    <h4>Postuler pour l'offre :  
                        <span>{{$offre->title}}</span>
                    </h4>
                    <br>
                    <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp Region: {{$offre->region}} &nbsp--&nbsp
                    <i class="fa fa-desktop" aria-hidden="true"></i>&nbsp {{$offre->domaine}} </p>
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp Niveau d'etude demandé: {{$offre->niveau}}</p>
                        <i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp <b>Description:</b><br>
                         <p>{{$offre->description}}</p>
                        
                        </div>                    
            </div></div>
            </div>
             <br><br><br><br><br><br><br><br><br><br>
                  <form  action="{{ route('postulation.store') }}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
                            <input type="hidden"  name="id_offre" value="{{$offre->id}}">
                              <div class="row">
                             <div class="col-md-4 col-sm-12 col-xs-12">
                               <input type="text"  name="nom" class="form-control main" placeholder="Votre nom complet" required>
                             </div>
                               
                             <div class="col-md-4 col-sm-12 col-xs-12">
                           
                              <input type="email" name="email" id="email" class="form-control main" placeholder="Votre adresse email" required>
                              </div>
                              
                              <div class="col-xs-8">
                                    <div class="form-group">
                                    Votre cv <input type="File" id="cv" name="cv"   class="input-lg">
                                    </div>
                              </div>
                              </div>
                            
                              <div class="row">
                              <div class="col-md-8 col-sm-12 col-xs-12">
                            <textarea name="lm" rows="15" class="form-control main" placeholder="Votre lettre de motivation"></textarea>
                        </div>
                             </div>
                              <div>
                              <br>
                             <div class="row">
                              <div class="col-md-3 ">
                            <button class="btn btn-style-one" type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp Postuler</button>
                            
                        </div>
                        </div>
                        </form>
                  </div>                      
                  </div> 
                  
            </div>                    
            </div>
            </div> 
            </div>                    
            </div>
            </div>
</div>
@endsection