<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @package Square
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( '暂时没有文章', 'square' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( 
				/* translators: Link */
				wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'square' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php else : ?>


		<?php endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
