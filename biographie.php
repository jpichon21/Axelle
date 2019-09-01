<?php 
include_once 'components/connection.php';
include_once 'components/imports/biographieFR.php';
include_once 'components/imports/biographieEN.php';

$biographie = new Biographie;
$biographies = $biographie->fetch_all();
$biography = new Biography;
$biographys = $biography->fetch_all();
?>

<!doctype html>
<html class="no-js" lang="">

<head>
    <?php include 'components/head.php';?>
</head>

<body class="m-scene">
<?php include 'components/scripts.php';?>

    <div id="bodyContainer" class="SpecialContainer scene_element scene_element--fadein">
        <?php include 'components/header.php';?>

        <div id="bioGalleryWrapper">
            <ul>
                <div id="arrowDown" class="arrow"><img src="img/arrow-down.png" alt="fleche vers le bas"></div>
                <li><a data-rel="lightcase" href="img/contents/bio-1.jpg" data-lc-options='{"maxWidth":1000, "maxHeight":800}'><img src="img/contents/bio-1.jpg" alt="Portrait d'Axelle Fanyo | Crédit : Capucine de Chocqueuse" ></a></li>
                <li><a data-rel="lightcase" href="img/contents/bio-2.jpg" data-lc-options='{"maxWidth":1000, "maxHeight":800}'><img src="img/contents/bio-2.jpg" alt="Portrait d'Axelle Fanyo | Crédit : Capucine de Chocqueuse"></a></li>
                <li><a data-rel="lightcase" href="img/contents/bio-3.jpg" data-lc-options='{"maxWidth":1000, "maxHeight":800}'><img src="img/contents/bio-3.jpg" alt="Portrait d'Axelle Fanyo | Crédit : Capucine de Chocqueuse"></a></li>
             </ul>
        </div>

        <div id="bioContentWrapper">

            <div id="titleWrapper">
            <div id="languageToggle">
                <span id="enToggle" class="fr"><img src="img/flags/gb.svg" alt="Drapeau Anglais">ENGLISH VERSION</span>
                <span id="frToggle" class="en"><img src="img/flags/fr.svg" alt="Drapeau Français">VERSION FRANCAISE</span>
            </div>
                <div class="fr title">
                    <h2>A propos</h2>
                    <img src="img/contents/bio-title-fr.jpg" alt="a propos">
                </div>
                <div class="en title">
                    <h2>About me</h2>
                    <img src="img/contents/bio-title.jpg" alt="about me">
                </div>
            </div>
            <div id="bioContent">
                <div class="fr">
                    <?php foreach ($biographies as $biographie) { ?>
                       <p><?php echo $biographie['biographie_content']; ?></p>
                    <?php } ?>
                </div>

                <div class="en">
                    <?php foreach ($biographys as $biography) { ?>
                       <p><?php echo $biography['biography_content']; ?></p>
                    <?php } ?>
                </div>
            </div>
         
    </div>
    </div>
            

    <script>
        $('#bioLink').addClass("active");
    </script>
    <!--End bodyContainer-->
</body>
<?php include 'components/footer.php';?>

</html>
