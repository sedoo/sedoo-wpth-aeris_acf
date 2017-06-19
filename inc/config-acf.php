<?php

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_choix-menu',
		'title' => 'Choix menu',
		'fields' => array (
			array (
				'key' => 'field_573040cb017c4',
				'label' => 'Ajouter un sous menu',
				'name' => 'choice-have_menu-share',
				'type' => 'checkbox',
				'choices' => array (
					'activer' => 'Activer',
				),
				'default_value' => '',
				'layout' => 'horizontal',
			),
			array (
				'key' => 'field_573051ea0a6c6',
				'label' => 'Afficher les éléments enfants',
				'name' => 'choice-display_child_list-share',
				'type' => 'checkbox',
				'choices' => array (
					'afficher' => 'Afficher',
				),
				'default_value' => '',
				'layout' => 'horizontal',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
				array (
					'param' => 'page_template',
					'operator' => '!=',
					'value' => 'template-sidemenu-all.php',
					'order_no' => 1,
					'group_no' => 0,
				),
				array (
					'param' => 'page_template',
					'operator' => '!=',
					'value' => 'template-aside.php',
					'order_no' => 2,
					'group_no' => 0,
				),
				array (
					'param' => 'page_template',
					'operator' => '!=',
					'value' => 'template-aside-tabs.php',
					'order_no' => 3,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'side',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_custom-aside',
		'title' => 'Custom aside',
		'fields' => array (
			array (
				'key' => 'field_570dfbfb47c0b',
				'label' => 'Section de côté',
				'name' => 'content-custom_aside-share',
				'type' => 'wysiwyg',
				'instructions' => 'Contenu affiché sur la colonne de droite de la page (idéal pour logo, liens complémentaires, etc...)',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'template-aside.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'template-aside-tabs.php',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_custom-deux-sections',
		'title' => 'Custom Deux sections',
		'fields' => array (
			array (
				'key' => 'field_571f5e43817ec',
				'label' => 'Seconde section',
				'name' => 'second-custom_twosections-share',
				'type' => 'wysiwyg',
				'required' => 1,
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'template-twosections.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_custom-tableau-a-onglet',
		'title' => 'Custom Tableau à onglet',
		'fields' => array (
			array (
				'key' => 'field_570f8ef9a76c0',
				'label' => 'Onglet n°1',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_570e089227217',
				'label' => 'Onglet n°1 - Titre',
				'name' => 'title-tab1-custom_tabs',
				'type' => 'text',
				'instructions' => 'Titre de l\'onglet numéro 1',
				'default_value' => 'Onglet 1',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => 50,
			),
			array (
				'key' => 'field_570e08cc27218',
				'label' => 'Onlget n°1 - Contenu',
				'name' => 'content-tab1-custom_tabs',
				'type' => 'wysiwyg',
				'instructions' => 'Texte de l\'onglet numéro 1',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_570f8f15a76c2',
				'label' => 'Onglet n°2',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_570e09e0333c3',
				'label' => 'Onglet n°2 - Titre',
				'name' => 'title-tab2-custom_tabs',
				'type' => 'text',
				'default_value' => 'Onglet 2',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => 50,
			),
			array (
				'key' => 'field_570e0a29333c4',
				'label' => 'Onlget n°2 - Contenu',
				'name' => 'content-tab2-custom_tabs',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_570f8f1ba76c3',
				'label' => 'Onglet n°3',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_570e0bc91a72e',
				'label' => 'Onglet n°3 - Titre',
				'name' => 'title-tab3-custom_tabs',
				'type' => 'text',
				'default_value' => 'Onglet 3',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => 50,
			),
			array (
				'key' => 'field_570e0c041a72f',
				'label' => 'Onlget n°3 - Contenu',
				'name' => 'content-tab3-custom_tabs',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_570f8f1fa76c4',
				'label' => 'Onglet n°4',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_570e0c231a730',
				'label' => 'Onglet n°4 - Titre',
				'name' => 'title-tab4-custom_tabs',
				'type' => 'text',
				'default_value' => 'Onglet 4',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => 50,
			),
			array (
				'key' => 'field_570e0c7e1a731',
				'label' => 'Onlget n°4 - Contenu',
				'name' => 'content-tab4-custom_tabs',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_570f8f24a76c5',
				'label' => 'Onglet n°5',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_570e0caf1a732',
				'label' => 'Onglet n°5 - Titre',
				'name' => 'title-tab5-custom_tabs',
				'type' => 'text',
				'default_value' => 'Onglet 5',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => 50,
			),
			array (
				'key' => 'field_570e0cca1a733',
				'label' => 'Onlget n°5 - Contenu',
				'name' => 'content-tab5-custom_tabs',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_570f8f28a76c6',
				'label' => 'Onglet n°6',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_570e0d00e6f8b',
				'label' => 'Onglet n°6 - Titre',
				'name' => 'title-tab6-custom_tabs',
				'type' => 'text',
				'default_value' => 'Onglet 6',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => 50,
			),
			array (
				'key' => 'field_570e0d18e6f8c',
				'label' => 'Onlget n°6 - Contenu',
				'name' => 'content-tab6-custom_tabs',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'template-tabs.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'template-aside-tabs.php',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
?>