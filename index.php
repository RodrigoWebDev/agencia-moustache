
<?php 

/*
 Template Name: Home Page
*/

get_header()

?>

<main role="main">
<seciion class="hero">
  <img src="<?php the_field("banner");?>" alt="banner" />
  <div class="hero-caption">
    <img src="<?php the_field("slogan");?>" alt="slogan">
  </div>
</div>
</section>

<section class="marketing">
  <div class="container">
    <h2 class="title"><?php the_field("title-conteudo-interno");?></h2>
    <div class="row cards">
      <?php $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1));
        if ( $wpb_all_query->have_posts() ) :
          while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post();
            get_template_part( 'content', get_post_format() );
        endwhile;
        wp_reset_postdata();
        else : ?>
          <p><?php _e( 'Sem posts! :(' ); ?></p>
      <?php endif; ?>
    </div>
  </div>
</section>

<section>
  <div class="container">
  <?php get_template_part( 'form', get_post_format() ); ?>
</section>

<?php get_footer()?>