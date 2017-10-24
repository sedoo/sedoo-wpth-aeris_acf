<?php
/*
Template Name: Section de coté
*/
get_header(); 

while ( have_posts() ) : the_post();

	get_template_part( 'template-parts/header-content', 'page' );
?>

	<div id="content-area" class="wrapper large aside">
		<main id="main" class="site-main" role="main">
        <?php 
            // get_template_part( 'template-parts/content', 'page' );

            // If comments are open or we have at least one comment, load up the comment template.
            // if ( comments_open() || get_comments_number() ) :
            //     comments_template();
            // endif;			
        ?>
        <article id="post-<?php the_ID(); ?>">
        <!-- 	<header class="entry-header">
            <?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            </header> -->
            <?php 
            if (get_the_post_thumbnail()) {
            ?>
            <figure>
            <?php the_post_thumbnail( 'illustration-article' ); ?>
            </figure>
            <?php 
            }
            ?>
            <div class="main-content">
            <?php
                the_content();

                wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'theme-aeris' ),
                    'after'  => '</div>',
                ) );
            ?>

            </div>
            <?php
            // Contrôler si ACF est actif
            if ( !function_exists('get_field') ) return;
        ?>
            <div class="second-content">
            <?php the_field('content-custom_aside-share'); ?>
            </div>

        </article><!-- #post-## -->
       
        </main>
    </div>

<?php
endwhile; // End of the loop.
// get_sidebar();
get_footer();