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
        <a id="home-link" class="nav-link childclear" href="index.html">Home</a>
        <a id="portfolio-link" class="nav-link childclear" href="page.html">Portfolio</a>
        <a id="contact-link" class="nav-link childclear" href="page.html">Contact</a>
        <a class="nav-link icon" href="javascript:void(0);">
            <i class="fas fa-bars"></i>
        </a>
      </nav>
    </div>

    <!--Slanted Sections-->
    <div id="slantseccontainer" class="container-fluid">


        <section id="slantedsec1" class="row gx-0 align-items-center justify-content-center">
            <div data-aos="fade-in-right" id="aboutcol1" class="col-sm-7 p-4">
              <p>INSERT ABOUT ME POST CONTENT HERE Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <div data-aos-duration="1500" data-aos="fade-right" class="accentlineleft"></div>
            </div>
            <!--<div class="vl col-sm-1"></div>-->
            <div data-aos="fade-in-right" id="aboutcol2" class="col-sm-4">
              <h1>About Me</h1>
              <small>Insert about post title hook here</small>
              <div data-aos-duration="1500" data-aos="zoom-in" class="accentlinecenter"></div>
            </div>
        </section>

        <section id="slantedsec2" class="row g-0 align-items-center justify-content-center">
          <div data-aos="fade-in-right" id="skillscol1" class="col-sm-5">
            <h1>Skills</h1>
            <!--<span class="fas fa-arrow-alt-from-left"></span>-->
            <small>Place the skills post title hook here</small>
            <div data-aos-duration="2000" data-aos="zoom-in" class="accentlinecenterdark"></div>
          </div>
          <div data-aos="fade-in-right" id="skillscol2" class="col-sm-6">
            <ul>
              <li>Skill list/bars go here</li>
              <li>Probably through use of a wp plugin</li>
              <li>list item 3</li>
              <li>list item 4</li>
            </ul>
            <div data-aos-duration="2000" data-aos="fade-right" class="accentlineleftdark"></div>
          </div>
        </section>

    </div><!--SlantedSecContainersEND-->





<?php get_footer(  ); ?>