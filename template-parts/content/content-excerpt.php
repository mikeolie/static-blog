<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php //get_template_part( 'template-parts/header/excerpt-header', get_post_format() ); ?>
	<header class="entry-header-rctv">
		<div class="entry-bg-img-instead" id="entry-bg-img-instead-<?php the_ID(); ?>"></div>
		<?php
		//the_title( sprintf( '<h2 class="entry-title default-max-width"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' );
		twenty_twenty_one_post_thumbnail();
		?>
	</header><div class="entry-content-rctv">
		<?php the_title( sprintf( '<p class="entry-title-rctv"><a href="%s">', esc_url( get_permalink() ) ), '</a></p>' ); ?>
		<?php twenty_twenty_one_entry_meta_footer(); ?>
		<?php get_template_part( 'template-parts/excerpt/excerpt', get_post_format() ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer default-max-width" style="display: none;">
		<?php //twenty_twenty_one_entry_meta_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-${ID} -->
