
<?php
/*
Template Name: Deux sections égales
*/
?>
<?php

get_header(); ?>

    <main>

      <?php if(get_field('choice-have_menu-share')) { ?>
        <nav class="side-menu">
            <ul>
            <?php
                $ancestor_data = get_page(get_ancestor_pageID());
                echo '<li><a href="'.get_permalink($ancestor_data->ID).'">'.$ancestor_data->post_title.'</a></li>';
                wp_list_pages(array('sort_column' => 'menu_order', 'depth' => '0', 'title_li' => '', 'include' => get_direct_ancestors_brothers(get_the_ID()).get_brothers(get_the_ID()).get_direct_ancestors(get_the_ID()).get_direct_child(get_the_ID()).get_current_except_great_ancestor(get_the_ID()).'-1'));
            ?>
            </ul>
        </nav>
        <?php } ?>
       
        <?php if(get_field('choice-have_menu-share')) { echo '<section class="section-side-menu">'; } ?>
        <?php
        if( is_front_page() != true ) {
        ?>
        <h1><?php the_title(); ?></h1>
        <?php 
        }
        ?>
        <section class="two-sections<?php if(get_field('choice-have_menu-share')) { echo '-side-menu'; } ?>">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                  <div>
                     <?php the_content(); ?>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>
        </section>

        <section class="two-sections<?php if(get_field('choice-have_menu-share')) { echo '-side-menu'; } ?> verticale-hr">
            <?php
                // Contrôler si ACF est actif
                if ( !function_exists('get_field') ) return;
            ?>
            <?php the_field('second-custom_twosections-share'); ?>

        </section>
            
        <?php if(get_field('choice-have_menu-share')) { echo '</section>'; } ?>
        
        <?php if(get_field('choice-display_child_list-share')) { ?>
            
        <section role="list-article" class="clear-both<?php if(get_field('choice-have_menu-share')) { echo ' section-side-menu'; } ?>">

           <?php 
            listChild(get_the_ID());
            ?>
            
        </section>
    
        <?php } ?>
        
    </main>

<?php
get_footer();
