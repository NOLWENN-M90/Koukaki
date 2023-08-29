<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link rel='stylesheet' id='foce-style-css' href='/app/public/wp-content/themes/foce-child/assets/css/theme.css' media='all' />
  <script src="/app/public/wp-content/themes/foce-child/assets/js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'foce'); ?></a>

    <header id="masthead" class="site-header">
      <div class="master-container">
        <h1>Fleurs d'oranger & chats errants</h1>
        <nav id="site-navigation" class="main-navigation nav" aria-controls="primary-menu" aria-expanded="false">
          <bouton class="burger open">
            <span></span>
            <span></span>
            <span></span>
            <ul class="nav__list">
              <li class="nav__list_item"><a class="nav__link" href="#story">Histoire</a></li>
              <li class="nav__list_item"><a class="nav__link" href="#characters">Personnages</a></li>
              <li class="site-title nav__list_item"><a class="nav__link" href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></li>
              <li class="nav__list_item"><a class="nav__link" href="#place">Lieu</a></li>
              <li class="nav__list_item"><a class="nav__link" href="#studio">Studio Koukaki</a></li>
            </ul>
            <div class="bloc">
              <img class="cat1" src="./wp-content/themes/foce-child/assets/images/cat-1.png" alt="chat roux">
              <img class="cat" src="./wp-content/themes/foce-child/assets/images/cat.png" atl="chat violet">
              <img class="flower" src="./wp-content/themes/foce-child/assets/images/Flower.png" alt="fleur orange">
              <img class="chatgris" src="./wp-content/themes/foce-child/assets/images/Group180.png" alt="chat gris">
              <img class="hibiscus" src="./wp-content/themes/foce-child/assets/images/Hibiscusfooter.png" alt="fleur d'hibiscus">
              <img class="logopara" src="./wp-content/themes/foce-child/assets/images/logoparalax.png" alt="logo paralax">
              <img class="orchide" src="./wp-content/themes/foce-child/assets/images/Orchid.png" alt="fleur d'orchidé">
              <img class="fleur-rose" src="/wp-content/themes/foce-child/assets/images/RandomFlower.png" alt="fleur rose coupée">
              <img class="fleur-blanche" src="./wp-content/themes/foce-child/assets/images/Sunflower.png" alt="fleur blanche">
              <img class="ref" src="./wp-content/themes/foce-child/assets/images/StudioKoukaki.png" alt="sous-titre">*
            </div>
        </nav>
        </bouton>

        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
        </script><!-- #site-navigation -->
    </header><!-- #masthead -->