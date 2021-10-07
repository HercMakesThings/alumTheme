<?php get_header( ); ?>
 <!--nonhomepage section START-->
 <section id="nonhomepage">

    <!--Top Level Navigation-->
    <?php get_template_part('navnonhome'); ?>

    <!--main section-->
    <section class="container mainarea-single py-3">
      <?php 
        if(have_posts()){
          while(have_posts()){
            the_post();
            the_content();
          }
        }
      ?>
    </section><!--mainarea section end-->




<?php get_footer(  ); ?>