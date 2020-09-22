<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CFP E-MEDIA</title>
    <?php
        include_once '../index/head.php';
    ?>
    <link rel="stylesheet" href="../css/cfp.css">
</head>
    <body>
        <!-- navbar -->
        <?php
            include_once '../index/nav.php';
        ?>

        <section>
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class=" col-12 dts">
                        <div class="row">
                            <div class="col-4 pt-4 ml-5 content">
                                <h1 class="pl-5">DTS</h1>
                                <div class="col-12 pl-4">
                                    <p class="pl-4">EN MULTIMEDIA <br> BAC +2
                                    </p>
                                    <button class="btn mt-3 btnDTS" id="openDTS">En savoir plus</button>
                                </div>
                            </div>
                            
                            <div class="col-7 ml-5 mt-5 description overflow-auto" id="descriptionDTS">
                                <button class="btn exit pl-3" id="exitDTS"><i class="fas fa-times"></i></button>
                                <h3>Description</h3>
                                <p></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 image">
                        <div class="row">
                            <div class="col-4 pt-4 ml-5 content">
                                <h1 class="pl-5">IMAGE</h1>
                                <div class="col-12 pl-4">
                                    <p class="pl-4">Conception cinématographique <br/> prise de vue - post production
                                        <br/>PAO - DAO - CAO -dessin...
                                    </p>
                                    <button class="btn mt-3 btnIMAGE" id="openIMAGE">En savoir plus</button>
                                </div>
                            </div>

                            <div class="col-7 ml-5 mt-5 description overflow-auto" id="descriptionIMAGE">
                                <button class="btn exit pl-3" id="exitIMAGE"><i class="fas fa-times"></i></button>
                                <div class="mt-5 ml-3">
                                    <h4 class="">Présentation</h4>
                                    <p>La filière Image a pour but de former des techniciens 
                                        du métier de l’image. Elle offre une formation essentiellement 
                                        technique, basé sur les connaissances des bases théoriques et 
                                        pratiques des techniques et des outils relatifs aux traitements 
                                        de l’image. La formation octroyée sur un moyen terme, permet 
                                        aux étudiants d’être directement opérationnel. Face à un 
                                        environnement professionnel en quête de polyvalence, la 
                                        formation en Image, se veut être complète, en intégrant 
                                        tous les modules utiles à l’étudiants. Les étudiants seront 
                                        aptes à réaliser à traiter les images fixes tels que les affiches, 
                                        flyers, brochures…en passant par les images mobiles comme les clips, 
                                        les publicités, les films, documentaires ….ainsi que la production 3D.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 web">
                        <div class="row">
                            <div class="col-7 ml-5 mt-5 description overflow-auto" id="descriptionWEB">
                                <button class="btn exit pl-3" id="exitWEB"><i class="fas fa-times"></i></button>
                                <h3>Description</h3>
                                <p></p>
                            </div>

                            <div class="col-4 pt-3 float-left content">
                                <h1 class="pl-5">WEB</h1>
                                <div class=" pl-5 pr-5 col-12">
                                    <p class="pl-5 text-center">
                                        html5 - css3 - 
                                        javascript - <br/>
                                        jQuery - php - sql 
                                        bootstrap <br/>
                                        initiation cms et framework - design
                                    </p>
                                    <button class="btn mt-3 btnWEB" id="openWEB">En savoir plus</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 pl-5 son">
                        <div class="row">
                            <div class="col-4 pl-5 pt-3 float-left content">
                                <h1 class="pl-5">SON</h1>
                                <div class="col-12 pr-5">
                                    <p class="text-center">
                                        environnement studio <br/>
                                        prise de son
                                        mixage<br/> - traitement de son <br/>
                                        mastering
                                    </p>
                                    <button class="btn mt-3 btnSON" id="openSON">En savoir plus</button>
                                </div>
                            </div>

                            <div class="col-7 ml-5 mt-5 description overflow-auto" id="descriptionSON">
                                <button class="btn exit pl-3" id="exitSON"><i class="fas fa-times"></i></button>
                                <h3>Description</h3>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--script js -->
        <?php
            include_once '../index/script.php';
        ?>
        <script>
            /*dts*/
            let exitDTS = document.getElementById('exitDTS');
            let openDTS = document.getElementById('openDTS');
            let description = document.getElementById('descriptionDTS');

            openDTS.addEventListener("click", function() {
                descriptionDTS.style.transform = "scaleY(1)";
            });

            exitDTS.addEventListener("click", function() {
                descriptionDTS.style.transform = "scaleX(0)";
            })

            /*IMAGE*/
            let exitIMAGE = document.getElementById('exitIMAGE');
            let openIMAGE = document.getElementById('openIMAGE');
            let descriptionIMAGE = document.getElementById('descriptionIMAGE');

            openIMAGE.addEventListener("click", function() {
                descriptionIMAGE.style.transform = "scaleY(1)";
            });

            exitIMAGE.addEventListener("click", function() {
                descriptionIMAGE.style.transform = "scaleX(0)";
            })

            /*WEB*/
            let exitWEB = document.getElementById('exitWEB');
            let openWEB = document.getElementById('openWEB');
            let descriptionWEB = document.getElementById('descriptionWEB');

            openWEB.addEventListener("click", function() {
                descriptionWEB.style.transform = "scaleY(1)";
            });

            exitWEB.addEventListener("click", function() {
                descriptionWEB.style.transform = "scaleX(0)";
            })

            /*SON*/
            let exitSON = document.getElementById('exitSON');
            let openSON = document.getElementById('openSON');
            let descriptionSON = document.getElementById('descriptionSON');

            openSON.addEventListener("click", function() {
                descriptionSON.style.transform = "scaleY(1)";
            });

            exitSON.addEventListener("click", function() {
                descriptionSON.style.transform = "scaleX(0)";
            })

        </script>
    </body>
</html>