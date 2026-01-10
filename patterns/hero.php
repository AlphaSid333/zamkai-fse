<?php
/**
 * Title: Hero Section
 * Slug: zamkai-fse/hero
 * Categories: Uncategorized
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/hero.png' ) ); ?>","id":23,"dimRatio":70,"customOverlayColor":"#000000","isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":0.69999999999999996},"minHeight":670,"minHeightUnit":"px","contentPosition":"center center","sizeSlug":"large","align":"full","style":{"color":{"duotone":"unset"}},"layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull" style="min-height:670px"><img class="wp-block-cover__image-background wp-image-23 size-large" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero.png' ) ); ?>" style="object-position:50% 70%" data-object-fit="cover" data-object-position="50% 70%"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim" style="background-color:#000000"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","fontSize":"ginormasauras"} -->
<h2 class="wp-block-heading has-text-align-center has-ginormasauras-font-size"><?php echo esc_html__( 'The Philosophy of Grit', 'zamkai-fse' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<p class="has-text-align-center" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><?php echo esc_html__( 'Against all odds, you sail the sea. Hardships befall, such is the Zamkai Odyssey', 'zamkai-fse' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":{"topLeft":"0.5rem","topRight":"0.5rem","bottomLeft":"0.5rem","bottomRight":"0.5rem"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="border-top-left-radius:0.5rem;border-top-right-radius:0.5rem;border-bottom-left-radius:0.5rem;border-bottom-right-radius:0.5rem"><?php echo esc_html__( 'Learn More', 'zamkai-fse' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->