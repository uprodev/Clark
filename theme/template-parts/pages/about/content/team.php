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
        <?php foreach ($team as $index => $item) : ?>
          <div class="item">
            <?php if ($item['image']) : ?>
              <figure>
                <a href="#team-<?= $index + 1 ?>" class="fancybox-img">
                  <?php echo wp_get_attachment_image($item['image'], '393x393') ?>
                </a>
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
          <div id="team-<?= $index + 1 ?>" class="popup-team" style="display: none;">

            <?php if ($field = get_field('logo', 'option')): ?>
              <div class="logo-wrap">
                <a href="<?= get_home_url() ?>">
                  <?= wp_get_attachment_image($field, 'full') ?>
                </a>
              </div>
            <?php endif ?>
            
            <div class="content-width">
              <div class="content">
                <div class="text">

                  <?php if ($item['title']) : ?>
                    <p class="name">
                      <?= $item['title']; ?>
                    </p>
                  <?php endif; ?>

                  <?php if ($item['text']) : ?>
                    <p class="info">
                      <?= $item['text']; ?>
                    </p>
                  <?php endif; ?>

                  <?php if ($item['phone'] || $item['email']) : ?>
                    <ul>

                      <?php if ($item['phone']): ?>
                        <li><a href="tel:<?php echo preg_replace('/[^0-9]/', '', $item['phone']); ?>"><img src="<?php echo get_template_directory_uri() . '/img/icon-7-1.svg' ?>" alt=" <?php echo $item['title']; ?>"><?php echo $item['phone']; ?></a></li>
                      <?php endif ?>

                      <?php if ($item['email']): ?>
                        <li><a href="mailto:<?php echo $item['email']; ?>"><img src="<?php echo get_template_directory_uri() . '/img/icon-7-2.svg' ?>" alt="<?php echo $item['title']; ?>"><?php echo $item['email']; ?></a></li>
                      <?php endif ?>

                    </ul>
                  <?php endif; ?>

                </div>

                <?php if (!$item['video'] && $item['image']) : ?>
                  <figure class="mob">
                    <?= wp_get_attachment_image($item['image'], 'full') ?>
                  </figure>
                <?php endif; ?>

              </div>
            </div>
            
            <?php if ($item['video']): ?>

              <figure>
                <div class="video-block">

                  <?php if ($item['video_background']): ?>
                    <div class="bg">
                      <?= wp_get_attachment_image($item['video_background'], 'full') ?>
                    </div>
                  <?php endif ?>

                  <div class="icon-wrap">
                    <img src="<?= get_stylesheet_directory_uri() ?>/img/icon-video.svg" alt="">
                  </div>
                  <video poster="" loop playsinline controls class="video-file"><source src="<?= $item['video']['url'] ?>" type="video/mp4">
                  </video>
                </div>
              </figure>

            <?php elseif ($item['image']) : ?>

              <figure>
                <?= wp_get_attachment_image($item['image'], 'full') ?>
              </figure>

            <?php endif; ?>

          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>