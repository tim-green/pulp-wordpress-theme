<?php
/**
 * Title: About section with columns
 * Slug: pulp/content-about-split
 * Categories: pulp-content
 */
?>
<!-- wp:group {"metadata":{"name":"About Split"},"align":"full","style":{"spacing":{"padding":{"right":"30px","left":"30px","top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:30px;padding-bottom:var(--wp--preset--spacing--x-large);padding-left:30px">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group alignwide"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"400"}},"fontSize":"x-small"} -->
		<p class="has-x-small-font-size" style="font-style:normal;font-weight:400;text-transform:uppercase"><?php echo esc_html__( 'Meet Pulp', '' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:separator {"style":{"spacing":{"margin":{"top":"0px"}}}} -->
		<hr class="wp-block-separator has-alpha-channel-opacity" style="margin-top:0px"/>
		<!-- /wp:separator -->
	</div>
	<!-- /wp:group -->
	<!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|large"},"margin":{"top":"var:preset|spacing|x-small"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-top" style="margin-top:var(--wp--preset--spacing--x-small)">
		<!-- wp:column {"verticalAlignment":"top"} -->
		<div class="wp-block-column is-vertically-aligned-top">
			<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"max-48"} -->
			<h2 class="wp-block-heading has-max-48-font-size" style="font-style:normal;font-weight:300"><?php echo esc_html__( 'Are you ready to begin designing with WordPress??', '' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button  -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Learn More →', '' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"top"} -->
		<div class="wp-block-column is-vertically-aligned-top">
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'We aim to revolutionise the creation of beautiful WordPress websites by leveraging the power and flexibility of block-based design. Our approach transcends conventional standards, offering an innovative and imaginative canvas where creativity knows no bounds.', '' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
