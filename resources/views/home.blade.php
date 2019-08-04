@extends('layouts.app')

@section('content')

    <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="item active">
                <img class="center-block" alt="" src="{{asset('logo/imm.png')}}" width="1138" height="50" >
                <div class="carousel-caption">
                    <div style="margin-left: 460px; color: #1d24ee; margin-bottom: 130px ">
                    <h2 style="margin-bottom: 50px">Vous avez un projet ?</h2>
                        <h3 style="color: #ee6412; margin-bottom: 100px"> <strong>Publiez votre demande de devis en 1 minute...</strong>
                     </h3>
                    </div>
                </div>
                <div class="carousel-caption">
                    <div style="margin-right: 520px; color: #f6ffee; margin-bottom: 250px ">
                        <h2>Publiez gratuitement</h2>

                    </div>
                </div>
            </div>
            <div class="item">
                <img class="center-block" alt="" src="{{asset('logo/2.png')}}" width="1138" height="50" >
                <div class="carousel-caption">

                <img class="center-block" alt="" src="{{asset('logo/cc.png')}}" width="150" height="150"  style="margin-left: 770px;margin-bottom: 110px">
                </div>
                <div class="carousel-caption">


                    <h2 style=" color: #ee6412; margin-bottom: 130px;margin-left: 70px;">
                       <strong>  Comparez des prix <br> pour un même produit ou service ! </strong></h2>

                </div>
            </div>
            <div class="item">
                <img class="center-block" alt="" src="{{asset('logo/t.png')}}" width="1138" height="50" >

                <div class="carousel-caption">



                </div>

                <div class="carousel-caption">
                    <h2 style="color: #289fee; margin-bottom: 230px; margin-right: 500px">Vous cherchez d'un prestataires fiables ?</h2>


                </div>
                <div class="carousel-caption">




                           <div  style="margin-right: 500px;  margin-top: 130px;">
                              <strong>
                               <H1 STYLE="color: #ee6412"> Sans Engagement</H1>
                                  <br><br>
                                  <label class="media-object">
                              <h4 STYLE="color: #eeb00e">  Trouvez la plus avantageuse... </h4>
                                  </label>
                              </strong> 

                               <br><br>

                           </div>

                </div>
            </div>
        </div>
        <!-- Carousel nav -->

    </div>





    


@endsection

