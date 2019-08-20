@extends('layouts.app')

@section('content')

<!--Page Title-->
<section class="page-title text-center" style="background-image:url('{{asset('images/background/3.jpg')}}');">
    <div class="container">
        <div class="title-text">
            <h1>NOS OFFRES</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.html">ACCUEIL &nbsp;/</a>
                </li>
                <li>Résultat de votre recherche</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Contact Section -->
<section class="blog-section section style-three pb-0">
    <div class="container">
    <div class="row">
    <div class="section-title text-center">
              <div class="contact-form responsive">
                    @if(session('message'))
                         <p class="alert alert-success">
                         <b>    {{session('message')}}</b>
                         </p>
                    @endif
              </div>
              
            <h3>LISTE DES OFFRES 
                <span>D’EMPLOI SELON VOTRE RECHERCHE</span>
                <p>Vous souhaitez rejoindre une société en pleine expansion et des projets à forte valeur ajoutée ?
                  Recherchez l’opportunité qui vous correspond et prenez part à l’aventure ANOU consulting ! </p>
               </div>
        </div>                    
    </div>
</section>
<!-- End Contact Section -->

<!--team section-->
<section class="team-section section">
    <div class="container">
       
            
         <!-- End recherche Section -->
        
           

<!--recherche section-->

    <div class="container" style="margin-left:167px">
    @if(count($offres))

    @foreach($offres as $o)
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    
                    <div class="contents text-center">
                    <h4> OFFRE N° {{$o->id}}</h4>
                        <p>{{$o->title}}</p>
                        <p>{{$o->region}}</p>
                        <p>{{$o->domaine}}||{{$o->niveau}}</p>
                        <p>{{$o->description}}</p>
                        <!-- <button type="button" class="btn btn-style-one" style="background:blue" data-toggle="modal" data-target="#postule" >
                          
                         &nbsp <b> <i class="fa fa-hand-pointer-o" aria-hidden="true"></i>&nbsp Postuler maintenant</b>
                  </button> -->
                  <a class="btn-style-one" href="{{route('postule_offres', $o->id) }}"><i class="fa fa-hand-pointer-o" aria-hidden="true"></i>&nbsp Postuler maintenant</a>
                    </div>
                </div>
                
            </div>
            @endforeach
            <div class="row">
                                <div class="col-md-4 col-md-offset-4">
                                    {{$offres->links()}}
                                </div>
            </div>
   @else
        <p class="alert alert-warning">
        Pas des offres
        </p>
   @endif
    
           </div>
        
      </div>
    </div>
</div>

</div>

</div>

   <!-- The postule modal -->
<div class="modal fade" id="postule" tabindex="-1" role="dialog" aria-labelledby="modalLabellarge" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">

<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
<h4 class="modal-title" id="modalLabelSmall">Postuler sur l'offre </h4>
</div>

<div class="modal-body">
<div class="container">
            <div class="row">
                  
                  <div class="contact-area style-one">
                        
                  <form  action="{{ route('postulation.store') }}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <input type="hidden"  name="id_offre" value="{{$o->id}}">
                              <div class="row">
                             <div class="col-md-4 col-sm-12 col-xs-12">
                               <input type="text"  name="nom" class="form-control main" placeholder="Votre nom complet" required>
                             </div>
                               
                             <div class="col-md-4 col-sm-12 col-xs-12">
                           
                              <input type="email" name="email" id="email" class="form-control main" placeholder="Votre adresse email" required>
                              </div>
                              
                              <div class="col-xs-8">
                                    <div class="form-group">
                                    Votre cv <input type="File" id="cv" name="cv"   class="input-lg">
                                    </div>
                              </div>
                              </div>
                            
                              <div class="row">
                              <div class="col-md-8 col-sm-12 col-xs-12">
                            <textarea name="lm" rows="15" class="form-control main" placeholder="Votre lettre de motivation"></textarea>
                        </div>
                             </div>
                              <div>
                              <br>
                             <div class="row">
                              <div class="col-md-3 ">
                            <button class="btn btn-style-one" type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp Postuler</button>
                            
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

@endsection