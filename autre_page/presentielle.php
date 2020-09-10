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
    <section class="can">
        <div class="row col-12">
            <div class="col-6"></div>
            <div class="col-6">
                <h1 class="can-titre pl-5 pr-5 aos-init aos-animate code code--small code--down" data-aos="zoom-in" data-aos-duration="2000">CAN</h1>
                <p class="ab-can aos-init aos-animate code code--small code--down" data-aos="zoom-in" data-aos-duration="2000">Communication Audiovisuelle et Numérique</P>
            </div>
        </div>
    </section>
    <section class="mpj">
        <div class="row col-12">
            <div class="col-6">
                <h1 class="mpj-titre pl-5 pr-5 aos-init aos-animate code code--small code--down" data-aos="zoom-in" data-aos-duration="2000">MPJ</h1>
                <p class="ab-mpj aos-init aos-animate code code--small code--down" data-aos="zoom-in" data-aos-duration="2000">Marketing Publicité et Journalisme</P>
            </div>
            <div class="col-6"></div>
        </div>
    </section>
    <section class="tic">
        <div class="row col-12">
            <div class="col-6"></div>
            <div class="col-6">
                <h1 class="tic-titre pl-5 pr-5 aos-init aos-animate code code--small code--down" data-aos="zoom-in" data-aos-duration="2000">TIC</h1>
                <p class="ab-tic aos-init aos-animate code code--small code--down" data-aos="fade-in" data-aos-duration="2000">Informatique et Télécommunication</P>
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