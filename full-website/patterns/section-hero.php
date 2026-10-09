<?php
/**
 * Title: Hero Section
 * Slug: flowbase-cooking/section-hero
 * Categories: flowbase-cooking
 */
?>
<!-- wp:group {"align":"wide","backgroundColor":"primary","layout":{"type":"constrained"},"style":{"border":{"radius":"40px"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"var:preset|spacing|x-large"}}}} -->
<div class="wp-block-group alignwide has-primary-background-color has-background" style="border-radius:40px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:var(--wp--preset--spacing--x-large)">
	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0;margin-bottom:0;gap:0;">
		<!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"padding":{"right":"40px","top":"40px","bottom":"40px"}}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="padding-right:40px;padding-top:40px;padding-bottom:40px;flex-basis:50%">
			<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
			<div class="wp-block-group">
                <!-- wp:group {"style":{"color":{"background":"#ffffff"},"border":{"radius":"30px"},"spacing":{"padding":{"top":"10px","right":"20px","bottom":"10px","left":"20px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                <div class="wp-block-group has-background" style="border-radius:30px;background-color:#ffffff;padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px">
                    <!-- wp:image {"width":"24px"} -->
                    <figure class="wp-block-image is-resized"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/cat-breakfast.png' ); ?>" alt="Recipe" style="width:24px"/></figure>
                    <!-- /wp:image -->
                    <!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"14px"}}} -->
                    <p style="font-size:14px;font-weight:600">Hot Recipes</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
				
                <!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"64px","lineHeight":"1.1","fontWeight":"700"}}} -->
				<h1 class="wp-block-heading" style="font-size:64px;font-weight:700;line-height:1.1">Spicy delicious chicken wings</h1>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"color":{"text":"#00000099"}}} -->
				<p style="color:#00000099;line-height:1.6">Lorem ipsum dolor sit amet, consectetuipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqut enim ad minim.</p>
				<!-- /wp:paragraph -->
                
                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"margin":{"top":"20px","bottom":"40px"}}}} -->
                <div class="wp-block-group" style="margin-top:20px;margin-bottom:40px">
                    <!-- wp:group {"style":{"color":{"background":"#0000000D"},"border":{"radius":"30px"},"spacing":{"padding":{"top":"10px","right":"20px","bottom":"10px","left":"20px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group has-background" style="border-radius:30px;background-color:#0000000D;padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px">
                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"}}} -->
                        <p style="font-size:14px">⏱️ 30 Minutes</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                    <!-- wp:group {"style":{"color":{"background":"#0000000D"},"border":{"radius":"30px"},"spacing":{"padding":{"top":"10px","right":"20px","bottom":"10px","left":"20px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group has-background" style="border-radius:30px;background-color:#0000000D;padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px">
                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"}}} -->
                        <p style="font-size:14px">🍗 Chicken</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                <div class="wp-block-group">
                    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group">
                        <!-- wp:image {"width":"50px","style":{"border":{"radius":"50px"}}} -->
                        <figure class="wp-block-image is-resized" style="border-radius:50px"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/author.png' ); ?>" alt="John Smith" style="width:50px"/></figure>
                        <!-- /wp:image -->
                        <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"0"}}} -->
                        <div class="wp-block-group">
                            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
                            <p style="font-weight:700">John Smith</p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"},"color":{"text":"#00000099"}}} -->
                            <p style="color:#00000099;font-size:14px">15 March 2022</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons">
                        <!-- wp:button {"backgroundColor":"contrast","textColor":"base"} -->
                        <div class="wp-block-button"><a class="wp-block-button__link has-base-color has-contrast-background-color has-text-color has-background wp-element-button" href="#">View Recipes ▶</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
			<figure class="wp-block-image size-large" style="margin-top:0;margin-bottom:0;margin-left:0;margin-right:0"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-plate.jpeg' ); ?>" alt="Spicy delicious chicken wings" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
