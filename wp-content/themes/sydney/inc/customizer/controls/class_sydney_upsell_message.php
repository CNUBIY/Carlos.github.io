<?php
/**
 * Upsell control
 *
 * @package Sydney
 *
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Sydney_Upsell_Message extends WP_Customize_Control {
		
	/**
	 * The type of control being rendered
	 */
	public $type 		 = 'sydney-upsell-features';
	public $button_title = '';
	public $features 	 = array();
	public $button_link  = 'https://athemes.com/sydney-upgrade/?utm_source=theme_customizer_deep&utm_medium=sydney_customizer&utm_campaign=Sydney';

	/**
	 * Constructor
	 */
	public function __construct( $manager, $id, $args = array(), $options = array() ) {
		parent::__construct( $manager, $id, $args );
	}

	/**
	 * Render the control in the customizer
	 */
	public function render_content() { 
		$this->button_title = __( 'Upgrade to Sydney Pro', 'sydney' ); ?>

		<hr class="sydney-cust-divider">
		<div class="sydney-upsell-feature-wrapper">
			<h3><em><?php echo esc_html( $this->description ); ?></em></h3>

			<p><?php echo esc_html__( 'You’ll get access to:', 'sydney' ); ?></p>

			<?php if ( !empty( $this->features ) ) : ?>
				<ul class="sydney-upsell-features">
					<?php foreach ( $this->features as $feature ) : ?>
						<li><span class="dashicons dashicons-yes"></span><?php echo wp_kses_post( $feature ); ?></li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
			
			<p>
				<a href="<?php echo esc_url( $this->button_link ) ?>" role="button" class="button-secondary deep-upsell-button button" target="_blank">
					<?php echo esc_html( $this->button_title ); ?>
				</a>
			</p>
		</div>

	<?php
	}
}
