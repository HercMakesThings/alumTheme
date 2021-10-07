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
    <?php get_template_part('navhome'); ?>

    <!--Slanted Sections-->
    <div id="slantseccontainer" class="container-fluid">

    <?php get_template_part('slantsec'); ?>

    </div><!--SlantedSecContainersEND-->





<?php get_footer(  ); ?>