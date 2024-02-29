<?php
$address = get_field('address', 'option');
$phone = get_field('phone', 'option');
$email = get_field('email', 'option');
$socials = get_field('socials', 'option');
$button_footer = get_field('button_footer', 'option');
$questions = get_field('questions', 'option');
?>
<footer>
  <div class="content-width">
    <div class="left">
      <ul>
        <?php if ($address) : ?>
          <li>
            <p>
              <?php echo $address; ?>
            </p>
          </li>
        <?php endif; ?>

        <?php if ($phone || $email) : ?>
          <li>
            <p>E. <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
            <p>T. <a href="tel:<?php echo preg_replace('/[^0-9]/', '', $phone); ?>"><?php echo $phone; ?></a></p>
          </li>
        <?php endif; ?>
        <?php if ($socials) : ?>
          <li>
            <?php foreach ($socials as $item) : ?>
              <p><a href="<?php echo $item['link']; ?>"><span><?php echo $item['name']; ?></span> <img src="<?php echo get_template_directory_uri() . '/img/icon-1.svg' ?>" alt="<?php echo $item['name']; ?>"></a></p>
            <?php endforeach; ?>
          </li>
        <?php endif; ?>
      </ul>
      <?php if ($button_footer) :
        $link_url = $button_footer['url'];
        $link_title = $button_footer['title'];
        $link_target = $button_footer['target'] ? $button_footer['target'] : '_self';
      ?>
        <div class="btn-wrap">
          <a class="btn-default btn-white" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
        </div>
      <?php endif; ?>
    </div>
    <?php if ($questions) : ?>
      <div class="right">
        <ul>
          <?php foreach ($questions as $item) :
            $item_link = $item['link'];
            $link_url = $item_link['url'];
            $link_title = $item_link['title'];
            $link_target = $item_link['target'] ? $item_link['target'] : '_self';
          ?>
            <li><a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?> <img src="<?php echo get_template_directory_uri() . '/img/icon-4.svg' ?>" alt="<?php echo esc_html($link_title); ?>"></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>
  </div>
</footer>