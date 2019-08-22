@extends('layouts.master')

@section('content') 
<BR>
<div class="section-title text-center">
            <h4>GESTION DES  
                <span>Admin</span>
            </h4>
          
     </div>
     <br>
     <div class="section-title text-center">
    <a class="btn-style-one" href="{{route("reg_admin")}}">
                <i class="fa fa-plus" aria-hidden="true"></i>&nbsp Nouveau admin</a>
                </div>
            
    <section class="team-section section">
    <div class="container">
       
        <div class="row">
        @if(count($admins))

            @foreach($admins as $o)
            <div class="col-md-10 col-sm-6 col-xs-12">
                <div class="team-member">
                    
                    <div class="contents text-center">
                        <h4 class="team-member"> Admin ID {{$o->id}}</h4>
                        <p>{{$o->name}}</p>
                        <p>{{$o->email}}</p>
                        <p>Ajouté le:&nbsp {{$o->created_at}}</p>
                  <form action="{{ route('admin_destroy', $o->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-style-one" type="submit" onclick="return confirm('voulez-vous vraiment supprimer?')">
                  <i class="fa fa-shopping-basket" aria-hidden="true"></i>&nbsp Bloquer
                  </button>
                </form>  
                  </div>
               </div>
           
        </div>
        @endforeach      
    </div>
   @else
  <p class="alert alert-warning">
        Pas des admins
        </p>
    @endif
    </section>

@endsection