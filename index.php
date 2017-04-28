<?php get_header();?>
<section id="main"> 
 	<section id="article_list">
        <center><div id="cat"><p>ÚLTIMOS PRODUCTOS</p></div></center>
        <br/><br/>
        <div id="articulos">
        <?php if ( have_posts() ) : ?>
        <?php while(have_posts()) : the_post();  ?>
            <article>
            <div class="art"><a href="<?php the_permalink();?>">
            <?php if ( has_post_thumbnail() ){ the_post_thumbnail( 'list_articles_art' ); } ?>	
            </a></div>
            <hgroup><h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2></hgroup>
            </article>
        <?php endwhile; ?>
        <?php  else:?>
            <h1>no se encontraron Articulos</h1>
        <?php endif; ?>   
        
        <div id="pagination">
                 <p>
                 <?php next_posts_link(); ?>
                 <?php previous_posts_link(); ?>
                 </p>
         </div>
         
        </div>
    </section>
</section>
<?php get_footer();?>