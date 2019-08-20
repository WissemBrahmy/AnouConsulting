@extends('layouts.master')

@section('content') 
<BR>
<div class="section-title text-center">
            <h4>LISTE DES  
                <span>CANDIDATURES SPONTANNEES</span>
            </h4>
            
     </div><br><br>
     <div class="contact-form responsive text-center">
                    @if(session('message'))
                         <p class="alert alert-success">
                         <b>    {{session('message')}}</b>
                         </p>
                    @endif
      </div>
        <!--Service Section-->
        @if(count($candidatures))

      @foreach($candidatures as $c)
<div class="container">
    <div class="row">
    
        <br>
      <div class="col-md-12">
        <div class="wow bounceIn"  >
        <div class="panel panel-default" >
          <div class="align-center">
          <div class="panel-body">
        
            <br>
            <h4>Candidature N°: {{$c->id}}</h4><br>
            <h5>Nom: &nbsp {{$c->nom}} || Adresse: &nbsp {{$c->adresse}} <br><br> Email: &nbsp {{$c->email}}  </h5>
            <p>
            
            Commentaire:{{$c->commentaire}}.<br>
                           <br>
                            •  Diplome &nbsp {{$c->diplome}}  <br>
                            •  Domaines &nbsp {{$c->domaine}}  <br>
                            •  Niveau &nbsp {{$c->niveau}}  || Disponibilité :{{$c->disponibilite}}  <br>
                            •  Télécharger cv <a href="{{$c->cv}}" > <img src="{{asset('images/pdf.png')}}" width="20" height="20"></a> <br>
                            •  Télécharger lettre de motivation <a href="{{$c->lm}}" > <img src="{{asset('images/pdf.png')}}" width="20" height="20"></a> <br>
                            •  Date: {{$c->created_at}}.
            </p>
            <div class="ficon">
            <form action="{{ route('candidatures_destroy', $c->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-info" type="submit" onclick="return confirm('voulez-vous vraiment supprimer?')">
                  <i class="fa fa-shopping-basket" aria-hidden="true"></i>&nbsp Retirer
                  </button>
                </form>
            </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
      </div>
      @endforeach
        <div class="row">
                                <div class="col-md-4 col-md-offset-4">
                                    {{$candidatures->links()}}
                                </div>
        </div>
       
              @else
  
  
  
                <p class="alert alert-warning">
                      Pas d'actualités
                      </p>
              @endif

       
  </div>
  @endsection

<!--end Service Section-->

     



