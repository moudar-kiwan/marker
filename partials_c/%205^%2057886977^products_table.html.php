<?php if (self::$_tpl_vars['products']): ?>
<?php if (isset(self::$_sections['i'])) unset(self::$_sections['i']);
self::$_sections['i']['name'] = 'i';
self::$_sections['i']['loop'] = is_array($_loop=self::$_tpl_vars['products']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
self::$_sections['i']['show'] = true;
self::$_sections['i']['max'] = self::$_sections['i']['loop'];
self::$_sections['i']['step'] = 1;
self::$_sections['i']['start'] = self::$_sections['i']['step'] > 0 ? 0 : self::$_sections['i']['loop']-1;
if (self::$_sections['i']['show']) {
    self::$_sections['i']['total'] = self::$_sections['i']['loop'];
    if (self::$_sections['i']['total'] == 0)
        self::$_sections['i']['show'] = false;
} else
    self::$_sections['i']['total'] = 0;
if (self::$_sections['i']['show']):

            for (self::$_sections['i']['index'] = self::$_sections['i']['start'], self::$_sections['i']['iteration'] = 1;
                 self::$_sections['i']['iteration'] <= self::$_sections['i']['total'];
                 self::$_sections['i']['index'] += self::$_sections['i']['step'], self::$_sections['i']['iteration']++):
?>
<?php if (self::$_tpl_vars['products'][self::$_sections['i']['index']]['product_status'] == 0): ?>
<div id="product_<?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['id']; ?>
" class="product_item" onclick="product.product_details(<?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['id']; ?>
);">
	<div class="product_item_icons">
		<?php if (self::$_tpl_vars['products'][self::$_sections['i']['index']]['group_status'] == 'active'): ?>
		<i class="icon icon_copy" onclick="product.copy_window(<?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['id']; ?>
, 'list');"></i>
			<?php endif; ?>
		<i class="icon icon_ellipsis" onclick="common.menu_popup_toggle(this, event);">
			<div class="menu_popup">
				<?php if (self::$_tpl_vars['products'][self::$_sections['i']['index']]['group_status'] == 'active'): ?>
				<div onclick="product.copy_window(<?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['id']; ?>
, 'list');"><i class="icon icon_copy"></i> Дублирование</div>
				<?php if (! self::$_tpl_vars['products'][self::$_sections['i']['index']]['user_id'] || self::$_tpl_vars['products'][self::$_sections['i']['index']]['user_id'] == self::$_tpl_vars['owner']['user_id']): ?>
				<div onclick="product.edit_window(<?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['id']; ?>
, 'list');"><i class="icon icon_edit"></i> Редактировать</div>
				<?php endif; ?>
				<div onclick="product.print(<?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['id']; ?>
);"><i class="icon icon_print"></i> Печать</div>
				<?php if (! self::$_tpl_vars['products'][self::$_sections['i']['index']]['user_id'] || self::$_tpl_vars['products'][self::$_sections['i']['index']]['user_id'] == self::$_tpl_vars['owner']['user_id']): ?>
				<div onclick="product.status_change(<?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['id']; ?>
);"><i class="icon icon_archive_add"></i> Архивировать</div>
				<?php endif; ?>
				<?php else: ?>
				<div onclick="product.history(<?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['id']; ?>
);"><i class="icon icon_history"></i> История</div>
				<?php endif; ?>
			</div>
		</i>
	</div>
	<?php if (self::$_tpl_vars['products'][self::$_sections['i']['index']]['status'] == 1): ?>
	<span class="product_item_status complete" onclick="product.status_toggle(this, <?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['id']; ?>
, 1, event);">Отмаркировано</span>
	<?php else: ?>
	<span class="product_item_status wait" onclick="product.status_toggle(this, <?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['id']; ?>
, 0, event);">Запланировано</span>
	<?php endif; ?>
	<div class="product_item_title" onmousedown="product.drag_start(<?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['id']; ?>
, event);"><?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['title']; ?>
</div>
	<div class="product_item_options" onmousedown="product.drag_start(<?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['id']; ?>
, event);">
		<?php if (self::$_tpl_vars['products'][self::$_sections['i']['index']]['print_id'] == 1): ?>
		<div>Пакет: <span><?php if (self::$_tpl_vars['products'][self::$_sections['i']['index']]['custom']['package']): ?><?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['custom']['package']; ?>
<?php else: ?>не указан<?php endif; ?></span></div>
		<div>Плавка: <span><?php if (self::$_tpl_vars['products'][self::$_sections['i']['index']]['custom']['melt']): ?><?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['custom']['melt']; ?>
<?php else: ?>не указан<?php endif; ?></span></div>
		<div>Номер трубы: <span><?php if (self::$_tpl_vars['products'][self::$_sections['i']['index']]['custom']['tube_number']): ?><?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['custom']['tube_number']; ?>
<?php else: ?>не указан<?php endif; ?></span></div>
		<div>Покрытие: <span><?php if (self::$_tpl_vars['products'][self::$_sections['i']['index']]['custom']['coating']): ?><?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['custom']['coating']; ?>
<?php else: ?>не указано<?php endif; ?></span></div>
		<div>Длина: <span><?php if (self::$_tpl_vars['products'][self::$_sections['i']['index']]['custom']['length']): ?><?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['custom']['length']; ?>
 м<?php else: ?>не указана<?php endif; ?></span></div>
		<div>Партия: <span><?php if (self::$_tpl_vars['products'][self::$_sections['i']['index']]['custom']['part']): ?><?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['custom']['part']; ?>
<?php else: ?>не указана<?php endif; ?></span></div>
		<div>Дата покрытия: <span><?php if (self::$_tpl_vars['products'][self::$_sections['i']['index']]['custom']['coating_date']): ?><?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['custom']['coating_date']; ?>
<?php else: ?>не указана<?php endif; ?></span></div>
		<div>Сертификат: <span><?php if (self::$_tpl_vars['products'][self::$_sections['i']['index']]['custom']['certificate']): ?><?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['custom']['certificate']; ?>
<?php else: ?>не указан<?php endif; ?></span></div>
		<?php else: ?>
		<div>Зав. номер: <span><?php if (self::$_tpl_vars['products'][self::$_sections['i']['index']]['code']): ?><?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['code']; ?>
<?php else: ?>не указан<?php endif; ?></span></div>
		<div>Заказчик: <span><?php if (self::$_tpl_vars['products'][self::$_sections['i']['index']]['customer']['title']): ?><?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['customer']['title']; ?>
<?php else: ?>не указан<?php endif; ?></span></div>
		<div>Количество: <span><?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['quantity']; ?>
 шт.</span></div>
		<div>Договор: <span><?php if (self::$_tpl_vars['products'][self::$_sections['i']['index']]['contract']['title']): ?><?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['contract']['title']; ?>
 от <?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['contract']['date']; ?>
<?php else: ?>не указан<?php endif; ?></span></div>
		<div>Дата отгрузки: <span><?php if (self::$_tpl_vars['products'][self::$_sections['i']['index']]['shipped']): ?><?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['shipped']; ?>
<?php else: ?>не указана<?php endif; ?></span></div>
		<div>Этикетка: <span><?php if (self::$_tpl_vars['products'][self::$_sections['i']['index']]['label_title']): ?><?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['label_title']; ?>
<?php else: ?>не выбрана<?php endif; ?></span></div>
		<?php endif; ?>
	</div>
</div>
<?php endif; ?>
<?php endfor; endif; ?>
<?php else: ?>
<div style="margin-top: 15px; padding: 20px; border: 1px dashed #c2c8cf; border-radius: 3px; font-size: 12px; color: #5c626a; text-align: center;">изделия не найдены</div>
<?php endif; ?>