<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <title><?php is_front_page() ? bloginfo('description') : wp_title(''); ?> | <?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo( 'description' ); ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/normalize.css' ?>" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php wp_head(); ?>
  <!--[if lt IE 9]>
  <script src=<?php echo get_template_directory_uri() . '/js/html5shiv.min.js' ?>"></script>
  <![endif]-->
  <script src="<?php echo get_template_directory_uri() . '/js/script.js' ?>"></script>
</head>
<body <?php body_class(); ?>>
  <div class="wrapper">
    <header>
      <?php if ( get_theme_mod( 'logo' ) ) : ?>
        <div class='logo'>
            <a href='<?php echo esc_url( home_url( '/' ) ); ?>' rel='home'>
              <img src='<?php echo esc_url( get_theme_mod( 'logo' ) ); ?>' alt='<?php echo esc_attr( bloginfo( 'name') ); ?>'>
            </a>
        </div>
      <?php endif; ?>
      <?php wp_nav_menu( array('menu' => 'Main', 'container' => 'nav' )); ?>
    </header>
