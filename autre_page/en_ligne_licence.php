<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>En ligne E-MEDIA</title>
    <?php
        include_once '../index/head.php';
    ?>
    <link rel="stylesheet" href="css/enligne.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.9/fullpage.min.css">
</head>
<body>
    <!-- navbar -->
    <?php
        include_once '../index/nav.php';
    ?>
    <section id="page">
    <section class="licence" id="licence">
        <!-- TIC licence -->
        <div class="section tic-licence-div" >
        <div class="tic-licence  container-fluid">
                <img src="img/online/Licence univ online-03.png" class="img-fluid img-licence-tic" width="100%" alt="">
                <!-- particules -->
                <div class="trianglesA" id="triangles1"></div>
                <div class="trianglesA" id="triangles2"></div>
                <div class="trianglesA" id="triangles3"></div>
                <div class="trianglesA" id="triangles4"></div>
                <div class="trianglesA" id="triangles5"></div>
        </div>
        <div class="text-licence-tic row container-fluid">
            <div class="col-12 col-sm-12 col-md-7 col-lg-7"></div>
            <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                <h1 class="titre col-12 col-sm-12  tic-response-licence col-md-12 col-lg-12">TIC</h1>
                <h3 class="sous-titre pb-2">Informatique et Télécommunication</h3>
                <h5 class="ml-2 mt-4">Parcours</h5>
                <ul class="ml-2 text">
                    <li>Réseau et Système</li>
                    <li>Télécommunication</li>
                    <li>Génie Logiciel</li>
                </ul>
                <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-primary-ltic" data-toggle="modal" data-target="#myModal1">
                    En savoir plus<i class="ml-1 fa fa-arrow-right"></i>
                </button>

            </div>
        </div>
        </div>
        <!-- CAN licence -->
        <div class="section can-licence-div">
        <div class="can-licence  container-fluid">
                <img src="img/online/Licence univ online-04.png" class="img-fluid img-licence-can" width="100%" alt="">
                <!-- particules -->
                <div class="trianglesB" id="trianglesB1"></div>
                <div class="trianglesB" id="trianglesB2"></div>
                <div class="trianglesB" id="trianglesB3"></div>
                <div class="trianglesB" id="trianglesB4"></div>
                <div class="trianglesB" id="trianglesB5"></div>
        </div>
        <div class="text-licence-can row container-fluid">
            <div class="col-12 col-sm-12 ml-3 col-md-5 col-lg-5">
                <h1 class="titre col-12 col-sm-12 col-md-12 col-lg-12">CAN</h1>
                <h3 class="sous-titre pb-2">Communication Audiovisuelle et Numérique</h3>
                <h5 class="ml-2 mt-4">Parcours</h5>
                <ul class="ml-2 text">
                    <li>Image</li>
                    <li>Développement web</li>
                </ul>

<!-- Button to Open the Modal -->
                <button type="button" class="btn btn-primary-lcan" data-toggle="modal" data-target="#myModal2">
                En savoir plus<i class="ml-1 fa fa-arrow-right"></i>
                </button>

            </div>
            <div class="col-12 col-sm-12 col-md-7 col-lg-7"></div>
        </div>
        </div>
        <!-- MPJ licence -->
        <div class="section mpj-licence-div">
        <div class="mpj-licence  container-fluid">
                <img src="img/online/Licence univ online-05.png" class="img-fluid img-licence-mpj" width="100%" alt="">
                <!-- particules -->
                <div class="trianglesC" id="trianglesC1"></div>
                <div class="trianglesC" id="trianglesC2"></div>
                <div class="trianglesC" id="trianglesC3"></div>
                <div class="trianglesC" id="trianglesC4"></div>
                <div class="trianglesC" id="trianglesC5"></div>
        </div>
        <div class="text-licence-mpj row container-fluid">
            <div class="col-12 col-sm-12 col-md-7 col-lg-7"></div>
            <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                <h1 class="titre col-12 col-sm-12 col-md-12 col-lg-12">MPJ</h1>
                <h3 class="sous-titre pb-2">Marketing Publicité et Journalisme</h3>
                <h5 class="ml-2 mt-2">Parcours</h5>
                <ul class="ml-2 text">
                    <li>Marketing Publicité</li>
                    <li>Journalisme</li>
                </ul>
<!-- Button to Open the Modal -->
                <button type="button" class="btn btn-primary-lmpj" data-toggle="modal" data-target="#myModal3">
                En savoir plus<i class="ml-1 fa fa-arrow-right"></i>
                </button>

            </div>
        </div>
        </div>
        <!-- Management licence -->
        <div class="section mba-licence-div">
        <div class="mba-licence  container-fluid">
                <img src="img/online/Licence univ online-06.png" class="img-fluid img-licence-mba" width="100%" alt="">
                <!-- particules -->
                <div class="trianglesD" id="trianglesD1"></div>
                <div class="trianglesD" id="trianglesD2"></div>
                <div class="trianglesD" id="trianglesD3"></div>
                <div class="trianglesD" id="trianglesD4"></div>
                <div class="trianglesD" id="trianglesD5"></div>
        </div>
        <div class="text-licence-mba row container-fluid">
            <div class="col-12 col-sm-12 ml-3 col-md-5 col-lg-5">
                <h1 class="titre col-12 col-sm-12 col-md-12 col-lg-12 pb-2">MANAGEMENT</h1>
                <h5 class="ml-2 mt-2">Parcours</h5>
                <ul class="ml-2 text">
                    <li>Finance et Comptabilité</li>
                    <li>Administration des affaires</li>
                    <li>Commerce international</li>
                </ul>


                <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-primary-lmba" data-toggle="modal" data-target="#myModal">
                En savoir plus<i class="ml-1 fa fa-arrow-right"></i>
                </button>

            </div>
            <div class="col-12 col-sm-12 col-md-7 col-lg-7"></div>
        </div>
        </div>
        <!-- DRT licence -->
        <div class="section drt-licence-div">
        <div class="drt-licence  container-fluid">
                <img src="img/online/Licence univ online-07.png" class="img-fluid img-licence-drt" width="100%" alt="">
                <!-- particules -->
                <div class="trianglesE" id="trianglesE1"></div>
                <div class="trianglesE" id="trianglesE2"></div>
                <div class="trianglesE" id="trianglesE3"></div>
                <div class="trianglesE" id="trianglesE4"></div>
                <div class="trianglesE" id="trianglesE5"></div>
        </div>
        <div class="text-licence-drt row container-fluid">
            <div class="col-12 col-sm-12 col-md-7 col-lg-7"></div>
            <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                <h1 class="titre col-12 col-sm-12 col-md-12 col-lg-12 pb-4">DROIT</h1>
                <h5 class="ml-2 mt-2">Parcours</h5>
                <ul class="ml-2 text">
                    <li>Droit public</li>
                    <li>Droit Privé et des affaires</li>
                    <li>Droit international et Diplomatie</li>
                </ul>
                <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-primary-ldrt" data-toggle="modal" data-target="#myModal4">
                En savoir plus<i class="ml-1 fa fa-arrow-right"></i>
                </button>
            </div>
        </div>
        </div>
    </section>
    </section>
        
            <!-- The Modal 1 -->
                <div class="modal fade" id="myModal1">
                    <div class="modal-dialog modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                    
                        <!-- Modal Header -->
                        <div class="modal-header btn-primary-ltic">
                        <h5 class="modal-title">Informatique et système embarqués</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        
                        <!-- Modal body -->
                        <div class="modal-body  container-fluid">
                        <h5 class="color-ltic">Objectifs</h5>
                        <p class="text-justify container-fluid">La mention Informatique et télécommunication a pour objectif de former des spécialistes dans le domaine du génie informatique et des télécommunications. Les diplômés sont capables de mettre à profit leurs connaissances dans les applications des interconnexions de réseaux, des systèmes de télécommunications et de la sécurisation des échanges. Ils possèdent les compétences pour concevoir, intégrer, exploiter et administrer les systèmes informatiques nécessaires au fonctionnement d'une entreprise mais aussi de mieux adapter les fonctionnalités des réseaux locaux émergeants.</p>
                        <h5 class="color-ltic">Contenu de la formation :</h5>
                        <p class="text-justify container-fluid">La formation en nouvelle technologie de l’Informatique et de la Communication compte parmi les matières qu’elle dispense les matières suivantes : Algorithme, Base de la télécommunication analogique, Algèbre, Cryptographie, Circuit séquentiel, Transformation intégrale, Système embarqué, Management, Probabilité Statistique</p>
                        <h5 class="color-ltic">Parcours :</h5>
                        <ul>
                            <li>Réseau et Système</li>
                            <li>Télécommunication</li>
                            <li>Génie Logiciel</li>
                        </ul>
                        <h5 class="ml-2 color-ltic">Admissibilité :</h5>
                            <p class="text-justify container-fluid">La formation est ouverte à toutes personnes ayant un baccalauréat des séries scientifiques (C/D/Technique).</p>
                        <h5 class="ml-2 color-ltic">Sanction</h5>
                        <p class="text-justify container-fluid">La formation permet aux étudiants d’acquérir les diplômes de Licence en TECHNOLOGIE DE L’INFORMATIQUE ET DE LA TELECOMMUNICATION et ce suivant le système LMD actuellement appliqué à Madagascar.</p>
                        <h5 class="ml-2 color-ltic">Débouchés</h5>
                        <p class="text-justify container-fluid">Les étudiants seront aptes à exercer dans toutes les organisations utilisant les nouvelles technologies de l'information et de la communication en tant qu’administrateur Systèmes et Réseaux, Responsable d’Exploitation, …</p>
                        </div>

                         <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary-ltic" data-dismiss="modal">Fermer</button>
                        </div>
                        
                    </div>
                    </div>
                </div>

                <!-- The Modal 2-->
                <div class="modal fade" id="myModal2">
                    <div class="modal-dialog modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                    
                        <!-- Modal Header -->
                        <div class="modal-header btn-primary-lcan">
                        <h5 class="modal-title">COMMUNICATION AUDIOVISUELLE ET NUMERIQUE (CAN) - LICENCE</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        
                        <!-- Modal body -->
                        <div class="modal-body container-fluid">
                            <h5 class="ml-2 color-lcan">Objectifs</h5>
                            <p class="text-justify container-fluid">La mention Communication audiovisuelle et infographie, accessible à tous les bacheliers, permet à ses étudiants d'acquérir de solides connaissances théoriques dans le domaine de l'audiovisuel. Elle forme les futurs professionnels des métiers artistiques et techniques de l'audiovisuel. Destiné aux passionnés de l’audiovisuel, elle permet aux étudiants d’avoir les capacités nécessaires pour initier et accompagner la création d'œuvres audiovisuelles, tout en maitrisant parfaitement les concepts de la communication.</p>
                            <h5 class="ml-2 color-lcan">Contenu de la formation</h5>
                            <p class="text-justify container-fluid">Reposant sur le système LMD, en vigueur à Madagascar, la formation comprend les matières ci-après : Infographie 2D/3D, Son , Atelier photographie, Atelier documentaire, Base de la programmation, Post production, Direction d’acteur, Theorie de l’Information et de la Communication, Psychologie de la communication, Expression artistique, Gestion de projet….</p>
                            <h5 class="ml-2 color-lcan">Parcours :</h5>
                            <ul>
                                <li>Image</li>
                                <li>Développement web</li>
                            </ul>
                            <h5 class="ml-2 color-lcan">Admissibilité :</h5>
                        <p class="text-justify container-fluid">La formation est ouverte à toutes personnes ayant un baccalauréat, de toutes les séries : A/C/D/Technique.</p>
                            <h5 class="ml-2 color-lcan">Sanction</h5>
                            <p class="text-justify container-fluid">La formation permet aux étudiants d’acquérir les diplômes de Licence en COMMUNICATION AUDIOVISUELLE ET NUMERIQUE, et ce suivant le système LMD actuellement appliqué à Madagascar.</p>
                            <h5 class="ml-2 color-lcan">Débouchés</h5>
                            <p class="text-justify container-fluid">La formation permet d’occuper des postes de responsable de développement de projets, journaliste, rédacteur, responsable des coproductions dans des entreprises telles que les sociétés de production, les sociétés de distribution, les chaînes de télévision, sites Internet, Industrie cinématographique, etc.</p>
                        </div>

                         <!-- Modal footer -->
                         <div class="modal-footer">
                            <button type="button" class="btn btn-primary-lcan" data-dismiss="modal">Fermer</button>
                        </div>
                        
                        
                    </div>
                    </div>
                </div>
                <!-- The Modal 3-->
                <div class="modal fade" id="myModal3">
                    <div class="modal-dialog modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                    
                        <!-- Modal Header -->
                        <div class="modal-header btn-primary-lmpj">
                        <h5 class="modal-title">MARKETING, PUBLICITE ET JOURNALISME (MPJ) - LICENCE</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        
                        <!-- Modal body -->
                        <div class="modal-body container-fluid">
                        <h5 class="ml-2 color-lmpj">Objectifs</h5>
                        <p class="text-justify container-fluid">La formation s’adresse aux passionnées de la communication. Elle permet de devenir un professionnel qui maîtrise les méthodes et les outils de communication, de marketing et surtout les réalisations publicitaires, susceptible de réaliser en amont des études sur les différents marchés, mais aussi élaborer les supports et moyens publicitaires pertinents, Elle est combinée avec un cursus de journalisme qui permet à l’étudiant de maîtriser tous les aspects de ce domaine.</p>
                        <h5 class="ml-2 color-lmpj">Contenu de la formation</h5>
                        <p class="text-justify container-fluid">La formation en Marketing, Publicité et Journalisme regroupe entre autre les matières suivantes : Fondamentaux de la communication, Communication Visuelle, PAO, Culture Générale, Théorie du journalisme, Technique de son, Technique Vidéo, Télévision, Radio, Multimédia, Atelier d’écritures, Marketing,</p>
                        <h5 class="ml-2 color-lmpj">Parcours :</h5>
                        <ul>
                            <li>Marketing Publicité</li>
                            <li>Journalisme</li>
                        </ul>
                        <h5 class="ml-2 color-lmpj">Admissibilité :</h5>
                        <p class="text-justify container-fluid">MARKETING PUBLICITE: - Licence en marketing avec études approfondies de publicité. <br> JOURNALISME : -Licence en journalisme</p>
                        <h5 class="ml-2 color-lmpj">Sanction</h5>
                        <p class="text-justify container-fluid">La formation permet aux étudiants d’acquérir les diplômes de Licence en MARKETING PUBLICITÉ ET JOURNALISME, et ce suivant le système LMD actuellement appliqué à Madagascar.</p>
                        <h5 class="ml-2 color-lmpj">Débouchés</h5>
                        <p class="text-justify container-fluid">Les étudiants issus de la formation pourront exercer dans toutes organisations en tant que chef de publicité, responsable marketing, consultant, chef de projet, concepteur-rédacteur, directeur artistique, journaliste, etc.</p>
                        </div>
                        
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary-lmpj" data-dismiss="modal">Fermer</button>
                        </div>
                        
                    </div>
                    </div>
                </div>
                <!-- The Modal -->
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                    
                        <!-- Modal Header -->
                        <div class="modal-header btn-primary-lmba">
                        <h5 class="modal-title">MANAGEMENT - LICENCE</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        
                        <!-- Modal body -->
                        <div class="modal-body  container-fluid">
                            <h5 class="color-lmba">Objectifs</h5>
                            <p class="text-justify">La mention management a pour vocation de former des managers et des entrepreneurs exerçant dans le domaine de l’économie et de la gestion d’entreprise ou d’organisation. Elle vise à donner aux étudiants les capacités nécessaires pour maitriser tous les aspects essentiels d’une entreprise tels que la finance d’entreprise, la gestion des ressources humaine, la production, etc. Ainsi, la formation est interdisciplinaire (économie, gestion, finance, anglais, mathématiques, statistiques, informatique, etc.). La mention a pour principale finalité de doter les étudiants d’une grande capacité d’analyse et de synthèse, polyvalents et aptes à s’adapter aux évolutions du monde économique. Le management est parmi le domaine le plus omniprésent dans monde du travail : dans le domaine de santé, environnement, hôtellerie, restauration, tourisme,  information, le sport, etc.</p>
                            <h5 class="color-lmba">Contenu de la formation</h5>
                            <p class="text-justify">Reposant sur le système LMD, en vigueur à Madagascar, la formation comprend les matières ci-après : Economie, Management des organisations, ressources humaines, Comptabilité, Leadership, Droit des affaires, Droit du travail, Gestion de projet, Anglais des Affaires, Technique de négociation, Technique d’expression et de communication, Mathématiques financières, Marketing, …</p>
                            <h5 class="color-lmba">Parcours : </h5>
                            <ul>
                                <li>Finance et Comptabilité</li>
                                <li>Administration des affaires</li>
                                <li>Commerce international</li>
                            </ul>
                            <h5 class="color-lmba">Admissibilité : </h5>
                            <p class="text-justify">La formation est ouverte à toutes personnes ayant un baccalauréat, de toutes les séries : A/C/D/Technique</p>
                            <h5 class="color-lmba">Sanction</h5>
                            <p class="text-justify">La formation permet aux étudiants d’acquérir les diplômes de Licence en MANAGEMENT, et ce suivant le système LMD actuellement appliqué à Madagascar.</p>
                            <h5 class="color-lmba">Débouché</h5>
                            <p class="text-justify">Les étudiants issus de la formation occupent les postes tels que comptable, Assistant de direction, chargé d’affaires, chargé de communication interne, chargé de communication externe, chargé de marketing, chef de projet, etc.</p>
                        </div>
                        
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary-lmba" data-dismiss="modal">Fermer</button>
                        </div>
                        
                    </div>
                    </div>
                </div>
                <!-- The Modal 4-->
                <div class="modal fade" id="myModal4">
                    <div class="modal-dialog modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                    
                        <!-- Modal Header -->
                        <div class="modal-header btn-primary-ldrt">
                        <h5 class="modal-title">DROIT - LICENCE</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        
                        <!-- Modal body -->
                        <div class="modal-body  container-fluid">
                            <h5 class="color-ldrt">Objectifs</h5>
                            <p class="text-justify">La formation en droit a pour vocation de former les étudiants dans le but de connaître et de maitriser les raisonnements, les notions et les savoirs fondamentaux dans le domaine juridique. Il permet aux étudiants d’acquérir les savoirs théoriques en droit, ainsi que de maitriser tous les aspects des techniques juridiques (dissertation, commentaire de texte, commentaire d’arrêt, analyse de documents juridiques etc.).</p>
                            <h5 class="color-ldrt">Contenu de la formation</h5>
                            <p class="text-justify">La formation en Droit compte parmi les matières qu’elle dispense les matières suivantes : <br> Droit du travail, Droit constitutionnel, Droit de la famille, Comptabilité générale, organisation d’entreprise, Finance publique, Communication en public, psychologie de la communication, etc. </p>
                            <h5 class="color-ldrt">Parcours</h5>
                            <ul>
                                <li>Droit public</li>
                                <li>Droit Privé et des affaires</li>
                                <li>Droit international et Diplomatie</li>
                            </ul>
                            <h5 class="color-ldrt">Admissibilité : </h5>
                            <p class="text-justify">La formation est ouverte à toutes personnes ayant un baccalauréat, de toutes les séries : A/C/D/Technique</p>
                            <h5 class="color-ldrt">Débouchés</h5>
                            <p class="text-justify">Les étudiants seront aptes à exercer dans toutes les organisations Les étudiants sortant de l’université en ligne peuvent aspirer à devenir : juriste d’entreprise, notaire, avocat, magistrat, greffier, huissier, officier de police judiciaire, assistant juridique de cabinet d’avocat, etc.</p>
                        </div>
                        
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary-ldrt" data-dismiss="modal">Fermer</button>
                        </div>
                        
                    </div>
                    </div>
                </div>
    <!--script js -->
    <script src="../js/enligne.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.9/fullpage.min.js"></script>
    <script>
        new fullpage('#page', {
    autoScrolling: true,
    scrollHorizontally: true,
    navigation: true
});
    </script>
    <?php
        include_once '../index/script.php';
    ?>
</body>
</html>