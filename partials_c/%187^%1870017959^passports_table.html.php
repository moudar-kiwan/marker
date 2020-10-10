<?php if (self::$_tpl_vars['type'] == 'active'): ?>
<div class="passport_item add"><div onclick="passport.edit_window(0);">
	<div style="display: table; margin: 30px auto 0 auto;">
		<div style="display: table-cell;">
			<div style="background: #04368f22; width: 50px; height: 50px; border-radius: 50%;">
				<span class="icon icon_plus" style="background: #04368f; color: #fff; width: 30px; margin: 10px; height: 30px; border-radius: 50%; text-align: center; line-height: 30px;"></span>
			</div>
		</div>
		<div style="display: table-cell;">
			<span style="margin-left: 15px; color: #04368F; font-weight: 600;">Создать новый паспорт</span>
		</div>
	</div>
</div></div>
<?php endif; ?>
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
<div class="passport_item"><div onclick="passport.details(<?php echo self::$_tpl_vars['passports'][self::$_sections['i']['index']]['id']; ?>
);">
	<i class="icon icon_ellipsis" onclick="common.menu_popup_toggle(this, event);">
		<div class="menu_popup">
			<?php if (self::$_tpl_vars['type'] == 'active'): ?>
			<div onclick="passport.archive_toggle(<?php echo self::$_tpl_vars['passports'][self::$_sections['i']['index']]['id']; ?>
, 2);"><i class="icon icon_archive_add"></i> Архивировать</div>
			<?php elseif (self::$_tpl_vars['type'] == 'archive'): ?>
			<div onclick="passport.archive_toggle(<?php echo self::$_tpl_vars['passports'][self::$_sections['i']['index']]['id']; ?>
, 1);"><i class="icon icon_archive_remove"></i> Восстановить</div>
			<?php endif; ?>
			<div onclick="passport.edit_window(<?php echo self::$_tpl_vars['passports'][self::$_sections['i']['index']]['id']; ?>
);"><i class="icon icon_edit"></i> Редактировать</div>
			<div onclick="passport.delete_window(<?php echo self::$_tpl_vars['passports'][self::$_sections['i']['index']]['id']; ?>
);"><i class="icon icon_delete_5"></i> Удалить</div>
		</div>
	</i>
	<div class="passport_item_status<?php if (self::$_tpl_vars['type'] == 'archive'): ?> green<?php endif; ?>"><?php echo self::$_tpl_vars['passports'][self::$_sections['i']['index']]['status_title']; ?>
</div>
	<div class="passport_item_title"><?php echo self::$_tpl_vars['passports'][self::$_sections['i']['index']]['title']; ?>
</div>
	<div class="passport_item_produced">Изготовлено: <?php echo self::$_tpl_vars['passports'][self::$_sections['i']['index']]['produced']; ?>
</div>
	<div class="passport_item_sections">Заполнено разделов: <?php echo self::$_tpl_vars['passports'][self::$_sections['i']['index']]['sections_completed']; ?>
/<?php echo self::$_tpl_vars['passports'][self::$_sections['i']['index']]['sections_all']; ?>
</div>
</div></div>
<?php endfor; endif; ?>
<?php endif; ?>
<?php if (! self::$_tpl_vars['passports'] && self::$_tpl_vars['type'] == 'archive'): ?>
<div style="padding: 20px; border: 1px dashed #c2c8cf; border-radius: 3px; font-size: 12px; color: #5c626a;">Нет добавленных цифровых паспортов</div>
<?php endif; ?>