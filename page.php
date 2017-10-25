
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
	
				if( $fields ): 
				?>
					<?php foreach( $fields as $name => $value ): 
						if (($value !== "") && ($name !== "")){							
						?>						
						<p style="display:inline-block;color:white;background:orange;padding:3px 10px;margin-top:10px;margin-right:10px;border-radius:5px;"><?php echo $name; ?></p>
						<?php 
						}
						?>

					<?php endforeach; ?>
				</section>
			<?php endif; 

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;			
			?>
			<?php 
			/**
			* TEST et AFFICHAGE SI ACF utilisé sur les pages
			*/
			if ($fields) {
			?>
				<div class="wrapper-content">
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
