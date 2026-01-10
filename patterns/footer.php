<?php
/**
 * Title: Footer
 * Slug: zamkai-fse/footer
 * Categories: footer
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0rem","bottom":"0rem","left":"0rem","right":"0rem"}}},"backgroundColor":"zk-background","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-zk-background-background-color has-background" style="padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem"><!-- wp:columns {"style":{"spacing":{"padding":{"right":"var:preset|spacing|regular","left":"var:preset|spacing|regular","top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}}} -->
<div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--regular);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--regular)"><!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:heading {"textAlign":"center","level":4} -->
<h4 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Quick Links', 'zamkai-fse' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:navigation {"ref":4,"layout":{"type":"flex","justifyContent":"center"}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|zk-text"}}}},"textColor":"zk-text"} -->
<h2 class="wp-block-heading has-text-align-center has-zk-text-color has-text-color has-link-color"><?php echo sprintf( esc_html__( '%s FSE', 'zamkai-fse' ), '<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-zk-primary-color">' . esc_html__( 'ZAMKAI', 'zamkai-fse' ) . '</mark>' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'Subscribe to TechGrill!', 'zamkai-fse' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:heading {"textAlign":"center","level":4} -->
<h4 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Follow Us', 'zamkai-fse' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:social-links {"iconColor":"zk-secondary","iconColorValue":"#6A0000","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->

<!-- wp:social-link {"url":"https://twitter.com","service":"x"} /-->

<!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->

<!-- wp:social-link {"url":"https://linkedin.com","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
<hr class="wp-block-separator alignfull has-alpha-channel-opacity" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|x-small"}}}} -->
<p class="has-text-align-center" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--x-small)"><?php echo sprintf( esc_html__( '© %d Zamkai FSE All rights reserved.', 'zamkai-fse' ), date_i18n( 'Y' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->