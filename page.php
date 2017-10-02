
<?php
/**
 * The template for displaying all pages
 *
 *
 * @package aeris
 */

get_header(); 

while ( have_posts() ) : the_post();

	get_template_part( 'template-parts/header-content', 'page' );
?>

	<div id="content-area" class="wrapper default">
		<main id="main" class="site-main" role="main">

			<?php
				$fields = get_fields();
				// var_dump( $fields ); 
	
				if ($fields) {
					echo "<div style=\"padding:10px; background-color:orange;color:white;\">";
					echo "<p>ACF WARNING !!</p>"; 
					if (get_field('second-custom_twosections-share')) { echo "<p>Contenu dans \"Seconde section\" à migrer</p>";}
					for($j=1; $j<7; $j++){ 
						if(get_field('content-tab'.$j.'-custom_tabs') !== "" && get_field('title-tab'.$j.'-custom_tabs') !== "") {
							echo "<p>Contenu dans \"Tableau à onglets\" à migrer</p>";
						}
					} 
					if (get_field('content-custom_aside-share')) { echo "<p>Contenu dans \"Section de côté\" à migrer</p>";}
					echo "</div>";
				}

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			
			?>
			<?php 
			// if ( get_edit_post_link() ) : 
			// 	edit_post_link(
			// 		sprintf(
			// 			/* translators: %s: Name of current post */
			// 			esc_html__( 'Edit page%s', 'theme-aeris' ),
			// 			the_title( '<span class="screen-reader-text">"', '"</span>', false )
			// 		),
			// 		'<span class="edit-link">',
			// 		'</span>'
			// 	);
			// endif; 

			/**
			* TEST et AFFICHAGE SI ACF utilisé sur les pages
			*/

			$fields = get_fields();
			// var_dump( $fields ); 

			if ($fields) {
			?>
				<div class="wrapper-content">
					<h1>ACF zone</h1>

					<?php
					if (get_field('second-custom_twosections-share')) {
					?>
						<h2>2eme section</h2>
					<?php 
						the_field('second-custom_twosections-share'); 
					}
					?>
					<?php
					for($j=1; $j<7; $j++){ 
						if(get_field('content-tab'.$j.'-custom_tabs') !== "" && get_field('title-tab'.$j.'-custom_tabs') !== "") {?>
							<div>
							<?php the_field('content-tab'.$j.'-custom_tabs'); ?>
							</div>
					<?php }
					} 
					?>
					<?php
					if (get_field('content-custom_aside-share')) {
					?>
					<h2>Section de côté</h2>
					<?php 
						the_field('content-custom_aside-share'); 
					}
					?>
				</div>
			<?php
			}

			?>
		</main><!-- #main -->
	</div><!-- #content-area -->

<?php
endwhile; // End of the loop.
// get_sidebar();
get_footer();
