<?php

/**
 * Main Themify class
 */
if ( ! class_exists( 'Themify',false ) ) {
	class Themify{
		/** Default sidebar layout
		 * @var string */
		public $layout;
		/** Default posts layout
		 * @var string */
		public $post_layout;

		public $hide_title = 'no';
		public $hide_meta = 'no';
		public $hide_date = 'no';
		public $hide_image = 'no';

		public $unlink_title = 'no';
		public $unlink_image = 'no';
		public $is_shortcode=false;
		public $display_content = 'excerpt';

		public $width = '';
		public $height = '';

		public $paged = '';




		// Sorting Parameters
		public $order = 'DESC';
		public $orderby = 'date';
		public $order_meta_key = false;

	}
}

/**
 * Initializes Themify class
 */
function themify_shortcodes_global_options(){
	/**
	 * Themify initialization class
	 */
	global $themify;
	if ( class_exists( 'Themify' ,false) ) {
		$themify = new Themify();
	}
}
add_action( 'init','themify_shortcodes_global_options' );