<header class="banner">
	
	<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container-fluid">
          <a class="navbar-brand js-scroll-trigger" href="<?= esc_url(home_url('/')); ?>">
              
              <img src="<?php echo get_template_directory_uri();?>/dist/images/logo2.png" alt="Chickenpage"/>
              <img src="<?php echo get_template_directory_uri();?>/dist/images/logo1.png" class="chickenlogo" alt="Chickenpage"/>
          </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <!--<ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>-->
			<?php /* Primary navigation */
			if (has_nav_menu('primary_navigation')) :
				wp_nav_menu( array(
				  'theme_location' => 'primary_navigation',
				  'menu' => 'top_menu',
				  'depth' => 2,
				  'container' => false,
				  'menu_class' => 'nav',
				  //Process nav menu using our custom nav walker
				  'walker' => new wp_bootstrap_navwalker())
				);
			endif;
			?>
        </div>
      </div>
    </nav>
</header>
