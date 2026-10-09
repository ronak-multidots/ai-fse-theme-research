<?php
/**
 * Title: Hero Section
 * Slug: laslesvpn/hero
 * Categories: featured, banner
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"50px","bottom":"50px","right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:50px;padding-right:var(--wp--preset--spacing--30);padding-bottom:50px;padding-left:var(--wp--preset--spacing--30)"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Want anything to be<br>easy with <strong>LaslesVPN.</strong></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"20px","bottom":"40px"}}}} -->
<p style="margin-top:20px;margin-bottom:40px">Provide a network for all your needs with ease and fun using <strong>LaslesVPN</strong><br>discover interesting features from us.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"has-red-shadow"} -->
<div class="wp-block-button has-red-shadow"><a class="wp-block-button__link wp-element-button">Get Started</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:image {"align":"center","sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-large"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/figma/hero.svg' ) ); ?>" alt="Hero Illustration"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
