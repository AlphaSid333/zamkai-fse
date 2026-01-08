<?php
/**
 * Title: 404 Section
 * Slug: zamkai-fse/404
 * Categories: Uncategorized
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|regular","bottom":"var:preset|spacing|regular"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--regular);padding-bottom:var(--wp--preset--spacing--regular)"><!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center"><?php echo sprintf( esc_html__( "You've run Into %s", 'zamkai-fse' ), '<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-zk-primary-color">' . esc_html__( 'Nothingness', 'zamkai-fse' ) . '</mark>' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"10rem","fontStyle":"normal","fontWeight":"500"}},"fontFamily":"instrument-sans"} -->
<h2 class="wp-block-heading has-text-align-center has-instrument-sans-font-family" style="font-size:10rem;font-style:normal;font-weight:500">404</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'Try doing a search?', 'zamkai-fse' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_attr__( 'Try searching for something?', 'zamkai-fse' ); ?>","showLabel":false,"width":619,"widthUnit":"px","buttonText":"<?php echo esc_attr__( 'Search', 'zamkai-fse' ); ?>","align":"center"} /--></div>
<!-- /wp:group -->