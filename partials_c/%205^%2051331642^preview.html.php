<div style="background: #eee; border: 1px solid #c7d0d7; border-radius: 3px; overflow: hidden; height: <?php if (self::$_tpl_vars['label']['type_id'] == 4): ?>334<?php else: ?>415<?php endif; ?>px; width: 100%; position: relative;">
	<div id="label_preview" style="position: absolute; left: 50%; top: 50%; width: 0; height: 0; transform: scale(0.5); margin-left: <?php echo self::$_tpl_vars['label']['preview_left']; ?>
px; margin-top: <?php echo self::$_tpl_vars['label']['preview_top']; ?>
px;">
		<?php echo self::$_tpl_vars['label_preview']; ?>

	</div>
</div>