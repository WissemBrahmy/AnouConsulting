@extends('layouts.master')

@section('content') 
<BR>
<div class="section-title text-center">
            <h4>GESTION DES  
                <span>OFFRES</span>
            </h4>
            <br>
            <button type="button" class="btn btn-style-one" data-toggle="modal" data-target="#largeShoes"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp <b> Ajouter une nouvelle offre</b></button>
       <br><br>
     </div>
     <div class="contact-form responsive text-center">
                    @if(session('success'))
                         <p class="alert alert-success">
                         <b>    {{session('success')}}</b>
                         </p>
                    @endif
              </div>
            
    <section class="team-section section">
    <div class="container">
       
        <div class="row">
        @if(count($off))

            @foreach($off as $o)
            <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="team-member">
                    
                    <div class="contents text-center">
                        <h4> OFFRE N° {{$o->id}}</h4>
                        <p>{{$o->title}}</p>
                        <p>{{$o->region}}</p>
                        <p>{{$o->domaine}}||{{$o->niveau}}</p>
                        <p>{{$o->description}}</p>

                



                        <div class="container">
                            <div class="row">
                                  
                                 
              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group mr-2" role="group" aria-label="First group">
                <form action="{{ route('offres_destroy', $o->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')    
                                                          
                                      
                                            <button class="btn btn-style-one" type="submit" onclick="return confirm('voulez-vous vraiment supprimer?')">
                                            <span class="fa fa-shopping-basket" aria-hidden="true"></span>&nbsp Retirer
                                            </button>
                                        
                                                
                                            </form> 
                </div>
                <div class="btn-group mr-2" role="group" aria-label="Second group">
                <a class="btn-style-one" href="{{route('edit_offre', $o->id) }}">
                                  <span class="fa fa-pencil-square-o" aria-hidden="true"></span>&nbsp Modifier</a>
                                    
                </div>
                <div class="btn-group" role="group" aria-label="Third group">
                <a href="{{route('show_candidatures', $o->id) }}" class="btn btn-style-one" style="background:blue" role="button">
                                                  <span class="fa fa-bars" aria-hidden="true"></span>&nbsp Candidatures</a>
                                    
                </div>
              </div>
              </div>

                              </div>
                          </div>
                        </div>
                          @endforeach
                      </div>
                      </div>
                  </div>
                </div>
                  <br><br><br>
                  <div class="row">
                                              <div class="col-md-4 col-md-offset-4">
                                                  {{$off->links()}}
                                              </div>
                </div>
                @else
                <p class="alert alert-warning">
                      Aucune offre !
                      </p>
              @endif
              </section>







<!-- The add modal -->
<div class="modal fade" id="largeShoes" tabindex="-1" role="dialog" aria-labelledby="modalLabellarge" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">

<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
<h4 class="modal-title" id="modalLabelSmall">Ajouter une nouvelle offre </h4>
</div>

<div class="modal-body">
<div class="container">
            <div class="row">
                  
                  <div class="contact-area style-one">
                        
                  <form  action="{{route('offres_store')}}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
                
                         <div class="row">
                             <div class="col-md-4 col-sm-12 col-xs-12">
                               <input type="title"  name="title" class="form-control main" placeholder="Titre" required>
                             </div>
                               
                                  <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                          <select name="domaine" required>
                                          <option>Domaine</option>
                                          <option>Développement web</option>
                                          <option>Développement mobile</option>
                                          <option>Réseau informatique</option>
                                          <option>webmastering</option>
                                          <option>Ingénierie de recherche</option>
                                          <option>Réseau informatique</option>
                                          <option>Webdesign</option>
                                          <option>informatique embarqué</option>

                                          <option>Conseil</option>
                                          <option>Maintenance en informatique</option>
                                        
                                          <option>Rédacteur WEB</option>
                                          <option>Cloud computing</option>
                                          <option>Commercial Web</option>
                                          <option>Architecture logiciels</option>
                                          <option>Analyse de données</option>
                                          <option>Sécurité</option>
                                          <option>Gestion des projets informatiques</option>
                                          <option>Assistance aux utilisateurs et formations</option>
                                          <option>Infographie</option>
                                          <option>BIG DATA</option>
                                          <option>Analyse d'affaires</option>
                                          <option>Conception</option>
                                          <option>Administration systèmes</option>
                                          <option>Autres</option>

                                          </select>
                                     </div> 
                              </div>
                              </div>
                              <div class="row">
                              <div class="col-md-4 col-sm-12 col-xs-12"> 
                                    <div class="form-group">
                                          <select name="niveau" required>
                                          <option>Niveau d'etude</option>
                                          <option>Bac</option>
                                          <option>BAC+3</option>
                                          <option>BAC+4</option>
                                          <option>BAC+5</option>
                                          <option>Autres</option>
                                          </select>
                                    </div>                     
                              </div>
                              <div class="col-md-4 col-sm-12 col-xs-12"> 
                                    <div class="form-group">
                                          <select name="region" required>
                                          <option>Region</option>
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
                                          <option value="Autres">Autres</option>
                                          </select>
                                    </div>                     
                              </div>
                              </div>
                              <div class="row">
                              <div class="col-md-8 col-sm-12 col-xs-12">
                            <textarea name="description" rows="15" class="form-control main" placeholder="Décrire l'offre" required></textarea>
                        </div>
                             </div>
                              <div>
                              <br>
                             <div class="row">
                              <div class="col-md-3 ">
                            <button class="btn btn-style-one" type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp Créer une offre</button>
                            
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
</div>
</div>



@endsection
