
<?php
/*
Template Name: Tableau à onglets
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
        
        <section <?php if(get_field('choice-have_menu-share')) { echo 'class="section-side-menu"'; } ?>>
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

        <nav role="tabpanel" class="tabs <?php if(get_field('choice-have_menu-share')) { echo 'section-side-menu'; } ?>">
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
        
        <?php if(get_field('choice-display_child_list-share')) { ?>
            
        <section role="list-article" <?php if(get_field('choice-have_menu-share')) { echo 'class="section-side-menu"'; } ?>>

           <?php 
            listChild(get_the_ID());
            ?>
            
        </section>
    
        <?php } ?>

    </main>

<?php
/*get_sidebar();*/
get_footer();
