<div class="content_wrap" style="margin-bottom: 80px;">
    <div style="width: 100%; min-height: 300px;">
		<div class="content_title">Оприходовано</div>
		<div style="display: table; width: 100%; margin-top: 15px;">
			<div style="display: table-cell; vertical-align: top;">
				<div class="input_search">
				
					<input id="picks_search" type="text" placeholder="Поиск" onkeypress="return IsAlphaNumeric(event);"  oninput="pick.paginator(); input_error_hide(this);" value="<?php echo self::$_tpl_vars['search_query']; ?>
" autocomplete="off" autocorrect="off" autocapitalize="off">					
					<i id="picks_icon" class="icon  icon_search " ></i>
					<span id="error" style="color: Red; display: none">* Специальные символы не разрешены</span>
				</div>
			</div>
			<div style="display: table-cell; vertical-align: top; text-align: right;">
				<i id="sort" class="icon icon_sort_dsc" onclick="" title="сортировка" style="width: 28px; height: 30px; line-height: 29px; display: inline-block; border: 1px solid #cacfd5; text-align: center; color: #717e89; margin: 0 6px 0 0; border-radius: 2px; cursor: pointer; user-select: none;"></i>
				<span id="picks_paginator"><?php echo self::$_tpl_vars['paginator']; ?>
</span>
			</div>
		</div>
		<div id="picks_table" class="passports_table"><?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>"./partials/section/picks/picks_table.html", 'vars'=>[]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?></div>
    </div>
</div>