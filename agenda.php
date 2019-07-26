<?php 
include_once 'components/connection.php';
include_once 'components/imports/date.php';
$date = new Date;
$dates = $date->fetch_all();
?>
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

<div id="bodyContainer" class="agendaFullWidthContainer scene_element scene_element--fadein">
        <?php include 'components/header.php';?>

    <div id="agendaContainer">
        <div id="imageContainer"></div>
        <div id="datesContainer">
        <div id="Actus" class="stop-scrolling">
            <ul id="actusVisibleList">
        <?php foreach ($dates as $date) { ?>
            <li>
                <div class="actusContent">
                    <h3><?php echo $date['date_title'];  ?></h3>
                    <p><?php echo $date['date_content']; ?></p>
                 </div>
            </li>
        <?php } ?>

            <span id="actusEnd"></span>
        </ul>
        </div>
        <div id="arrowPlus" ><img src="img/arrow-down.png"></div>
        </div>
    </div>
   
</div>

    <script>
        $('#agendaLink').addClass("active");
    </script>
    <!--End bodyContainer-->
</body>
<?php include 'components/footer.php';?>


</html>
