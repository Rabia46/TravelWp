<?php

class QiAddonsForElementor_Preview_Slider_Shortcode_Elementor extends QiAddonsForElementor_Elementor_Widget_Base {

	function __construct( array $data = [], $args = null ) {
		$this->set_shortcode_slug( 'qi_addons_for_elementor_preview_slider' );

		parent::__construct( $data, $args );
	}
}

qi_addons_for_elementor_register_new_elementor_widget( new QiAddonsForElementor_Preview_Slider_Shortcode_Elementor() );
