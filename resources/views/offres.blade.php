@extends('layouts.app')

@section('content')

<!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/background/3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>NOS OFFRES</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.html">ACCUEIL &nbsp;/</a>
                </li>
                <li>Nos offres</li>
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
              <div class="contact-form responsive">
                    @if(session('message'))
                         <p class="alert alert-success">
                         <b>    {{session('message')}}</b>
                         </p>
                    @endif
              </div>
            <h3>Envoi d'une 
                <span>candidature spontanée </span>
            </h3><br>
            <p>Nous sommes régulièrement à la recherche de nouveaux talents. Envie de vous impliquer à 200% avec notre équipe ?
             Transmettez-nous votre candidature spontanée via le formulaire ci-dessous.!</p>
        </div><br><br>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="contact-area style-one">
                        
                        <form name="contact_form" class="default-form contact-form" action="{{ route('candidatures.store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                              <div class="row">
                                 
                              <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                          <input type="text" name="nom" placeholder="Nom complet" required="">
                                    </div>
                              </div>  
                              <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                          <input type="text" name="adresse" placeholder="Adresse" required="">
                                    </div>
                              </div>  
                              <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                          <input type="text" name="diplome" placeholder="Diplome" required="">
                                    </div>
                              </div>  
                              <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                          <input type="Email" name="email" placeholder="Email" required="">
                                    </div>
                              </div>  
                              <div class="col-md-6 col-sm-12 col-xs-12"> 
                                    <div class="form-group">
                                          <select name="domaine">
                                          <option>Domaine</option>
                                          <option>Développement web</option>
                                          <option>Développement mobile</option>
                                          <option>Réseau informatique</option>
                                          </select>
                                    </div>      
                              </div>
                              <div class="col-md-6 col-sm-12 col-xs-12"> 
                                    <div class="form-group">
                                          <select name="niveau">
                                          <option>Niveau d'etude</option>
                                          <option>Bac</option>
                                          <option>BAC+3</option>
                                          <option>BAC+5</option>
                                          <option>Autres</option>
                                          </select>
                                    </div>                     
                              </div>
                              
                              
                              <div class="col-xs-12">
                                    <div class="form-group">
                                      Attachez Votre cv <input type="File" name="cv" placeholder="cv" required="" class="input-lg">
                                    </div>
                             </div>
                             <div class="col-xs-12">
                                    <div class="form-group">
                                    Lettre de motivation <input type="File" name="lm" placeholder="lm" required="" class="input-lg">
                                    </div>
                             </div>
                             <div class="col-md-6 col-sm-12 col-xs-12"> 
                                    <div class="form-group">
                                          <select name="disponibilite">
                                          <option>Disponibilité</option>
                                          <option>Immédiate</option>
                                          <option>Préavis 1 mois</option>
                                          <option>Préavis 3 mois</option>
                                         
                                          </select>
                                    </div>                     
                              </div>
                              <div class="col-md-6 col-sm-12 col-xs-12"> 
                                    <div class="form-group">
                                          <select name="contrat">
                                          <option>Type de contrat</option>
                                          <option>CDI</option>
                                          <option>CDD</option>
                                          <option>Partiel</option>
                                          <option>Stage</option>
                                          </select>
                                    </div>                     
                              </div>
                              <div class="col-md-14 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                          <textarea  name="commentaire" placeholder="commentaire" required=""></textarea>
                                    </div>
                              </div>
                              <div class="col-md-6 col-sm-12 col-xs-12"> 
                                    
                                    <div class="form-group text-center">
                                          <button type="submit" class="btn-style-one">Postuler maintenant</button>
                                    </div>                            
                              </div>
                              </div>
                        </form>
                  </div>                      
                  </div>
                  
            
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="appointment-image-holder">
                    <figure>
                        <img src="images/background/appoinment.jpg" alt="Appointment"width="630" height="715" style="padding-top:50px">
                    </figure>
                </div>                       
            </div>
        </div>                    
    </div>
</section>
<!-- End Contact Section -->

<!--team section-->
<section class="team-section section">
    <div class="container">
       
            <div class="section-title text-center">
            <h3>LISTE DES OFFRES 
                <span>D’EMPLOI</span>
                <p>Vous souhaitez rejoindre une société en pleine expansion et des projets à forte valeur ajoutée ?
                  Recherchez l’opportunité qui vous correspond et prenez part à l’aventure ANOU consulting ! </p>
               </div>
         <!-- End recherche Section -->
        
            <div class="container">
            <div class="row">
                  
                  <div class="contact-area style-one">
                        
                        <form  action="{{route('search')}}" method="GET">
                        {{ csrf_field() }}
                              <div class="row">
                              
                               
                                  <div class="col-md-3">
                                    <div class="form-group">
                                          <select name="domaine">
                                          <option value="0" selected=selected >Tous les domaines</option>
                                          <option value="Développement web">Développement web</option>
                                          <option value="Développement mobile">Développement mobile</option>
                                          <option value="Réseau informatique">Réseau informatique</option>
                                          </select>
                                     </div> 
                              </div>
                              <div class="col-md-3"> 
                                    <div class="form-group">
                                          <select name="niveau">
                                          <option value="0" selected=selected >Tous les niveaux</option>
                                          <option value="Bac" >Bac</option>
                                          <option value="BAC+3">BAC+3</option>
                                          <option value="BAC+5">BAC+5</option>
                                          <option value="Autres">Autres</option>
                                          </select>
                                    </div>                     
                              </div>
                              
                              <div class="col-md-3"> 
                                    <div class="form-group">
                                          <select name="region">
                                          <option value="0" selected=selected >Tous les regions</option>
                                          <option value="Paris">Paris</option>
                                          <option value="Lille">Lille</option>
                                          <option value="Marseille">Marseille</option>
                                          <option value="Bordeaux">Bordeaux</option>
                                          <option value="Caen">Caen</option>
                                          <option value="La Rochelle">La Rochelle</option>
                                          <option value="Lyon">Lyon</option>
                                          <option value="Montpellier">Montpellier</option>
                                          <option value="Caen">Nantes</option>

                                          <option value="Nice">Nice</option>
                                          <option value="Perpignan">Perpignan</option>
                                          <option value="Reims">Reims</option>
                                          <option value="Rennes">Rennes</option>
                                          <option value="Strasbourg">Strasbourg</option>
                                          <option value="Toulouse">Toulouse</option>
                                          <option value="Autre">Autre</option>
                                          </select>
                                    </div>     

                                       
                              </div>
                              <div class="col-md-3"> 
                                    
                                    <div class="form-group text-center">
                                          <button type="submit" class="btn-style-one">Rechercher</button>
                                    </div>                            
                              </div>
                              </div>
                              </div> 
                        </form>
                  </div>                      
            
            </div>                    
            </div>

<!--recherche section-->

    <div class="container" style="margin-left:167px">
    @if(count($off))

@foreach($off as $o)
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    
                    <div class="contents text-center">
                    <h4> OFFRE N° {{$o->id}}</h4>
                        <p>{{$o->title}}</p>
                        <p>{{$o->region}}</p>
                        <p>{{$o->domaine}}||{{$o->niveau}}</p>
                        <p>{{$o->description}}</p>
                         <button type="button" class="btn btn-style-one" style="background:blue" data-toggle="modal" data-target="#postuler" >
                          
                         &nbsp <b> <i class="fa fa-hand-pointer-o" aria-hidden="true"></i>&nbsp Postuler maintenant</b>
                  </button>
                    </div>
                </div>
                
            </div>
            @endforeach
            <div class="row">
                                <div class="col-md-4 col-md-offset-4">
                                    {{$off->links()}}
                                </div>
   </div>
   @else
  <p class="alert alert-warning">
        Pas des offres
        </p>
 @endif
    
 </div>
        
 </div></div>
   </div>




   <!-- The postule modal -->
<div class="modal fade" id="postuler" tabindex="-1" role="dialog" aria-labelledby="modalLabellarge" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">

<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
<h4 class="modal-title" id="modalLabelSmall">Postuler sur l'offre </h4>
</div>

<div class="modal-body">
<div class="container">
            <div class="row">
                  
                  <div class="contact-area style-one">
                        
                  <form  action="{{ route('postulation.store') }}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <input type="hidden"  name="id_offre" value="{{$o->id}}">
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