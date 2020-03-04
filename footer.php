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
    <?php wp_footer(); ?>
  </body>
</html>
