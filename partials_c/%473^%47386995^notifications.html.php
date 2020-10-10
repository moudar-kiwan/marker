<div class="content_wrap">
	<div class="notifications_wrap">
		<div style="display: table; width: 100%;">
			<div class="content_title" style="display: table-cell; vertical-align: top;">Уведомления</div>
			<div style="display: table-cell; vertical-align: top; text-align: right;">
				<span id="notifications_paginator"><?php echo self::$_tpl_vars['paginator']; ?>
</span>
			</div>
		</div>
		<div id="notifications_table"><?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>"./partials/section/notifications/notifications_table.html", 'vars'=>[]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?></div>
	</div>
</div>