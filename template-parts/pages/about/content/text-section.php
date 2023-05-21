<?php
$text_text_section = get_field('text_text_section');
if ($text_text_section) :
?>
  <section class="tex-bg">
    <div class="content-width">
      <div class="content">
        <?php echo $text_text_section; ?>
      </div>
    </div>
  </section>
<?php endif; ?>