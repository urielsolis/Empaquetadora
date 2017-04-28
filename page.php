<?php /* Nombre de la plantilla: pagina_predeterminada */ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Empaquetadora Calderon</title>
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/reset.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/responsive.css">

<script src="<?php bloginfo('template_url')?>/js/jquery-last.js"></script>
<script src="<?php bloginfo('template_url')?>/js/jquery.slides.min.js"></script>
<script>
$(function(){
      $("#slideshow").slidesjs({
        height: 300,
		navigation: false
      });
    });
</script>
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
<section id="article_list">
       <div id="articulos_single">
         <?php if( have_posts()) : while( have_posts()) : the_post();  ?>
         <article class="single">
           <div class="art_single"><a href="<?php the_permalink();?>">
             <?php if ( has_post_thumbnail() ){ the_post_thumbnail( 'list_articles_art' ); } ?>	
           </a></div>
           <hgroup><h2><a  href="<?php the_permalink();?>"><?php the_title();?></a></h2>
           </hgroup>
           <br/><br/>
         </article>
         <?php endwhile; else:?>
	    <h1>no se encontraron Articulos</h1>
         <?php endif; ?>
         </div>
       </div>
</section>

</section>
<?php get_footer();?>