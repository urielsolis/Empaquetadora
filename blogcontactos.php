<?php /* Template Name: contactos */ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Empaquetadora Calderon</title>
 <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/reset.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/responsive.css">


<script src="<?php bloginfo('template_url')?>/js/jquery-last.js"></script>
<script src="<?php bloginfo('template_url')?>/js/jquery.slides.min.js"></script>
<?php wp_head();?>
</head>
<body>
<header>
    <nav>
    <?php wp_nav_menu(
	array(
	'container'=>false,
	'items_wrap'=>'<ul id="nav_cat">%3$s</ul>',
	'theme_location'=>'menu3'
	));?>
    </nav>
</header>
<section id="main">
<br/><br/>
<section id="article_list">
     <div id="ubi">
     <hgroup><h2>¿Donde nos Encontramos?</h2></hgroup>
     <div id="map" ></div>
	 <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'),{
          center: {lat: -17.791843008871343, lng: -63.1528902053833},
          zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBs8tkaotHCyQ3WuVWGaNpo8wdHMUacxDY&callback=initMap" async defer></script>
     </div>
     <div id="btns">
     <hgroup><h2>Contactanos</h2></hgroup>
     <img src="<?php echo get_template_directory_uri(); ?>/images/btn1.png">
     <img src="<?php echo get_template_directory_uri(); ?>/images/btn2.png">
     <img src="<?php echo get_template_directory_uri(); ?>/images/btn3.png">
     <img src="<?php echo get_template_directory_uri(); ?>/images/btn4.png">
     </div>
     <div id="contac">
     <hgroup><h2>Envianos un mensaje</h2></hgroup>
     <?php echo do_shortcode( '[contact-form-7 id="128" title="formulario 1"]' ); ?>
     </div>
    
</div>
</section>
</section>
<?php get_footer();?>