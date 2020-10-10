<div class="content_wrap" style="margin-bottom: 160px;">
    <div class="products_groups">
        <div class="products_groups_left">
            <div class="content_title">Партии</div>
            <div style="display: table; width: 100%; margin-top: 15px;">
                <div style="display: table-cell; vertical-align: top;">
                    <div class="btn_primary<?php if (self::$_tpl_vars['group_status'] == 'archive'): ?> disabled<?php endif; ?>" id="add_group" onclick="<?php if (self::$_tpl_vars['group_status'] == 'active'): ?>product.group_edit_window(0);<?php endif; ?>" style="line-height: 30px; height: 30px; padding: 0 15px;">Добавить</div>
                </div>
                <div style="display: table-cell; vertical-align: top; text-align: right;">
					<div class="selector" style="display: inline-block; position: relative; margin-right: 6px; width: 100px;" onclick="common.results_toggle(this, event);">
						<input type="text" class="input_primary" value="<?php if (self::$_tpl_vars['group_status'] == 'archive'): ?>Архив<?php else: ?>В работе<?php endif; ?>" autocomplete="off" autocorrect="off" autocapitalize="off" disabled style="height: 30px; line-height: 30px; border-color: #cacfd5; cursor: pointer; font-size: 12px;">
						<input type="hidden" id="type_id" value="<?php if (self::$_tpl_vars['group_status'] == 'archive'): ?>1<?php else: ?>0<?php endif; ?>">
						<i class="icon icon_expand" style="position: absolute; top: 1px; right: 0px; font-size: 17px; cursor: pointer; line-height: 29px; padding: 0 12px;"></i>
						<div class="results_container" style="top: 29px;">
							<div class="result_item" onclick="common.result_select(this, 'В работе', 0, 'full'); product.archive_toggle('active');" style="text-align: left;">В работе</div>
							<div class="result_item" onclick="common.result_select(this, 'Архив', 1, 'full'); product.archive_toggle('archive');" style="text-align: left;">Архив</div>
						</div>
					</div>
					<span id="groups_paginator"><?php echo self::$_tpl_vars['groups_paginator']; ?>
</span>
                </div>
            </div>
			<div id="groups_table"><?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>"./partials/section/products/product_groups_table.html", 'vars'=>[]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?></div>
        </div>
        <div class="products_groups_right">
            <div class="content_title">Изделия</div>
            <div style="display: table; width: 100%; margin-top: 15px;">
                <div style="display: table-cell; vertical-align: top;">
                    <div class="btn_primary<?php if (self::$_tpl_vars['group_status'] == 'archive'): ?> disabled<?php endif; ?>" id="add_product" onclick="<?php if (self::$_tpl_vars['group_status'] == 'active'): ?>product.edit_window(0, 'list');<?php endif; ?>" style="line-height: 30px; height: 30px; padding: 0 15px;">Добавить</div>
                </div>
                <div style="display: table-cell; vertical-align: top; text-align: right;">
					<i id="products_sort" class="icon <?php if (self::$_tpl_vars['owner']['sort_products'] == 'asc'): ?>icon_sort_asc<?php else: ?>icon_sort_dsc<?php endif; ?>" onclick="product.sort('<?php echo self::$_tpl_vars['owner']['sort_products']; ?>
');" title="сортировка" style="width: 28px; height: 30px; line-height: 29px; display: inline-block; border: 1px solid #cacfd5; text-align: center; color: #717e89; margin: 0 6px 0 0; border-radius: 2px; cursor: pointer; user-select: none;"></i>
                    <span id="products_paginator"><?php echo self::$_tpl_vars['products_paginator']; ?>
</span>
                </div>
            </div>
			<div id="products_table"><?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>"./partials/section/products/products_table.html", 'vars'=>[]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?></div>
        </div>
    </div>
</div>