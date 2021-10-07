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