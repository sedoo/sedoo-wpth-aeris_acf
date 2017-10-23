<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
// include_once('advanced-custom-fields/acf.php');
include 'inc/config-acf.php';

/**
 * Affichage des groupes de champs tabs de ACF
 * source : https://codepen.io/josh_vogt/pen/EaaZbP
 */

function get_tabs_template() {
    // Contrôler si ACF est actif
    if ( !function_exists('get_field') ) return;
    ?>

    <section class="worko-tabs">
        <?php
    if (get_theme_mod('theme_aeris_main_color') == "custom" ) {
		$code_color = get_theme_mod( 'theme_aeris_color_code' );
	}
	else {
		$code_color	= get_theme_mod( 'theme_aeris_main_color' );
	}
    ?>

    <?php
    // Récupération de la couleur principale du thème
    ?>
    <style>
        [for^="tab-"] {
            border-bottom:3px solid  <?php echo $code_color;?>;
            color:<?php echo $code_color;?>;
        }

        #tab-1:checked ~ .tabs #tab-1-label,
        #tab-2:checked ~ .tabs #tab-2-label,
        #tab-3:checked ~ .tabs #tab-3-label,
        #tab-4:checked ~ .tabs #tab-4-label,
        #tab-5:checked ~ .tabs #tab-5-label,
        #tab-6:checked ~ .tabs #tab-6-label  {
        background-color: <?php echo $code_color;?>;
        color:#fff;
        cursor: default;
        }
    </style>
    <?php
    // insérer les input radio
    for($i=1; $i<7; $i++){ 
        if(get_field('content-tab'.$i.'-custom_tabs') !== "" && get_field('title-tab'.$i.'-custom_tabs') !== "") {?>
            <input class="state" type="radio" name="tabs-state" <?php if($i == 1){ ?>checked <?php } ?>id="tab-<?php echo $i; ?>" />
    <?php   
        }
    } ?>
        <div class="tabs flex-tabs">
        <?php
        // Afficher les titres des onglets dans des <label>
        for($i=1; $i<7; $i++){
            if(get_field('content-tab'.$i.'-custom_tabs') !== "" && get_field('title-tab'.$i.'-custom_tabs') !== "") {?>
            <label class="tab" id="tab-<?php echo $i; ?>-label" for="tab-<?php echo $i; ?>" ><?php the_field('title-tab'.$i.'-custom_tabs'); ?></label>
        <?php   
            }
        } ?>

        <?php
        // Afficher le contenu des onglets
        for($j=1; $j<7; $j++){ 
            if(get_field('content-tab'.$j.'-custom_tabs') !== "" && get_field('title-tab'.$j.'-custom_tabs') !== "") {?>
                <div id="tab-<?php echo $j; ?>-panel" class="panel <?php if($j == 1){ ?>active<?php } ?>">
                <?php the_field('content-tab'.$j.'-custom_tabs'); ?>
                </div>
        <?php }
        } ?>


        </div>
    </section>
<?php

}

?>