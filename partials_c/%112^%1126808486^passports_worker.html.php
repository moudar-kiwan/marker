<div class="content_wrap" style="margin-bottom: 80px;">
    <div style="width: 100%; min-height: 300px;">
		<div class="content_title">Паспорта изделий</div>
		<div style="display: table; width: 100%; margin-top: 15px;">
			<div style="display: table-cell; vertical-align: top;">
				<div style="font-size: 14px; font-weight: 600; padding-top: 10px;">В работе</div>
			</div>
			<div style="display: table-cell; vertical-align: top; text-align: right;">
				<i id="passports_sort_active" class="icon <?php if (self::$_tpl_vars['owner']['sort_passports'] == 'asc'): ?>icon_sort_asc<?php else: ?>icon_sort_dsc<?php endif; ?>" onclick="passport.sort('<?php echo self::$_tpl_vars['owner']['sort_passports']; ?>
', 'worker');" title="сортировка" style="width: 28px; height: 30px; line-height: 29px; display: inline-block; border: 1px solid #cacfd5; text-align: center; color: #717e89; margin: 0 6px 0 0; border-radius: 2px; cursor: pointer; user-select: none;"></i>
				<span id="passports_active_paginator"><?php echo self::$_tpl_vars['paginator_active']; ?>
</span>
			</div>
		</div>
		<div id="passports_active_table" class="passports_table"><?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>"./partials/section/passports/passports_worker_table.html", 'vars'=>['passports' => self::$_tpl_vars['passports_active'],'type' => 'active']]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?></div>
    </div>
</div>