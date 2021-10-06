<footer class="container-fluid">
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-5 mt-3">
              <div class="card">
                <div class="card-header">See My Work!</div>
                <div class="card-body">
                  <nav>
                    <?php $args = array(
                    'theme_location' => 'footer' 
                     );?>
                    <?php wp_nav_menu( $args ); ?>
                    <!--<ul>
                      <li><a href="index.html">Home</a></li>
                      <li><a href="page.html">Portfolio</a></li>
                      <li><a href="page.html">Contact</a></li>
                    </ul>-->
                  </nav>
                </div>
              </div>
            </div>
            <div class="col-sm-5 mt-3">
              <div class="card">
                <div class="card-header">Social Media</div>
                <div class="card-body">
                  <ul>
                    <li><a href="https://twitter.com"><i class="fab fa-twitter"></i> Twitter</a></li>
                    <li><a href="https://www.facebook.com"><i class="fab fa-facebook"></i> Facebook</a></li>
                    <li><a href="https://github.com"><i class="fab fa-github"></i> Github</a></li>
                  </ul>
                </div>
              </div>
            </div>
        </div>
      </div>
    </footer>

  </section><!--section END-->
<?php wp_footer(  ); ?>
</body>
</html>