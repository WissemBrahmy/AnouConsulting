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
     </div><br><br>
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

                

                <table><tr><td>
                            <form action="{{ route('offres_destroy', $o->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-style-one" type="submit" onclick="return confirm('voulez-vous vraiment supprimer?')">
                  <i class="fa fa-shopping-basket" aria-hidden="true"></i>&nbsp Retirer
                  </button>
                </form></td><td> &nbsp
               
                 <!-- <button type="button" class="btn btn-style-one" data-toggle="modal"  
                  onclick='update({{ json_encode($o)}})'>
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                         &nbsp <b> Modifier</b>
                  </button>
                -->

                <a class="btn-style-one" href="{{route('edit_offre', $o->id) }}">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp Modifier</a>
                  
                  </td> 
                  <td> 
                  <a href="{{route('show_candidatures', $o->id) }}" class="btn btn-style-one" style="background:blue" role="button"><i class="fa fa-bars" aria-hidden="true"></i>&nbsp Candidatures</a>
                  </td> 
                  
                  </tr>
                  <!--
            <div class="col-md-12">
                <div class="accordion-section">
                    <div class="accordion-holder">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false">
                            <div class="panel panel-info">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Candidatures 
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                                                      Nos clients sont confrontés à des impératifs de rationalisation de leurs systèmes d’information 
                                
                                  •  Assistance à maîtrise d’ouvrage / direction de projets  <br>
                                  •  Audit des environnements informatiques <br>
                                  •  Urbanisation des systèmes d’information <br>
                                  •  Optimisation et amélioration de la performance des systèmes d’information <br>
                                  •  Business Intelligence. </div>
                                </div>
                            </div>
                           
                            
                               
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            -->

                  <br>
                  </table>   
           
        </div>
               </div>
                </div>
            </div>
          
            @endforeach
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
                                          <select name="domaine" >
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
                                          <select name="niveau">
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
                                          <select name="region">
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
                            <textarea name="description" rows="15" class="form-control main" placeholder="Décrire l'offre"></textarea>
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
