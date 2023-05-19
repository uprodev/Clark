<?php
$title = get_field('title_about');
$sub_title = get_field('subtitle_about');
$text_about = get_field('text_about');
$benefits_about = get_field('benefits_about');
$form_title_about = get_field('form_title_about');
$contact_form_shortcode = get_field('contact_form_shortcode');
?>
<section class="about">
  <div class="content-width">
    <div class="content">
      <?php if ($contact_form_shortcode) : ?>
        <div class="form-wrap">
          <?php if ($form_title_about) : ?>
            <h3>
              <?php echo $form_title_about; ?>
            </h3>
          <?php endif; ?>
          <?php echo do_shortcode($contact_form_shortcode); ?>
        </div>
      <?php endif; ?>
      <div class="text-wrap">
        <?php if ($sub_title) : ?>
          <p class="top">
            <?php echo $sub_title; ?>
          </p>
        <?php endif; ?>
        <?php if ($title) : ?>
          <h2>
            <?php echo $title; ?>
          </h2>
        <?php endif; ?>
        <?php if ($text_about) : ?>
          <div class="">
            <?php echo $text_about; ?>
          </div>
        <?php endif; ?>
        <?php if ($benefits_about) : ?>
          <ul>
            <?php foreach ($benefits_about as $item) : ?>
              <li>
                <figure>
                  <?php echo wp_get_attachment_image($item['image'], 'full') ?>
                </figure>
                <h6><?php echo $item['title']; ?></h6>
                <p>
                  <?php echo $item['text']; ?>
                </p>
              </li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>