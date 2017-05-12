<header class="header header-active">
  <div class="row">
    <div class="small-12 columns">
      <div id="logo">
          <a href="/"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png"></a>
      </div>
      <div class="menu-button">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <?php
      if ( ! is_page( 'login' ) ) {
        scroggins_get_menu();
      }
      ?>

    </div>
  </div>
</header>