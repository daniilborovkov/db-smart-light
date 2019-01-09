<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package Smart_Light
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses db_smart_light_header_style()
 */
function db_smart_light_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'db_smart_light_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '000000',
		'width'                  => 1000,
		'height'                 => 250,
		'flex-height'            => true,
		'wp-head-callback'       => 'db_smart_light_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'db_smart_light_custom_header_setup' );

if ( ! function_exists( 'db_smart_light_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see db_smart_light_custom_header_setup().
	 */
	function db_smart_light_header_style() {
		$header_text_color = get_header_textcolor();

		/*
		 * If no custom options for text are set, let's bail.
		 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
		 */
		if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
			return;
		}

		// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">
		<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
			?>
			.site-title,
			.site-description {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
			}
		<?php
		// If the user has set a custom color for the text use that.
		else :
			?>
			.site-title a,
			.site-description {
				color: #<?php echo esc_attr( $header_text_color ); ?>;
			}
		<?php endif; ?>
		</style>
		<?php
	}
endif;

function db_smart_light_add_language_switcher_dropdown($items, $args) {
	// 1. check if polylang exists
	if (!function_exists('pll_the_languages')) {
		return $items;
	}
	// 2. get languages
	$translations = pll_the_languages(array('raw'=>1));

	$current_lang = pll_current_language();

	$id = 999999999999876;

	$current_item = array(
		'title' => $translations[$current_lang]['slug'],
		'menu_item_parent' => 0,
		'ID' => $id,
		'db_id' => $id,
		'url' => $translations[$current_lang]['url'],
	);
	$items[] = (object) $current_item;

	foreach ($translations as $key => $translation) {
		if ($key != $current_lang) {
			$item = array(
				'title' =>$translation['slug'],
				'menu_item_parent' => $id,
				'url' => $translation['url'],
				'ID' => '',
				'db_id' => ''
			);
			$items[] = (object) $item;
		}
	}
	
	// 3. render languages
	// 
	return $items;
}
add_filter('wp_nav_menu_objects', 'db_smart_light_add_language_switcher_dropdown', 10, 2);
