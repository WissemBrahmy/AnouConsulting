@extends('layouts.master')

@section('content') 
<BR>

<div class="container">
Liste des candidatures reçues  à propos de l'offre <b> {{  $offre->title}} </b>
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
                            •  Nom  &nbsp {{$c->nom}}  <br>
                            •  Email &nbsp {{$c->email}}  <br>
                            •  Télécharger cv <a href="{{$c->cv}}" > <img src="{{asset('images/pdf.png')}}" width="20" height="20"></a> <br>
        
           
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

     





