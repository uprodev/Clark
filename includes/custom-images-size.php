<?php
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

/*Custom Images Size*/
if (function_exists('add_image_size')) {
  add_image_size('320x170', 320, 170, true);

  add_image_size('logo_size', 165, 48, false);
}
/*Custom Images Size*/