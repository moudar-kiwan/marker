<div class="content_wrap" style="margin-bottom: 80px;">
    <div style="width: 100%; min-height: 300px;">
		<div class="content_title">Отсканировано</div>
		<div style="display: table; width: 100%; margin-top: 15px;">
			<div style="display: table-cell; vertical-align: middle;">
				<div class="input_search">
					<input id="scans_search" type="text" placeholder="Поиск" oninput="scan.paginator(); input_error_hide(this);" value="<?php echo self::$_tpl_vars['search_query']; ?>
" autocomplete="off" autocorrect="off" autocapitalize="off">
					<i class="icon icon_search"></i>
				</div>
			</div>
			<div style="display: table-cell; vertical-align: middle; text-align: right;">
				<div class="selector" style="display: inline-block; position: relative; margin-right: 6px; width: 100px;" onclick="common.results_toggle(this, event);">
					<input type="text" class="input_primary" value="<?php if (self::$_tpl_vars['owner']['sort_scans'] == 0): ?>Новые<?php elseif (self::$_tpl_vars['owner']['sort_scans'] == 1): ?>Старые<?php elseif (self::$_tpl_vars['owner']['sort_scans'] == 2): ?>А-Я<?php else: ?>Я-А<?php endif; ?>" autocomplete="off" autocorrect="off" autocapitalize="off" disabled style="height: 30px; line-height: 30px; border-color: #cacfd5; cursor: pointer; font-size: 12px;">
					<input type="hidden" id="type_id" value="<?php if (self::$_tpl_vars['owner']['sort_scans'] == 0): ?>Новые<?php elseif (self::$_tpl_vars['owner']['sort_scans'] == 1): ?>Старые<?php elseif (self::$_tpl_vars['owner']['sort_scans'] == 2): ?>А-Я<?php else: ?>Я-А<?php endif; ?>">
					<i class="icon icon_expand" style="position: absolute; top: 1px; right: 0px; font-size: 17px; cursor: pointer; line-height: 29px; padding: 0 12px;"></i>
					<div class="results_container" style="top: 29px;">
						<div class="result_item" onclick="common.result_select(this, 'Новые', 0, 'full'); scan.sort(0);" style="text-align: left;">Новые</div>
						<div class="result_item" onclick="common.result_select(this, 'Старые', 1, 'full'); scan.sort(1);" style="text-align: left;">Старые</div>
						<div class="result_item" onclick="common.result_select(this, 'А-Я', 2, 'full'); scan.sort(2);" style="text-align: left;">А-Я</div>
						<div class="result_item" onclick="common.result_select(this, 'Я-А', 3, 'full'); scan.sort(3);" style="text-align: left;">Я-А</div>
					</div>
				</div>
				<!-- <i id="scans_sort" class="icon <?php if (self::$_tpl_vars['owner']['sort_scans'] == 'asc'): ?>icon_sort_asc<?php else: ?>icon_sort_dsc<?php endif; ?>" onclick="scan.sort('<?php echo self::$_tpl_vars['owner']['sort_scans']; ?>
');" title="сортировка" style="width: 28px; height: 30px; line-height: 29px; display: inline-block; border: 1px solid #cacfd5; text-align: center; color: #717e89; margin: 0 6px 0 0; border-radius: 2px; cursor: pointer; user-select: none;"></i> -->
				<span id="scans_paginator"><?php echo self::$_tpl_vars['paginator']; ?>
</span>
			</div>
		</div>
		<div id="scans_table"><?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>"./partials/section/scans/scans_table.html", 'vars'=>[]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?></div>
    </div>
</div>