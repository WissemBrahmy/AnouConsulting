@extends('layouts.master')

@section('content') 
<BR>
<div class="section-title text-center">
            <h4>GESTION DES  
                <span>OFFRES</span>
            </h4>
            <br>
            <button type="button" class="btn btn-style-one" data-toggle="modal" data-target="#largeShoes"><b> Ajouter une nouvelle offre</b></button>
       <br><br>
     </div><br><br>
       
<div class="table-responsive">
        <table class="table table-hover">
        <tr><td>id</td><td>Titre</td><td>Region</td><td>Domaine</td><td>Niveau</td><td>Description</td><td>Action</td><tr>
            <tr><td>02</td><td>44</td><td>01</td><td>01</td><td>01</td><td>01</td>
            <td>
                <a href="#" class="btn btn-danger " role="button">Annuler</a>
               
                <a href="#" class="btn btn-primary" role="button">Modifier</a>
            </td>
        <tr>
            <tr><td>124</td><td>8</td><td>03</td><td>01</td><td>01</td><td>01</td>
            <td>
                <a href="#" class="btn btn-danger " role="button">Annuler</a>
              
                <a href="#" class="btn btn-primary" role="button">Modifier</a>
            </td>
         <tr>
            <tr><td>112</td><td>78</td><td>87</td><td>01</td><td>01</td><td>01</td>
            <td>
                <a href="#" class="btn btn-danger " role="button">Annuler</a>
              
                <a href="#" class="btn btn-primary" role="button">Modifier</a>
            </td>
          <tr>
        </table>
</div>

<!-- The modal -->
<div class="modal fade" id="largeShoes" tabindex="-1" role="dialog" aria-labelledby="modalLabellarge" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">

<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
<h4 class="modal-title" id="modalLabelSmall">Ajouter une nouvelle offre</h4>
</div>

<div class="modal-body">
<div class="container">
            <div class="row">
                  
                  <div class="contact-area style-one">
                        
                  <form  action="{{route('offres_store')}}" method="post" enctype="multipart/form-data">
                              <div class="row">
                             <div class="col-md-4 col-sm-12 col-xs-12">
                               <input type="title" name="title" class="form-control main" placeholder="Titre" required>
                             </div>
                               
                                  <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                          <select name="domaine">
                                          <option>Domaine</option>
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
                                          <select name="niveau">
                                          <option>Niveau d'etude</option>
                                          <option>Bac</option>
                                          <option>BAC+3</option>
                                          <option>BAC+5</option>
                                          <option>Autres</option>
                                          </select>
                                    </div>                     
                              </div>
                              <div class="col-md-4 col-sm-12 col-xs-12"> 
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
                            <button class="btn btn-style-one" type="submit">Créer une offre</button>
                            
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
@endsection


