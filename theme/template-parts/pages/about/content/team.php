<?php
$title = get_field('title_team');
$sub_title = get_field('subtitle_team');
$team = get_field('team');
if ($team) :
?>
  <section class="team">
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
        <?php foreach ($team as $item) : ?>
          <div class="item">
            <?php if ($item['image']) : ?>
              <figure>
                <?php echo wp_get_attachment_image($item['image'], '393x393') ?>
              </figure>
            <?php endif; ?>
            <div class="text">
              <?php if ($item['title']) : ?>
                <h6>
                  <?php echo $item['title']; ?>
                </h6>
              <?php endif; ?>
              <?php if ($item['text']) : ?>
                <p>
                  <?php echo $item['text']; ?>
                </p>
              <?php endif; ?>
              <?php if ($item['phone'] || $item['email']) : ?>
                <ul>
                  <li><a href="tel:<?php echo preg_replace('/[^0-9]/', '', $item['phone']); ?>"><img src="<?php echo get_template_directory_uri() . '/img/icon-7-1.svg' ?>" alt=" <?php echo $item['title']; ?>"><?php echo $item['phone']; ?></a></li>
                  <li><a href="mailto:<?php echo $item['email']; ?>"><img src="<?php echo get_template_directory_uri() . '/img/icon-7-2.svg' ?>" alt="<?php echo $item['title']; ?>"><?php echo $item['email']; ?></a></li>
                </ul>
              <?php endif; ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
<?php endif; ?>