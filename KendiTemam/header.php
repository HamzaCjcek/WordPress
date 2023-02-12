<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title('|',true,'right');?></title>
    <?php wp_head(); ?>

  </head>
  <body>

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <?php $ust_panel_logo =get_field('ust_panel_logo','option');?>
        <img class="logo" src="<?php echo $ust_panel_logo['url'];?>">

        <!--<a class="navbar-brand" href="#">Navbar</a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"><?php the_field('ust_panel','option'); ?><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><?php the_field('ust_panel_2','option'); ?></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php the_field('ust_panel_3','option'); ?>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#"><?php the_field('ust_panel_3_alt','option'); ?></a>
                <a class="dropdown-item" href="#"><?php the_field('ust_panel_3_alt_2','option'); ?></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><?php the_field('ust_panel_3_alt_3','option'); ?></a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><?php the_field('ust_panel_4','option'); ?></a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Haber Ve Konu Ara" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Ara</button>
          </form>
        </div>
      </nav>
