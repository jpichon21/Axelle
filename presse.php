<?php 
include_once 'components/connection.php';
include_once 'components/imports/article.php';

$article = new Article;
$articles = $article->fetch_all();
?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <?php include 'components/head.php';?>
</head>

<body class="m-scene">

<?php include 'components/scripts.php';?>

<div id="bodyContainer" class="presseFullWidthContainer scene_element scene_element--fadein">
        <?php include 'components/header.php';?>

    <div id="presseContainer">
        <div id="imageContainer"></div>
        <div id="datesContainer">
            <div id="Actus" class="stop-scrolling">
                <ul id="actusVisibleList">
            <?php foreach ($articles as $article) { ?>
                <li>
                    <div class="actusContent">
                        <h3><?php echo $article['article_title'];  ?></h3>
                        <p><?php echo $article['article_content'];  ?></p>
                    </div>
                </li>
            <?php } ?>
                <span id="actusEnd"></span>
            </ul>
            </div>
            <div id="arrowPlusPresse" ><img src="img/arrow-down.png"></div>
        </div>
    </div>
   
</div>

    <script>
        if (window.innerWidth >= 568) {
        $('#mediaLink').addClass("active");
      }
    </script>
    <!--End bodyContainer-->
</body>
<?php include 'components/footer.php';?>


</html>
<