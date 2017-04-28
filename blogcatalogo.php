<?php /* Template Name: catalogo */ ?>
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
<script type="text/javascript">
categorias = {
	init : function() {
		var gal =document.getElementsByClassName('categori');
		//alert(n);
		for(i=0;i<gal.length;i++){
			var gale={
				init : function() {
					document.getElementsByClassName('gallery')[0].className='jgal';
					var jgal =document.getElementsByClassName('jgal')[i];
					var lij=jgal.getElementsByTagName('li');
					lij[0].className = 'active';
					for (j=0; j<lij.length; j++) {
						lij[j].style.backgroundImage = 'url(' + lij[j].getElementsByTagName('img')[0].src + ')';
						lij[j].title = lij[j].getElementsByTagName('img')[0].alt;
						categorias.addEvent(lij[j],'click',function() {
							var im = document.getElementsByTagName('li');
							for (k=0; k<im.length; k++) {
								im[k].className = '';
							}
							this.className = 'active';
						});
					}
				}
			}
			gale.init();
		}
    },
	addEvent : function(obj, type, fn) {
		if (obj.addEventListener) {
			obj.addEventListener(type, fn, false);
		}
		else if (obj.attachEvent) {
			obj["e"+type+fn] = fn;
			obj[type+fn] = function() { obj["e"+type+fn]( window.event ); }
			obj.attachEvent("on"+type, obj[type+fn]);
		 }
		}
	}
categorias.addEvent(document.defaultView,'load', function() {
categorias.init();
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
	'theme_location'=>'menu2'
	));?>
    </nav>
</header>
<section id="main">
<br/><br/>
<section id="article_list">
<?php
		//$argsc = array ('hide_empty' => 0,);
		$argsc = array ();
		$posti = get_categories($argsc);
		$cats = array();
		$catco=array();
		$catcom=array();
		$ur="{ bloginfo('home'); }/?cat=5";
		//bloginfo('url');
		//echo $ur;
		foreach ($posti as $c) {
			$cat = get_category($c);
			array_push($cats, $cat->term_id);
		}
		foreach ($posti as $c) {
			$cat = get_category($c);
			array_push($catco, $cat->name);
		}
		foreach ($posti as $c) {
			$cat = get_category($c);
			array_push($catcom, $cat);
		}	
		//var_dump($catcom[0]);
		if (sizeOf($cats) > 0) {
			$post_categories = implode(', ', $cats);
		} else {
			$post_categories = 'Not Assigned';
		}
		$lengca=sizeof($cats);
		//echo $post_categories;			
?>
<?php 
  /*$categoria1 = new WP_Query();
  $categoria1->query('cat=5');*/
  ?>
<div id="articulosca">
    <div id="gra">
    <?php
	//echo $lengca;
	//$catv=new WP_Query();
	$bur= array();
	$cont=0;
	foreach($cats as $c){
		$cont+=1;
	}
	//$e=3;
	//string strval($e); 
	//$ca="'cat={$e}'";
	//$ca+=$e;	
	//echo $cont;
	for($i=0;$i<$cont;$i++){
		//echo $cats[$i];
		//$ca='cat=';
		//$lca=$ca+$i;
		//echo $lca;
		$id=$cats[$i];
		$name=$catco[$i];
		$ca="cat={$id}";
		//echo $name;
		$catv=new WP_Query();
		$catv->query("cat={$id}");
		$l="/?{$ca}";
		$url="{$ur}/?{$ca}";
	    //var_dump($catv);
	?>
    <div class="categori">
    <a href="<?php echo $url; ?>"><h1><?php echo $name; ?></h1></a>
    <?php if ( $catv->have_posts() ) : ?>
    
        <div style="position:relative; ">
            <ul class="gallery">
            <?php while($catv->have_posts()) : $catv->the_post(); ?>
            <article>
            <div class="artca">
                 <li><a href="<?php the_permalink(); ?>">
                  <?php if ( has_post_thumbnail() ){ the_post_thumbnail( 'list_articles_art' ); } ?></a>
                 </li></div>
                 <hgroup><h2><a  href="<?php the_permalink();?>"><?php the_title();?></a></h2></hgroup>
            </article>
            <?php endwhile; ?>
            </ul>
        </div>
    <?php wp_reset_postdata(); ?>
    <?php else : ?>
    <p><?php _e( 'Lo sentimos, ningun producto coincide con tu criterio.' ); ?></p>
    <?php endif; ?>
	</div>
    <?php
	}
	?>
    
    </div>
    <div id="chi">
    
    <?php
	for($i=0;$i<$cont;$i++){
		$id=$cats[$i];
		$name1=$catco[$i];
		$ca="cat={$id}";
		//echo $name;
		$catc=new WP_Query();
		$catc->query("cat={$id}");
		$l="/?{$ca}";
		$url="{$ur}/?{$ca}";
		
	?>
    <div class="catego">
    <a href="<?php echo $url; ?>"><h1><?php echo $name1; ?></h1></a> 
    <div class="imgcat">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo	"/>
    </div>
    <div class="categor"> 
	<?php if ( $catc->have_posts() ) : ?>
     <?php while($catc->have_posts()) : $catc->the_post(); ?>
    <article >
         <div class="art"><a href="<?php the_permalink(); ?>">
         <?php if ( has_post_thumbnail() ){ the_post_thumbnail( 'list_articles_art' ); } ?>
         </a></div>
         <hgroup><h2><a  href="<?php the_permalink();?>"><?php the_title();?></a></h2></hgroup>
    </article >
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php else : ?>
    <p><?php _e( 'Lo sentimos, ningun prodcuto coincide con tu criterio.' ); ?></p>
    <?php endif; ?>
    </div>
    </div>
    <?php
	}
	?>
    
    
    </div>
    
    
    
</div>
</section>
</section>
<?php get_footer();?>