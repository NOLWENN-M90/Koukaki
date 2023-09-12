<?php

get_template_part('/template-part/header')
?>

<main id="primary" class="site-main">
    <section class="banner">
        <div id="loading" class="fade-in-section">
            <img src="/wp-content/themes/foce-child/assets/images/bannerfixe.png" alt="chargement en cours">
        </div>
        <div id="video-container">
            <video id="my-video" controls width="1440" autoplay="autoplay" muted="" loop="true">
                <source src="/wp-content/themes/foce-child/assets/images/nvl-banner.mp4" type="video/mp4">
            </video>
            <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
        </div>
    </section>
    <section id="#story" class="story fade-in-section">
        <h2><span class="fade-in-title">L'histoire</span></h2>
        <article id="" class="story__article">
            <p><?php echo get_theme_mod('story'); ?></p>
        </article>

        <?php get_template_part('/template-part/personnages') ?>

        <article id="place" class="fade-in-section">
            <div>
                <div class="parallax-layer">
                    <img class="nuage1" src="./wp-content/themes/foce-child/assets/images/lieu/Grandnuage.png" alt="nuage1">
                </div>
                <div class="parallax-layer">
                    <img class="nuage2" src="./wp-content/themes/foce-child/assets/images/lieu/Petitnuage.png" alt="nuage2">
                </div>
                <h3><span class="fade-in-title">Le Lieu</span></h3>
                <p><?php echo get_theme_mod('place'); ?></p>
            </div>

        </article>
    </section>


    <section id="studio" class="fade-in-section">
        <h2><span class="fade-in-title">Studio Koukaki</span></h2>
        <div>
            <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
            <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
        </div>
        <div>
            <img class="sunflow" src="/wp-content/themes/foce-child/assets/images/Sunflower.png" alt="sunflow">
            <img class="orchid" src="/wp-content/themes/foce-child/assets/images/Orchida.png" alt="orchid">
        </div>
    </section>
    <section>
        <?php get_template_part('/template-part/oscar') ?>
    </section>
</main>

<?php
get_footer();
