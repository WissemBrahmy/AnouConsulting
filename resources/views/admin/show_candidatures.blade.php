@extends('layouts.master')

@section('content') 
<BR>

<div class="container">
<H4> Liste des candidatures reçues  à propos de l'offre: &nbsp  {{  $offre->title}} </h4>
<br>
    <div class="row">
    <div class="contact-form responsive text-center">
                    @if(session('message'))
                         <p class="alert alert-success">
                         <b>    {{session('message')}}</b>
                         </p>
                    @endif
      </div>
        <br>
      <div class="col-md-12">
      @if(count($postulation))

      @foreach($postulation as $c)
        <div class="wow bounceIn"  >
        <div class="panel panel-default" >
          <div class="align-center">
          <div class="panel-body">
                            <i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp  Nom  &nbsp {{$c->nom}}  <br>
                             <i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp Email &nbsp {{$c->email}}  <br>
                             <i class="fa fa-file-word-o" aria-hidden="true"></i>&nbsp Lettre de motivation <br>
                             &nbsp {{$c->lm}}  <br>
                             <i class="fa fa-id-card-o" aria-hidden="true"></i>&nbsp Télécharger cv <a href="{{$c->cv}}" > <img src="{{asset('images/pdf.png')}}" width="20" height="20"></a> <br>
        
           
            </div>
          
          </div>
          
          <div class="ficon">
            <form action="{{ route('postulation_destroy', $c->id)}}" method="post">
                  @csrf
                  @method('DELETE')
              &nbsp   &nbsp &nbsp <button class="btn btn-info" type="submit" onclick="return confirm('voulez-vous vraiment retirer?')">
                  <i class="fa fa-shopping-basket" aria-hidden="true"></i>&nbsp Retirer
                  </button>
                </form>
                <br>
            </div>
        </div>
      </div>
      </div>
      </div>
      
        
        @endforeach
        
        <div class="row">
                                <div class="col-md-4 col-md-offset-4">
                                    {{$postulation->links()}}
                                </div>
        </div>
       
              @else
  
  
  
                <p class="alert alert-warning">
                      Pas des candidatures jusqu'à maintenant
                      </p>
              @endif
       
        </div>
        </div>
  @endsection

<!--end Service Section-->

     





