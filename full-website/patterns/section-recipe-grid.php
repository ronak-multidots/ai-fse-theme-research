<?php
/**
 * Title: Simple and tasty recipes
 * Slug: flowbase-cooking/section-recipe-grid
 * Categories: flowbase-cooking
 */
?>
<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"48px"}}} -->
		<h2 class="wp-block-heading has-text-align-center" style="font-size:48px">Simple and tasty recipes</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center",{"align":"center","style":{"color":{"text":"#00000099"}}} -->
		<p class="has-text-align-center" style="color:#00000099">Lorem ipsum dolor sit amet, consectetuipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqut enim ad minim.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:spacer {"height":"60px"} -->
	<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	<!-- wp:query {"queryId":2,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"default"}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
		<!-- wp:group {"style":{"color":{"background":"#E7FAFE"},"border":{"radius":"30px"},"spacing":{"padding":{"top":"30px","right":"30px","bottom":"40px","left":"30px"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group has-background" style="background-color:#E7FAFE;border-radius:30px;padding-top:30px;padding-right:30px;padding-bottom:40px;padding-left:30px">
			<!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":"20px"}}} /-->
			<!-- wp:post-title {"isLink":true,"level":3,"style":{"typography":{"fontSize":"24px","lineHeight":"1.4"}}} /-->
			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
			<div class="wp-block-group">
                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group">
                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"}}} -->
                    <p style="font-size:14px">⏱️ 30 Minutes</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group">
                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"}}} -->
                    <p style="font-size:14px">🍗 Snack</p>
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
