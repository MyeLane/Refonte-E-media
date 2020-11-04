<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Presentielle E-MEDIA</title>
    <?php
    include_once '../index/head.php';
    ?>
    <link rel="stylesheet" href="css/univ.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.9/fullpage.min.css">
</head>

<body>
    <!-- navbar -->
    <?php
    include_once '../index/nav.php';
    ?>
    <!-- Contenut site -->
    <section id="page">
        <div class="col-12 section can">
            <div class="row col-12">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6"></div>
                <div class="col-12 can-row col-sm-12 col-md-6 col-lg-6">
                    <h1 class="can-titre col-12 col-sm-6 col-md-6 col-lg-6">CAN</h1>
                    <p class="ab-can">Communication Audiovisuelle et Numérique</P>
                    <h3 class="mt-2 can-parcour parcours">Parcours</h3>
                    <ul class="bt can-bt">
                        <li>Image</li>
                        <li>Développement web</li>
                    </ul>
                    <button type="button" class="btn btn-primary-can bt mt-2" data-toggle="modal" data-target="#myModal1">En savoir plus<i class="ml-1 fa fa-arrow-right"></i></button>

                </div>
            </div>
        </div>
        <div class="col-12 section mpj">
            <div class="row col-12">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                    <h1 class="mpj-titre col-12 col-sm-6 col-md-6 col-lg-6">MPJ</h1>
                    <p class="ab-mpj">Marketing Publicité et Journalisme</P>
                    <h3 class="mt-2 parcours">Parcours</h3>
                    <ul class="bt parcours">
                        <li>Marketing Publicité</li>
                        <li>Journalisme</li>
                    </ul>
                    <button type="button" class="btn parcours btn-primary-mpj bt mt-2" data-toggle="modal" data-target="#myModal2">En savoir plus<i class="ml-1 fa fa-arrow-right"></i></button>

                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6"></div>
            </div>
        </div>
        <div class="col-12 section tic">
            <div class="row col-12">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6"></div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <h1 class="tic-titre col-12 col-sm-6 col-md-6 col-lg-6">TIC</h1>
                    <p class="ab-tic">Informatique et Télécommunication</P>
                    <h3 class="mt-2 can-parcour parcours">Parcours</h3>
                    <ul class="bt can-bt">
                        <li>Réseau et Système</li>
                        <li>Télécommunication</li>
                        <li>Génie Logiciel</li>
                    </ul>
                    <button type="button" class="btn btn-primary-tic bt mt-2" data-toggle="modal" data-target="#myModal3">En savoir plus<i class="ml-1 fa fa-arrow-right"></i></button>

                </div>
            </div>
        </div>
    </section>





    <!-- Modal 1 -->
    <div class="modal fade" id="myModal1">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header btn-primary-can">
                    <h5 class="modal-title align-content-center">COMMUNICATION AUDIOVISUELLE ET NUMERIQUE (CAN) - LICENCE</h5>
                    <button type="button parcours" class="close clise" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body container-fluid">
                    <h5 class="ml-2 color-can">Objectifs :</h5>
                    <p class="text-justify container-fluid">La mention Communication audiovisuelle et infographie, accessible à tous les bacheliers, permet à ses étudiants d'acquérir de solides connaissances théoriques dans le domaine de l'audiovisuel. Elle forme les futurs professionnels des métiers artistiques et techniques de l'audiovisuel. Destiné aux passionnés de l’audiovisuel, elle permet aux étudiants d’avoir les capacités nécessaires pour initier et accompagner la création d'œuvres audiovisuelles, tout en maitrisant parfaitement les concepts de la communication.</p>
                    <h5 class="ml-2 color-can">Contenu de la formation :</h5>
                    <p class="text-justify container-fluid">Reposant sur le système LMD, en vigueur à Madagascar, la formation comprend les matières ci-après : Infographie 2D/3D, Son , Atelier photographie, Atelier documentaire, Base de la programmation, Post production, Direction d’acteur, Theorie de l’Information et de la Communication, Psychologie de la communication, Expression artistique, Gestion de projet….</p>
                    <h5 class="ml-2 color-can">Parcours :</h5>
                    <ul>
                        <li>Image</li>
                        <li>Développement web</li>
                    </ul>
                    <h5 class="ml-2 color-can">Admissibilité :</h5>
                    <p class="text-justify container-fluid">La formation est ouverte à toutes personnes ayant un baccalauréat, de toutes les séries : A/C/D/Technique.</p>
                    <h5 class="ml-2 color-can">Sanction</h5>
                    <p class="text-justify container-fluid">La formation permet aux étudiants d’acquérir les diplômes de Licence en COMMUNICATION AUDIOVISUELLE ET NUMERIQUE, et ce suivant le système LMD actuellement appliqué à Madagascar.</p>
                    <h5 class="ml-2 color-can">Débouchés</h5>
                    <p class="text-justify container-fluid">La formation permet d’occuper des postes de responsable de développement de projets, journaliste, rédacteur, responsable des coproductions dans des entreprises telles que les sociétés de production, les sociétés de distribution, les chaînes de télévision, sites Internet, Industrie cinématographique, etc.</p>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary-can clise" data-dismiss="modal">Fermer</button>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="modal fade" id="myModal2">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header btn-primary-mpj">
                    <h5 class="modal-title align-content-center">MARKETING, PUBLICITE ET JOURNALISME (MPJ) - LICENCE</h5>
                    <button type="button parcours" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body container-fluid">
                    <h5 class="ml-2 color-mpj">Objectifs :</h5>
                    <p class="text-justify container-fluid">La formation s’adresse aux passionnées de la communication. Elle permet de devenir un professionnel qui maîtrise les méthodes et les outils de communication, de marketing et surtout les réalisations publicitaires, susceptible de réaliser en amont des études sur les différents marchés, mais aussi élaborer les supports et moyens publicitaires pertinents, Elle est combinée avec un cursus de journalisme qui permet à l’étudiant de maîtriser tous les aspects de ce domaine.</p>
                    <h5 class="ml-2 color-mpj">Contenu de la formation :</h5>
                    <p class="text-justify container-fluid">La formation en Marketing, Publicité et Journalisme regroupe entre autre les matières suivantes : Fondamentaux de la communication, Communication Visuelle, PAO, Culture Générale, Théorie du journalisme, Technique de son, Technique Vidéo, Télévision, Radio, Multimédia, Atelier d’écritures, Marketing,</p>
                    <h5 class="ml-2 color-mpj">Parcours :</h5>
                    <ul>
                        <li>Marketing Publicité</li>
                        <li>Journalisme</li>
                    </ul>
                    <h5 class="ml-2 color-mpj">Admissibilité :</h5>
                    <p class="text-justify container-fluid">MARKETING PUBLICITE: - Licence en marketing avec études approfondies de publicité. <br> JOURNALISME : -Licence en journalisme</p>
                    <h5 class="ml-2 color-mpj">Sanction</h5>
                    <p class="text-justify container-fluid">La formation permet aux étudiants d’acquérir les diplômes de Licence en MARKETING PUBLICITÉ ET JOURNALISME, et ce suivant le système LMD actuellement appliqué à Madagascar.</p>
                    <h5 class="ml-2 color-mpj">Débouchés</h5>
                    <p class="text-justify container-fluid">Les étudiants issus de la formation pourront exercer dans toutes organisations en tant que chef de publicité, responsable marketing, consultant, chef de projet, concepteur-rédacteur, directeur artistique, journaliste, etc.</p>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary-mpj" data-dismiss="modal">Fermer</button>
                </div>

            </div>
        </div>
    </div>
    <!-- Modal 3 -->
    <div class="modal fade" id="myModal3">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header btn-primary-tic">
                    <h5 class="modal-title align-content-center">Informatique et système embarqués</h5>
                    <button type="button parcours" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body container-fluid">
                    <h5 class="ml-2 color-tic">Objectifs :</h5>
                    <p class="text-justify container-fluid">La mention Informatique et télécommunication a pour objectif de former des spécialistes dans le domaine du génie informatique et des télécommunications. Les diplômés sont capables de mettre à profit leurs connaissances dans les applications des interconnexions de réseaux, des systèmes de télécommunications et de la sécurisation des échanges. Ils possèdent les compétences pour concevoir, intégrer, exploiter et administrer les systèmes informatiques nécessaires au fonctionnement d'une entreprise mais aussi de mieux adapter les fonctionnalités des réseaux locaux émergeants.</p>
                    <h5 class="ml-2 color-tic">Contenu de la formation :</h5>
                    <p class="text-justify container-fluid">La formation en nouvelle technologie de l’Informatique et de la Communication compte parmi les matières qu’elle dispense les matières suivantes : Algorithme, Base de la télécommunication analogique, Algèbre, Cryptographie, Circuit séquentiel, Transformation intégrale, Système embarqué, Management, Probabilité Statistique</p>
                    <h5 class="ml-2 color-tic">Parcours :</h5>
                    <ul>
                        <li>Réseau et Système</li>
                        <li>Télécommunication</li>
                        <li>Génie Logiciel</li>
                    </ul>
                    <h5 class="ml-2 color-tic">Admissibilité :</h5>
                    <p class="text-justify container-fluid">La formation est ouverte à toutes personnes ayant un baccalauréat des séries scientifiques (C/D).</p>
                    <h5 class="ml-2 color-tic">Sanction :</h5>
                    <p class="text-justify container-fluid">La formation permet aux étudiants d’acquérir les diplômes de Licence en NOUVELLE TECHNOLOHIE DE L’INFORMATIQUE ET DE LA TELECOMMUNICATION et ce suivant le système LMD actuellement appliqué à Madagascar.</p>
                    <h5 class="ml-2 color-tic">Débouchés :</h5>
                    <p class="text-justify container-fluid">Les étudiants seront aptes à exercer dans toutes les organisations utilisant les nouvelles technologies de l'information et de la communication (TIC) en tant qu’administrateur Systèmes et Réseaux, Responsable d’Exploitation, …</p>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary-tic" data-dismiss="modal">Fermer</button>
                </div>

            </div>
        </div>
    </div>

    <!--script js -->
    <?php
    include_once '../index/script.php';
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.9/fullpage.min.js"></script>
    <script>
        new fullpage('#page', {
            autoScrolling: true,
            scrollHorizontally: true,
            navigation: true
        });
    </script>
    <script>
        /*animation on scroll*/
        AOS.init({
            easing: 'ease-out-back',
            duration: 1000
        });
    </script>
</body>

</html>