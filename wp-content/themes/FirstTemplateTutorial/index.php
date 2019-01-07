<?php get_header(); ?>
<!-- Test Kommentar !-->
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

      <div id="sidebar"><?php get_sidebar(); ?></div>

<?php get_footer(); ?>
