<?php



get_header();
// Start the loop.
while ( have_posts() ) : the_post();

?>
  <section >
    <?php 
      $post_id = get_the_ID();
      $post_meta = get_post_meta( $post->ID,  'golf_courses_custom_field', true );
    ?>
    <article class="posts__item">
    <div style="display:flex;flex-direction:column; align-items:center" >
      <div style="width: 50%">
        <?php if (isset($post_meta['text']) && $post_meta['text'] != '' ): ?>
          <script defer="" type="text/javascript" src="https://paim.rezdy.com/pluginJs"></script>
          <iframe seamless="" width="100%" height="1000px" frameborder="0" class="rezdy" src="https://paim.rezdy.com/273847/<?php echo $post_meta['text']; ?>?iframe=true"></iframe>
        <?php endif; ?>
      </div>
    </div>

      <?php the_title(); ?>
      <?php the_content(); ?>
      <?php the_permalink(); ?>
      <time class="posts__date" datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished" ><?php echo get_the_date(); ?></time>
    </article>
  </section>
<?php 
endwhile;
?>
<?php
get_footer(); ?>