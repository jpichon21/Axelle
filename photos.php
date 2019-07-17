<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Axelle FANYO | Soprano </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/lightcase.css">
    <link rel="stylesheet" href="css/main.css">

    <script src="https://kit.fontawesome.com/6164dace53.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/lightcase.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>

    <script>
    	jQuery(document).ready(function($) {
		    $('a[data-rel^=lightcase]').lightcase();
        });
        $(window).load(function() {
        $('.flexslider').flexslider({
            animation: false,
            animationLoop: false,
            itemWidth: 290,
            itemMargin: 30,
            minItems: 2,
            maxItems: 3
            });
        });
    </script>
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
