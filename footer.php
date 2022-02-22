<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<!--

		<?php if ( has_nav_menu( 'footer' ) ) : ?>
			<nav aria-label="<?php esc_attr_e( 'Secondary menu', 'twentytwentyone' ); ?>" class="footer-navigation">
				<ul class="footer-navigation-wrapper">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'items_wrap'     => '%3$s',
							'container'      => false,
							'depth'          => 1,
							'link_before'    => '<span>',
							'link_after'     => '</span>',
							'fallback_cb'    => false,
						)
					);
					?>
				</ul>
			</nav>
		<?php endif; ?>
		<div class="site-info">
			<div class="site-name">
				<?php if ( has_custom_logo() ) : ?>
					<div class="site-logo"><?php the_custom_logo(); ?></div>
				<?php else : ?>
					<?php if ( get_bloginfo( 'name' ) && get_theme_mod( 'display_title_and_tagline', true ) ) : ?>
						<?php if ( is_front_page() && ! is_paged() ) : ?>
							<?php bloginfo( 'name' ); ?>
						<?php else : ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						<?php endif; ?>
					<?php endif; ?>
				<?php endif; ?>
			</div>
			<div class="powered-by">
				<?php
				printf(
					/* translators: %s: WordPress. */
					esc_html__( 'Proudly powered by %s.', 'twentytwentyone' ),
					'<a href="' . esc_url( __( 'https://wordpress.org/', 'twentytwentyone' ) ) . '">WordPress</a>'
				);
				?>
			</div>

		</div>

		-->

		<div class="feetsie">
			<img src="/static/frontend/Magento/luma/en_US/images/rctv-logo.png">
			<div class="feetsy">
				At Rare Collectibles TV, we offer the finest in rare coins, US coins and currency, gold, silver, art, and collectibles.
				<br>
				We value our customers and want you to be completely satisfied. RCTV offers a 30-day money back guarantee on everything we sell.
			</div>
		</div>

		<div class="footer">
			<div class="foot-toes">
				<div>
					<div class="foot-h3">
						 Due to fluctuations in precious metals prices, all prices are subject to change without notice.
					</div>
					<div class="foot-cols">
						<div class="foot-col">
							<div>
								<div class="foot-h1">CONTACT US MONDAY - FRIDAY 10:00AM - 5:00PM PST</div>
								<div>
									<div class="foot-foot">
										<div class="foot-h2">Call Us</div>
										<div class="foot-info">
											<a href="tel:8005817273">(800) 581 - 7273</a> (Customer Service)
										</div>
										<div class="foot-info">
											<a href="tel:8007780624">(800) 778 - 0624</a> (Private Advisors)
										</div>
									</div><div class="foot-foot">
										<div class="foot-h2">Address</div>
										<div class="foot-info">
											Rare Collectibles TV, LLC
											<br>
											21213-B Hawthorne Blvd. #344
											<br>
											Torrance, CA 90503
										</div>
									</div>
									<br>
									<div class="foot-foot">
										<div class="foot-h2">Email</div>
										<div class="foot-info">
											<a href="mailto:info@rarecollectiblestv.com">info@rarecollectiblestv.com</a>
										</div>
									</div><div class="foot-foot">
										<div class="foot-h2">Social</div>
										<div class="foot-info">
											<a href="https://www.instagram.com/rarecollectiblestv/" target="_blank">Instagram</a>
											<a href="https://www.facebook.com/rarecollectiblestv/" target="_blank">Facebook</a>
											<a href="https://www.youtube.com/c/RareCollectiblesTV" target="_blank">YouTube</a>
										</div>
									</div>
								</div>
							</div>
						</div><div class="foot-col">
							<div>
								<div class="foot-h1">About RCTV</div>
								<div class="foot-links">
									<a href="https://www.rarecollectiblestv.com/about/">Company</a>
									<br>
									<a href="https://www.rarecollectiblestv.com/about/hosts/">Hosts</a>
									<br>
									<a href="https://www.rarecollectiblestv.com/about/pact/">Private Advisory Coin Team</a>
									<br>
									<a href="https://www.rarecollectiblestv.com/about/showtimes/">Showtimes</a>
									<br>
									<a href="https://www.indeed.com/cmp/Rare-Collectibles-Tv-1?attributionid=adwebapp">Career Opportunities</a>
								</div>
							</div>
						</div><div class="foot-col">
							<div>
								<div class="foot-h1">Additional Info</div>
								<div class="foot-links">
									<a href="https://www.rarecollectiblestv.com/privacy-policy/">Privacy Policy</a>
									<br>
									<a href="https://www.rarecollectiblestv.com/return-policy/">Return Policy</a>
									<br>
									<a href="https://www.rarecollectiblestv.com/terms-of-use/">Terms of Use</a>
									<br>
									<a href="https://www.rarecollectiblestv.com/terms-of-sale/">Terms of Sale</a>
									<br>
									<a href="https://www.rarecollectiblestv.com/faq/">FAQ</a>
									<br>
									<a href="https://www.rarecollectiblestv.com/sitemap.html">Sitemap</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="foot-copy">
				<div>
					&copy; Copyright 2021 Rare Collectibles TV, LLC. All rights reserved.
				</div>
			</div>
		</div>


	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(
	function(){
		$('article').each(
			function(){
				if( $(this).find('header.entry-header-rctv').length ){
					img_src = $(this).find('header.entry-header-rctv').find('figure.post-thumbnail').find('a.post-thumbnail-inner.alignwide').find('img').attr('src');

					article_id = $(this).attr('id');
					aid = article_id.split('-');
					post_id = aid[aid.length - 1];

					$('div#entry-bg-img-instead-' + post_id).css('background-image', "url('" + img_src + "')");

					cat_links = $(this).find('div.entry-content-rctv').find('div.post-taxonomies').find('span.cat-links').detach();

					posted_on = $(this).find('div.entry-content-rctv').find('span.posted-on').detach();

					$(this).find('div.entry-content-rctv').find('p.entry-title-rctv').before(posted_on);

					$(this).find('div.entry-content-rctv').find('p.entry-title-rctv').before(cat_links);

					more_link = $(this).find('div.entry-content-rctv').find('p').find('a.more-link').detach();

					$(this).find('div.entry-content-rctv').find('div.post-taxonomies').after(more_link);

					$('div#entry-bg-img-instead-' + post_id).height( $(this).height() );
				}
			}
		);

		awa = $('aside.widget-area').detach();
		$('div.site-content').after(awa);

		if( $('header.entry-header.alignwide').length ){
			h1 = $('header.entry-header.alignwide > h1.entry-title').detach();

			$('header.entry-header.alignwide > figure.post-thumbnail').before(h1);

			tags_links = $('div.post-taxonomies').find('span.tags-links').detach();

			posted_on = $('span.posted-on').detach();

			$('header.entry-header.alignwide > figure.post-thumbnail').after('<div style="clear: both;"></div>');
			$('header.entry-header.alignwide > figure.post-thumbnail').after(tags_links);
			$('header.entry-header.alignwide > figure.post-thumbnail').after(posted_on);
			$('header.entry-header.alignwide > figure.post-thumbnail').after('<div style="clear: both;"></div>');
		}
	}
);

$(window).resize(
	function(){
		$('article').each(
			function(){
				if( $(this).find('header.entry-header-rctv').length ){
					article_id = $(this).attr('id');
					aid = article_id.split('-');
					post_id = aid[aid.length - 1];
					$('div#entry-bg-img-instead-' + post_id).height( $(this).height() );
				}
			}
		);
	}
);
</script>

</body>
</html>
