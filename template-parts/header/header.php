<?php
$logo = get_field('logo', 'option');
$title_header_menu = get_field('title-header-menu', 'option');
$text_header_menu = get_field('text-header-menu', 'option');
$button_header_menu = get_field('button_header_menu', 'option');
$address = get_field('address', 'option');
$phone = get_field('phone', 'option');
$email = get_field('email', 'option');
$socials = get_field('socials', 'option');
?>
<header>
  <div class="top-line">
    <div class="content-width">
      <div class="logo-wrap">
        <?php
        if ($logo) :
          $logo_size = 'logo_size';
          $logo_url = wp_get_attachment_image_url($logo, $logo_size);
          $logo_alt = get_post_meta($logo, '_wp_attachment_image_alt', true);
          $home_url = (is_front_page()) ? '#page' : get_home_url();
        ?>
          <figure>
            <a href="<?php echo $home_url; ?>">
              <?php if (strripos($logo_url, '.svg')) : ?>
                <img src="<?php echo $logo_url; ?>" alt="<?php echo $logo_alt ?>" width="200" height="45">
              <?php else : ?>
                <?php echo wp_get_attachment_image($logo, $logo_size); ?>
              <?php endif; ?>
              <span class="open-menu">
                <img src="<?php echo get_template_directory_uri() . '/img/menu.svg' ?>" alt="<?php the_title(); ?>">
              </span>
            </a>
          </figure>
        <?php endif; ?>
      </div>
    </div>
  </div>
</header>


<div class="menu-responsive" id="menu-responsive" style="display: none">
  <div class="top">
    <div class="close-menu">
      <a href="#"><img src="<?php echo get_template_directory_uri() . '/img/close.svg' ?>" alt="<?php the_title(); ?>"></a>
    </div>
  </div>
  <div class="wrap">
    <?php
    wp_nav_menu([
      'theme_location' => 'menu-1',
      'menu' => 'menu-1',
      'container' => false,
      'container_class' => '',
      'menu_class' => 'mob-menu',
      'echo' => true,
      'fallback_cb' => 'menu-1',
      'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    ]);
    ?>
    <div class="text-wrap">
      <?php if ($title_header_menu) : ?>
        <h4>
          <?php echo $title_header_menu; ?>
        </h4>
      <?php endif; ?>
      <?php if ($text_header_menu) : ?>
        <p>
          <?php echo $text_header_menu; ?>
        </p>
      <?php endif; ?>
      <ul class="contact">
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
      </ul>
      <?php if ($socials) : ?>
        <ul class="soc">
          <?php foreach ($socials as $item) : ?>
            <li><a href="<?php echo $item['link']; ?>"><span><?php echo $item['name']; ?></span> <img src="<?php echo get_template_directory_uri() . '/img/icon-1.svg' ?>" alt="<?php echo $item['name']; ?>"></a></li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
      <?php if ($button_header_menu) :
        $link_url = $button_header_menu['url'];
        $link_title = $button_header_menu['title'];
        $link_target = $button_header_menu['target'] ? $button_header_menu['target'] : '_self';
      ?>
        <div class="btn-wrap">
          <a class="btn-default btn-white" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
        </div>
      <?php endif; ?>
    </div>
  </div>

</div>