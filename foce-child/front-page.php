<?php

get_header();
?>

<main id="primary" class="site-main fade-in">
    <section class="banner">
        <video autoplay="true" loop="true">
            <source src="./wp-content/themes/foce-child/assets/images/nvl-banner.mp4" type="video/mp4">
        </video>
        <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
    </section>
    <section id="#story" class="story reveal">
        <h2>L'histoire</h2>
        <article id="" class="story__article">
            <p><?php echo get_theme_mod('story'); ?></p>
        </article>
        <?php
        $args = array(
            'post_type' => 'characters',
            'posts_per_page' => -1,
            'meta_key'  => '_main_char_field',
            'orderby'   => 'meta_value_num',

        );
        $characters_query = new WP_Query($args);
        ?>
        <article id="characters" class="reveal">


            <?php get_template_part('/template-part/personnages') ?>

        </article>
        <article id="place" class="reveal">
            <div>
                <div>
                    <img class="grand" src="./wp-content/themes/foce-child/assets/images/lieu/Grandnuage.png" alt="nuage1">
                    <img class="petit" src="./wp-content/themes/foce-child/assets/images/lieu/Petitnuage.png" alt="nuage2">
                </div>
                    <h3>Le Lieu</h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>
            </div>
        </article>
    </section>


    <section id="studio" class="reveal">
        <h2>Studio Koukaki</h2>
        <div>
            <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
            <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
        </div>
    </section>

    <?php get_template_part('/template-part/oscar') ?>

</main>
<?php
get_footer();
