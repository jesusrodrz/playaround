<?php
/**
 * Template Name: Modelos
 * @since 1.0
 * @version 1.0
 */

get_header();
?>
<?php 
  if ( have_posts() ) : 
    while ( have_posts() ) : the_post();
    $post_id = get_the_ID();
    // $post_meta = get_post_meta( $post->ID,  'modelos_custom_field', true ); 
      
  ?> 
    <script defer="" type="text/javascript" src="https://paim.rezdy.com/pluginJs"></script>
    <iframe seamless="" width="100%" height="1000px" frameborder="0" class="rezdy" src="https://paim.rezdy.com/catalog/296260/golf-course?iframe=true""></iframe> 
  <?php 
  endwhile;
  endif;
?>
<?php 
 
get_footer();