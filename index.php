<?php get_header( ); ?>

<!--homepagesection start-->
<section id="homepage">
    <!--landingPage Top Section-->
    <?php get_template_part('topsec'); ?>
    <!--landingPage Top Section END-->

    <!--Top Level Navigation-->
    <?php get_template_part('navhome'); ?>

    <!--Slanted Sections-->
    <div id="slantseccontainer" class="container-fluid">

    <?php get_template_part('slantsec'); ?>

    </div><!--SlantedSecContainersEND-->





<?php get_footer(  ); ?>