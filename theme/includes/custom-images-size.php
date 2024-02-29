<?php
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

/*Custom Images Size*/
if (function_exists('add_image_size')) {
  add_image_size('393x393', 393, 393, true);
  add_image_size('logo_size', 200, 45, false);
}
/*Custom Images Size*/