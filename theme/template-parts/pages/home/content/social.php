<?php
$title = get_field('title-social');
$sub_title = get_field('subtitle-social');
$socials = get_field('socials');
if ($socials) :
  ?>
  <section class="soc-section">
    <div class="content-width">
      <?php if ($sub_title) : ?>
        <p class="top"><?php echo $sub_title; ?></p>
      <?php endif; ?>
      <?php if ($title) : ?>
        <h2>
          <?php echo $title; ?>
        </h2>
      <?php endif; ?>
      <div class="content">
        <?php foreach ($socials as $item) : ?>
          <div class="item-progress">
            <figure>
              <?php echo wp_get_attachment_image($item['image'], 'full'); ?>
            </figure>
            <div class="point">
              <span></span>
            </div>
            <h6 class="title"><?php echo $item['title']; ?></h6>
            <p>
              <?php echo $item['texty']; ?>
            </p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>