<div class="top_menu_item" id="notifications_button_item" style="right: 50px;" onclick="owner.notifications_popup_toggle();">
	<div class="icon icon_bell" style="font-size: 22px; color: <?php if (self::$_tpl_vars['owner']['count_notifications']): ?>#04368f<?php else: ?>#8e99b5<?php endif; ?>;">
		<?php if (self::$_tpl_vars['owner']['count_notifications'] > 0): ?>
		<div class="notifications_count"><?php if (self::$_tpl_vars['owner']['count_notifications'] >= 100): ?>99+<?php else: ?><?php echo self::$_tpl_vars['owner']['count_notifications']; ?>
<?php endif; ?></div>
		<?php endif; ?>
	</div>
</div>