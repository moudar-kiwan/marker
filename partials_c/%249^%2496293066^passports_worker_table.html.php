<?php if (self::$_tpl_vars['passports']): ?>
<?php if (isset(self::$_sections['i'])) unset(self::$_sections['i']);
self::$_sections['i']['name'] = 'i';
self::$_sections['i']['loop'] = is_array($_loop=self::$_tpl_vars['passports']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<div class="passport_worker_item">
	<div id="passport_preview_<?php echo self::$_tpl_vars['passports'][self::$_sections['i']['index']]['id']; ?>
" onclick="passport.expand(<?php echo self::$_tpl_vars['passports'][self::$_sections['i']['index']]['id']; ?>
);">
		<i class="icon icon_ellipsis" onclick="common.menu_popup_toggle(this, event);">
			<div class="menu_popup" style="width: 160px;">
				<div onclick="passport.file_full_list(<?php echo self::$_tpl_vars['passports'][self::$_sections['i']['index']]['id']; ?>
);"><i class="icon icon_files"></i> Список файлов</div>
			</div>
		</i>
		<div class="passport_worker_item_title"><?php echo self::$_tpl_vars['passports'][self::$_sections['i']['index']]['title']; ?>
</div>
		<div class="passport_worker_item_info">
			<div>Номер заказа: <span><?php echo self::$_tpl_vars['passports'][self::$_sections['i']['index']]['order_number']; ?>
</span></div>
			<div>Дата изготовления: <span><?php echo self::$_tpl_vars['passports'][self::$_sections['i']['index']]['produced']; ?>
</span></div>
			<div>Заполнено разделов: <span><?php echo self::$_tpl_vars['passports'][self::$_sections['i']['index']]['sections_completed']; ?>
/<?php echo self::$_tpl_vars['passports'][self::$_sections['i']['index']]['sections_all']; ?>
</span></div>
			<div>Заводской номер: <span><?php echo self::$_tpl_vars['passports'][self::$_sections['i']['index']]['number']; ?>
</span></div>
			<div>Дата добавления: <span><?php echo self::$_tpl_vars['passports'][self::$_sections['i']['index']]['created']; ?>
</span></div>
			<div>Приложения: <span><?php echo self::$_tpl_vars['passports'][self::$_sections['i']['index']]['annexes_all']; ?>
</span></div>
		</div>
	</div>
	<div id="passport_details_<?php echo self::$_tpl_vars['passports'][self::$_sections['i']['index']]['id']; ?>
" class="passport_worker_item_details">
		<div id="passport_details_wrap_<?php echo self::$_tpl_vars['passports'][self::$_sections['i']['index']]['id']; ?>
">
			<?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>"./partials/section/passports/passports_worker_files_table.html", 'vars'=>['files' => self::$_tpl_vars['passports'][self::$_sections['i']['index']]['files'],'passport_id' => self::$_tpl_vars['passports'][self::$_sections['i']['index']]['id']]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?>
		</div>
	</div>
</div>
<?php endfor; endif; ?>
<?php else: ?>
<div style="padding: 20px; border: 1px dashed #c2c8cf; border-radius: 3px; font-size: 12px; color: #5c626a;">Нет добавленных цифровых паспортов</div>
<?php endif; ?>