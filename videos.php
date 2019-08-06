
<?php 
include_once 'components/connection.php';
include_once 'components/imports/video.php';
$video = new Video;
$videos = $video->fetch_all();
?>
<!doctype html>
<html class="no-js" lang="fr">

<head>
    <?php include 'components/head.php';?>
</head>

<body class="m-scene">
    <?php include 'components/scripts.php';?>


<div id="bodyContainer" class="mediasFullWidthContainer scene_element scene_element--fadein">
    <?php include 'components/header.php';?>

        <div id="videosGalleryContainer">
                <div id="owl-fullpage" class="owl-carousel">
                <?php foreach ($videos as $video) { ?>

                        <div class="item">
                            <div class="imageContainer">
                                <iframe width="852" height="515" src="https://www.youtube.com/embed/<?php echo $video['videos_content'];?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="separatorContainer"></div>

                            <div class="textContainer">
                                <div class="textContent">
                                    <h2><?php echo $video['videos_title'];?></h2>
                                    <p><?php echo $video['videos_description'];?></p>
                                </div>
                            </div>
                        </div>

                <?php } ?>
                </div>                
        </div>
        </div>
    
</div>
    <script>
        if (window.innerWidth >= 568) {
        $('#mediaLink').addClass("active");
      }

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
