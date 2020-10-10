<?php if (self::$_tpl_vars['groups']): ?>
<?php if (isset(self::$_sections['i'])) unset(self::$_sections['i']);
self::$_sections['i']['name'] = 'i';
self::$_sections['i']['loop'] = is_array($_loop=self::$_tpl_vars['groups']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<div id="group_<?php echo self::$_tpl_vars['groups'][self::$_sections['i']['index']]['id']; ?>
" class="group_item droppable unselectable<?php if (self::$_tpl_vars['groups'][self::$_sections['i']['index']]['id'] == self::$_tpl_vars['group_id']): ?> active<?php endif; ?>" onclick="product.group_change(this, <?php echo self::$_tpl_vars['groups'][self::$_sections['i']['index']]['id']; ?>
);">
	<?php if (self::$_tpl_vars['groups'][self::$_sections['i']['index']]['id']): ?>
    <div class="group_item_icons">
		<i class="icon icon_ellipsis" onclick="common.menu_popup_toggle(this, event);">
			<div class="menu_popup">
				<?php if (self::$_tpl_vars['groups'][self::$_sections['i']['index']]['status'] == 0 && ( ! self::$_tpl_vars['groups'][self::$_sections['i']['index']]['user_id'] || self::$_tpl_vars['groups'][self::$_sections['i']['index']]['user_id'] == self::$_tpl_vars['owner']['user_id'] )): ?>
				<div onclick="product.group_edit_window(<?php echo self::$_tpl_vars['groups'][self::$_sections['i']['index']]['id']; ?>
);"><i class="icon icon_edit"></i> Редактировать</div>
				<div onclick="product.group_files_window(<?php echo self::$_tpl_vars['groups'][self::$_sections['i']['index']]['id']; ?>
);"><i class="icon icon_doc"></i> Добавить документ</div>
				<?php endif; ?>
				<div onclick="product.group_export(<?php echo self::$_tpl_vars['groups'][self::$_sections['i']['index']]['id']; ?>
);"><i class="icon icon_export"></i> Экспорт</div>
				<div onclick="product.group_print(<?php echo self::$_tpl_vars['groups'][self::$_sections['i']['index']]['id']; ?>
);"><i class="icon icon_print"></i> Печать</div>
				<?php if (! self::$_tpl_vars['groups'][self::$_sections['i']['index']]['user_id'] || self::$_tpl_vars['groups'][self::$_sections['i']['index']]['user_id'] == self::$_tpl_vars['owner']['user_id']): ?>
				<?php if (self::$_tpl_vars['groups'][self::$_sections['i']['index']]['status'] == 0): ?>
				<div onclick="product.group_archive_toggle(<?php echo self::$_tpl_vars['groups'][self::$_sections['i']['index']]['id']; ?>
, 1);"><i class="icon icon_archive_add"></i> Архивировать</div>
				<?php elseif (self::$_tpl_vars['groups'][self::$_sections['i']['index']]['status'] == 1): ?>
				<div onclick="product.group_archive_toggle(<?php echo self::$_tpl_vars['groups'][self::$_sections['i']['index']]['id']; ?>
, 0);"><i class="icon icon_archive_remove"></i> Восстановить</div>
				<?php endif; ?>
				<?php endif; ?>
			</div>
		</i>
	</div>
	<?php endif; ?>
	<div class="group_item_title"><?php echo self::$_tpl_vars['groups'][self::$_sections['i']['index']]['title']; ?>
</div>
	<div class="group_item_options">
		<div>Создано: <span><?php echo self::$_tpl_vars['groups'][self::$_sections['i']['index']]['created']; ?>
</span></div>
		<?php if (self::$_tpl_vars['groups'][self::$_sections['i']['index']]['customer']['id']): ?>
		<div>Заказчик: <span><?php echo self::$_tpl_vars['groups'][self::$_sections['i']['index']]['customer']['title']; ?>
</span></div>
		<?php endif; ?>
		<?php if (self::$_tpl_vars['groups'][self::$_sections['i']['index']]['contract']['id']): ?>
		<div>Договор: <span><?php echo self::$_tpl_vars['groups'][self::$_sections['i']['index']]['contract']['title']; ?>
 прил. <?php echo self::$_tpl_vars['groups'][self::$_sections['i']['index']]['contract']['annex_number']; ?>
</span></div>
		<?php endif; ?>
		<div>Количество: <span><?php echo self::$_tpl_vars['groups'][self::$_sections['i']['index']]['quantity']; ?>
 шт.</span></div>
		<div>Этикетка: <span><?php echo self::$_tpl_vars['groups'][self::$_sections['i']['index']]['label_title']; ?>
</span></div>
	</div>
</div>
<?php endfor; endif; ?>
<?php else: ?>
<div style="margin-top: 15px; padding: 20px; border: 1px dashed #c2c8cf; border-radius: 3px; font-size: 12px; color: #5c626a; text-align: center;">партии не найдены</div>
<?php endif; ?>