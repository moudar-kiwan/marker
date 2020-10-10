<div class="content_wrap">
	<div class="support_wrap">
		<div style="display: table; width: 100%;">
			<div style="display: table-cell; vertical-align: middle; width: 80%; padding: 0 15px 0 0;"><div class="content_title"><?php echo self::$_tpl_vars['support']['title']; ?>
</div></div>
			<div style="display: table-cell; vertical-align: middle; width: 20%; text-align: right;"><div class="btn_primary" onclick="document.location.href = '/support';" style="line-height: 30px; height: 30px; padding: 0 15px;">Назад</div></div>
		</div>
		<div style="width: 100%; margin-top: 15px; border-bottom: 1px solid #dce4ea; padding: 0 0 15px 0;">
			<span style="display: inline-block; margin: 0 25px 0 0; font-size: 14px; color: #8a959b;">№ <?php echo self::$_tpl_vars['support']['id']; ?>
</span>
			<span style="display: inline-block; margin: 0 25px 0 0; font-size: 14px; color: #8a959b;">Открыт: <?php echo self::$_tpl_vars['support']['created']; ?>
</span>
			<?php if (self::$_tpl_vars['support']['status'] == "Закрыт"): ?>
			<span style="font-size: 14px; color: #8a959b;">Закрыт: <?php echo self::$_tpl_vars['support']['updated']; ?>
</span>
			<?php endif; ?>
			<?php if (self::$_tpl_vars['support']['status'] != "Закрыт" && self::$_tpl_vars['support']['updated'] != 0): ?>
			<span style="font-size: 14px; color: #8a959b;">Обновлен: <?php echo self::$_tpl_vars['support']['updated']; ?>
</span>
			<?php endif; ?>
		</div>
		<div id="support_ticket_table"><?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>"./partials/section/support/support_ticket_table.html", 'vars'=>[]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?></div>
	</div>
</div>	