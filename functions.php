<?php
register_nav_menus(array(
'menu'=> 'Menu Superior',
'menu2'=> 'menu catalogo',
'menu3'=> 'menu contactos'
));

add_theme_support( 'post-thumbnails' );
add_image_size( 'slideshow',1024,480,true );  
add_image_size( 'list_articles_art',470,300,true );

 ?>