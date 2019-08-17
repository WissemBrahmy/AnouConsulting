@extends('layouts.master')

@section('content') 
<BR>
<div class="section-title text-center">
            <h4>GESTION DES  
                <span>ACTUALITÉS</span>
            </h4>
            <br>
            <button type="button" class="btn btn-style-one" data-toggle="modal" data-target="#largeShoes">
            <i class="fa fa-plus" aria-hidden="true"></i>
            &nbsp <b> Ajouter une nouvelle actualité</b>
            </button>
       <br><br>
     </div><br>
     <div class="contact-form responsive text-center">
                    @if(session('message'))
                         <p class="alert alert-success">
                         <b>    {{session('message')}}</b>
                         </p>
                    @endif
      </div>
    
      @if(count($news))

      @foreach($news as $n)
      <section class="story">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{$n->image}}" class="responsive" alt="story">
            </div>
            <div class="col-md-6">
                <div class="story-content">
                    <h2>{{$n->title}}</h2>
                    <H4>ANOU Consulting</H4>
                    <h5 class="tagline"> <i class="fa fa-clock-o"></i><span> Créer le :
                                                   {{$n->created_at}} </span></li>
                                                   </h5>
                  <p>  {{$n->content}}.</p>
                    <br>
                    <ul class="content-list">
                                <li>
                                    <i class="fa fa-check-circle-o"></i>Actualité N° {{$n->id}}</li>
                                <li>
                                    <i class="fa fa-check-circle-o"></i>Titre: &nbsp {{$n->title}}</li>
                                <li>
                                    <i class="fa fa-check-circle-o"></i><span>
                                                   {{$n->created_at}} </span></li>
                            </ul>
                    <table><tr><td>
                            <form action="{{ route('news_destroy', $n->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-style-one" type="submit" onclick="return confirm('voulez-vous vraiment supprimer?')">
                  <i class="fa fa-shopping-basket" aria-hidden="true"></i>&nbsp Supprimer
                  </button>
                </form></td><td> &nbsp
                  <button type="button" class="btn btn-style-one" data-toggle="modal" data-target="#edit">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                         &nbsp <b> Modifier</b>
                  </button></td></tr>
                  <br>
                  </table>   
                </div>
            </div>
        </div>
    </div>
</section>

@endforeach
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
                            <textarea name="content" rows="15" class="form-control main" placeholder="Décrire le contenue"></textarea>
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
<!-- end The add modal -->

<!-- The edit modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="modalLabellarge" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">

<div class="modal-header ">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
<h4 class="modal-title" id="modalLabelSmall">Modifier actualité</h4>
</div>

<div class="modal-body">
<div class="container">
            <div class="row">
                  
                  <div class="contact-area style-one">
                        
                        <form  action="{{ route('news_update', $n->id)}}" method="post" enctype="multipart/form-data">
                       
                        {{ csrf_field() }}
                         @method('PUT')
                              <div class="row">
                             <div class="col-md-8 col-sm-12 col-xs-12">
                           
                               <input type="title" name="title" id="title" class="form-control main" value="{{$n->title}}" required>
                             </div>
                               
                             <div class="col-xs-8">
                                    <div class="form-group">
                                      Modifier la photo <input type="File" id="image" name="image" value="{{$n->image}}"  class="input-lg">
                                    </div>
                             </div>
                             
                              <div class="col-md-8 col-sm-12 col-xs-12">
                            <textarea name="content"  rows="15" class="form-control main" >{{$n->content}}</textarea>
                        </div>
                             </div>
                            
                              <br>
                             <div class="row">
                              <div class="col-md-3  ">
                            <button class="btn btn-style-one" type="submit">Modifier actualité</button>
                            
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

