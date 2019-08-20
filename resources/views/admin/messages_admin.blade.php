@extends('layouts.master')

@section('content') 
<BR>
<div class="section-title text-center">
            <h4>LISTE DES  
                <span>MESSAGES</span>
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
  @if(count($messages))

@foreach($messages as $m)
<div class="container">
<div class="row">

  <br>
<div class="col-md-12">
  <div class="wow bounceIn"  >
  <div class="panel panel-default" >
    <div class="align-center">
    <div class="panel-body">
  
      <br>
      <h4><i class="glyphicon glyphicon-envelope"></i>&nbsp Messages N°: {{$m->id}}</h4><br>
      <h5>Nom: &nbsp {{$m->nom}} || Téléphone: &nbsp {{$m->tel}} <br><br> Email: &nbsp {{$m->email}}  </h5>
      <p>
      
       <b>Message:</b><br>
      {{$m->message}}.<br>
                     <br>
                     <i class="fa fa-clock-o" aria-hidden="true"></i> Date: {{$m->created_at}}
                    
      </p>
      <div class="ficon">
      <form action="{{ route('messages_destroy', $m->id)}}" method="post">
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
                              {{$messages->links()}}
                          </div>
  </div>
 
        @else



          <p class="alert alert-warning">
                Pas des messages
                </p>
        @endif

 
</div>


@endsection

