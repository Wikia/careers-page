<?php if(class_exists('ShareButtons')): ?>

<div class="share-wrapper">
	<div class="share-icons-row">
		<?php
		$shareButtons = ShareButtons::get_share_buttons();
		foreach( $shareButtons as $shareButton ): ?>
			<a href="<?php echo $shareButton['url']; ?>" class="<?php echo $shareButton['class']; ?>" target="_blank">&nbsp;</a>
		<?php endforeach; ?>
	</div>
</div>

<?php endif; ?>