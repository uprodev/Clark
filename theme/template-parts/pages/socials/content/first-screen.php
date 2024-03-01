<?php
$title = get_field('title_first_screen');
$sub_title = get_field('subtitle_first_screen');
$text_first_screen = get_field('text_first_screen');
$button_first_first_screen = get_field('button_first_first_screen');
$button_second_first_screen = get_field('button_second_first_screen');
$image_first_screen = get_field('image_first_screen');
?>
<section class="text-img">
  <div class="content-width">
    <div class="content">
      <div class="text">
        <?php if ($sub_title) : ?>
          <p class="top"><?php echo $sub_title; ?></p>
        <?php endif; ?>
        <?php if ($title) : ?>
          <h1>
            <?php echo $title; ?>
          </h1>
        <?php endif; ?>
        <?php if ($text_first_screen) : ?>
            <?php echo $text_first_screen; ?>
        <?php endif; ?>
        <?php if ($button_first_first_screen || $button_second_first_screen) :
          $link_url = $button_first_first_screen['url'];
          $link_title = $button_first_first_screen['title'];
          $link_target = $button_first_first_screen['target'] ? $button_first_first_screen['target'] : '_self';
          $link_url_sec = $button_second_first_screen['url'];
          $link_title_sec = $button_second_first_screen['title'];
          $link_target_sec = $button_second_first_screen['target'] ? $button_second_first_screen['target'] : '_self';
        ?>
          <div class="btn-wrap">
            <a class="btn-default btn-border" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
            <a class="btn-default" href="<?php echo esc_url($link_url_sec); ?>" target="<?php echo esc_attr($link_target_sec); ?>"><?php echo esc_html($link_title_sec); ?></a>
          </div>
        <?php endif; ?>
      </div>
      <?php if ($image_first_screen) : ?>
        <figure>
          <?php echo wp_get_attachment_image($image_first_screen, 'full'); ?>
        </figure>
      <?php endif; ?>
    </div>
  </div>
</section>