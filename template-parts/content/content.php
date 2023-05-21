<?php
$id = get_the_ID();
$title = get_the_title($id);
$text = get_the_content();
$image = get_field('image');
$text_small = get_field('text');
$benefits = get_field('benefits');
$contact_form_shortcode = get_field('contact_form_shortcode');
?>
<section class="case-inner">
  <div class="content-width">
    <div class="content">
      <h1><?php echo $title; ?></h1>
      <div class="">
        <?php echo wpautop(get_the_content()); ?>
      </div>
      <div class="bg">
        <?php if ($image) : ?>
          <figure>
            <?php echo wp_get_attachment_image($image, 'full') ?>
          </figure>
        <?php endif; ?>
        <?php if ($text_small) : ?>
          <div class="">
            <?php echo $text_small; ?>
          </div>
        <?php endif; ?>
        <?php if ($benefits) :
          $counter = 1;
        ?>
          <div class="number-wrap">
            <?php foreach ($benefits as $item) : ?>
              <div class="item item-<?php echo $counter; ?>">
                <h6><?php echo $item['title']; ?></h6>
                <p><?php echo $item['text']; ?></p>
              </div>
            <?php
              $counter++;
            endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php if ($contact_form_shortcode) : ?>
  <section class="section-form">
    <div class="bg"></div>
    <div class="content-width">
      <div class="content">
        <?php echo do_shortcode($contact_form_shortcode); ?>
      </div>
    </div>
  </section>
<?php endif; ?>