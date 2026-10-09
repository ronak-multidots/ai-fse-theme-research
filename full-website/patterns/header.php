<?php
/**
 * Title: Header
 * Slug: flowbase-cooking/header
 * Categories: flowbase-cooking
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">
		<!-- wp:image {"width":"110px"} -->
		<figure class="wp-block-image is-resized"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.svg' ); ?>" alt="Foodieland" style="width:110px"/></a></figure>
		<!-- /wp:image -->
		<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"center"},"style":{"typography":{"fontWeight":"500"}}} -->
		<!-- wp:navigation-link {"label":"Home","url":"#"} /-->
		<!-- wp:navigation-link {"label":"Recipes","url":"#"} /-->
		<!-- wp:navigation-link {"label":"Blog","url":"#"} /-->
		<!-- wp:navigation-link {"label":"Contact","url":"#"} /-->
		<!-- wp:navigation-link {"label":"About us","url":"#"} /-->
		<!-- /wp:navigation -->
		<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#262626","className":"is-style-logos-only","layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<ul class="wp-block-social-links has-icon-color is-style-logos-only">
			<!-- wp:social-link {"url":"#","service":"facebook"} /-->
			<!-- wp:social-link {"url":"#","service":"twitter"} /-->
			<!-- wp:social-link {"url":"#","service":"instagram"} /-->
		</ul>
		<!-- /wp:social-links -->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"className":"is-style-wide"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
	<!-- /wp:separator -->
</div>
<!-- /wp:group -->
