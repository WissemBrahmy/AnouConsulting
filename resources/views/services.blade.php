@extends('layouts.app')

@section('content')
<br><br>
<!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/background/3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>SERVICES</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.html">ACCUEIL &nbsp;/</a>
                </li>
                <li>services</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<section class="service-overview section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="content-block">
                    <h2>Aperçu des services</h2>
                    <p>Les armes que nous avons acquises au fil du temps et de l’expérience sont : la performance, la proximité, l’efficacité et l’apprentissage constant. Des valeurs qui ont pour objectif la satisfaction du client. 
                      Nous vivons selon la règle d'or et traitons les clients de la façon dont nous aimerions être traités.</p>
                    <ul>
                        <li><i class="fa fa-caret-right"></i>Conseil Stratégique</li>
                        <li><i class="fa fa-caret-right"></i>Ingénierie applicative</li>
                        <li><i class="fa fa-caret-right"></i>Production et infrastructure</li>
                        <li><i class="fa fa-caret-right"></i>Big Data</li>
                    </ul>
                    <a href="{{route("contact")}}" class="btn btn-style-one"><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp Contactez-Nous </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="accordion-section">
                    <div class="accordion-holder">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Conseil Stratégique
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                                                      Nos clients sont confrontés à des impératifs de rationalisation de leurs systèmes d’information 
                                  pour en contrôler le coût, de transformation pour répondre aux besoins de mises en conformité 
                                  réglementaires et d’innovation de leurs directions métier.
                                  Automatisation de processus, STPization des flux d’information, harmonisation des systèmes 
                                  sont autant d’expertises et de thèmes couverts par nos Consultants.
                                  En fonction de vos besoins spécifiques, Symane vous accompagne dans la mise en 
                                  place de vos projets structurants et novateurs dans les domaines suivants : <br>
                                  •  Assistance à maîtrise d’ouvrage / direction de projets  <br>
                                  •  Audit des environnements informatiques <br>
                                  •  Urbanisation des systèmes d’information <br>
                                  •  Optimisation et amélioration de la performance des systèmes d’information <br>
                                  •  Business Intelligence. </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Ingénierie Applicative
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                    Nous vous accompagne dans la conception et la mise en œuvre de votre système d’information 
                                    et de solutions au cœur de votre métier..
                                    Nous cultivons une éthique de travail orientée vers la satisfaction client fondée sur ses 
                                    prestations de qualité et une grande proximité pour l'ensemble des compétences proposées: <br>
                                    •  Recueil des besoins, chiffrage, élaboration de budgets <br>
                                    •  Rédaction des spécifications fonctionnelles et techniques détaillées <br>
                                    •  Développement <br>
                                    •  Recette applicative (TRA, UAT) <br>
                                    •  Tierce Maintenance Applicative <br>
                                    •  Support applicatif niveau 1 et 2 <br>
                                    La complémentarité des activités de SYMANE nous permet d’accompagner nos clients sur 
                                    l’ensemble du cycle de vie de leurs projets, au travers des compétences suivantes : <br>
                                    •  Chef de projet technique et fonctionnel <br>
                                    •  Scrum Master <br>
                                    •  Architecte <br>
                                    •  Analyste Développeur <br>
                                    •  Testeur </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Production Et Infrastructure
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                    Une infrastructure disponible et opérationnelle est primordiale pour nos clients qui font appel à 
                                    ANOU Consulting pour des compétences sur les infrastructures et solutions du marché telles 
                                    que CISCO, EMC, Microsoft, IBM, Oracle. <br>
                                    Mobyssey met à disposition des ses clients des collaborateurs sur les activités suivantes :
                                    •  Optimisation de la sécurité des systèmes d’information <br>
                                    •  Implémentation de réseau d’entreprise et outils collaboratifs <br>
                                    •  Gestion des licences utilisateurs et des relations de services avec les fournisseurs 
                                    informatiques <br>
                                    •  Administration de bases données <br>
                                    •  Cloud / Stockage / Sauvegarde <br>
                                    •  Virtualisation </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFor">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFor" aria-expanded="false"
                                            aria-controls="collapseFor">
                                            BIG DATA
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFor" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFor">
                                    <div class="panel-body">
                                    Le Big Data étant un enjeu majeur pour nos clients, ANOU Consulting décide d’al louer une 
                                    partie importante de ses efforts en recherche & développement afin de les aider à répondre à 
                                    cette triple problématique à laquelle ils sont confrontés. <br>
                                    •  Volume de données important à traiter, <br>
                                    •  Variété importante d'informations (en provenance de plusieurs sources, non-structurées, 
                                    structurées, Open...), <br>
                                    •  Fort niveau de Vélocité à atteindre (c'est-à-dire de fréquence de création, collecte et 
                                    partage de ces données). <br>
                                    Nos consultants ont ainsi pu développer une expertise forte sur les domaines de compétences 
                                    suivants : <br>
                                    •  Hadoop / MongoDB, <br>
                                    •  Unix Server, <br>
                                    •  PIG Latin, <br>
                                    •  Javascript / HTML5 / JSON, <br>
                                    •  Map Reduce /YARN / H2O OxData <br>
                                    Fort de cette expertise, ANOU Consulting développe ainsi une offre ‘data exclusive’ annonceur 
                                    par annonceur dédiée à optimiser la comm unication digitale Multi-canal (pc, mobile & tablette, tv 
                                    connectée et demain objets connectés)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            
        </div>
    </div>
</section>

<!--Service Section-->

<!--End Service Section--> 
@endsection