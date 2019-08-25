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
                    <h2>Actualité N° {{$n->id}}</h2>
                    <H4>ANOU Consulting</H4>
                    <h5 class="tagline"> <i class="fa fa-clock-o"></i><span>  Le :
                                                   {{$n->created_at}} </span></li>
                                                   </h5>

                 
              <i class="fa fa-tag" aria-hidden="true"></i>&nbsp Titre: &nbsp {{$n->title}}</li>
                              
                                               
                  <p><i class="fa fa-book" aria-hidden="true"></i>&nbsp Contenue:<br> 
                  
                   {{$n->content}}.</p>
                    <br>
                    
                    <table><tr><td>
                            <form action="{{ route('news_destroy', $n->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-style-one" type="submit" onclick="return confirm('voulez-vous vraiment supprimer?')">
                  <i class="fa fa-shopping-basket" aria-hidden="true"></i>&nbsp Retirer
                  </button>
                </form></td><td> &nbsp
                <a class="btn-style-one" href="{{route('edit_news', $n->id) }}">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp Modifier</a>
                  
                  
                  </td></tr>
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
        Aucune actualité !
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
                            <textarea name="content" rows="15" class="form-control main" placeholder="Décrire le contenue" required></textarea>
                        </div>
                             </div>
                            
                              <br>
                             <div class="row">
                              <div class="col-md-3  ">
                            <button class="btn btn-style-one" type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp Créer une actualité</button>
                            
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


@endsection

