<?php get_header(); ?>
  <main>
    <section id="articles">
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post(); ?>
          <article class="headline <?php if (has_post_thumbnail()) {?> has-thumb <?php } ?>">
            <a href="<?php the_permalink() ?>">
              <div class="fronpage-image-container">
                <span class="mask"></span>
                <?php the_post_thumbnail('frontpage-thumb'); ?>
              </div>
              <h2><?php the_title()?></h2>
              <?php echo get_first_lines(); ?>
            </a>
          </article>
        <?php endwhile;
        else :
          echo "<p>No content found!</p>";
      endif;
      ?>
    </section>
  </main>
<?php get_footer(); ?>
