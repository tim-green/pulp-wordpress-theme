<?php
/**
 * Title: Post with gradient cover
 * Slug: pulp/template-single-gradient-cover
 * Categories: pulp-template
 * Template Types: single
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"isUserOverlayColor":true,"minHeight":400,"isDark":false,"style":{"spacing":{"margin":{"top":"0"}}},"className":"is-style-gradient","layout":{"type":"default"}} -->
<div class="wp-block-cover is-light is-style-gradient" style="margin-top:0;min-height:400px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div class="wp-block-cover__inner-container">
	<!-- wp:group {"tagName":"header","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"blockGap":"10px"}},"textColor":"base","layout":{"type":"constrained","wideSize":"800px"}} -->
	<header class="wp-block-group has-base-color has-text-color has-link-color">
		<!-- wp:group {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"5px"}},"fontSize":"x-small"} -->
		<div class="wp-block-group has-x-small-font-size">
			<!-- wp:post-date /-->
			<!-- wp:paragraph -->
			<p>·</p>
			<!-- /wp:paragraph -->
			<!-- wp:post-author-name {"isLink":true} /-->
		</div>
		<!-- /wp:group -->
		<!-- wp:post-title {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"max-60"} /-->
	</div>
	<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}}} -->
<main class="wp-block-group" style="margin-top:0;padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">
	<!-- wp:post-content {"layout":{"type":"constrained"}} /-->
	<!-- wp:pattern {"slug":"pulp/post-terms"} /-->
	<!-- wp:pattern {"slug":"pulp/comments"} /-->
</main>
<!-- /wp:group -->
<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->
