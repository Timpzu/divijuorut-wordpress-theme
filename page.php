<?php get_header(); ?>
  <main>
    <section id="articles">
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post(); ?>
          <article>
            <h2><a href="<?php the_permalink() ?>"><?php the_title()?></a></h2>
            <p><?php the_content() ?></p>
          </article>
        <?php endwhile;
        else :
          echo "<p>No content found!</p>";
      endif;
      ?>
      <?php get_footer(); ?>
    </section>
  </main>
