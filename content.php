<div class="col-lg-4">
  <div class="custom-card">
    <?php the_post_thumbnail(); ?>
    <div class="custom-card-container">
      <h2><?php the_title(); ?></h2>
      <p><?php the_content(); ?></p>
      <a class="custom-btn" href="<?php the_permalink(); ?>" role="button">Link Externo</a>
    </div>
  </div>
</div>
