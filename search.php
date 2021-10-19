<?php get_header( ); ?>
 <!--nonhomepage section START-->
 <section id="nonhomepage">

    <!--Top Level Navigation-->
    <?php get_template_part('navnonhome'); ?>

    <!--main section-->
    
      <?php 
        if(have_posts()){
          while(have_posts()){ 
            the_post();?>
            <section class="container mainarea-page py-3 mb-3">
                <h2><?php the_title(); ?></h2>
                <p>
                <?php the_content(); ?>
                </p>
            </section><!--mainarea section end-->
          <?php }//end while loop
        }//end if statement ?>
    




<?php get_footer(  ); ?>