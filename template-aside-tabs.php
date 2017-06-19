
<?php
/*
Template Name: Tableau à onglets & Section de coté
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
            
            <nav role="tabpanel" class="tabs">
            <?php
                // Contrôler si ACF est actif
                if ( !function_exists('get_field') ) return;
            ?>
            
            <ul class="nav nav-pills">
            <?php
            
            for($i=1; $i<7; $i++){ 
                if(get_field('content-tab'.$i.'-custom_tabs') !== "" && get_field('title-tab'.$i.'-custom_tabs') !== "") {?>
                    <li role="presentation" <?php if($i == 1){ ?>class="current"<?php } ?> data-tab="tab-<?php echo $i; ?>"><a href="javascript:;"><?php the_field('title-tab'.$i.'-custom_tabs'); ?></a></li>
            <?php }} ?>
            
            </ul>
            
            <?php
            
            for($j=1; $j<7; $j++){ 
                if(get_field('content-tab'.$j.'-custom_tabs') !== "" && get_field('title-tab'.$j.'-custom_tabs') !== "") {?>
                    <div id="tab-<?php echo $j; ?>" class="tab-content <?php if($j == 1){ ?>current<?php } ?>">
                    <?php the_field('content-tab'.$j.'-custom_tabs'); ?>
            </div>
            <?php }} ?>

            </nav>
        
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
