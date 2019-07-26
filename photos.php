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
			<li><a data-rel="lightcase" href="img/contents/sliders/studio/image-1.jpg"><img src="img/contents/sliders/studio/thumbs/image-1.jpg" /></a></li>
            <li><a data-rel="lightcase" href="img/contents/sliders/studio/image-2.jpg"><img src="img/contents/sliders/studio/thumbs/image-2.jpg" /></a></li>
            <li><a data-rel="lightcase" href="img/contents/sliders/studio/image-3.jpg"><img src="img/contents/sliders/studio/thumbs/image-3.jpg" /></a></li>
		</ul>
	</div>
    <h2 class="photosTitle">Scène</h2>
    <div class="flexslider" id="photosCarousel2">
		<ul class="slides">
			<li><a data-rel="lightcase" href="img/contents/sliders/scene/image-1.jpg"><img src="img/contents/sliders/scene/thumbs/image-1.jpg" /></a></li>
            <li><a data-rel="lightcase" href="img/contents/sliders/scene/image-2.jpg"><img src="img/contents/sliders/scene/thumbs/image-2.jpg" /></a></li>
            <li><a data-rel="lightcase" href="img/contents/sliders/scene/image-3.jpg"><img src="img/contents/sliders/scene/thumbs/image-3.jpg" /></a></li>
            <li><a data-rel="lightcase" href="img/contents/sliders/scene/image-4.jpg"><img src="img/contents/sliders/scene/thumbs/image-4.jpg" /></a></li>
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
