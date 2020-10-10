<div class="content_wrap">
    <div style="display: table; width: 100%; min-height: 300px;">
        <div style="display: table-cell; width: 30%; padding-right: 15px;">

			
            <div class="content_title">Партии</div>
            <div style="display: table; width: 100%; margin-top: 15px;">
                <div style="display: table-cell; vertical-align: top;">
                    <div class="btn_primary" onclick="product.group_edit_window();" style="line-height: 30px; height: 30px;">Добавить</div>
                </div>
                <div style="display: table-cell; vertical-align: top; text-align: right;">
					<span><?php echo self::$_tpl_vars['paginator_groups']; ?>
</span>
                </div>
            </div>
            <?php if (self::$_tpl_vars['groups']): ?>
            <div id="products_table"><?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>"./partials/section/products/product_groups_table.html", 'vars'=>[]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?></div>
            <?php else: ?>
            <div style="margin-top: 15px; padding: 20px; border: 1px solid #c2c8cf; border-radius: 3px; font-size: 12px; color: #5c626a;">изделия не найдены</div>
            <?php endif; ?>
        </div>
        <div style="display: table-cell; width: 70%; border-left: 1px solid #dce4ea; padding-left: 15px;">
            <div class="content_title">Изделия</div>
            <div style="display: table; width: 100%; margin-top: 15px;">
                <div style="display: table-cell; vertical-align: top;">
                    <div class="btn_primary" onclick="product.edit_window(0);" style="line-height: 30px; height: 30px;">Добавить</div>
                </div>
                <div style="display: table-cell; vertical-align: top; text-align: right;">
                    <span><?php echo self::$_tpl_vars['paginator_products']; ?>
</span>
                </div>
            </div>
            <?php if (self::$_tpl_vars['products']): ?>
            <div id="products_table"><?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>"./partials/section/products/products_table.html", 'vars'=>[]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?></div>
            <?php else: ?>
            <div style="margin-top: 15px; padding: 20px; border: 1px solid #c2c8cf; border-radius: 3px; font-size: 12px; color: #5c626a;">изделия не найдены</div>
            <?php endif; ?>
        </div>
    </div>
</div>