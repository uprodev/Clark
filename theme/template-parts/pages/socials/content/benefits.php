<?php
$title = get_field('title_benefits');
$benefits = get_field('benefits');
if ($benefits) :
  ?>
  <section class="title-text">
    <div class="content-width">
      <div class="content">
        <div class="title">
          <?php if ($title) : ?>
            <h2>
              <?php echo $title; ?>
            </h2>
          <?php endif; ?>
        </div>
        <div class="text">
          <ul>
            <?php foreach ($benefits as $item) : ?>
              <li>

                <?php if ($item['info']): ?>
                  <div class="text-info"><span><?= $item['info'] ?></span></div>
                <?php endif ?>
                
                <h6><?php echo wp_get_attachment_image($item['image'], 'full') ?> <?php echo $item['title']; ?></h6>
                <p>
                  <?php echo $item['text']; ?>
                </p>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>