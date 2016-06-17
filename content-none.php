<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/#content-slug-php
 *
 * @package Primer
 */
?>

<section class="no-results not-found">

	<header class="page-header">

		<h1 class="page-title"><?php _e( 'Nothing Found', 'primer' ) ?></h1>

	</header><!-- .page-header -->

	<div class="page-content">

		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'primer' ), esc_url( admin_url( 'post-new.php' ) ) ) ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'primer' ) ?></p>
			<?php get_search_form() ?>

		<?php else : ?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'primer' ) ?></p>
			<?php get_search_form() ?>

		<?php endif; ?>

	</div><!-- .page-content -->

</section><!-- .no-results -->
