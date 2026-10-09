<?php
/**
 * Title: Contact Page Pattern
 * Slug: flowbase-cooking/page-contact
 * Categories: flowbase-cooking
 */
?>
<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","level":1} -->
		<h1 class="wp-block-heading has-text-align-center">Contact us</h1>
		<!-- /wp:heading -->
		<!-- wp:spacer {"height":"40px"} -->
		<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
		<!-- wp:columns -->
		<div class="wp-block-columns">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
				<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/home-image-28.png' ); ?>" alt="Chef cooking"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph -->
					<p><strong>Name</strong></p>
					<!-- /wp:paragraph -->
					<!-- wp:search {"label":"Enter your name","showLabel":false,"placeholder":"Enter your name","buttonText":"Submit","buttonPosition":"no-button","align":"center"} /-->
					
                    <!-- wp:paragraph -->
					<p><strong>Email Address</strong></p>
					<!-- /wp:paragraph -->
					<!-- wp:search {"label":"Your email address","showLabel":false,"placeholder":"Your email address","buttonText":"Submit","buttonPosition":"no-button","align":"center"} /-->

                    <!-- wp:paragraph -->
					<p><strong>Messages</strong></p>
					<!-- /wp:paragraph -->
					<!-- wp:search {"label":"Enter your messages","showLabel":false,"placeholder":"Enter your messages...","buttonText":"Submit","buttonPosition":"no-button","align":"center"} /-->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons">
                        <!-- wp:button {"backgroundColor":"contrast","textColor":"base"} -->
                        <div class="wp-block-button"><a class="wp-block-button__link has-base-color has-contrast-background-color has-text-color has-background wp-element-button" href="#">Submit</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
