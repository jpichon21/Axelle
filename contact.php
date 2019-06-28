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

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!-- Add your site or application content here -->
    <script src="js/vendor/modernizr-3.7.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')
    </script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('set', 'transport', 'beacon');
        ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>

    <div id="bodyContainer">
        <?php include 'components/header.php';?>

        <div id="contactWrapper">

            <div id="contactInfosContainer">
                <div id="contactH2Container">
                    <h2>Contact</h2>
                </div>
                <div id="contactInfos">
                    <p>Mark Kendall Artists Management</p>
                    <ul>
                        <li>Mark Kendall (World)</li>
                        <li class="infosSmall">markkendallartists@mac.com</li>
                        <li>Guy Flechter (France)</li>
                        <li class="infosSmall">guy.markkendallartists@orange.fr</li>
                        <li>Contact personnel :</li>
                        <li class="infosSmall">axellefanyo89@gmail.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="contactImageContainer">
        <div id="contactImage">
            <img src="img/CONTACT_AXELLE.jpg">
        </div>
    </div>

    <script>
        $('#contactLink').addClass("active");
    </script>
    <!--End bodyContainer-->
</body>
<?php include 'components/footer.php';?>


</html>
<