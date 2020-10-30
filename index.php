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
    <?php
        include_once 'index/head.php';
    ?>
</head>
<body> 
    <!--navbar-->
    <?php
            include_once 'index/nav.php';
        ?>

    <section>
        <div class="container-fluid">
            <!--accueil-->
            <section id="Accueil">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 ">

				<div class="row align-items-center bloc_accueil">
					<div class="col-12 col-sm-12 col-md-8 col-lg-8 ">
						<h4 class="animated bounceInLeft" style=" 
						animation-duration:1s;">E-MEDIA est un établissement qui regroupe deux institutions majeurs à savoir :</h4>
						<div class="row">
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 mt-3 ">
								<div class="col d-flex justify-content-center">
									<div class="universite_logo">
										<img src="img/accueil/logoE-media.png" class="animated zoomIn" style=" animation-delay: 1s;
										animation-duration:1s;" alt="">
									</div>
								</div>
								<div class="title_universite">
									<div class="presentielle">
										<strong>LA FORMATION PRESENTIELLE</strong>
									</div>
									<div class="online">
										<strong>LA FORMATION EN LIGNE ou e-learning</strong>
									</div>

								</div>
								<div class="sous_title">
									<span>Délivrant les diplômes de Licence et Master suivant de système LMD.</span>
								</div>

							</div>
							<div class="col-12 col-sm-12 col-md-5 col-lg-5 mt-3 ">
								<div class="col d-flex justify-content-center">
									<div class="professionnel_logo">
										<img src="img/accueil/logoE-media.png" class="animated zoomIn" style=" animation-delay:2s;
										animation-duration:1s;" alt="">
									</div>
								</div>
								<div class="sous_title_professionnelle">
									<span>Sanctionné par un certificat ou
										<br/>un diplôme de technicien supérieur ou DTS.</span>
								</div>
							</div>
						</div>
						<div class="paragraphe mt-4">
							<p>Crée en
								<strong>2011</strong>
								E-MEDIA est actuallement un établissement de réference et un acteur incourtournable dans le domaine de la formation à Madagascar et notamment en Afrique francophone.il s'oriente dans plusieurs domaines et spécialisations tels que le droit,le management,la finance,le marketing,la publicité,l'informatique,les TICS,l'audiovisuel,la cinematographie,l'éléctronique,etc.<br/>S'il est maintenant parvenu à ce stade, c'est grâce :<br><span class="ml-4">
									. A la constance de sa politique pédagogique visant à recherche l'exellence ;
								</span><br><span class="ml-4">. Aux efforts de ses initiateurs et à sa visions,celle d'aller Haut et Loin ;</span><br><span class="ml-4">. A la reconnaissance des diffèrentes instances administratives et academiques dont elle relève ;</span>
							</p>
						</div>

					</div>
					<div class="col-12 col-sm-12 col-md-4 col-lg-4">
						<div class="image_emedia">
							<div class="col d-flex align-items-center justify-content-center">
								<img src="img/accueil/image1.png" class="image_1 about_image animated bounceIn" style="animation-delay: 1s;animation-duration:1s;" alt="">
								<img src="img/accueil/image2.png" class="image_2 about_image animated bounceIn" style="animation-delay: 1.5s;animation-duration:2s;" alt="">
								<img src="img/accueil/image3.png" class="image_3 about_image animated bounceIn" style="animation-delay: 2s;animation-duration:3s;" alt="">
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>

            <!--actualites international-->
            <div class="row actualites">
                <div class="row col-12 ml-2 p-3">
                    <div class="newspaper"><i class="fas fa-newspaper mr-3"></i></div>
                    <div class="title_actu mt-3">ACTUALITES INTERNATIONALS</div>
                </div>

                <div class="col-12 list_actualite">
                    <button class="actualite_general btn-actu btn">General</button>
                    <button class="actualite_technologie btn-actu btn">Technologie</button>
                    <button class="actualite_business btn-actu btn">Business</button>
                    <button class="actualite_science btn-actu btn">Science</button>
                    <button class="actualite_sante btn-actu btn">Santé</button>
                    <button class="actualite_sport btn-actu btn">Sport</button>
                </div>

                <!--general-->
                <div id="owl-actualites-general" class="owl-carousel owl-theme">
                            <?php
                                date_default_timezone_set('UTC');
                                $date = date('d-m-y');
                                $url = 'https://newsapi.org/v2/everything?q=general&from=".$date."&language=fr&sortBy=publishedAt&apiKey=c8bba108fede4490b461cced38f5adf2';
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

                <!--technology-->
                <div id="owl-actualites-technologie" class="owl-carousel owl-theme">
                            <?php
                                date_default_timezone_set('UTC');
                                $date = date('d-m-y');
                                $url = 'https://newsapi.org/v2/everything?q=technology&from=".$date."&language=fr&sortBy=publishedAt&apiKey=c8bba108fede4490b461cced38f5adf2 ';
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

                <!--business-->
                <div id="owl-actualites-business" class="owl-carousel owl-theme">
                            <?php
                                date_default_timezone_set('UTC');
                                $date = date('d-m-y');
                                $url = 'https://newsapi.org/v2/everything?q=business&from=".$date."&language=fr&sortBy=publishedAt&apiKey=c8bba108fede4490b461cced38f5adf2 ';
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

                <!--Science-->
                <div id="owl-actualites-science" class="owl-carousel owl-theme">
                            <?php
                                date_default_timezone_set('UTC');
                                $date = date('d-m-y');
                                $url = 'https://newsapi.org/v2/everything?q=science&from=".$date."&language=fr&sortBy=publishedAt&apiKey=c8bba108fede4490b461cced38f5adf2 ';
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

                <!--sante-->
                <div id="owl-actualites-sante" class="owl-carousel owl-theme">
                            <?php
                                date_default_timezone_set('UTC');
                                $date = date('d-m-y');
                                $url = 'https://newsapi.org/v2/everything?q=health&from=".$date."&language=fr&sortBy=publishedAt&apiKey=c8bba108fede4490b461cced38f5adf2 ';
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

                <!--sport-->
                <div id="owl-actualites-sport" class="owl-carousel owl-theme">
                            <?php
                                date_default_timezone_set('UTC');
                                $date = date('d-m-y');
                                $url = 'https://newsapi.org/v2/everything?q=sports&from=".$date."&language=fr&sortBy=publishedAt&apiKey=c8bba108fede4490b461cced38f5adf2 ';
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

            <!--evenement-->
            <section class="evenement mt-5">
                <div class="row">
                    <div class="col-12 col-sm-2 col-md-1 col-lg-1 col-xl-1"><H1 class="rotation"> l'<strong>e-media</strong> <br> Evènements de</H1>
                    <h1 class="mobile_evenement">Evènements de l'<strong>e-media</strong></h1>
                    </div>
                    <div class="col-12 col-sm-10 col-md-7 col-lg-7 col-xl-7">
                        <div class="gallery">
                            <div class="img-box img-evenemnet">
                                <img src="img/GettyImages-1209679043.jpg" alt="corona">
                                <button class="btn btn-sm btn-danger btn-evenement">en savoir plus</button>
                            </div>
                            <div class="img-box img-evenemnet">
                                <img src="img/logomp.jpg" alt="inter">
                                <button class="btn btn-sm btn-danger btn-evenement">en savoir plus</button>
                            </div>
                            <div class="img-box img-evenemnet">
                                <img src="img/apropos1.jpg" alt="sortie">
                                <button class="btn btn-sm btn-danger btn-evenement">en savoir plus</button>
                            </div>
                            <div class="img-box img-evenemnet">
                                <img src="img/alefa sita-01.jpg" alt="ligne">
                                <button class="btn btn-sm justify-content-center btn-danger btn-evenement">en savoir plus</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"><p class="text-pres">Une école dynamique, en recherche constante d'innovation</p>
                    </div>
                </div>
            </section>
            <!--fin évènement-->

            <!--recrutements-->
            <div class="row mb-md-5 mb-lg-5 mt-5 recrutements">
                <div class="col-7 recrute_1">

                </div>

                <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 mb-5 text-center recrute_2">
                    <i class="fas fa-users"></i><i class="fas fa-search"></i>
                    <h3 class="mt-3 p-2">NOUS RECRUTONS ICI</h3>
                    <h4>RENFORCE SON EQUIPE PEDAGOGIQUE</h4>
                    <p>Vous avez une vision pour Madagascar et l'Afrique?<br/>
                    Vous voulez intégrer une Université à dimension internationale, et batir Madagascar et l'Afrique de demain?
                    <br>Venez rejoindre notre équipe, valorisew vos connaissances et les transmettre à nos jeunes, leaders de l'Afrique de demain</p>
                </div>
            </div>
            <!--recrutements-->

            <!--notre vision-->
                <div class="row notre_vision">
                    <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 pl-sm-0 pl-0 pl-sm-5 pl-md-5 pl-lg-5 d-flex justify-content-center align-items-center d-sm-flex justify-content-sm-center align-items-sm-center object aos-init aos-animate code code--small code--up" data-aos="fade-up" data-aos-duration="2000">
                        <img src="img/accueil/Vector_Smart_Object.png" class="img-fluid col-12 col-sm-4 col-md-12 col-lg-12 col-xl-12 aos-init aos-animate code code--small code--down"  data-aos="fade-up" data-aos-duration="2000" alt="object">
                    </div>
                    
                    <div class="col-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                        <div class="row col-12 part1">
                            <div class="col-3 object1">
                                <img src="img/accueil/tirE.png" class="img-fluid" alt="object2">
                            </div> 
                            <div class="col-1 object2">
                                <img src="img/accueil/rond.png" class="img-fluid" alt="emedia">
                            </div> 
                            <div class="col-3 col-sm-3 col-md-3 col-lg-2 col-xl-2 object3">
                                <img src="img/accueil/1.jpg" class="img-fluid" alt="emedia">
                            </div> 
                            <div class="col-12 col-sm-8 col-md-8 col-lg-6 col-xl-6 part1_texte">
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
                            <div class="col-3 col-sm-3 col-md-3 col-lg-2 col-xl-2 object3">
                                <img src="img/accueil/2.jpg" class="img-fluid" alt="emedia">
                            </div> 
                            <div class="col-12 col-sm-8 col-md-8 col-lg-6 col-xl-6 part2_texte">
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
                            <div class="col-3 col-sm-3 col-md-3 col-lg-2 col-xl-2 object3">
                                <img src="img/accueil/3.jpg" class="img-fluid" alt="emedia">
                            </div> 
                            <div class="col-12 col-sm-8 col-md-8 col-lg-6 col-xl-6 part3_texte">
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
                            <div class="col-3 col-sm-3 col-md-3 col-lg-2 col-xl-2 object3">
                                <img src="img/accueil/iso.jpg" class="img-fluid" alt="emedia">
                            </div> 
                            <div class="col-12 col-sm-8 col-md-8 col-lg-6 col-xl-6 part4_texte">
                                <h5>Mise à la disposition des étudiants des équipements à la pointe de la technologie</h5>
                                <p>L’établissement met un point d’honneur à se doter des matériels et équipements nécessaires pour 
                                    parfaire la formation qu’elle dispense.</p>
                            </div>
                        </div>
                    </div>
                </div>
            <!--notre vision-->

            <!--nos formations-->
            <div class="row nos_formations mb-4 mt-5">
                <h1 class="col-12 ml-0 ml-sm-1 ml-md-5 ml-lg-5 ml-xl-5">NOS <span>FORMATIONS</span></h1>
                <div class="row col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 ml-5 part_1">
                    <div class="col-3 bloc">

                    </div>

                    <div class="col-12 bloc_mobile">

                    </div>

                    <div class="col-8 col-sm-8 col-md-8 col-lg-7 col-xl-7 mt-4 ml-5 d-flex align-items-center justify-content-center bloc_1">
                        <p>Suivre <br/> la fac a distance <br/> c'est possible !</p>
                    </div>

                    <div class="col-12 col-sm-6 col-md-12 col-lg-12 col-xl-12 ml-md-5 ml-lg-5 mt-lg-1 d-flex align-items-center justify-content-center bloc_2">
                        <div class="content_bloc2">
                            <div class="text-center pb-2"><i class="fas fa-user-graduate"></i></div>
                            <h4 class="text-center pb-2">UNIVERSITE <br/> PRESENTIELLE</h4>
                            <div class="text-center"><a class="p-2" href="presentielle">en savoir plus</a></div>
                        </div>
                    </div>
                    
                    <div class="col-5 bloc">

                    </div>

                    <div class="col-5 mt-1 ml-5 d-flex align-items-center justify-content-center bloc_3"> 
                        <p class="text-center">Formons <br/> les élites <br/> de demain</p>
                    </div>

                    <div class="col-12 col-sm-6 col-md-12 col-lg-12 col-xl-12 ml-sm-0 ml-5 d-flex align-items-center justify-content-center bloc_9_mobile">
                        <p class="text-center">A.O :Arrêté <br/>N° 10933 / 2013-METFP <br/>portant l'ouverture d 'un <br/>Etablissement
                        d'Enseignement <br/>Technique et de Formation <br/>Professionnelle dénommé <br/><< ECOLE SUPERIEUR DE <br/>L 'ART DU MULTIMEDIA ET <br/>DE LA PUBLICITE-<br/>MADAGASCAR >>.</p>
                    </div>
                </div>

                <div class="row col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 mt-md-5 mt-lg-4 part_2">
                    <div class="col-12 col-sm-6 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center justify-content-center1 mt-4 bloc_8_mobile">
                        <p class="text-center">AGREMENT : Arrêté <br/>N° 10932 / 2013 - METFP <br/>portant agrément des filières a l' <br/>
                        << ECOLE SUPERIEUR DE L 'ART <br/>DU MULTIMEDIA ET DE LA <br/>PUBLICITE <br/>-MADAGASCAR >>.</p>
                    </div>

                    <div class="col-12 col-sm-6 col-md-12 col-lg-12 col-xl-12 mt-md-4  mt-lg-5 d-flex align-items-center justify-content-center bloc_4">
                        <div class="content_bloc4">
                            <div class="text-center pb-2"><i class="fas fa-atlas"></i></div>
                            <h4 class="text-center pb-2">UNIVERSITE <br/> EN LIGNE</h4>
                            <div class="text-center"><a class="p-2" href="en_ligne_licence">en savoir plus</a></div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center justify-content-center bloc_5 mt-md-4 mt-4">
                        <p class="text-center">HABILITATION : <br/>
                             Arrêté N° 29810 : <br/>2018-MESupRES autonsant <br/>l'ouverture d'un Etablissement 
                             <br/>d'Enseignement Supérieur prive <br/>dénommé << Université des <br/>
                             Medias,de Audiovisuel et de la <br/>Technologie-Université <br/>E-media>></p>
                    </div>
                </div>

                <div class="row col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 part_3">
                    <div class="col-12 col-sm-6 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center justify-content-center bloc_6">
                        <p class="text-center">Portant habilitation de <br/>son offre de formation <br/>[ LICENCE ET MASTER ].
                        EQUIVALENCE <br/>FOP LICENCE / MASTER : Arrêté <br/>N° 3264 / 3265 / 3266 / 3267 / 3268 / 3269-2019-<br/>CNEAT 
                        portant détermination de l'équivalence <br/>administration d'un autre dans la <br/>
                        Fonction Publique Session du 06 <br/>DECEMBRE 2018.</p>
                    </div>

                    <div class="col-12 col-sm-6 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center justify-content-center bloc_7">
                        <div class="content_bloc7">
                            <div class="text-center pb-2"><i class="fas fa-graduation-cap"></i></div>
                            <h4 class="text-center pb-2">FORMATION <br/> PROFESSIONNELLE</h4>
                            <div class="text-center"><a class="p-2" href="cfp">en savoir plus</a></div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5 col-3 part_4">
                    <div class="col-12 col-sm-6 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center justify-content-center mt-4 bloc_8">
                        <p class="text-center">AGREMENT : Arrêté <br/>N° 10932 / 2013 - METFP <br/>portant agrément des filières a l' <br/>
                        << ECOLE SUPERIEUR DE L 'ART <br/>DU MULTIMEDIA ET DE LA <br/>PUBLICITE <br/>-MADAGASCAR >>.</p>
                    </div>

                    <div class="col-12 col-sm-6 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center justify-content-center mt-4 bloc_9">
                        <p class="text-center">A.O :Arrêté <br/>N° 10933 / 2013-METFP <br/>portant l'ouverture d 'un <br/>Etablissement
                        d'Enseignement <br/>Technique et de Formation <br/>Professionnelle dénommé <br/><< ECOLE SUPERIEUR DE <br/>L 'ART DU MULTIMEDIA ET <br/>DE LA PUBLICITE-<br/>MADAGASCAR >>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--script js -->
    <?php
            include_once 'index/script.php';
        ?>
    <script>
        /*actualites*/
        $(document).ready(function() {
            
            $("#owl-actualites-general").owlCarousel({
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
        
            $("#owl-actualites-technologie").owlCarousel({
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
        
            $("#owl-actualites-business").owlCarousel({
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
        
            $("#owl-actualites-science").owlCarousel({
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
        
            $("#owl-actualites-sante").owlCarousel({
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
        
            $("#owl-actualites-sport").owlCarousel({
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
        
        let btngeneral = document.querySelector('.actualite_general');
        let btntechnology = document.querySelector('.actualite_technologie');
        let btnbusiness = document.querySelector('.actualite_business');
        let btnscience = document.querySelector('.actualite_science');
        let btnsante = document.querySelector('.actualite_sante');
        let btnsport = document.querySelector('.actualite_sport');
        let general = document.querySelector('#owl-actualites-general');
        let technology = document.querySelector('#owl-actualites-technologie');
        let business = document.querySelector('#owl-actualites-business');
        let science = document.querySelector('#owl-actualites-science');
        let sante = document.querySelector('#owl-actualites-sante');
        let sport = document.querySelector('#owl-actualites-sport');
        
        /*btngeneral.addEventListener("click", function(){
            general.style.display = "block";
            technology.style.display = "none"; 
            business.style.display = "none";
            science.style.display = "none";
            sante.style.display = "none";
            sport.style.display = "none";
        });*/
        
        btntechnology.addEventListener("click", function(){
            general.style.display = "none";
            technology.style.display = "block";
            technology.style.transform = "scale(1)"; 
            business.style.display = "none";
            science.style.display = "none";
            sante.style.display = "none";
            sport.style.display = "none";
        });
        
        btnbusiness.addEventListener("click", function(){
            general.style.display = "none";
            technology.style.display = "none"; 
            business.style.display = "block";
            business.style.transform = "scale(1)";
            science.style.display = "none";
            sante.style.display = "none";
            sport.style.display = "none";
        });
        
        btnscience.addEventListener("click", function(){
            general.style.display = "none";
            technology.style.display = "none"; 
            business.style.display = "none";
            science.style.display = "block";
            science.style.transform = "scale(1)";
            sante.style.display = "none";
            sport.style.display = "none";
        });
        
        btnsante.addEventListener("click", function(){
            general.style.display = "none";
            technology.style.display = "none"; 
            business.style.display = "none";
            science.style.display = "none";
            sante.style.display = "block";
            sante.style.transform = "scale(1)";
            sport.style.display = "none";
        
        });
        
        btnsport.addEventListener("click", function(){
            general.style.display = "none";
            technology.style.display = "none"; 
            business.style.display = "none";
            science.style.display = "none";
            sante.style.display = "none";
            sport.style.display = "block";
            sport.style.transform = "scale(1)";
        });
        
        /*active button*/
        let header = document.getElementById("list_actualite");
        let btns = header.getElementsByClassName("btn-actu");
        for (const i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
        let current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
        });
        }
        
        /*aos*/
        AOS.init({
            easing: 'ease-out-back',
            duration: 1000,
        });
        
 
 
    </script>
</body>
</html>