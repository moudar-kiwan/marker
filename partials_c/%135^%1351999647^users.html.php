<div class="content_wrap" style="margin-bottom: 80px;">
    <div style="width: 100%; min-height: 300px;">
		<div class="content_title">Пользователи</div>
		<div style="display: table; width: 100%; margin-top: 15px;">
			<div style="display: table-cell; vertical-align: top;">
				<div class="btn_primary" onclick="user.edit_window(0);" style="line-height: 30px; height: 30px;">Добавить</div>
			</div>
			<div style="display: table-cell; vertical-align: top; text-align: right;">
				<i id="users_sort" class="icon <?php if (self::$_tpl_vars['owner']['sort_users'] == 'asc'): ?>icon_sort_asc<?php else: ?>icon_sort_dsc<?php endif; ?>" onclick="user.sort('<?php echo self::$_tpl_vars['owner']['sort_users']; ?>
');" title="сортировка" style="width: 28px; height: 30px; line-height: 29px; display: inline-block; border: 1px solid #cacfd5; text-align: center; color: #717e89; margin: 0 6px 0 0; border-radius: 2px; cursor: pointer; user-select: none;"></i>
				<span id="users_paginator"><?php echo self::$_tpl_vars['paginator']; ?>
</span>
			</div>
		</div>
		<div id="users_table"><?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>"./partials/section/users/users_table.html", 'vars'=>[]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?></div>
    </div>
</div>