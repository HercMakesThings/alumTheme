<div id="topnavbarcontainer" class="container-fluid">
      <nav id="topnavbar" class="nav topnav justify-content-end align-items-center">
      <?php $args = array(
        'theme_location' => 'non-home' 
      );
      ?>
      <?php wp_nav_menu( $args ); ?>
      <a class="nav-link icon" href="javascript:void(0);">
            <i class="fas fa-bars"></i>
        </a>
      <!--<a class="nav-link childclear1 me-auto ms-4" href="index.html"><h2>Alumni Designs</h2></a>
        <a id="home-link" class="nav-link navchild childclear" href="index.html">Home</a>
        <a id="portfolio-link" class="nav-link navchild childclear" href="page.html">Portfolio</a>
        <a id="contact-link" class="nav-link navchild childclear" href="page.html">Contact</a>
        <a class="nav-link icon" href="javascript:void(0);">
            <i class="fas fa-bars"></i>
        </a>-->
      </nav>
    </div>