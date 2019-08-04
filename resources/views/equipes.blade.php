@extends('layouts.app')

@section('content')


<!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/background/3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>EQUIPES</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.html">ACCUEIL &nbsp;/</a>
                </li>
                <li>Equipes</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<section class="team-section section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h3>Great
                        <span>EQUIPES</span>
                    </h3>
                    <p>Leverage agile frameworks to provide a robust synopsis for high level overv-
                        <br>iews. Iterative approaches to corporate strategy...</p>
                </div>
                <!-- Nav tabs -->
                <div class="tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#doctor" data-toggle="tab">doctor</a>
                        </li>
                        <li role="presentation">
                            <a href="#event-planning" data-toggle="tab">event planning</a>
                        </li>
                        <li role="presentation">
                            <a href="#lab" data-toggle="tab">lab</a>
                        </li>
                        <li role="presentation">
                            <a href="#marketing" data-toggle="tab">marketing</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <!--Start single tab content-->
                    <div class="team-members tab-pane fade in active row" id="doctor">
                        <div class="col-md-4 col-sm-6">
                            <div class="team-person text-center">
                                <img src="images/team/doctor-1.jpg" class="img-responsive" alt="team">
                                <h6>Dr. Emely Robert</h6>
                                <p>Bone Specialist</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="team-person text-center">
                                <img src="images/team/doctor-2.jpg" class="img-responsive" alt="team">
                                <h6>Dr. Rag Jhon</h6>
                                <p>Eye Specialist</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="team-person text-center">
                                <img src="images/team/doctor-3.jpg" class="img-responsive" alt="team">
                                <h6>Dr. Tent Richardson</h6>
                                <p>Skin Specialist</p>
                            </div>
                        </div>
                    </div>
                    <!--End single tab content-->
                    <!--Start single tab content-->
                    <div class="team-members tab-pane fade in row" id="event-planning">
                        <div class="col-md-4 col-sm-6">
                            <div class="team-person text-center">
                                <img src="images/team/event-1.jpg" class="img-responsive" alt="team">
                                <h6>Dr. Sheiring Ton</h6>
                                <p>Manager</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="team-person text-center">
                                <img src="images/team/event-2.jpg" class="img-responsive" alt="team">
                                <h6>Dr. Rig Richard</h6>
                                <p>Sr. Manager</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="team-person text-center">
                                <img src="images/team/event-3.jpg" class="img-responsive" alt="team">
                                <h6>Dr. Tom Moddy</h6>
                                <p>President</p>
                            </div>
                        </div>
                    </div>
                    <!--End single tab content-->
                    <!--Start single tab content-->
                    <div class="team-members tab-pane fade in row" id="lab">
                        <div class="col-md-4 col-sm-6">
                            <div class="team-person text-center">
                                <img src="images/team/doctor-lab-1.jpg" class="img-responsive" alt="team">
                                <h6>Dr. Maria Robert</h6>
                                <p>X-ray</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="team-person text-center">
                                <img src="images/team/doctor-lab-2.jpg" class="img-responsive" alt="team">
                                <h6>Dr. John Kelly</h6>
                                <p>ultrasound therapy</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="team-person text-center">
                                <img src="images/team/doctor-lab-3.jpg" class="img-responsive" alt="team">
                                <h6>Dr. Simran Toe</h6>
                                <p>bone therapy</p>
                            </div>
                        </div>
                    </div>
                    <!--End single tab content-->
                    <!--Start single tab content-->
                    <div class="team-members tab-pane fade in row" id="marketing">
                        <div class="col-md-4 col-sm-6">
                            <div class="team-person text-center">
                                <img src="images/team/doctor-2.jpg" class="img-responsive" alt="team">
                                <h6>Dr. Rag Jhon</h6>
                                <p>Eye Specialist</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="team-person text-center">
                                <img src="images/team/doctor-lab-2.jpg" class="img-responsive" alt="team">
                                <h6>Dr. John Kelly</h6>
                                <p>ultrasound therapy</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="team-person text-center">
                                <img src="images/team/event-1.jpg" class="img-responsive" alt="team">
                                <h6>Dr. Sheiring Ton</h6>
                                <p>Manager</p>
                            </div>
                        </div>
                    </div>
                    <!--End single tab content-->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection