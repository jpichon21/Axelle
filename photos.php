<?php 
include_once 'components/connection.php';
include_once 'components/imports/studio.php';
include_once 'components/imports/scene.php';
$studio = new Studio;
$studios = $studio->fetch_all();
$scene = new Scene;
$scenes = $scene->fetch_all();
?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <?php include 'components/head.php';?>
</head>

<body class="m-scene">
    <?php include 'components/scripts.php';?>


<div id="bodyContainer" class="mediasFullWidthContainer scene_element scene_element--fadein">
<?php include 'components/header.php';?>

    <div id="photosGalleryContainer">
    <h2 class="photosTitle">Studio</h2>
    <div class="flexslider" id="photosCarousel1">
        <ul class="slides">
            <?php foreach ($studios as $studio) { ?>
                    <li><a data-rel="lightcase" href="img/contents/sliders/studio/<?php echo $studio['image_content'];?>"><img src="img/contents/sliders/studio/thumbs/<?php echo $studio['image_thumbnail'];?>" alt="<?php echo $studio['image_alt'];?>"/></a></li>
            <?php } ?>
        </ul>
	</div>
    <h2 class="photosTitle">Scène</h2>
    <div class="flexslider" id="photosCarousel2">
		<ul class="slides">
            <?php foreach ($scenes as $scene) { ?>
                    <li><a data-rel="lightcase" href="img/contents/sliders/scene/<?php echo $scene['image_content'];?>"><img src="img/contents/sliders/scene/thumbs/<?php echo $scene['image_thumbnail'];?>" alt="<?php echo $scene['image_alt'];?>"/></a></li>
            <?php } ?>
		</ul>
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
    </script>
<!--End bodyContainer-->
</body>
<?php include 'components/footer.php';?>
</html>
