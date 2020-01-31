<?php
/**
 * Admin Options Template
 *
 * @since   2.0.0
 * @package WebDevStudios\WPSWA\Views\Options
 */

use \WebDevStudios\WPSWA\Services\Admin\Options;

?>
<div class="wrap">
	<h1>
		<?php echo \esc_html( \get_admin_page_title() ); ?>
	</h1>
	<form method="post" action="options.php">
		<?php
		\settings_fields( $this->option_group );
		\do_settings_sections( $this->slug );
		\submit_button();
		?>
	</form>
</div>
