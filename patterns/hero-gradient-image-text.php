<?php
/**
 * Title: Section with image, text, buttons
 * Slug: pulp/hero-gradient-image-text
 * Categories: pulp-hero
 */
?>
<!-- wp:group {"metadata":{"name":"Gradient Image and Text"},"align":"full","style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0">
	<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"30px","right":"30px"}}},"gradient":"base-contrast","layout":{"type":"constrained","wideSize":"960px"}} -->
	<div class="wp-block-group alignfull has-base-contrast-gradient-background has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:30px;padding-bottom:var(--wp--preset--spacing--x-large);padding-left:30px">
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"}}},"backgroundColor":"base","className":"is-style-shadow-light","layout":{"type":"default"}} -->
		<div class="wp-block-group is-style-shadow-light has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)">
			<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-dark.svg'; ?>" alt="Sample image" style="aspect-ratio:16/9;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0"},"padding":{"right":"30px","left":"30px","bottom":"var:preset|spacing|x-large"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="margin-top:0;padding-right:30px;padding-bottom:var(--wp--preset--spacing--x-large);padding-left:30px">
		<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"max-48"} -->
		<h1 class="wp-block-heading has-text-align-center has-max-48-font-size"><?php echo esc_html__( 'Meet Pulp.', 'pulp' ); ?></h1>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}}} -->
		<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--x-small)"><?php echo esc_html__( 'Our mission is to revolutionise the creation of stunning WordPress websites by harnessing the power and flexibility of block-based design.', 'pulp' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"base","textColor":"contrast","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background has-link-color wp-element-button" href="#"><?php echo esc_html__( 'Call to Action', 'pulp' ); ?></a></div>
			<!-- /wp:button -->
			<!-- wp:button {"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Learn More', 'pulp' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
