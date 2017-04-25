<header>
  <nav class="navbar">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">Cours d' anglais</a>
          </div>
          <div class="nav navbar-nav navbar-right">
            <div class="navbar-text">
              <div class="row glyphHeader">
                <div class="col-xs-4">
                  <div class="row">
                    <div class="col-xs-3 hidden-xs">
                      <span class="fa fa-clock-o" aria-hidden="true"></span>
                    </div>
                    <div class="col-xs-9">
                      <p class="text-center">Mercredi dès 13h  <br>
                        Samedi dès 9h</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-4">
                  <div class="row">
                    <div class="col-xs-3 hidden-xs">
                      <span class="fa fa-globe" aria-hidden="true"></span>
                    </div>
                    <div class="col-xs-9">
                      <p class="text-center">Rue du temps <br>Coulommiers 77470</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-4">
                  <p class="navbar-text hidden-xs hidden-sm"><i class="fa fa-facebook" style="font-size: 20px;"></i></p> 
                  <p class="navbar-text hidden-xs hidden-sm"><i class="fa fa-twitter" style="font-size: 20px;"></i></p>
                  <p class="navbar-text hidden-xs hidden-sm"><i class="fa fa-instagram" style="font-size: 20px;"></i></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <?php
              if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']);
              endif;
            ?>
       </div><!-- /.navbar-collapse -->
      </div>
    </div><!-- /.container-fluid -->
  </nav>
</header> 
<!-- <script type="text/javascript">
  $( document ).ready(function() {
    $( window ).scroll(function() {
      $('#headerlogo').hide();
      $(".navbar").css("position", "fixed");
  });
});
</script> -->