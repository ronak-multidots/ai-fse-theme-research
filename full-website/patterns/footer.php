<?php
/**
 * Title: Footer
 * Slug: flowbase-cooking/footer
 * Categories: flowbase-cooking
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large"}}}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--x-large)">
		<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"width":"110px"} -->
			<figure class="wp-block-image is-resized"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.svg' ); ?>" alt="Foodieland" style="width:110px"/></a></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"style":{"color":{"text":"#00000099"}}} -->
			<p style="color:#00000099">Lorem ipsum dolor sit amet, consectetuipisicing elit.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		
		<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"},"style":{"typography":{"fontWeight":"500"}}} -->
		<!-- wp:navigation-link {"label":"Recipes","url":"#"} /-->
		<!-- wp:navigation-link {"label":"Blog","url":"#"} /-->
		<!-- wp:navigation-link {"label":"Contact","url":"#"} /-->
		<!-- wp:navigation-link {"label":"About us","url":"#"} /-->
		<!-- /wp:navigation -->
	</div>
	<!-- /wp:group -->
	<!-- wp:spacer {"height":"40px"} -->
	<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	<!-- wp:separator {"className":"is-style-wide"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
	<!-- /wp:separator -->
	<!-- wp:spacer {"height":"40px"} -->
	<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|x-large"}}}} -->
	<div class="wp-block-group alignwide" style="padding-bottom:var(--wp--preset--spacing--x-large)">
		<!-- wp:group {"layout":{"type":"flex"}} -->
		<div class="wp-block-group"></div>
		<!-- /wp:group -->
		<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#00000099"}}} -->
		<p class="has-text-align-center" style="color:#00000099">© 2026 Flowbase. Powered by Webflow (WordPress).</p>
		<!-- /wp:paragraph -->
		<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#262626","className":"is-style-logos-only"} -->
		<ul class="wp-block-social-links has-icon-color is-style-logos-only">
			<!-- wp:social-link {"url":"#","service":"facebook"} /-->
			<!-- wp:social-link {"url":"#","service":"twitter"} /-->
			<!-- wp:social-link {"url":"#","service":"instagram"} /-->
		</ul>
		<!-- /wp:social-links -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
