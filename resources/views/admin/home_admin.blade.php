@extends('layouts.master')

@section('content') 
<BR>
<!--Page Title-->
<section class="page-title text-center" style="background-image:url('{{asset('images/slider/v.png')}}');">
    <div class="container">
        <div class="title-text">
            <h1>HOME</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.html">ADMIN &nbsp;/</a>
                </li>
                <li>HOME</li>
            </ul>
            
        </div>
    </div>
</section>


     <section class="team-section section">
    <div class="container">
       
        <div class="row">
          
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    
                    <div class="contents text-center">
                        <h4>Total Messages</h4>
                        <p>vous avez 12 messages.</p>
                        <a href="{{route("messages_admin")}}" class="btn btn-default" role="button">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    
                    <div class="contents text-center">
                        <h4>Total candidatures</h4>
                        <p>vous avez 51 candidatures.</p>
                        <a href="{{route("candidatures_admin")}}" class="btn btn-default" role="button">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    
                    <div class="contents text-center">
                        <h4>postule aux offres</h4>
                        <p>252.</p>
                        <a href="{{route("offres_admin")}}" class="btn btn-default" role="button">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
     

@endsection

