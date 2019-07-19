
<!doctype html>
<html class="no-js" lang="">

<head>
    <?php include 'components/head.php';?>
</head>

<body class="m-scene">
    <?php include 'components/scripts.php';?>


<div id="bodyContainer" class="mediasFullWidthContainer scene_element scene_element--fadein">
    <?php include 'components/header.php';?>

        <div id="videosGalleryContainer">
                <div id="owl-fullpage" class="owl-carousel">

                        <div class="item">
                            <div class="imageContainer">
                                <iframe width="852" height="515" src="https://www.youtube.com/embed/juxg-LIaqhI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="separatorContainer"></div>

                            <div class="textContainer">
                                <div class="textContent">
                                    <h2>13h15 sur FRANCE 2</h2>
                                    <p>Cette semaine, le magazine 13h15 le samedi explore les coulisses d’un milieu peu connu du grand public : l’Opéra. A 29 ans, la jeune soprano Axelle Fanyo est l’un des espoirs de l’art lyrique français. Mais comment s’est-elle fait une place dans ce milieu ultra concurrentiel et plutôt conservateur ? Fille d’un père togolais et d’une mère antillaise, Axelle a grandi en Seine-Saint-Denis. Elle s’est pliée à la discipline du conservatoire d’Aubervilliers pendant dix ans, avant d’opter pour le chant lyrique à 21 ans. Une révélation, comme une évidence. Car Axelle a toujours aimé chanter. Mais pour y arriver, le chemin est long et parsemé d'auditions, de concours, de répétitions quotidiennes… Un rythme de vie d'athlète. Le parcours d’Axelle Fanyo casse les codes et les idées reçues. 13h15 l'a suivi pendant plusieurs mois, jusqu’à sa rencontre avec l’une de ses idoles : la grande soprano américaine Renée Fleming.  Un portrait signé Jean-Baptiste Jacquet, Sarah Oultaf, Helene Lam Trong et Guillaume Salasca</p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="imageContainer">
                                <iframe width="852" height="515" src="https://www.youtube.com/embed/juxg-LIaqhI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="separatorContainer"></div>

                            <div class="textContainer">
                                <div class="textContent">
                                    <h2>13h15 sur FRANCE 2</h2>
                                    <p>Cette semaine, le magazine 13h15 le samedi explore les coulisses d’un milieu peu connu du grand public : l’Opéra. A 29 ans, la jeune soprano Axelle Fanyo est l’un des espoirs de l’art lyrique français. Mais comment s’est-elle fait une place dans ce milieu ultra concurrentiel et plutôt conservateur ? Fille d’un père togolais et d’une mère antillaise, Axelle a grandi en Seine-Saint-Denis. Elle s’est pliée à la discipline du conservatoire d’Aubervilliers pendant dix ans, avant d’opter pour le chant lyrique à 21 ans. Une révélation, comme une évidence. Car Axelle a toujours aimé chanter. Mais pour y arriver, le chemin est long et parsemé d'auditions, de concours, de répétitions quotidiennes… Un rythme de vie d'athlète. Le parcours d’Axelle Fanyo casse les codes et les idées reçues. 13h15 l'a suivi pendant plusieurs mois, jusqu’à sa rencontre avec l’une de ses idoles : la grande soprano américaine Renée Fleming.  Un portrait signé Jean-Baptiste Jacquet, Sarah Oultaf, Helene Lam Trong et Guillaume Salasca</p>
                                </div>
                            </div>
                        </div>

                 
                          
                    </div>    
                           
                </div>
        </div>
    
</div>
    <script>
        $('#mediaLink').addClass("active");

        $('.actusContent a').click(function () {
            $('.actusContent a').removeClass('activeMediaLink');
            $(this).addClass('activeMediaLink');
        });

        $(document).ready(function() {
            $("#owl-fullpage").owlCarousel({
                nav : true, 
                slideSpeed : 300,
                paginationSpeed : 400,
                items : 1, 
                itemsDesktop : false,
                itemsDesktopSmall : false,
                itemsTablet: false,
                 itemsMobile : false

            });
        });

    </script>
<!--End bodyContainer-->
</body>
<?php include 'components/footer.php';?>
</html>
