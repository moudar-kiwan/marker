<div class="content_wrap">
	<div class="content_title">Этикетки</div>
	<div style="display: table; width: 100%; margin-top: 15px;">
		<div style="display: table-cell; vertical-align: top;">
			<a class="btn_primary" href="/labels?act=edit" style="line-height: 30px; height: 30px;">Добавить</a>
		</div>
		<div style="display: table-cell; vertical-align: top; text-align: right;">
			<span id="labels_paginator"></span>
		</div>
	</div>
	<div id="labels_table" style="margin-top: 10px;"><?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>"./partials/section/labels/labels_table.html", 'vars'=>[]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?></div>
</div>