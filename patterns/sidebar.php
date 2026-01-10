<?php
/**
 * Title: Sidebar
 * Slug: zamkai-fse/sidebar
 * Categories: Uncategorized
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small","top":"var:preset|spacing|x-small"}}},"backgroundColor":"zk-alt-text","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-zk-alt-text-background-color has-background" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:search {"label":"<?php echo esc_attr__( 'Search', 'zamkai-fse' ); ?>","showLabel":false,"buttonText":"<?php echo esc_attr__( 'Search', 'zamkai-fse' ); ?>","buttonPosition":"button-inside","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} /-->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading"><?php echo esc_html__( 'Categories', 'zamkai-fse' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:categories /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading"><?php echo esc_html__( 'Recent Posts', 'zamkai-fse' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:latest-posts {"displayPostDate":true,"columns":2,"style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading"><?php echo esc_html__( 'Socials', 'zamkai-fse' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:social-links {"iconColor":"zk-primary","iconColorValue":"#e60000","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->

<!-- wp:social-link {"url":"https://twitter.com","service":"x"} /-->

<!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->

<!-- wp:social-link {"url":"https://linkedin.com","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}},"border":{"radius":{"bottomLeft":"8px","bottomRight":"8px"}}},"backgroundColor":"zk-dark-background","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-zk-dark-background-background-color has-background" style="border-bottom-left-radius:8px;border-bottom-right-radius:8px;padding-top:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small)"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|zk-alt-text"}}}},"textColor":"zk-alt-text"} -->
<p class="has-text-align-center has-zk-alt-text-color has-text-color has-link-color"><?php echo esc_html__( 'Make sure you...', 'zamkai-fse' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|zk-alt-text"}}},"spacing":{"padding":{"top":"var:preset|spacing|tiny","bottom":"var:preset|spacing|tiny"}}},"textColor":"zk-alt-text","fontSize":"big"} -->
<h4 class="wp-block-heading has-text-align-center has-zk-alt-text-color has-text-color has-link-color has-big-font-size" style="padding-top:var(--wp--preset--spacing--tiny);padding-bottom:var(--wp--preset--spacing--tiny)"><?php echo sprintf( esc_html__( 'Subscribe To %s', 'zamkai-fse' ), '<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-zk-primary-color">' . esc_html__( 'TechGrill', 'zamkai-fse' ) . '</mark>' ); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group -->