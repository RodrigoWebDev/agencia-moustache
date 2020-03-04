      <section class="section">
        <div class="container">
          <div class="row">  
            <?php 
              for($i = 0; $i < 3; $i++){
                get_template_part( 'secao', get_post_format() );
              }
            ?>
          </div>
        </div>
      </section>

      <footer class="footer">
        <div>
          <?php the_field("footer-esquerda");?>
        </div>
        <div>
          <?php the_field("footer-direita");?>
        </div>
      </footer>       
    </main>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/jquery.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/inputmask.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/bootstrap.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/slick.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/main.js"></script>
  </body>
</html>
