<?php
/**
 * Title: Small business footer with columns of text.
 * Slug: pulp/footer-small-business-dark
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"30px","right":"30px"},"margin":{"top":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="margin-top:0px;padding-top:var(--wp--preset--spacing--x-large);padding-right:30px;padding-bottom:var(--wp--preset--spacing--x-large);padding-left:30px">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","wideSize":"600px","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"fontSize":"max-48"} -->
		<h2 class="wp-block-heading has-max-48-font-size"><?php echo esc_html__( 'Designed with love. Powered by WordPress.', 'pulp' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->
	<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--large)">
		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"},"color":{"text":"#a3a3a3"}},"fontSize":"tiny"} -->
			<h3 class="wp-block-heading has-text-color has-tiny-font-size" style="color:#a3a3a3;text-transform:uppercase"><?php echo esc_html__( 'Main Office', 'pulp' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:list {"style":{"typography":{"lineHeight":"1.5"}},"className":"is-style-no-style","fontSize":"small"} -->
			<ul style="line-height:1.5" class="is-style-no-style has-small-font-size">
				<!-- wp:list-item -->
				<li>29 Windermere Dr</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li>Nomansland, Vic 3000</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><a href="#">02 8080 2095</a></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">
			<!-- wp:columns -->
			<div class="wp-block-columns">
				<!-- wp:column {"width":""} -->
				<div class="wp-block-column">
					<!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"},"color":{"text":"#a3a3a3"}},"fontSize":"tiny"} -->
					<h3 class="wp-block-heading has-text-color has-tiny-font-size" style="color:#a3a3a3;text-transform:uppercase">Sydney</h3>
					<!-- /wp:heading -->
					<!-- wp:list {"style":{"typography":{"lineHeight":"1.5"}},"className":"is-style-no-style","fontSize":"small"} -->
					<ul style="line-height:1.5" class="is-style-no-style has-small-font-size">
						<!-- wp:list-item -->
						<li>Beau Fisher</li>
						<!-- /wp:list-item -->
						<!-- wp:list-item -->
						<li><?php echo esc_html__( 'Creative Director', 'pulp' ); ?></li>
						<!-- /wp:list-item -->
						<!-- wp:list-item -->
						<li><a href="mailto:beau@domain.com">beau@domain.com</a></li>
						<!-- /wp:list-item -->
					</ul>
					<!-- /wp:list -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":""} -->
				<div class="wp-block-column">
					<!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"},"color":{"text":"#a3a3a3"}},"fontSize":"tiny"} -->
					<h3 class="wp-block-heading has-text-color has-tiny-font-size" style="color:#a3a3a3;text-transform:uppercase">Perth</h3>
					<!-- /wp:heading -->
					<!-- wp:list {"style":{"typography":{"lineHeight":"1.5"}},"className":"is-style-no-style","fontSize":"small"} -->
					<ul style="line-height:1.5" class="is-style-no-style has-small-font-size">
						<!-- wp:list-item -->
						<li>Dylan Kunde</li>
						<!-- /wp:list-item -->
						<!-- wp:list-item -->
						<li><?php echo esc_html__( 'Creative Director', 'pulp' ); ?></li>
						<!-- /wp:list-item -->
						<!-- wp:list-item -->
						<li><a href="mailto:dylan@domain.com">dylan@domain.com</a></li>
						<!-- /wp:list-item -->
					</ul>
					<!-- /wp:list -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":""} -->
				<div class="wp-block-column">
					<!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"},"color":{"text":"#a3a3a3"}},"fontSize":"tiny"} -->
					<h3 class="wp-block-heading has-text-color has-tiny-font-size" style="color:#a3a3a3;text-transform:uppercase">Tasmania</h3>
					<!-- /wp:heading -->
					<!-- wp:list {"style":{"typography":{"lineHeight":"1.5"}},"className":"is-style-no-style","fontSize":"small"} -->
					<ul style="line-height:1.5" class="is-style-no-style has-small-font-size">
						<!-- wp:list-item -->
						<li>Jasper Thompson</li>
						<!-- /wp:list-item -->
						<!-- wp:list-item -->
						<li><?php echo esc_html__( 'Creative Director', 'pulp' ); ?></li>
						<!-- /wp:list-item -->
						<!-- wp:list-item -->
						<li><a href="mailto:jasper@domain.com">jasper@domain.com</a></li>
						<!-- /wp:list-item -->
					</ul>
					<!-- /wp:list -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"},"fontSize":"x-small"} -->
	<div class="wp-block-group alignwide has-x-small-font-size" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph -->
				<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:site-title {"level":0,"isLink":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"x-small"} /-->
			</div>
			<!-- /wp:group -->
			<!-- wp:paragraph -->
			<p> · </p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><a href="#">Say Hello to Pulp</a> by <a href="#">TGWS</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","openInNewTab":true,"size":"has-small-icon-size","style":{"spacing":{"blockGap":{"left":"5px"}}},"className":"is-style-outline"} -->
		<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-outline">
			<!-- wp:social-link {"url":"https://x.com/","service":"x"} /-->
			<!-- wp:social-link {"url":"https://www.linkedin.com/","service":"linkedin"} /-->
			<!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /-->
			<!-- wp:social-link {"url":"https://www.facebook.com/","service":"facebook"} /-->
			<!-- wp:social-link {"url":"https://www.threads.net/","service":"threads"} /-->
		</ul>
		<!-- /wp:social-links -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
