<div class="comments-area">
  <?php if( have_comments()) : ?>
    <h3 class="comments-title">
      <?php comments_number('Kommentit(0)', 'Kommentit(1)', 'Kommentit(%)') ?>
    </h3>
    <ol class="comment-list">
      <?php
        wp_list_comments(array(
          'style' => 'ol',
          'short_ping' => true,
          'avatar_size' => 60,
        ));
       ?>
    </ol>
  <?php endif; ?>
  <?php comment_form(); ?>
</div>
