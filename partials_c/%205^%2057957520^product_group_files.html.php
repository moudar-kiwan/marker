<div class="modal_head">
	<span>Добавление документов</span>
	<i class="icon icon_delete" onclick="common.modal_hide();"></i>	
</div>
<div style="padding: 15px 20px; background: #fff; border-bottom: 1px solid #ccc;">
	<div style="display: table; width: 100%;">
		<div style="display: table-cell; width: 50%;">
			<div class="btn_primary" onclick="product.group_files_upload(<?php echo self::$_tpl_vars['group_id']; ?>
);" style="line-height: 30px; height: 30px;">Загрузить</div>
		</div>
		<div style="display: table-cell; width: 50%; text-align: right;">
			<div class="btn_primary" onclick="common.modal_hide();" style="line-height: 30px; height: 30px;">Завершить</div>
		</div>
	</div>
</div>
<div id="group_files_uploads"<?php if (self::$_tpl_vars['files']): ?> class="active"<?php endif; ?>>
	<?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>"./partials/modal/products/product_group_files_upload.html", 'vars'=>[]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?>
</div>
<div class="modal_search">
	<i class="icon icon_search"></i>
	<input id="modal_search" type="text" placeholder="Поиск" oninput="product.group_files_product_paginator(0, <?php echo self::$_tpl_vars['group_id']; ?>
, 'search');" autocomplete="off" autocorrect="off" autocapitalize="off">
</div>
<div style="padding: 15px 20px; border-radius: 0 0 3px 3px; background: #fff;">
	<?php if (self::$_tpl_vars['products']): ?>
	<div style="display: table; width: 100%;">
		<div style="display: table-cell; vertical-align: top; width: 80%;">
			<div style="color: #04368f; font-size: 12px; font-weight: 600;">Изделия из партии</div>
			<div style="color: #686a6c; font-size: 12px; padding-top: 2px;">выбранный документ добавляется к изделию по клику</div>
		</div>
		<div id="group_files_products_paginator" style="display: table-cell; vertical-align: top; width: 20%; text-align: right;">
			<?php echo self::$_tpl_vars['products_paginator']; ?>

		</div>
	</div>
	<div id="group_files_products_table">
		<?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>"./partials/modal/products/product_group_files_products.html", 'vars'=>[]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?>
	</div>
	<?php else: ?>
	<div class="product_history_blank"><span>В этой партии нет изделий. Добавьте изделия в партию, после чего попробуйте выполнить это действие снова.</span></div>
	<?php endif; ?>
</div>