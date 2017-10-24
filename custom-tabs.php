<?php
/*
Template Name: Tableau à onglets
*/
get_header(); 

while ( have_posts() ) : the_post();

	get_template_part( 'template-parts/header-content', 'page' );
?>

	<div id="content-area" class="wrapper large">
		<main id="main" class="site-main" role="main">

        <?php 
            get_template_part( 'template-parts/content', 'page' );

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;			
        ?>
            <div class="wrapper-content">
            <?php
                get_tabs_template();            
            ?>
            </div>
        </main>
    </div>

<?php
endwhile; // End of the loop.
// get_sidebar();
get_footer();