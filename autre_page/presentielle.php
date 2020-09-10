<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Presentielle E-MEDIA</title>
    <?php
        include_once '../index/head.php';
    ?>
    <link rel="stylesheet" href="../css/univ.css">
</head>
<body>
    <!-- navbar -->
    <?php
        include_once '../index/nav.php';
    ?>
    <!-- Contenut site -->
    <div class="col-12">
    <section class="sous-menu mt-5 pt-3">
        <nav class="navbar navbar-expand-lg">
            <ul class="nav navbar-nav navbar-list mx-auto">
                <li class="nav-item"><a class="nav-link button"  href="#">Licence <span class="bottom-solid"></span></a></li>
                <li class="nav-item ml-5"><a class="nav-link button"  href="#">master <span class="bottom-solid"></span></a></li>
            </ul>
        </nav>
    </section>
    </div>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12  can">
                <div class="row col-12">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6"></div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <h1 class="can-titre  pl-5 pr-5 aos-init aos-animate code code--small code--down" data-aos="zoom-in" data-aos-duration="2000">CAN</h1>
                        <p class="ab-can aos-init aos-animate code code--small code--down" data-aos="zoom-in" data-aos-duration="2000">Communication Audiovisuelle et Numérique</P>
                    </div>
                </div>
            </div>
            <div class="col-12 mpj">
                <div class="row col-12">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                        <h1 class="mpj-titre pl-5 pr-5 aos-init aos-animate code code--small code--down" data-aos="zoom-in" data-aos-duration="2000">MPJ</h1>
                        <p class="ab-mpj aos-init aos-animate code code--small code--down" data-aos="zoom-in" data-aos-duration="2000">Marketing Publicité et Journalisme</P>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6"></div>
                </div>
            </div>
            <div class="col-12 tic">
                <div class="row col-12">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6"></div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <h1 class="tic-titre pl-5 pr-5 aos-init aos-animate code code--small code--down" data-aos="zoom-in" data-aos-duration="2000">TIC</h1>
                        <p class="ab-tic aos-init aos-animate code code--small code--down" data-aos="fade-in" data-aos-duration="2000">Informatique et Télécommunication</P>
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
    <script>/*animation on scroll*/
        AOS.init({
            easing: 'ease-out-back',
            duration: 1000
        });
    </script>
</body>
</html>