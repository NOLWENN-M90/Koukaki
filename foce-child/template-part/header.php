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
    <!-- <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'foce'); ?></a>

        <header id="masthead" class="site-header">
            <nav id="site-navigation" class="main-navigation">
                <!-- Titre du site -->
                <div id="modal" class="modal" aria-controls="primary-menu" aria-expanded="true">
                    <ul>
                        <li class="site-title"><a href="#" rel="home">Fleurs d'oranger & chats errants</a></li>
                    </ul>

                    <!-- Menu Burger -->

                    <!-- Bouton Menu Burger -->
                    <button type="button" id="menu-toggle" class="modal__burger modal-open">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </button>
                    <!-- Début du menu ouvert -->
                    <div id="modal" class="modal__content">
                        <img class="modal__content--logo" src="<?php echo get_theme_file_uri() . '/assets/images/logo.png'; ?>" alt="">
                        <ul>
                            <li class="modal__content--story"><a href="#story">Histoire</a>
                                <img class="story-orchid" src="/wp-content/themes/foce-child/assets/images/Orchida.png" alt="cat">
                                <img class="story-cat" src="/wp-content/themes/foce-child/assets/images/cat.png" alt="cat">
                                <img class="story-flower" src="/wp-content/themes/foce-child/assets/images/Sunflower.png" alt="sunflower">
                            </li>
                            <li class="modal__content--characters"><a href="#characters">Personnages</a>
                                <img class="characters-flower" src="/wp-content/themes/foce-child/assets/images/Randomflower.png" alt="randomflower">
                            </li>
                            <li class="modal__content--place"><a href="#place">Lieu</a>
                                <img class="place-flower" src="/wp-content/themes/foce-child/assets/images/Flower.png" alt="flower">
                                <img class="place-cat" src="/wp-content/themes/foce-child/assets/images/Group180.png" alt="chat gris">
                            </li>
                            <li class="modal__content--studio"><a href="#studio">Studio Koukaki</a>
                                <img class="studio-cat" src="/wp-content/themes/foce-child/assets/images/cat-1.png" alt="chat">
                                <img class="studio-flower" src="/wp-content/themes/foce-child/assets/images/Hibiscusfooter.png" alt="fleur hibiscus">
                            </li>
                        </ul>

                        <div class="modal__content--footer modal-trigger">
                            <a href="#">STUDIO KOUKAKI</a></li>
                        </div>
                        <!-- Fin du menu ouvert -->
                    </div>
                </div>

            </nav><!-- #site-navigation -->

            <!-- #site-navigation -->

        </header><!-- #masthead -->