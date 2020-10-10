<div class="content_wrap">
	<div class="content_title">Поиск</div>
	<div style="margin-top: 15px;">
		<?php if (self::$_tpl_vars['search']): ?>
			<?php if (self::$_tpl_vars['products']): ?>
			<div>Найдено <span style="font-weight: 600;"><?php echo self::$_tpl_vars['products_count']; ?>
</span> <?php echo self::$_tpl_vars['products_label']; ?>
</div>
			<div style="margin-top: 20px; display: table; width: 100%;">
				<?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>"./partials/section/products/products_table.html", 'vars'=>[]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?>
			</div>
			<?php endif; ?>
			<?php if (! self::$_tpl_vars['products']): ?>
			<div style="border: 1px solid #ebedec; border-radius: 3px; padding: 20px 20px; font-size: 12px; letter-spacing: 0;">
				Ничего не найдено. Попробуйте изменить условия поиска.
			</div>
			<?php endif; ?>
		<?php else: ?>
			<div style="border: 1px solid #ebedec; border-radius: 3px; padding: 20px 20px; font-size: 12px; letter-spacing: 0;">
				Введите текст для поиска.
			</div>
		<?php endif; ?>
	</div>
</div>