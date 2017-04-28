<footer>
        <div id="fo_arr">
            <div id="fo_ca">
                <div id="list_ca">
                   <div id="ti_ca">
                     <a href="http://localhost:91/Empaquetadora/?page_id=10"><p>Categorias</p></a>
                   </div>                
                    <ul>
                    <?php
                        $args = array (
                            'hide_empty' => 0,
                            'title_li' => false,
                            'style' => 'list',
							
                        );
                        wp_list_categories($args);
                    ?>
                    </ul>
                </div>
                <div id="fo_lo">
                <a href="http://localhost:91/Empaquetadora/"><img 
                src="http://localhost:91/Empaquetadora/wp-content/uploads/logo.png" /></a>
                </div>
            </div>
            
            <div id="fo_me">
                <?php echo do_shortcode( '[contact-form-7 id="129" title="footer"]' ); ?>
            </div>
        
        </div>
        <div id="fo_con">
            <div id="con_fo">
               <img class="contfo" src="http://localhost:91/Empaquetadora/wp-content/uploads/logo.png" />
               <img class="contfo" src="http://localhost:91/Empaquetadora/wp-content/uploads/logo.png" />
               <img class="contfo" src="http://localhost:91/Empaquetadora/wp-content/uploads/logo.png" />
            </div>
            <div id="copy">
                <p id="copyright">Empaquetadora Calderon 2017 by Break Studio</p>
            </div>
        </div>
</footer>
<?php wp_footer();?>
</body>
</html>