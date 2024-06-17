<?php
/**
 * Title: Gallery with text and images
 * Slug: pulp/gallery-text-images
 * Categories: pulp-gallery
 */
?>
<!-- wp:group {"metadata":{"name":"Gallery"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"30px","right":"30px"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:30px;padding-bottom:var(--wp--preset--spacing--x-large);padding-left:30px">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"30%","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"},"typography":{"lineHeight":"1.5"}},"fontSize":"small"} -->
		<div class="wp-block-column is-vertically-aligned-center has-small-font-size" style="line-height:1.5;flex-basis:30%">
			<!-- wp:heading {"fontSize":"max-36"} -->
			<h2 class="wp-block-heading has-max-36-font-size"><?php echo esc_html__( 'My Images', 'pulp' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Pulp returns to its minimalist origins by embracing simplicity and prioritizing the essence of form and function. Inspired by the vibrant colour schemes of TailwindCSS, its distinctive method transcends traditional design norms, offering a limitless canvas for creativity.', 'pulp' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p><a href="#"><?php echo esc_html__( 'Follow Me →', 'pulp' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%">
			<!-- wp:gallery {"linkTo":"none","sizeSlug":"full","style":{"spacing":{"blockGap":{"left":"10px"}}}} -->
			<figure class="wp-block-gallery has-nested-images columns-default is-cropped">
				<!-- wp:image {"lightbox":{"enabled":true},"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-dark.svg'; ?>" alt="Sample image" style="aspect-ratio:3/4;object-fit:cover"/></figure>
				<!-- /wp:image -->
				<!-- wp:image {"lightbox":{"enabled":true},"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-dark.svg'; ?>" alt="Sample image" style="aspect-ratio:3/4;object-fit:cover"/></figure>
				<!-- /wp:image -->
				<!-- wp:image {"lightbox":{"enabled":true},"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/sample-image-dark.svg'; ?>" alt="Sample image" style="aspect-ratio:3/4;object-fit:cover"/></figure>
				<!-- /wp:image -->
			</figure>
			<!-- /wp:gallery -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
