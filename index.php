<?php 

function dateToFrench($date, $format)
    {
        $english_days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
        $french_days = array('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');
        $english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
        $french_months = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
        return str_replace($english_months, $french_months, str_replace($english_days, $french_days, date($format, strtotime($date))));
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>E-media</title>
    <link rel="icon" type="icon" href="img/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome-free-5.8.2-web/css/all.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>
<body> 
    <!--navbar-->
    <nav class="navbar navbar-expand-lg fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon fa fa-bars"></span>
        </button>
        <img class="nav navbar-nav pull-sm-left img-fluid" src="img/logo E-media.png" width="10%" alt="">
        <div class="collapse navbar-collapse menu" id="navbarTogglerDemo03">
            <ul class="nav navbar-nav navbar-list mx-auto">
                <li class="nav-item"><a class="nav-link button active" id="index"  href="#">Accueil <span class="bottom-solid"></span></a></li>
                <li class="nav-item ml-4"><a class="nav-link button" id="cfp" href="autre_page/cfp.php">CFP <span class="bottom-solid"></span></a></li>
                <li class="nav-item ml-4"><a class="nav-link button" id="pres" href="autre_page/presentielle.php">Univérsité <span class="bottom-solid"></span></a></li>
                <li class="nav-item ml-4"><a class="nav-link button" id="ligne" href="autre_page/en_ligne.php">Univérsité online <span class="bottom-solid"></span></a></li>
                <li class="nav-item ml-4"><a class="nav-link button" id="bac" href="autre_page/bac.php">Bac online <span class="bottom-solid"></span></a></li>
                <li class="nav-item ml-4"><a class="nav-link button" id="groupe" href="autre_page/groupe.php">Groupe <span class="bottom-solid"></span></a></li>
                <li class="nav-item ml-4"><a class="nav-link button" id="contact" href="#">Contact <span class="bottom-solid"></span></a></li>
            </ul>
            <ul class="nav navbar-nav pull-sm-right">
                <li class="nav-item nav-seconnecter pr-2" data-tooltip="Se connecter"><a class="nav-link button nav-connection" href="#lien"><i class="mr-2 nav-connection ml-2 fa fa-user"></i> Se connecter</a></li>
            </ul>
        </div>
    </nav>

    <section>
        <div class="container-fluid">
            <!--actualites international-->
            <div class="row actualites">
                <div class="row col-12 ml-2 p-3">
                    <div class="newspaper"><i class="fas fa-newspaper mr-3"></i></div>
                    <div class="title_actu mt-3">ACTUALITES INTERNATIONALS</div>
                </div>

                <div id="owl-actualites" class="owl-carousel owl-theme">
                            <?php
                                date_default_timezone_set('UTC');
                                $date = date('d-m-y');
                                $url = 'https://newsapi.org/v2/everything?q=general&from=".$date."&language=fr&sortBy=publishedAt&apiKey=6add0ddad5f74a0ab2594cecf66ff5ff ';
                                $response = file_get_contents($url);
                                $NewsData = json_decode($response); 
                        
                                foreach($NewsData->articles as $News)
                                {          
                            ?>
                                <div class="item">         
                                    <img src="<?php echo $News->urlToImage ?>" class="img-fluid" alt="aucune img">
                                        <h6 class="p-2 mt-2"><?php echo $News->title; ?></h6>
                                        <small class="p-1" align="center"><?php echo dateToFrench($News->publishedAt,"l j F Y à H:i") ?></small>
                                    <a href="<?php echo $News->url ?>" class="btn m-2" target="_blank">Details >></a>
                                </div>
                            <?php 
                                }
                            ?>
                </div>
            </div>  
            <!--actualites international-->

            <!--notre vision-->
                <div class="row notre_vision">
                    <div class="col-3 pl-5 object aos-init aos-animate code code--small code--up" data-aos="fade-up" data-aos-duration="2000">
                        <img src="img/accueil/Vector_Smart_Object.png" class="img-fluid" alt="object">
                    </div>
                    
                    <div class="col-9">
                        <div class="row col-12 part1">
                            <div class="col-3 object1">
                                <img src="img/accueil/tirE.png" class="img-fluid" alt="object2">
                            </div> 
                            <div class="col-1 object2">
                                <img src="img/accueil/rond.png" class="img-fluid" alt="emedia">
                            </div> 
                            <div class="col-2 object3">
                                <img src="img/accueil/1.jpg" class="img-fluid" alt="emedia">
                            </div> 
                            <div class="col-6 part1_texte">
                                <h5>Ouverture de l’établissement sur le plan international</h5>
                                <p>Le but de l’ouverture à l’international est d’aligner les formations dispensées au sein 
                                    de l’établissement avec ceux des grands établissements reconnus mondialement</p>
                            </div> 
                        </div>

                        <div class="row col-12 part2">
                            <div class="col-3 object1">
                                <img src="img/accueil/tirE.png" class="img-fluid" alt="object2">
                            </div> 
                            <div class="col-1 object2">
                                <img src="img/accueil/rond.png" class="img-fluid" alt="emedia">
                            </div> 
                            <div class="col-2 object3">
                                <img src="img/accueil/2.jpg" class="img-fluid" alt="emedia">
                            </div> 
                            <div class="col-6 part2_texte">
                                <h5>La construction d’un nouveau bâtiment</h5>
                                <p>La construction d’un bâtiment a pour finalité d’offrir environnement propice 
                                    à l’épanouissement des étudiants. Doté de toutes les commodités nécessaires pour un apprentissage enrichissant et digne.</p>
                            </div>
                        </div>

                        <div class="row col-12 part3">
                            <div class="col-3 object1">
                                <img src="img/accueil/tirE.png" class="img-fluid" alt="object2">
                            </div> 
                            <div class="col-1 object2">
                                <img src="img/accueil/rond.png" class="img-fluid" alt="emedia">
                            </div> 
                            <div class="col-2 object3">
                                <img src="img/accueil/3.jpg" class="img-fluid" alt="emedia">
                            </div> 
                            <div class="col-6 part3_texte">
                                <h5>Mise à la disposition des étudiants des équipements à la pointe de la technologie</h5>
                                <p>L’établissement met un point d’honneur à se doter des matériels et équipements nécessaires pour 
                                    parfaire la formation qu’elle dispense.</p>
                            </div>
                        </div>

                        <div class="row col-12 part4">
                            <div class="col-3 object1">
                                <img src="img/accueil/tirE.png" class="img-fluid" alt="object2">
                            </div> 
                            <div class="col-1 object2">
                                <img src="img/accueil/rond.png" class="img-fluid" alt="emedia">
                            </div> 
                            <div class="col-2 object3">
                                <img src="img/accueil/3.jpg" class="img-fluid" alt="emedia">
                            </div> 
                            <div class="col-6 part4_texte">
                                <h5>Mise à la disposition des étudiants des équipements à la pointe de la technologie</h5>
                                <p>L’établissement met un point d’honneur à se doter des matériels et équipements nécessaires pour 
                                    parfaire la formation qu’elle dispense.</p>
                            </div>
                        </div>
                    </div>
                </div>
            <!--notre vision-->
        </div>
    </section>

    <!--script js -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        $(document).ready(function() {
     
            $("#owl-actualites").owlCarousel({
                autoplay: true,
                dots: true,
                loop: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    320: {
                        items: 1
                    },
                    376: {
                        items: 2
                    },
                    576: {
                        items: 3
                    },
                    768: {
                        items: 4
                    },
                    900: {
                        items: 4
                    }
                }
            });
    
        });
    </script>

    <script>
        AOS.init({
            easing: 'ease-out-back',
            duration: 1000,
        });
    </script>
</body>
</html>