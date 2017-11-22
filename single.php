<?php get_header(); ?>
  <main>
    <section id="current-article">
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
            <div class="copy-text">
              <?php the_content() ?>
              <p id="post-author"><?php the_author(); ?></p>
            </div>
            <?php comments_template(); ?>
          </article>
        <?php endwhile;
        else :
          echo "<p>No content found!</p>";
      endif;
      ?>
    </section>
  </main>
  <?php get_footer(); ?>
