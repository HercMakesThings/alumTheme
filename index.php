<?php get_header( ); ?>

<!--homepagesection start-->
<section id="homepage">
    <!--landingPage Top Section-->
    <section id="topsec" class="scrolldemo">
      <div data-aos="zoom-in-right" id="top-title" class="row align-items-center justify-items-center">
        <img class="col-sm-6" src="myassets/media/placeholder1.png" alt="">
        <h1 class="col-sm-6">Alumni Designs</h1>
      </div>
        <a id="scrollbtn1" href="#topnavbar"><!--<span class="far fa-arrow-alt-circle-down fa-2x"></span>--><span></span></a>
    </section>
    <!--landingPage Top Section END-->

    <!--Top Level Navigation-->
    <div id="topnavbarcontainer" class="container-fluid">
      <nav id="topnavbar" class="nav topnav justify-content-end">
      <?php $args = array(
        'theme_location' => 'primary' 
      );
      ?>
      <?php wp_nav_menu( $args ); ?>
      <a class="nav-link icon" href="javascript:void(0);">
            <i class="fas fa-bars"></i>
        </a>
        <!--<a id="home-link" class="nav-link childclear" href="index.html">Home</a>
        <a id="portfolio-link" class="nav-link childclear" href="page.html">Portfolio</a>
        <a id="contact-link" class="nav-link childclear" href="page.html">Contact</a>
        <a class="nav-link icon" href="javascript:void(0);">
            <i class="fas fa-bars"></i>
        </a>-->
      </nav>
    </div>

    <!--Slanted Sections-->
    <div id="slantseccontainer" class="container-fluid">

    <?php get_template_part('slantsec'); ?>

    </div><!--SlantedSecContainersEND-->





<?php get_footer(  ); ?>