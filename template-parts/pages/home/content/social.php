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
        <?php foreach ($socials as $item) :
          $item_link = $item['link'];
          $link_url = $item_link['url'];
        ?>
          <div class="item">
            <a href="<?php echo esc_url($link_url); ?>">
              <figure>
                <?php echo wp_get_attachment_image($item['image'], 'full'); ?>
              </figure>
              <h4><?php echo $item['title']; ?></h4>
              <p>
                <?php echo $item['texty']; ?>
              </p>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
<?php endif; ?>