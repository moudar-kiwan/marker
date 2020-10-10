<div class="content_wrap">
    <div style="font-size: 18px; color: #04368f; font-weight: 400;">Редактор этикетки</div>
	<div style="width: 100%; display: table; table-layout: fixed; margin-top: 20px;">
		<div id="params"><?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>"./partials/section/labels/label_edit/params.html", 'vars'=>[]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?></div>
		<div style="display: table-cell; vertical-align: top; width: 55%;">
			<div id="preview"><?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>"./partials/section/labels/label_edit/preview.html", 'vars'=>[]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?></div>
			<div id="params_optional"><?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>"./partials/section/labels/label_edit/params_optional.html", 'vars'=>[]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?></div>
		</div>
	</div>
</div>