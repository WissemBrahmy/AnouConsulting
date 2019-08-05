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
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="contact-area style-two">
                    <div class="section-title">
                        <h3><center><span>Candidature spontanée</span></center></h3>
                        <p><center>Vos talents nous intéressent !</center></p>
                    </div>
                    <form name="contact_form" class="default-form contact-form" action="sendmail.php" method="post">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="Name" placeholder="Nom complet" required="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="Email" placeholder="Email" required="">
                                </div>
                                <div class="form-group">
                                    <select name="subject">
                                        <option>Domaine</option>
                                        <option>Développement web</option>
                                        <option>Développement mobile</option>
                                        <option>Réseau informatique</option>
                                    </select>
                                </div>                            
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="Phone" placeholder="GSM" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="Date" placeholder="Date" required="" id="datepicker">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </div> 
                                <div class="form-group">
                                    <select name="subject">
                                        <option>Niveau d'etude</option>
                                        <option>Bac</option>
                                        <option>BAC+3</option>
                                        <option>BAC+5</option>
                                        <option>Autres</option>
                                    </select>
                                </div>                            
                            </div>
                            <div class="form-group" style="padding-left:15px;width:500px">
                                    <input type="file" name="Phone" placeholder="cv" required="">
                                </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <textarea name="form_message" placeholder="Votre Lettre de motivation" required=""></textarea>
                                </div>
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
                        <img src="images/background/appoinment.jpg" alt="Appointment"width="630" height="570">
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
            </h3>
         <!-- End recherche Section -->
         <section class=" section style-tow pb-0">
            <div class="container">
            <div class="row">
                  <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="contact-area style-one">
                        
                        <form name="contact_form" class="default-form contact-form" action="" method="post">
                              <div class="row">
                              <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                          <input type="text" name="query" placeholder="Entrer" required="">
                                    </div>
                              </div>  
                              <div class="col-md-6 col-sm-12 col-xs-12"> 
                                    <div class="form-group">
                                          <select name="subject">
                                          <option>Domaine</option>
                                          <option>Développement web</option>
                                          <option>Développement mobile</option>
                                          <option>Réseau informatique</option>
                                          </select>
                                    </div>      
                              </div>
                              <div class="col-md-6 col-sm-12 col-xs-12"> 
                                    <div class="form-group">
                                          <select name="subject">
                                          <option>Niveau d'etude</option>
                                          <option>Bac</option>
                                          <option>BAC+3</option>
                                          <option>BAC+5</option>
                                          <option>Autres</option>
                                          </select>
                                    </div>                     
                              </div>
                              
                              
                              <div class="col-md-6 col-sm-12 col-xs-12"> 
                                    
                                    <div class="form-group text-center">
                                          <button type="submit" class="btn-style-one">Rechercher</button>
                                    </div>                            
                              </div>
                              </div>
                        </form>
                  </div>                      
                  </div>
                  
            </div>                    
            </div>
</section>
<!--recherche section-->
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    <img src="images/team/doctor-2.jpg" alt="doctor" class="img-responsive">
                    <div class="contents text-center">
                        <h4>Dr. Robert Barrethion</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, aspernatur.</p>
                        <a href="#" class="btn btn-primary">Voir plus</a> <a href="#" class="btn btn-danger">Postuler</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    <img src="images/team/doctor-lab-3.jpg" alt="doctor" class="img-responsive">
                    <div class="contents text-center">
                        <h4>Dr. Marry Lou</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, aspernatur.</p>
                        <a href="#" class="btn btn-primary">Voir plus</a> <a href="#" class="btn btn-danger">Postuler</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    <img src="images/team/event-2.jpg" alt="doctor" class="img-responsive">
                    <div class="contents text-center">
                        <h4>Dr. Sansa Stark</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, aspernatur.</p>
                        <a href="#" class="btn btn-primary">Voir plus</a> <a href="#" class="btn btn-danger">Postuler</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End team section-->
@endsection