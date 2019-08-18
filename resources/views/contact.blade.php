@extends('layouts.app')

@section('content')

<!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/background/3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>CONTACT</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.html">ACCUEIL &nbsp;/</a>
                </li>
                <li>Contact</li>
            </ul>
            
        </div>
    </div>
</section>
<!--End Page Title-->

<!--==================================
=            Contact Form            =
===================================-->
<section class="section contact">
    <!-- container start -->

    <div class="section-title text-center">
            <h3>Pour nous 
                <span>contacter</span>
            </h3>
            <p>Merci de compléter le formulaire ci-dessous pour vos demandes. 
             Nous vous recontacterons dans les meilleurs délais !</p>
     </div><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <!-- address start -->
                <div class="address-block">
                    <!-- Location -->
                    <div class="media">
               
                        <i class="fa fa-map-o"></i>
                        <div class="media-body">
                            <h3>Adresse</h3>
                            <p>70 Bis Boulevard Diderot
                                <br>75012, Paris</p>
                        </div>
                    </div>
                    <!-- Phone -->
                    <div class="media">
                        <i class="fa fa-phone"></i>
                        <div class="media-body">
                            <h3>Téléphones</h3>
                            <p>
                            +33 1 73 70 86 97  <br>
                            +33 6 36 34 95 40
                            </p>
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="media">
                        <i class="fa fa-envelope-o"></i>
                        <div class="media-body">
                            <h3>Email</h3>
                            <p>
                            contact@anou-dsi.eu
                               
                            </p>
                        </div>
                    </div>
                </div>
                <!-- address end -->
            </div>
            <div class="col-md-8">
          
                <div class="contact-form">
                <div class="row">
            <div class="media">
                @if(session('message'))
                    <p class="alert alert-success">
                        {{session('message')}}
                    </p>
                @endif
            </div>
        </div>
                    <!-- contact form start -->
                    <form action="#" class="row" method="POST" action="{{ route('messages.store') }}">
                    {{ csrf_field() }}
                        <!-- name -->
                        <div class="col-md-6">
                            <input type="text" name="nom" class="form-control main" placeholder="Nom complet" required>
                        </div>
                        <!-- email -->
                        <div class="col-md-6">
                            <input type="email" name="email" class="form-control main" placeholder="Email" required>
                        </div>
                        <!-- phone -->
                        <div class="col-md-12">
                            <input type="text" name="tel" class="form-control main" placeholder="Téléphone" required>
                        </div>
                        <!-- message -->
                        <div class="col-md-12">
                            <textarea name="message" rows="15" class="form-control main" placeholder="Votre message"></textarea>
                        </div>
                        <!-- submit button -->
                        <div class="col-md-12 text-right">
                            <button class="btn btn-style-one" type="submit"><i class="fa fa-send" aria-hidden="true"></i>&nbsp ENVOYER MESSAGE</button>
                        </div>
                    </form>
                    <!-- contact form end -->
                </div>
            </div>
        </div>
       </div>
    <!-- container end -->
</section>
<!--====  End of Contact Form  ====-->

<!--================================
=            Google Map            =
=================================-->
<section class="map">
    <!-- Google Map -->
    
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.609440761492!2d2.379286315175282!3d48.84658797928634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6720e3f97978f%3A0xe722e6b75810a331!2sAnou+Consulting!5e0!3m2!1sfr!2stn!4v1565072604726!5m2!1sfr!2stn" width="1350" height="450" frameborder="1" style="border:1" allowfullscreen></iframe>
  
    </iframe>
</section>
<!--====  End of Google Map  ====-->

@endsection