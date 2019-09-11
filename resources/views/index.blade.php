@extends('layouts.app')

@section('content')
<!--=================================
=            Page Slider            =
==================================-->
<div class="hero-slider">
    <!-- Slider Item -->
    <div class="slider-item slide1" style="background-image:url(images/slider/slider-bg-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                   
                    
                    <div class="carousel-caption">
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                <h1><span>ANOU Consulting</span></h1>
              </div>
              <br>
              <div class="col-md-10 col-md-offset-1">
                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                  <h3>Nous aidons les entreprises à trouver les bonnes solutions et ressources informatiques!</h3>
                </div>
                <br>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
                <form class="form-inline">
                  <div class="form-group">
                    <a href="{{route("services")}}" target="_blank" class="btn btn-primary btn-lg btn-livedemo">Découvrir</a>
                  </div> &nbsp
                  <div class="form-group">
                      <a href="{{route("contact")}}" target="_blank" class="btn btn-primary btn-lg btn-getnow">Contactez-Nous </a>
                  </div>
                </form>
              </div>
            </div>

                   
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Item -->
    <div class="slider-item" style="background-image:url(images/slider/slider-bg-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Slide Content Start-->
                    <div class="content style text-right ">
                        <h2 class="text-white">ANOU Consulting</h2>
                        <p class="tag-text" style="padding-left:700px;">Chaque projet est un nouvelle chalenge pour nos équipes commerciales et techniques. </p>
                        <a href="{{route("services")}}" class="btn btn-main btn-white">Découvrir</a>
                    </div>
                    <!-- Slide Content End-->
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Item -->
    <div class="slider-item" style="background-image:url(images/slider/slider-bg-3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12"  >
                    <!-- Slide Content Start -->
                    
                    <!-- Slide Content End -->
                </div>
            </div>
        </div>
    </div>
    <div class="slider-item" style="background-image:url(images/slider/v.png)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Slide Content Start -->
                    <div class="content text-center style" style="padding-top:200px;" >
                    <h2 class="text-white"> ANOU Consulting</H2>
                        <p class="tag-text mb-3">Nous aidons les professionnels de l'informatique
                             <br>à trouver les meilleurs rôles et à 
                                 développer leur carrière! 
                        </p>
                        <a href="{{route("services")}}" class="btn btn-main btn-white">Découvrir</a>
                    </div>
                    <!-- Slide Content End -->
                </div>
            </div>
        </div>
    </div>
</div>

<!--====  End of Page Slider  ====-->

<section class="cta">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cta-block">
                    <div class="emmergency item">
                        <i class="fa fa-television"></i>
                        <h2>SUPPORT</h2>
                        <a href="{{route("services")}}">24/7</a>
                        <p>Un support utilisateur Fiable et disponible 24/7.</p>
                    </div>
                    <div class="top-doctor item">
                        <i class="fa fa-handshake-o"></i>
                        <h2>CONSEIL</h2>
                        <p>Une organisation opérationnelle des processus de gestion</p>
                        <a href="{{route("services")}}" class="btn btn-main">Voir plus</a>
                    </div>
                    <div class="working-time item">
                        <i class="fa fa-sitemap"></i>
                        <h2> STRATÉGIE</h2>
                        
                        <p>Nous vous amenons à formuler vos objectifs stratégiques
                             à partir des améliorations que vous souhaitez pour votre entreprise</p>
                          
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<!--about section-->
<section class="feature-section section bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-xs-12">
				<div class="image-content">
					<div class="section-title text-center">
						<h3>Nos
							<span>valeurs</span>
						</h3>
						<p>Que ce soit envers nos partenaires ou nos consultants, nous véhiculerons toujours les quatre valeurs suivantes.</p>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="item">
								<div class="icon-box">
									<figure>
										<a href="#">
											<img src="{{asset('images/resource/1.png')}}" alt="" width="50" height="50">
										</a>
									</figure>
								</div>
								<h6>Passion</h6>
								<p>Avec une équipe passionnée et experte dans les nouvelles technologies, notre passion se 
                                    reflète dans notre dynamisme et la poursuite de l'excellence au service d'une expé rience 
                                        utilisateur à haute valeur ajoutée</p>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="item">
								<div class="icon-box">
									<figure>
										<a href="#">
											<img src="{{asset('images/resource/2.png')}}" alt="" width="50" height="50">
										</a>
									</figure>
								</div>
								<h6>Créativité</h6>
								<p>«Design Thinking» est notre philosophie. Avec ce processus d'innovation basé sur une 
                                    méthodologie de conception itérative «User Centered Design» et notre approche «Mobile First», 
                                    l'utilisateur final est au coeur de chaque étape de notre processus de conce ption et de 
                                    développement pour lui offrir une expérience optimale.</p>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="item">
								<div class="icon-box">
									<figure>
										<a href="#">
											<img src="{{asset('images/resource/3.png')}}" alt=""  width="50" height="50">
										</a>
									</figure>
								</div>
								<h6>Performances</h6>
								<p>Nous appliquons les méthodes «Scrum» & «Lean» pour une agilité et une amélioration continue 
                                   de nos process et projets. Nos exigences qualité et nos process sont nos atouts pour garantir 
                                    les meilleurs niveaux de performances et la robustesse de vos projets.</p>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="item">
								<div class="icon-box">
									<figure>
										<a href="#">
											<img src="{{asset('images/resource/4.png')}}" alt="" width="50" height="50">
										</a>
									</figure>
								</div>
								<h6>PROXIMITÉ</h6>
								<p>Des consultants à l’écoute de leurs clients pour favoriser la co-construction</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End about section-->

<!--Start about us area-->
<section class="service-tab-section section">
    <div class="outer-box clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Nav tabs -->
                    <div class="tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#bigdata"  data-toggle="tab">BIG DATA</a>
                            </li>
                            <li role="presentation">
                                <a href="#DIGITALISATION" data-toggle="tab">DIGITALISATION</a>
                            </li>
                            <li role="presentation">
                                <a href="#Cloudcomuting" data-toggle="tab">CLOUD COMPUTING</a>
                            </li>
                          
                            <li role="presentation">
                                <a href="#intelligence" data-toggle="tab">INTELLIGENCE ARTIFICIELLE</a>
                            </li>
                        </ul>
                    </div>
                    <!--Start single tab content-->
                    <div class="tab-content">
                        <div class="service-box tab-pane fade in active row" id="bigdata">
                            <div class="col-md-6">
                                <img class="img-responsive" src="images/services/service-one.jpg" alt="service-image" width="730" height="570">
                            </div>
                            <div class="col-md-6">
                                <div class="contents">
                                    <div class="section-title">
                                        <h3>BIG DATA</h3>
                                    </div>
                                    <div class="text">
                                        <p>Plus qu'un enjeu technologique, nous avons la conviction que les projets Big Data sont avant tout humains. 
                                            Cela se traduit par la prise en compte des visions et expertises métier de nos clients,
                                            d'un incontournable accompagnement au changement et de l'adaptation des solutions aux réalités opérationnelles des projets.</div>
                                    <ul class="content-list">
                                    Nos équipes d’experts (métiers, data scientists et techniques) vous accompagnent dans la
                                    compréhension, la valorisation et la gouvernance de vos données, ainsi que dans la mise en
                                    place de modèles d’aide à la décision.  </ul>
                                    <a href="{{route("services")}}" class="btn btn-style-one"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <!--End single tab content-->
                        <!--Start single tab content-->
                        <div class="service-box tab-pane fade in" id="DIGITALISATION">
                            <div class="col-md-6">
                                <img class="img-responsive" src="images/services/service-two.jpg" alt="service-image">
                            </div>
                            <div class="col-md-6">
                                <div class="contents">
                                    <div class="section-title">
                                        <h3>DIGITALISATION</h3>
                                    </div>
                                    <div class="text">
                                    Au fil des projets et expériences réussies, nous avons bâti une expertise permettant d’accompagner nos clients
                                     tout au long du cycle de vie de leurs applications depuis la définition des besoins métiers et de l’architecture 
                                     technique et les choix des technologies appropriées, jusqu'à la mise en production et la maintenance.
                                    </div>
                                    <ul class="content-list">
                                        <p>
                                        L’intégration des technologies digitales permettra de créer de nouvelles perspectives pour votre entreprise. 
                                        Elles vous aideront à moderniser votre société et offriront de nouvelles sources de valeur pour vos clients, 
                                        tout en créant de nouvelles opportunités génératrices de revenu.
                                        </p>        
                                    </ul>
                                    <a href="{{route("services")}}" class="btn btn-style-one"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <!--End single tab content-->
                        <!--Start single tab content-->
                        <div class="service-box tab-pane fade in" id="Cloudcomuting">
                            <div class="col-md-6">
                                <img class="img-responsive" src="images/services/service-three.jpg" alt="service-image">
                            </div>
                            <div class="col-md-6">
                                <div class="contents">
                                    <div class="section-title">
                                        <h3>CLOUD COMPUTING</h3>
                                    </div>
                                    <div class="text">
                                        <p>
                                        Des conseillers expérimentés vous accompagnent à chaque étape du cycle de vie du cloud.
                                         Bénéficiez de l'assistance de spécialistes pour équiper rapidement et efficacement votre 
                                         entreprise de services de cloud computing.
                                        </p>
                                    </div>
                                    <ul class="content-list">
                                        <p>
                                            Nous proposons une gamme complète de services cloud pour vous aider à affiner votre stratégie,
                                            à définir votre plan d’action pour le cloud, à transformer l’infrastructure, 
                                            les applications et les processus existants. Par ailleurs, 
                                            nous assurons la gestion et l’assistance requise pour les opérations en cours 
                                            et pour le cycle de vie des investissements dans le cloud.   
                                        </p>
                                    </ul>
                                    <a href="{{route("services")}}" class="btn btn-style-one"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <!--End single tab content-->
                        <!--Start single tab content-->
                      
                        <!--End single tab content-->
                        <!--Start single tab content-->
                        <div class="service-box tab-pane fade in" id="intelligence">
                            <div class="col-md-6">
                                <img class="img-responsive" src="images/services/service-five.jpg" alt="service-image">
                            </div>
                            <div class="col-md-6">
                                <div class="contents">
                                    <div class="section-title">
                                        <h3>INTELLIGENCE ARTIFICIELLE</h3>
                                    </div>
                                    <div class="text">
                                        <p>Plus qu'une technologie, nous sommes convaincus que l'ntelligence artificielle est une réponse opérationnelle à des bouleversements métier qui doivent toujours prendre en compte la dimension humaine.
                                            Nos méthodes agiles, nos expertises technologiques et métier apportent à nos clients l'assurance d'un excellent go to market sur leurs projets (Digitale factory) </div>
                                    <ul class="content-list">
                                   ANOU Consulting accompagne de bout en bout les grands groupes et les entreprises plus petites :
                                            de la recherche , à la mise en place 
                                            et au déploiement de solutions complètes d’intelligence artificielle.  </ul>
                                    <a href="{{route("services")}}" class="btn btn-style-one"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <!--End single tab content-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Service Section-->
<div class="container">
    <div class="row">
    <div class="section-title text-center">
            <h3>Nos
                <span>Services</span>
            </h3> <br>
            <p>Nos consultants expérimentés vous accompagnent pour des projets ponctuels ou en mandats comme intervenant technologique tout au long de l’année</p>
        </div>
        <br>
      <div class="col-md-3">
        <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s" >
        <div class="panel panel-default" >
          <div class="align-center">
          <div class="panel-body">
          <div class="icon">
          <img src="images/services/about.jpg" alt="" width="228">
            </div>
            <br>
            <h4>Conseil Stratégique</h4>
            
            <p>
            
            Nos clients sont confrontés à des impératifs de rationalisation de leurs systèmes d’information 
                            pour en contrôler le coût, de transformation pour répondre aux besoins de mises en conformité 
                            réglementaires et d’innovation de leurs directions métier.<br>
                            Automatisation de processus, STPization des flux d’information, harmonisation des systèmes 
                            sont autant d’expertises et de thèmes couverts par nos Consultants. <br>
                            En fonction de vos besoins spécifiques, Symane vous accompagne dans la mise en 
                            place de vos projets structurants et novateurs dans les domaines suivants : <br>
                            •  Assistance à maîtrise d’ouvrage / direction de projets <br>
                            •  Audit des environnements informatiques <br>
                            •  Urbanisation des systèmes d’information <br>
                            •  Optimisation et amélioration de la performance des systèmes d’information <br>
                            •  Business Intelligence.
                            <br><br><br>
            </p>
            <div class="ficon">
              <a href="{{route("services")}}" class="btn btn-default" role="button"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp En savoir plus</a>
            </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      
      <div class="col-md-3">
        <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s" >
        <div class="panel panel-default" >
          <div class="align-center">
          <div class="panel-body">
          <div class="icon">
          <img src="images/services/inf.jpg" alt="" width="228" height="120">
            </div>
            <br>
            <h4>Production et infrastructure</h4>
            
            <p>
            
            Une infrastructure disponible et opérationnelle est primordiale pour nos clients qui font appel à 
                                ANOU Consulting pour des compétences sur les infrastructures et solutions du marché telles 
                                que CISCO, EMC, Microsoft, IBM, Oracle. <br>
                                Mobyssey met à disposition des ses clients des collaborateurs sur les activités suivantes :<br>
                                •  Optimisation de la sécurité des systèmes d’information <br>
                                •  Implémentation de réseau d’entreprise et outils collaboratifs <br>
                                •  Gestion des licences utilisateurs et des relations de services avec les fournisseurs 
                                informatiques <br>
                                •  Administration de bases données<br>
                                •  Cloud / Stockage / Sauvegarde<br>
                                •  Virtualisation
                                <br><br><br><br><br><br><br><br><br><br><br>
                                
            </p>
            <div class="ficon">
              <a href="{{route("services")}}" class="btn btn-default" role="button"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp  En savoir plus</a>
            </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      
      
      <div class="col-md-3">
        <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.0s">
        <div class="panel panel-default" >
          <div class="align-center">
          <div class="panel-body">
          <div class="icon">
          <img src="images/services/cc.png" alt="" width="228" height="120">
            </div>
            <br>
            <h4>Ingénierie applicative</h4>
            
            <p>
                                Nous vous accompagne dans la conception et la mise en œuvre de votre système d’information 
                    et de solutions au cœur de votre métier..<br>
                    Nous cultivons une éthique de travail orientée vers la satisfaction client fondée sur ses 
                    prestations de qualité et une grande proximité pour l'ensemble des compétences proposées:<br>
                    •  Recueil des besoins, chiffrage, élaboration de budgets <br>
                    •  Rédaction des spécifications fonctionnelles et techniques détaillées 
                    •  Développement <br>
                    •  Recette applicative (TRA, UAT) <br>
                    •  Tierce Maintenance Applicative <br>
                    •  Support applicatif niveau 1 et 2<br>
                    La complémentarité des activités de SYMANE nous permet d’accompagner nos clients sur 
                    l’ensemble du cycle de vie de leurs projets, au travers des compétences suivantes :<br>
                    •  Chef de projet technique et fonctionnel<br>
                    •  Scrum Master<br>
                    •  Architecte<br>
                    •  Analyste Développeur<br>
                    •  Testeur
                    <br>
            </p>
            <div class="ficon">
              <a href="{{route("services")}}" class="btn btn-default" role="button"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp En savoir plus</a>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
      <div class="col-md-3">
        <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.6s">
        <div class="panel panel-default" >
          <div class="align-center">
          <div class="panel-body">
          <div class="icon">
          <img src="images/services/service-one2.jpg" alt="" width="228" height="120">
            </div>
            <br>
            <h4>Big Data </h4>
            <p>
            Le Big Data étant un enjeu majeur pour nos clients, ANOU Consulting décide d’allouer une 
                                partie importante de ses efforts en recherche & développement afin de les aider à répondre à 
                                cette triple problématique à laquelle ils sont confrontés.
                                •  Volume de données important à traiter,
                                •  Variété importante d'informations (en provenance de plusieurs sources, non-structurées, 
                                structurées, Open...),
                                •  Fort niveau de Vélocité à atteindre (c'est-à-dire de fréquence de création, collecte et 
                                partage de ces données).
                                Nos consultants ont ainsi pu développer une expertise forte sur les domaines de compétences 
                                suivants :
                                 Hadoop / MongoDB,
                                 Unix Server,
                                 PIG Latin,
                                Javascript / HTML5 / JSon,
                                 Map Reduce /YARN / H2O OxData <br>
                                Fort de cette expertise, ANOU Consulting développe ainsi une offre ‘data exclusive’ annonceur 
                                par annonceur dédiée à optimiser la comm unication digitale Multi-canal (pc, mobile & tablette, tv 
                                connectée et demain objets connectés).
            </p>
            <div class="ficon">
              <a href="#" class="btn btn-default" role="button"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp En savoir plus</a>
            </div>
          </div>
        </div>
        </div>
        </div>
      </div>
    </div>
  </div>


<!--end Service Section-->

<section class="team-section section">
    <div class="container">
        <div class="section-title text-center">
            <h3>NOTRE 
                <span>DÉMARCHE QUALITÉ</span>
            </h3>
            <p>Afin de garantir la qualité de nos prestations et la réussite de nos missions,
                 nous déployons systématiquement une démarche qui permet : </p>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    
                    <div class="contents text-center">
                        <h4>Cadrage</h4>
                        <p>garantir le bon cadrage de la mission et la définition de ses objectifs.</p>
                       
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    
                    <div class="contents text-center">
                        <h4>suivi</h4>
                        <p>assurer un suivi régulier de l’avancement de la mission.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    
                    <div class="contents text-center">
                        <h4>traçabilité</h4>
                        <p>assurer la traçabilité des actions réalisées tout au long de la prestation.</p>
                     
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    
                    <div class="contents text-center">
                        <h4>évaluation</h4>
                        <p> faire évaluer nos consultants par nos clients au terme de chaque mission.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--testimonial-section-->
<section class="testimonial-section" style="background: url(images/testimonials/1.jpg);">
    <div class="container">
        <div class="section-title text-center">
            <h3>Nos
                <span> Références</span>
            </h3>
        </div>
        <div class="testimonial-carousel">
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    
                
                         <center>   <img src="{{asset('images/references/ss.png')}}" alt="" > <center>
                       
                    
                    <p>SEMDEE est pour l'analyse des données textuelles  :
                     Le logiciel MyKnowledge de SEMDEE imaginé par des docteurs en psychologie cognitive pour analyser tous les contenus textuels
                    </P>
                    </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                <center>     <img src="{{asset('images/references/smile.png')}}" alt=""> </center>
                   
                    <p>Smile Has still believed in the potential of these solutions and completely identified with the values of open source: freedom, respect and openness! First adventure:
                     the deployment of the Content Management System open source for CEA</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    
                       <center>     <img src="{{asset('images/references/gg.jpg')}}" alt=""> </center>
                       <BR>
                    
                    <p>GAEL SYSTEMS  est spécialisée dans le secteur d'activité de la programmation informatique.</p> </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    
                <center>     <img src="{{asset('images/references/n.png')}}" alt=""> </center>
                       
                    <h6>NUMERYX</h6>
                    <p>La startup NUMERYX est une entreprise innovante dont les expertises
                     et la R&D sont proposées au service de ses clients PME et grands comptes.</p></div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                <center>     <img src="{{asset('images/references/g.jpg')}}" alt=""> </center>
                    <h6>GLOBALNUM </h6>
                    <p>Conseils et services informatiques</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                <center>     <img src="{{asset('images/references/c.jpg')}}" alt=""> </center>

                    <h6>C17 Engineering</h6>
                    <p>Cabinet de conseil indépendant spécialisé dans les technologies web</p>
                </div>
            </div>
          
        </div>
    </div>
</section>
<!--End testimonial-section-->

<!-- client Section -->
<section class="service-section bg-gray section">
    <div class="container">
        <div class="section-title text-center">
            <h3>Ils nous ont fait 
                <span> confiance</span>
            </h3>
              </div>
        <div class="row items-container clearfix">
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="{{route("services")}}">
                            <img src="{{asset('images/confiances/glob.png')}}" alt="images" class="img-responsive">
                        </a>
                    </div>
                
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="{{route("services")}}">
                            <img src="{{asset('images/confiances/n.png')}}" alt="images" class="img-responsive">
                        </a>
                    </div>
                    
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="{{route("services")}}">
                            <img src="{{asset('images/confiances/smile.png')}}" alt="images" class="img-responsive">
                        </a>
                    </div>
                   
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="{{route("services")}}">
                            <img src="{{asset('images/confiances/ss.png')}}" alt="images" class="img-responsive">
                        </a>
                    </div>
                  
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="{{route("services")}}">
                            <img src="{{asset('images/confiances/GAEL.png')}}" alt="images" class="img-responsive">
                        </a>
                    </div>
                   
                </div>
            </div>
           
        </div>
    </div>
</section>
<!-- End client Section -->


<!--Header Upper-->
<section class="header-uper">
      <div class="container clearfix">
            <div class="logo">
                  <figure>
                        <a href="{{route("index")}}">
                              <img src="{{asset('images/ANOU.png')}}" alt="" width="150">
                        </a>
                  </figure>
            </div>
            <div class="right-side">
                  <ul class="contact-info">
                        <li class="item">
                              <div class="icon-box">
                                    <i class="fa fa-envelope-o"></i>
                              </div>
                              <strong>Email</strong>
                              <br>
                              <a href="#">
                                    <span>contact@anou-dsi.eu</span>
                              </a>
                        </li>
                        <li class="item">
                              <div class="icon-box">
                                    <i class="fa fa-phone"></i>
                              </div>
                              <strong>Téléphone</strong>
                              <br>
                              <span>+33 1 73 70 86 97 || +33 6 36 34 95 40</span>
                        </li>
                  </ul>
                  <div class="link-btn">
                        <a href="{{route("contact")}}" class="btn-style-one"><i class="fa fa-envelope" ></i>&nbsp Contacter nos Experts</a>
                  </div>
            </div>
      </div>
</section>
<!--Header Upper-->

@endsection