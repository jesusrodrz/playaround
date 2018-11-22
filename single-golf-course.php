<?php
/*
 * Template Name: Post notice
 * Template Post Type: post
 */

get_header();
// Start the loop.
while ( have_posts() ) : the_post();

?>
<?php 
endwhile;
?>
<section >
  <?php 
  $args = array(
    'posts_per_page' => 15,
    'post_type' => 'golf_courses',
    'post_status' => 'publish'
  );
  
  $posts = new WP_Query($args);
  
  ?>
  <?php
  if( $posts->have_posts() ): while( $posts->have_posts() ) : $posts->the_post();
  $post_id = get_the_ID();
  $post_meta = get_post_meta( $post->ID,  'golf_courses_custom_field', true );
  ?>
  <article class="posts__item">
  <?php if (isset($post_meta['text']) && $post_meta['text'] != '' ): ?>
    <script defer="" type="text/javascript" src="https://paim.rezdy.com/pluginJs"></script>
    <iframe seamless="" width="100%" height="1000px" frameborder="0" class="rezdy" src="<?php echo $post_meta['text']; ?>"></iframe>
  <?php endif; ?>

    <?php the_title(); ?>
    <?php the_content(); ?>
    <?php the_permalink(); ?>
    <time class="posts__date" datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished" ><?php echo get_the_date(); ?></time>
  </article>
  <?php 
endwhile;
endif
?>
</section>
<?php
get_footer(); ?>