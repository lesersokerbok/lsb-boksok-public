<?php

	namespace LSB\Page;

	class Section {

		public function __construct() {
			add_action( 'acf/init', array( &$this, 'register_adcf_field_groups' ) );
		}

		public function register_adcf_field_groups() {

			acf_add_local_field_group(array (
				'key' => 'lsb_group_page_sections',
				'title' => 'Forsideseksjoner',
				'fields' => array (
					array (
						'key' => 'lsb_field_page_sections',
						'label' => 'Seksjoner',
						'name' => 'sections',
						'type' => 'flexible_content',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => 'lsb-section',
							'id' => '',
						),
						'button_label' => 'Legg til seksjon',
						'min' => '',
						'max' => '',
						'layouts' => array (
							array (
								'key' => 'lsb_page_section_layout_intro',
								'name' => 'intro',
								'label' => 'Intro',
								'display' => 'table',
								'sub_fields' => array (
									array (
										'key' => 'lsb_field_page_section_intro_video',
										'label' => 'Video',
										'name' => 'intro_video',
										'type' => 'oembed',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '41.66',
											'class' => '',
											'id' => '',
										),
										'width' => '',
										'height' => '',
									),
									array (
										'key' => 'lsb_field_page_section_intro_text',
										'label' => 'Introtekst',
										'name' => 'intro_text',
										'type' => 'wysiwyg',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '66%',
											'class' => '',
											'id' => '',
										),
										'default_value' => '',
										'tabs' => 'all',
										'toolbar' => 'full',
										'media_upload' => 0,
									),
								),
								'min' => '',
								'max' => '',
							),
							array (
								'key' => 'lsb_page_section_layout_books',
								'name' => 'books',
								'label' => 'Siste fra boksok.no',
								'display' => 'row',
								'sub_fields' => array (
									array (
										'key' => 'lsb_field_page_section_books_heading',
										'label' => 'Overskrift',
										'name' => 'books_heading',
										'type' => 'text',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'default_value' => 'Nyeste anmeldelser fra boksøk.no',
										'placeholder' => '',
										'prepend' => '',
										'append' => '',
										'maxlength' => '',
										'readonly' => 0,
										'disabled' => 0,
									),
									array (
										'key' => 'lsb_field_page_section_books_feed_url',
										'label' => 'Boksøk feed url',
										'name' => 'books_feed_url',
										'type' => 'url',
										'instructions' => '',
										'required' => 1,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'default_value' => 'http://boksok.no/bok/feed/',
										'placeholder' => '',
									),
									array (
										'key' => 'lsb_field_page_section_books_heading_link',
										'label' => 'Overskriftslenke',
										'name' => 'books_heading_link',
										'type' => 'url',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'default_value' => 'http://boksok.no',
										'placeholder' => '',
									),
								),
								'min' => '',
								'max' => '',
							),
							array (
								'key' => 'lsb_page_section_layout_text_grid',
								'name' => 'text_grid',
								'label' => 'Tekstblokker',
								'display' => 'row',
								'sub_fields' => array (
									array (
										'key' => 'lsb_field_page_section_text_grid',
										'label' => 'Blokker',
										'name' => 'blocks',
										'type' => 'repeater',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'collapsed' => 'lsb_field_page_section_text_grid_title',
										'min' => '',
										'max' => '',
										'layout' => 'row',
										'button_label' => 'Legg til tekstblokk',
										'sub_fields' => array (
											array (
												'key' => 'lsb_field_page_section_text_grid_icon',
												'label' => 'Ikon',
												'name' => 'text_block_icon',
												'type' => 'image',
												'instructions' => '',
												'required' => 0,
												'conditional_logic' => 0,
												'wrapper' => array (
													'width' => '',
													'class' => '',
													'id' => '',
												),
												'return_format' => 'array',
												'preview_size' => 'thumbnail',
												'library' => 'all',
												'min_width' => '',
												'min_height' => '',
												'min_size' => '',
												'max_width' => '',
												'max_height' => '',
												'max_size' => '',
												'mime_types' => '',
											),
											array (
												'key' => 'lsb_field_page_section_text_grid_title',
												'label' => 'Tittel',
												'name' => 'text_block_title',
												'type' => 'text',
												'instructions' => '',
												'required' => 1,
												'conditional_logic' => 0,
												'wrapper' => array (
													'width' => '',
													'class' => '',
													'id' => '',
												),
												'default_value' => '',
												'placeholder' => '',
												'prepend' => '',
												'append' => '',
												'maxlength' => '',
												'readonly' => 0,
												'disabled' => 0,
											),
											array (
												'key' => 'lsb_field_page_section_text_grid_content',
												'label' => 'Tekst',
												'name' => 'text_block_content',
												'type' => 'textarea',
												'instructions' => '',
												'required' => 0,
												'conditional_logic' => 0,
												'wrapper' => array (
													'width' => '',
													'class' => '',
													'id' => '',
												),
												'default_value' => '',
												'placeholder' => '',
												'maxlength' => '',
												'rows' => '',
												'new_lines' => 'wpautop',
												'readonly' => 0,
												'disabled' => 0,
											),
											array (
												'key' => 'lsb_field_page_section_text_grid_url_type',
												'label' => 'Lenketype',
												'name' => 'text_block_url_type',
												'type' => 'radio',
												'instructions' => 'Blokkens lenke, brukes av overskrift og les mer lenke.',
												'required' => 1,
												'conditional_logic' => 0,
												'wrapper' => array (
													'width' => '',
													'class' => '',
													'id' => '',
												),
												'choices' => array (
													'internal' => 'Intern',
													'external' => 'Ekstern',
												),
												'other_choice' => 0,
												'save_other_choice' => 0,
												'default_value' => 'internal',
												'layout' => 'horizontal',
											),
											array (
												'key' => 'lsb_field_page_section_text_grid_internal_url',
												'label' => 'Intern url',
												'name' => 'text_block_internal_url',
												'type' => 'page_link',
												'instructions' => '',
												'required' => 1,
												'conditional_logic' => array (
													array (
														array (
															'field' => 'lsb_field_page_section_text_grid_url_type',
															'operator' => '==',
															'value' => 'internal',
														),
													),
												),
												'wrapper' => array (
													'width' => '',
													'class' => '',
													'id' => '',
												),
												'post_type' => array (
												),
												'taxonomy' => array (
												),
												'allow_null' => 0,
												'multiple' => 0,
											),
											array (
												'key' => 'lsb_field_page_section_text_grid_external_url',
												'label' => 'Ekstern url',
												'name' => 'text_block_external_url',
												'type' => 'url',
												'instructions' => '',
												'required' => 1,
												'conditional_logic' => array (
													array (
														array (
															'field' => 'lsb_field_page_section_text_grid_url_type',
															'operator' => '==',
															'value' => 'external',
														),
													),
												),
												'wrapper' => array (
													'width' => '',
													'class' => '',
													'id' => '',
												),
												'default_value' => '',
												'placeholder' => '',
											),
										),
									),
								),
								'min' => '',
								'max' => '',
							),
							array (
								'key' => 'lsb_page_section_layout_feed',
								'name' => 'feed',
								'label' => 'Feed',
								'display' => 'row',
								'sub_fields' => array (
									array (
										'key' => 'lsb_field_page_section_feed_heading',
										'label' => 'Overskrift',
										'name' => 'feed_heading',
										'type' => 'text',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'default_value' => 'Siste innlegg fra bloggen <span>"Ut av hylla"</span>',
										'placeholder' => '',
										'prepend' => '',
										'append' => '',
										'maxlength' => '',
										'readonly' => 0,
										'disabled' => 0,
									),
									array (
										'key' => 'lsb_field_page_section_feed_heading_link',
										'label' => 'Overskriftslenke',
										'name' => 'feed_heading_link',
										'type' => 'url',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'default_value' => 'http://utavhylla.wordpress.com',
										'placeholder' => '',
									),
									array (
										'key' => 'lsb_field_page_section_feed_url',
										'label' => 'Feed url',
										'name' => 'feed_url',
										'type' => 'url',
										'instructions' => '',
										'required' => 1,
										'conditional_logic' => 0,
										'wrapper' => array (
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'default_value' => 'http://utavhylla.wordpress.com/feed/',
										'placeholder' => '',
									),
								),
								'min' => '',
								'max' => '',
							),
						),
					),
				),
				'location' => array (
					array (
						array (
							'param' => 'page_template',
							'operator' => '==',
							'value' => 'template-frontpage.php',
						),
					),
				),
				'menu_order' => 0,
				'position' => 'acf_after_title',
				'style' => 'seamless',
				'label_placement' => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen' => array (
					0 => 'the_content',
				),
				'active' => 1,
				'description' => '',
			));

		}
	}

?>
