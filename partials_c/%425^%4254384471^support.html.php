<div class="content_wrap">
	<div class="support_wrap">
		<div class="content_title">Поддержка</div>
		<div style="display: table; width: 100%; margin-top: 15px;">
			<div style="display: table-cell; vertical-align: top;">
				<div class="btn_primary" onclick="support.create_window();" style="line-height: 30px; height: 30px; padding: 0 15px;">Создать</div>
			</div>
			<div style="display: table-cell; vertical-align: top; text-align: right;">
				<div class="selector" style="display: inline-block; position: relative; margin-right: 6px; width: 100px;" onclick="common.results_toggle(this, event);">
					<input type="text" class="input_primary" value="<?php if (self::$_tpl_vars['status'] == 'archive'): ?>Архив<?php else: ?>Открытые<?php endif; ?>" autocomplete="off" autocorrect="off" autocapitalize="off" disabled style="height: 30px; line-height: 30px; border-color: #cacfd5; cursor: pointer; font-size: 12px;">
					<input type="hidden" id="type_id" value="<?php if (self::$_tpl_vars['status'] == 'archive'): ?>2<?php else: ?>0<?php endif; ?>">
					<i class="icon icon_expand" style="position: absolute; top: 1px; right: 0px; font-size: 17px; cursor: pointer; line-height: 29px; padding: 0 12px;"></i>
					<div class="results_container" style="top: 29px;">
						<div class="result_item" onclick="common.result_select(this, 'Открытые', 0, 'full'); support.archive_toggle('active');" style="text-align: left;">Открытые</div>
						<div class="result_item" onclick="common.result_select(this, 'Архив', 2, 'full'); support.archive_toggle('archive');" style="text-align: left;">Архив</div>
					</div>
				</div>
				<span id="support_paginator"><?php echo self::$_tpl_vars['paginator']; ?>
</span>
			</div>
		</div>
		<div id="support_table"><?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>"./partials/section/support/support_table.html", 'vars'=>[]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?></div>
	</div>
</div>