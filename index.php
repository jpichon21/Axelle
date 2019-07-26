<?php 
include_once 'components/connection.php';
include_once 'components/imports/actualite.php';

$actualite = new Actualite;
$actualites = $actualite->fetch_all();
?>

<!doctype html>
<html class="no-js" lang="">

<head>
    <?php include 'components/head.php';?>
</head>
<body class="m-scene">

<?php include 'components/scripts.php';?>

  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>

<div id="bodyContainer" class="scene_element scene_element--fadein">
<?php include 'components/header.php';?>
 
  
  <div id="homeContainer">
    <div class="homeContent">
    <div id="actusContainer">
      <span id="closeActus">X</span>
      <div id="Actus">
        <!-- Actualités Ici -->
        <h2>Actualités</h2>
        <div class="separator"></div>
        <?php foreach ($actualites as $actualite) { ?>
          <div class="actusContent">
            <h3><?php echo $actualite['actualite_tilte'];  ?></h3>
            <p><?php echo $actualite['actualite_content'];  ?></p>
          </div>
        <?php } ?>
        
      </div>
    </div>
      
    </div>
  </div>

</div>
<!--End bodyContainer-->
</body>
<?php include 'components/footer.php';?>
   

</html>
