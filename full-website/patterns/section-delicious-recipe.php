<?php
/**
 * Title: Try this delicious recipe
 * Slug: flowbase-cooking/section-delicious-recipe
 * Categories: flowbase-cooking
 */
?>
<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:columns {"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
            <!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"48px"}}} -->
            <h2 class="wp-block-heading" style="font-size:48px">Try this delicious recipe to make your day</h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
            <!-- wp:paragraph {"style":{"color":{"text":"#00000099"}}} -->
            <p style="color:#00000099">Lorem ipsum dolor sit amet, consectetuipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqut enim ad minim.</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
	
	<!-- wp:spacer {"height":"60px"} -->
	<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
    <!-- wp:query {"queryId":3,"query":{"perPage":8,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"default"}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"layout":{"type":"grid","columnCount":4}} -->
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"30px","left":"0"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:30px;padding-left:0">
			<!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":"20px"}}} /-->
			<!-- wp:post-title {"isLink":true,"level":3,"style":{"typography":{"fontSize":"18px","lineHeight":"1.4"}}} /-->
			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
			<div class="wp-block-group">
                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group">
                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"12px"}}} -->
                    <p style="font-size:12px">⏱️ 30 Minutes</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group">
                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"12px"}}} -->
                    <p style="font-size:12px">🍗 Healthy</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
