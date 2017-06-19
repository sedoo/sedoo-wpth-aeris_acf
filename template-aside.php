<?php
/*
Template Name: Section de coté
*/
?>
<?php

get_header(); ?>

    <main>

        <section class="section-aside">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php
                    if( is_front_page() != true ) {
                    ?>
                    <h1><?php the_title(); ?></h1>
                    <?php 
                    }
                    ?>
                     <?php the_content(); ?>
                <?php endwhile; ?>
              <?php endif; ?>
        </section>

        <aside class="verticale-hr">
            <?php
                // Contrôler si ACF est actif
                if ( !function_exists('get_field') ) return;
            ?>
            <?php the_field('content-custom_aside-share'); ?>
            
            
        <?php get_sidebar(); ?>
        </aside>

    </main>

<?php
get_footer();
