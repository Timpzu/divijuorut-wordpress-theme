<?php get_header(); ?>
  <main>
    <section class="current-article">
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post(); ?>
          <article class="post <?php if (!has_post_thumbnail()) {?> no-article-thumb <?php } ?>">
            <h1><?php the_title()?></h1>
            <p class="post-info"><?php the_time('j.n.Y H:i'); ?> |
              <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                <?php the_author(); ?>
              </a>
            </p>
            <?php the_post_thumbnail('article-thumb'); ?>
            <div class="copy-text"><?php the_content() ?></div>
          </article>
        <?php endwhile;
        else :
          echo "<p>No content found!</p>";
      endif;
      ?>
      <?php get_footer(); ?>
    </section>
  </main>
