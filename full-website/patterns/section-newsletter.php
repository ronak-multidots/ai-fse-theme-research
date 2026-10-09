<?php
/**
 * Title: Newsletter Section
 * Slug: flowbase-cooking/section-newsletter
 * Categories: flowbase-cooking
 */
?>
<!-- wp:group {"align":"wide","backgroundColor":"primary","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"},"style":{"border":{"radius":"40px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"var:preset|spacing|giant","bottom":"var:preset|spacing|giant"}}}} -->
<div class="wp-block-group alignwide has-primary-background-color has-background" style="border-radius:40px;margin-top:var(--wp--preset--spacing--giant);margin-bottom:var(--wp--preset--spacing--giant);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
    
    <!-- wp:image {"width":"200px"} -->
    <figure class="wp-block-image is-resized"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/newsletter-left.png' ); ?>" alt="" style="width:200px"/></figure>
    <!-- /wp:image -->

	<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
		<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"48px","fontWeight":"600"}}} -->
		<h2 class="wp-block-heading has-text-align-center" style="font-size:48px;font-weight:600">Deliciousness to your inbox</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center",{"align":"center",{"align":"center"} -->
		<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetuipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqut enim ad minim.</p>
		<!-- /wp:paragraph -->
		<!-- wp:spacer {"height":"20px"} -->
		<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
		<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Your email address...","buttonText":"Subscribe","buttonUseIcon":false,"align":"center","style":{"border":{"radius":"20px"}}} /-->
	</div>
	<!-- /wp:group -->

    <!-- wp:image {"width":"250px"} -->
    <figure class="wp-block-image is-resized"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/newsletter-right.png' ); ?>" alt="" style="width:250px"/></figure>
    <!-- /wp:image -->
</div>
<!-- /wp:group -->
