@extends('layouts.master')

@section('content') 
<BR>

<div class="container">
            <div class="row">
           
                  <div class="contact-area style-one">
                    <div class="section-title ">
                    <h4> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp Modifier l'offre N° {{$offre->id}} :  
                        <span>{{$offre->title}}</span>
                    </h4>
                    </div>
                  <form  action="{{ route('offres_update', $offre->id)}}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  @method('PUT')
                              <div class="row">
                              
                             
                             <div class="col-md-4 col-sm-12 col-xs-12">
                               <input type="title" id="title" name="title" value="{{$offre->title}}" class="form-control main" required>
                             </div>
                               
                                  <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group" >
                                          <select name="domaine" id="domaine">
                                          <option >{{$offre->domaine}}</option>
                                          <option>Développement web</option>
                                          <option>Développement mobile</option>
                                          <option>Réseau informatique</option>
                                          </select>
                                     </div> 
                              </div>
                              </div>
                              <div class="row">
                              <div class="col-md-4 col-sm-12 col-xs-12"> 
                                    <div class="form-group">
                                          <select name="niveau" id="niveau">
                                          <option>{{$offre->niveau}}</option>
                                          <option>Bac</option>
                                          <option>BAC+3</option>
                                          <option>BAC+5</option>
                                          <option>Autres</option>
                                          </select>
                                    </div>                     
                              </div>
                              <div class="col-md-4 col-sm-12 col-xs-12"> 
                                    <div class="form-group">
                                          <select name="region" id="region">
                                          <option>{{$offre->region}}</option>
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
                              </div>
                              <div class="row">
                              <div class="col-md-8 col-sm-12 col-xs-12">
                            <textarea id="description" name="description" rows="15" class="form-control main" > {{$offre->description}}</textarea>
                        </div>
                             </div>
                              <div>
                              <br>
                             <div class="row">
                              <div class="col-md-3 ">
                            <button class="btn btn-style-one" type="submit" ><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp Enregistrer modification</button>
                            
                        </div>
                        </div>
                        </form>
                        <br>
                  </div>    
                               
                  </div> 
            </div>                    
            </div>

</div>

@endsection