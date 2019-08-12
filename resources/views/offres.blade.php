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
            <h3>LISTE OFFRES 
                <span>D’EMPLOI</span>
                <p>Afin de garantir la qualité de nos prestations et la réussite de nos missions,
                    nous déployons systématiquement une démarche qui permet : </p>
               </div>
         <!-- End recherche Section -->
        
            <div class="container">
            <div class="row">
                  
                  <div class="contact-area style-one">
                        
                        <form  action="" method="post">
                              <div class="row">
                              
                               
                                  <div class="col-md-4">
                                    <div class="form-group">
                                          <select name="domaine">
                                          <option>Domaine</option>
                                          <option>Développement web</option>
                                          <option>Développement mobile</option>
                                          <option>Réseau informatique</option>
                                          </select>
                                     </div> 
                              </div>
                              <div class="col-md-4"> 
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
                              
                              <div class="col-md-4"> 
                                    <div class="form-group">
                                          <select name="region">
                                          <option>Region</option>
                                          <option>Paris</option>
                                          <option>Lille</option>
                                          <option>Marseille</option>
                                          <option>Bordeau</option>
                                          </select>
                                    </div>                     
                              </div>
                              <div class="col-md-4"> 
                                    
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
       
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    
                    <div class="contents text-center">
                        <h4>developpeur ios</h4>
                        <p>garantir le bon cadrage de la mission et la définition de ses objectifs.</p>
                        <a href="{{route("services")}}" class="btn btn-style-one" style="background:blue">Postuler</a>
                        <a href="{{route("services")}}" class="btn btn-style-one">Savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    
                    <div class="contents text-center">
                        <h4>Developpeur web</h4>
                        <p>assurer un suivi régulier de l’avancement de la mission.</p>
                        <a href="{{route("services")}}" class="btn btn-style-one"  style="background:blue">Postuler</a>
                        <a href="{{route("services")}}" class="btn btn-style-one">Savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    
                    <div class="contents text-center">
                        <h4>Chef de projet</h4>
                        <p>assurer la traçabilité des actions réalisées tout au long de la prestation.</p>
                        <a href="{{route("services")}}" class="btn btn-style-one"  style="background:blue">Postuler</a>
                        <a href="{{route("services")}}" class="btn btn-style-one">Savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    
                    <div class="contents text-center">
                        <h4>Testeur</h4>
                        <p> faire évaluer nos consultants par nos clients au terme de chaque mission.</p>
                        <a href="{{route("services")}}" class="btn btn-style-one"  style="background:blue">Postuler</a>
                        <a href="{{route("services")}}" class="btn btn-style-one">Savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
@endsection