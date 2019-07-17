<!doctype html>
<html class="no-js" lang="">

<head>
    <?php include 'components/head.php';?>
</head>

<body class="m-scene">

<?php include 'components/scripts.php';?>

<div id="bodyContainer" class="mediasFullWidthContainer scene_element scene_element--fadein">
<?php include 'components/header.php';?>

    <div id="mediaContainer">
        <div id="imageContainer"></div>
        <div id="datesContainer">
        <div id="Actus" class="stop-scrolling">
            <ul id="actusVisibleList">
            <li>
            <div class="actusContent">
                <a href="photos.php">Photos</a>
            </div>
            </li>
            <li>
            <div class="actusContent activeContent videoLinkContainer">
                <a href="videos.php" id="videoMediasLink" class="activeMediaLink">Vidéos</a>
            </div>
            </li>
            <li>
            <div class="actusContent">
                <a href="presse.php">Presse</a>
            </div>
            </li>
            <span id="actusEnd"></span>
        </ul>
        </div>
        
        </div>
    </div>
   
</div>

    <script>
        $('#mediaLink').addClass("active");

        $('.actusContent a').hover(function () {
            $('.actusContent a').removeClass('activeMediaLink');
            $(this).addClass('activeMediaLink');
        });

    </script>
    <!--End bodyContainer-->
</body>
<?php include 'components/footer.php';?>


</html>
<