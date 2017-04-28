<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Empaquetadora Calderon</title>
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/reset.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/responsive.css">

 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBs8tkaotHCyQ3WuVWGaNpo8wdHMUacxDY&callback=initMap"
 async defer></script>  
<script src="<?php bloginfo('template_url')?>/js/jquery-last.js"></script>
<script src="<?php bloginfo('template_url')?>/js/jquery.slides.min.js"></script>
<?php wp_head();?>
</head>
<body>
<header>
    <div id="no_head">
    <nav>
    <div id="me_lo">
    <a href="http://localhost:91/Empaquetadora/"><img src="http://localhost:91/Empaquetadora/wp-content/uploads/logo.png" />    </a>
    </div>
    <?php wp_nav_menu(
	array(
	'container'=>false,
	'items_wrap'=>'<ul id="in">%3$s</ul>',
	'theme_location'=>'menu'
	));?>
    </nav>
    <div id="logo" >
    <img class="log" src="http://localhost:91/Empaquetadora/wp-content/uploads/logo.png"/>
    </div>
    <div id="busca">
    <form id="searchform"  method="get" >
	<input type="text" id="s" name="s" value="" placeholder="BUSCA TU MODELO…" />
    <input type="hidden" class="icon-only"  id="searchsubmit" />
    
    </form>
    <?php if(isset($_GET[''])){
		get_search_form(false);
	}?>
    <?php if(isset($_GET['s'])){
		get_search_form();
	}?>
    
    </div>
    
    <div id="descri">
    <div id="des">
       <p>Somos una empresa joven y dinámica dedicada al comercio y servicio (fabricacion a pedido) de 
          empaquetaduras para todo tipo de vehiculos; livianos, pesados, y maquinaria aqrícola
          e industrial.
        </p>
    </div>
    <div id="cri">
     <img  src="http://localhost:91/Empaquetadora/wp-content/uploads/logo.png"/>
    </div>
    </div>
    </div>
    
    <div id="slogan">
        <div id="mo">
        </div>
        <div id="vi">
           <div id="vis">
           <p>SI NO ENCUENTRAS
              TU MODELO
              LO FABRICAMOS.
            </p>
            </div>
            <div id="obte">
            <p>OBTEN UNA COTIZACIÓN
            </p>
             </div>
        </div>
    </div>
        
</header>
