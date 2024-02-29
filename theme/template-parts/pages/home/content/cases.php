<?php

$title_cases = get_field('title-cases');
$cases = get_field('cases');
if ($cases) :
?>
  <section class="cases">
    <?php if ($title_cases) : ?>
      <div class="bg">
        <h2>
          <?php echo $title_cases; ?>
        </h2>
      </div>
    <?php endif; ?>
    <div class="content-width">
      <div class="content">
        <?php foreach ($cases as $item) : ?>
          <div class="item">
            <a href="<?php echo $item['link']; ?>">
              <?php echo wp_get_attachment_image($item['image'], 'full') ?>
              <p><?php echo $item['title']; ?></p>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
<?php endif; ?>