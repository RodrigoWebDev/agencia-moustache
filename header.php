<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <?php wp_head();?>
    <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>"/>
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/slick.css" />
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/main.css" />
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top">
        <a href="<?php echo get_bloginfo( 'wpurl' );?>"><img class="logo" src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/icon.jpg"/></a>
        <button
          class="navbar-toggler nav-toggle"
          type="button"
          data-toggle="collapse"
          data-target="#navbarCollapse"
          aria-controls="navbarCollapse"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <?php wp_list_pages( '&title_li=' ); ?>
          </ul>
          <form class="form-inline mt-2 mt-md-0 search-form">
            <input
              class="form-control mr-sm-2 input"
              type="text"
              placeholder="Buscar"
              aria-label="Buscar"
            />
            <img class="search-icon" src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/lupa.jpg" alt="search icon" />
          </form>
        </div>
      </nav>
    </header>