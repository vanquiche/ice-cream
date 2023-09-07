<?php

/**
 * Title: Profile Banner
 * Slug: ice-cream/profile-banner
 * Categories: banner
 * Keywords: Profile banner
 */
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"stretch","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
  <!-- wp:image {"width":150,"aspectRatio":"1","scale":"cover","sizeSlug":"large"} -->
  <figure class="wp-block-image size-large is-resized"><img src="http://placekitten.com/200/200" alt="" style="aspect-ratio:1;object-fit:cover;width:150px" width="150" /></figure>
  <!-- /wp:image -->
  <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"base","textColor":"contrast","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","flexWrap":"wrap"}} -->
  <div class="wp-block-group has-contrast-color has-base-background-color has-text-color has-background" style="padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.3"}},"fontSize":"2-extra-large"} -->
    <h2 class="wp-block-heading has-2-extra-large-font-size" style="margin-top:0;margin-bottom:0;line-height:1.3"><?php echo esc_html_x('Jaqen H\'ghar', 'ice-cream'); ?></h2>
    <!-- /wp:heading -->
    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"italic","fontWeight":"300"}},"fontSize":"medium"} -->
    <p class="has-medium-font-size" style="margin-top:0;margin-bottom:0;font-style:italic;font-weight:300"><?php echo esc_html_x('All men must die.', 'ice-cream'); ?></p>
    <!-- /wp:paragraph -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->