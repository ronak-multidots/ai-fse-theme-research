<?php
/**
 * Title: Categories Section
 * Slug: flowbase-cooking/section-categories
 * Categories: flowbase-cooking
 */
?>
<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"level":2} -->
		<h2 class="wp-block-heading">Categories</h2>
		<!-- /wp:heading -->
		<!-- wp:buttons -->
        <div class="wp-block-buttons">
            <!-- wp:button {"backgroundColor":"primary","textColor":"contrast"} -->
            <div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-primary-background-color has-text-color has-background wp-element-button" href="#">View All Categories</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
    <!-- wp:spacer {"height":"40px"} -->
    <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"},"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"30px","right":"10px","bottom":"30px","left":"10px"}},"color":{"background":"#f2f8f6"}}} -->
			<div class="wp-block-group has-background" style="background-color:#f2f8f6;border-radius:20px;padding-top:30px;padding-right:10px;padding-bottom:30px;padding-left:10px">
				<!-- wp:image {"align":"center","width":"100px"} -->
				<figure class="wp-block-image aligncenter is-resized"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/cat-breakfast.png' ); ?>" alt="Breakfast" style="width:100px"/></figure>
				<!-- /wp:image -->
				<!-- wp:paragraph {"align":"center",{"align":"center","style":{"typography":{"fontWeight":"600"}}} -->
		<p class="has-text-align-center" style="font-weight:600">Breakfast</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"},"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"30px","right":"10px","bottom":"30px","left":"10px"}},"color":{"background":"#e6f3e6"}}} -->
			<div class="wp-block-group has-background" style="background-color:#e6f3e6;border-radius:20px;padding-top:30px;padding-right:10px;padding-bottom:30px;padding-left:10px">
				<!-- wp:image {"align":"center","width":"100px"} -->
				<figure class="wp-block-image aligncenter is-resized"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/cat-vegan.png' ); ?>" alt="Vegan" style="width:100px"/></figure>
				<!-- /wp:image -->
				<!-- wp:paragraph {"align":"center",{"align":"center","style":{"typography":{"fontWeight":"600"}}} -->
		<p class="has-text-align-center" style="font-weight:600">Vegan</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"},"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"30px","right":"10px","bottom":"30px","left":"10px"}},"color":{"background":"#fbeae9"}}} -->
			<div class="wp-block-group has-background" style="background-color:#fbeae9;border-radius:20px;padding-top:30px;padding-right:10px;padding-bottom:30px;padding-left:10px">
				<!-- wp:image {"align":"center","width":"100px"} -->
				<figure class="wp-block-image aligncenter is-resized"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/cat-meat.png' ); ?>" alt="Meat" style="width:100px"/></figure>
				<!-- /wp:image -->
				<!-- wp:paragraph {"align":"center",{"align":"center","style":{"typography":{"fontWeight":"600"}}} -->
		<p class="has-text-align-center" style="font-weight:600">Meat</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"},"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"30px","right":"10px","bottom":"30px","left":"10px"}},"color":{"background":"#fef5e6"}}} -->
			<div class="wp-block-group has-background" style="background-color:#fef5e6;border-radius:20px;padding-top:30px;padding-right:10px;padding-bottom:30px;padding-left:10px">
				<!-- wp:image {"align":"center","width":"100px"} -->
				<figure class="wp-block-image aligncenter is-resized"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/cat-dessert.png' ); ?>" alt="Dessert" style="width:100px"/></figure>
				<!-- /wp:image -->
				<!-- wp:paragraph {"align":"center",{"align":"center","style":{"typography":{"fontWeight":"600"}}} -->
		<p class="has-text-align-center" style="font-weight:600">Dessert</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
        <!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"},"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"30px","right":"10px","bottom":"30px","left":"10px"}},"color":{"background":"#f7f7f7"}}} -->
			<div class="wp-block-group has-background" style="background-color:#f7f7f7;border-radius:20px;padding-top:30px;padding-right:10px;padding-bottom:30px;padding-left:10px">
				<!-- wp:image {"align":"center","width":"100px"} -->
				<figure class="wp-block-image aligncenter is-resized"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/cat-lunch.png' ); ?>" alt="Lunch" style="width:100px"/></figure>
				<!-- /wp:image -->
				<!-- wp:paragraph {"align":"center",{"align":"center","style":{"typography":{"fontWeight":"600"}}} -->
		<p class="has-text-align-center" style="font-weight:600">Lunch</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
        <!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"},"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"30px","right":"10px","bottom":"30px","left":"10px"}},"color":{"background":"#f2f2f2"}}} -->
			<div class="wp-block-group has-background" style="background-color:#f2f2f2;border-radius:20px;padding-top:30px;padding-right:10px;padding-bottom:30px;padding-left:10px">
				<!-- wp:image {"align":"center","width":"100px"} -->
				<figure class="wp-block-image aligncenter is-resized"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/cat-chocolate.png' ); ?>" alt="Chocolate" style="width:100px"/></figure>
				<!-- /wp:image -->
				<!-- wp:paragraph {"align":"center",{"align":"center","style":{"typography":{"fontWeight":"600"}}} -->
		<p class="has-text-align-center" style="font-weight:600">Chocolate</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
