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
            <div class="col-12 mt-5 pb-4 actualites aos-init aos-animate code code--small code--down" data-aos="zoom-in-down" data-aos-duration="2000">
                <h6 class="pt-3"><i class="fas fa-newspaper mr-4"></i>ACTUALITE INTERNATIONAL</h6>
                <div class="mt-3">
                    <ul class="nav nav-pills col-8 nav-justified mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active news " id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Technologie</a>
                            <span class="bottom-solid"></span>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link news" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Santé</a>
                            <span class="bottom-solid"></span>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link news" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Economie</a>
                            <span class="bottom-solid"></span>
                        </li>
                    </ul>
                    
                    <div class="tab-content tab-actualite" id="pills-tabContent">
                        <div class="d-flex tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <?php
                                date_default_timezone_set('UTC');
                                $date = date('d-m-y');
                                $url = 'http://newsapi.org/v2/everything?q=technologie&from=".$date."&language=fr&sortBy=publishedAt&pageSize=4&apiKey=a8ef73a0f34641f18ac14d7ff914fad6 ';
                                $response = file_get_contents($url);
                                $NewsData = json_decode($response); 
                        
                                foreach($NewsData->articles as $News)
                                {          
                            ?>
                                <div class="col-3 mt-3 google-body">
                                    <div class="col-12 image">
                                        <img src="<?php echo $News->urlToImage ?>" class="img-fluid" alt="aucune img">
                                    </div>

                                    <div class="col-10 information">
                                        <h6><?php echo $News->title; ?></h6>
                                        <div class="top-solid mb-1"></div>
                                        <small class="p-1" align="center"><?php echo dateToFrench($News->publishedAt,"l j F Y à H:i") ?></small>
                                        <a href="<?php echo $News->url ?>" class="btn m-2" target="_blank">Voir plus</a>
                                    </div>
                                </div>
                            <?php 
                                }
                            ?>
                
                        </div>
                        <div class="d-flex tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <?php
                            date_default_timezone_set('UTC');
                            $date = date('d-m-y');
                            $url = 'http://newsapi.org/v2/everything?q=santé&from=".$date."&language=fr&sortBy=publishedAt&pageSize=4&apiKey=a8ef73a0f34641f18ac14d7ff914fad6 ';
                            $response = file_get_contents($url);
                            $NewsData = json_decode($response); 
                        
                            foreach($NewsData->articles as $News)
                                {          
                            ?>
                                <div class="col-3 mt-3 google-body">
                                    <div class="col-12 image">
                                        <img src="<?php echo $News->urlToImage ?>" class="img-fluid" alt="aucune img">
                                    </div>

                                    <div class="col-10 information">
                                        <h6><?php echo $News->title; ?></h6>
                                        <div class="top-solid mb-1"></div>
                                        <small class="p-1"><?php echo dateToFrench($News->publishedAt,"l j F Y à H:i") ?></small>
                                        <a href="<?php echo $News->url ?>" class="btn m-2" target="_blank">Voir plus</a>
                                    </div>
                                </div>
                            <?php 
                                }
                            ?>
                        </div>
                        <div class="d-flex tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <?php
                            date_default_timezone_set('UTC');
                            $date = date('d-m-y');
                            $url = 'http://newsapi.org/v2/everything?q=economie&from=".$date."&language=fr&sortBy=publishedAt&pageSize=4&apiKey=a8ef73a0f34641f18ac14d7ff914fad6 ';
                            $response = file_get_contents($url);
                            $NewsData = json_decode($response); 
                        
                            foreach($NewsData->articles as $News)
                                {          
                            ?>
                                <div class="col-3 mt-3 google-body">
                                    <div class="col-12 image">
                                        <img src="<?php echo $News->urlToImage ?>" class="img-fluid" alt="aucune img">
                                    </div>

                                    <div class="col-10 information">
                                        <h6><?php echo $News->title; ?></h6>
                                        <div class="top-solid mb-1"></div>
                                        <small class="p-1"><?php echo dateToFrench($News->publishedAt,"l j F Y à H:i") ?></small>
                                        <a href="<?php echo $News->url ?>" class="btn m-2" target="_blank">Voir plus</a>
                                    </div>
                                </div>
                            <?php 
                                }
                            ?>
                        </div>
                    </div>
                </div>
                    
            </div>
        </div>
    </section>

    <!--script js -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>
</body>
</html>