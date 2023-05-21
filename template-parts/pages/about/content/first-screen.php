<?php
$subtitle_first_screen = get_field('subtitle_first_screen');
$title_first_screen = get_field('title_first_screen');
$text_first_screen = get_field('text_first_screen');
?>
<section class="about-head">
  <div class="content-width">
    <div class="content">
      <?php if ($subtitle_first_screen) : ?>
        <p class="top"><?php echo $subtitle_first_screen; ?></p>
      <?php endif; ?>
      <?php if ($title_first_screen) : ?>
        <h1>
          <?php echo $title_first_screen; ?>
        </h1>
      <?php endif; ?>
      <?php if ($text_first_screen) : ?>
        <div class="">
          <?php echo $text_first_screen; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>