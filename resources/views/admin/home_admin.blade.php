@extends('layouts.master')

@section('content') 
<BR>
<!--Page Title-->
<section class="page-title text-center" style="background-image:url('{{asset('images/slider/v.png')}}');">
    <div class="container">
        <div class="title-text">
            <h1>ACCUEIL</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="{{route("home_admin")}}">ADMIN &nbsp;/</a>
                </li>
                <li>Accueil</li>
            </ul>
            
        </div>
    </div>
</section>


                  

     <section class="team-section section">
    <div class="container">
    @if (Auth::user()->role==2)
    <div class="section-title text-center">
    <a class="btn-style-one" href="{{route("reg_admin")}}">
                <i class="fa fa-plus" aria-hidden="true"></i>&nbsp Nouveau admin</a>
       </div>
    @endif
        <div class="row">
          
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    
                    <div class="contents text-center">
                    <img src="{{asset('images/msg.png')}}"  width="50" height="50" class="inner-box " >
                    
                    <br><br>
                        <p>vous avez {{$messages}} messages.</p>
                        <a href="{{route("index_messages")}}" class="btn btn-default" role="button">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    
                    <div class="contents text-center">
                    <img src="{{asset('images/cand.png')}}"  width="50" height="50" class="inner-box " >
                    <br><br>
                        <p>vous avez {{$candidatures}}  candidatures.</p>
                        <a href="{{route("index_candidatures")}}" class="btn btn-default" role="button">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    
                    <div class="contents text-center">
                    <img src="{{asset('images/post.png')}}"  width="50" height="50" class="inner-box " >
                       <br><br>
                        <p>vous avez {{$postulation}} postulations.</p>
                        <a href="{{route("index_offres")}}" class="btn btn-default" role="button">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=" text-center" >

<img src="{{asset('images/icons/postulation.jpg')}}"  width="15" height="15"> Postulations 
&nbsp <img src="{{asset('images/icons/candidature.jpg')}}"  width="15" height="15"> Candidatures 
&nbsp <img src="{{asset('images/icons/message.jpg')}}"  width="15" height="15"> Messages
&nbsp || &nbsp {{date("Y-m-d")}}

</div>
<div class="x_panel" >
          <canvas  id="myChart"></canvas>

</div>
          <script  src="{{asset('js/Chart.min.js')}}" ></script>
          <script type="text/javascript">
          var ctx = document.getElementById('myChart').getContext('2d');
new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [ 'Postulations Aux Offres',"Candidatures Spontannées","Messages"],
      datasets: [
        {
          label: "Count ",
          backgroundColor: ["#3e95cd", "#03224C","#3cba9f"],
          data: [{{$postulation}},{{$candidatures}},{{$messages}}]
        }
      ]
    },
    options: {
      responsive: true,
      scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    },
      legend: { display: false },
      title: {
        display: true,
        text: ''
      }
    }
});

          </script>

@endsection

