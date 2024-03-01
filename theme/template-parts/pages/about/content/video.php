<section class="video-section">
	<div class="video-block">

		<?php if ($field = get_field('background_2')): ?>
			<div class="bg">
				<?= wp_get_attachment_image($field['ID'], 'full') ?>
			</div>
		<?php endif ?>
		
		<div class="icon-wrap">
			<img src="<?= get_stylesheet_directory_uri() ?>/img/icon-video.svg" alt="">
		</div>

		<?php if ($field = get_field('video_2')): ?>
			<video loop playsinline controls class="video-file"><source src="<?= $field['url'] ?>" type="video/mp4">
			</video>
		<?php endif ?>

	</div>
</section>