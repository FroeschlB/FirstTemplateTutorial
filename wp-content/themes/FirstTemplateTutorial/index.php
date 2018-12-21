<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//DE" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="de">

  <head profile="http://gmpg.org/xfn/11">

  </head>

  <body>
    <div id="wrapprer">

      <div id="header">

      </div>

      <div id="main">
        <?php if (have_posts()) :
          while (have_posts()) : the_post(); ?>
            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
            <div class="entry">
              <?php the_content(); ?>
            </div>
          <?php endwhile; ?>
          <p align="center">
            <?php next_posts_link('Ältere Einträge') ?> | <? php previous_posts_link('Neuere Einträge') ?>
          </p>
        <?php endif; ?>
      </div>

      <div id="sidebar">

      </div>

      <div id="footer">

      </div>

    </div>

  </body>

</html>
