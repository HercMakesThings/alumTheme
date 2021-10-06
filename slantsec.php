<?php 
        $args = array(
            'category_name' => 'about-me'
        );

        $aboutpost = new WP_Query($args);

        if($aboutpost->have_posts()){
            while($aboutpost->have_posts()){
                $aboutpost->the_post();?>

        <section id="slantedsec1" class="row gx-0 align-items-center justify-content-center">
            <div data-aos="fade-in-right" id="aboutcol1" class="col-sm-7 p-4">
              <?php the_content();?>
              <div data-aos-duration="1500" data-aos="fade-right" class="accentlineleft"></div>
            </div>
            <!--<div class="vl col-sm-1"></div>-->
            <div data-aos="fade-in-right" id="aboutcol2" class="col-sm-4">
              <h1><?php the_title(); ?></h1>
              <div data-aos-duration="1500" data-aos="zoom-in" class="accentlinecenter"></div>
            </div>
        </section>
        <?php }//end about while loop
        }//end about if loop
        wp_reset_postdata();
        ?>

        <?php 
        $skillpost = new WP_Query('category_name=skills');

        if($skillpost->have_posts()){
            while($skillpost->have_posts()){
                $skillpost->the_post();?>

        <section id="slantedsec2" class="row g-0 align-items-center justify-content-center">
          <div data-aos="fade-in-right" id="skillscol1" class="col-sm-5">
            <h1><?php the_title(); ?></h1>
            <!--<span class="fas fa-arrow-alt-from-left"></span>-->
            <div data-aos-duration="2000" data-aos="zoom-in" class="accentlinecenterdark"></div>
          </div>
          <div data-aos="fade-in-right" id="skillscol2" class="col-sm-6">
            <?php the_content(); ?>
            <div data-aos-duration="2000" data-aos="fade-right" class="accentlineleftdark"></div>
          </div>
        </section>

        <?php }//end skillpost while loop
        }//end skillpost if statement
        wp_reset_postdata();
        ?>