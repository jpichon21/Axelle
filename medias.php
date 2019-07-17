<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Axelle FANYO | Soprano </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <meta name="theme-color" content="#fafafa">
    <script src="https://kit.fontawesome.com/6164dace53.js"></script>
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
                <a id="videoMediasLink" class="activeMediaLink">Vidéos</a>
            </div>
            </li>
            <li>
            <div class="actusContent">
                <a>Presse</a>
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

        $('.actusContent a').click(function () {
            $('.actusContent a').removeClass('activeMediaLink');
            $(this).addClass('activeMediaLink');
        });

    </script>
    <!--End bodyContainer-->
</body>
<?php include 'components/footer.php';?>


</html>
<