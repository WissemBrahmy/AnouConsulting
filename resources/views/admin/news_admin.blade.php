@extends('layouts.master')

@section('content') 
<BR>
<div class="section-title text-center">
            <h4>GESTION DES  
                <span>ACTUALITÉS</span>
            </h4>
            <br>
            <button type="button" class="btn btn-style-one" data-toggle="modal" data-target="#largeShoes"><b> Ajouter une nouvelle offre</b></button>
       <br><br>
     </div><br><br>
     <div class="contact-form responsive text-center">
                    @if(session('message'))
                         <p class="alert alert-success">
                         <b>    {{session('message')}}</b>
                         </p>
                    @endif
              </div>
<div class="table-responsive ">
        <table class="table table-hover">
        <tr><td>id</td><td>Titre</td><td>Contenue</td><td>Image</td><td>Action</td><tr>
          
            @if(count($news))

                            @foreach($news as $n)
        <tr>
            <tr>
            <td>{{$n->id}}</td>
            <td>{{$n->title}}</td>
            <td>{{$n->content}}</td>
            <td><img class="img-rounded" src="{{$n->image}}" alt="..." width="50" height="50"></td>
            
            <td>
                <a href="#" class="btn btn-danger " role="button">Annuler</a>
                
                                      
                <a href="#" class="btn btn-primary" role="button">Modifier</a>
            </td>
         <tr>
         @endforeach
                         
        </table>
</div>
<div class="row">
                                <div class="col-md-4 col-md-offset-4">
                                    {{$news->links()}}
                                </div>
   </div>
@else
  <p class="alert alert-warning">
        Pas d'actualités
        </p>
 @endif
<!-- The modal -->
<div class="modal fade" id="largeShoes" tabindex="-1" role="dialog" aria-labelledby="modalLabellarge" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">

<div class="modal-header ">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
<h4 class="modal-title" id="modalLabelSmall">Ajouter une nouvelle actualité</h4>
</div>

<div class="modal-body">
<div class="container">
            <div class="row">
                  
                  <div class="contact-area style-one">
                        
                        <form  action="{{route('news_store')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                              <div class="row">
                             <div class="col-md-8 col-sm-12 col-xs-12">
                               <input type="title" name="title" class="form-control main" placeholder="Titre" required>
                             </div>
                               
                             <div class="col-xs-8">
                                    <div class="form-group">
                                      Attachez une photo <input type="File" name="image" placeholder="image" required="" class="input-lg">
                                    </div>
                             </div>
                             
                              <div class="col-md-8 col-sm-12 col-xs-12">
                            <textarea name="contenue" rows="15" class="form-control main" placeholder="Décrire le contenue"></textarea>
                        </div>
                             </div>
                            
                              <br>
                             <div class="row">
                              <div class="col-md-3  ">
                            <button class="btn btn-style-one" type="submit">Créer une actualité</button>
                            
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

