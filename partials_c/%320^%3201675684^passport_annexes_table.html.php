<?php if (self::$_tpl_vars['passport_annexes']): ?>
<div>
	<div style="width: 5%;"></div>
	<div style="width: 52%;">Название</div>
	<div style="width: 13%;">Статус</div>
	<div style="width: 11%;">Загружено</div>
	<div style="width: 19%;">Кем обновлен</div>
	<div style="width: 0%;"></div>
</div>
<?php if (isset(self::$_sections['i'])) unset(self::$_sections['i']);
self::$_sections['i']['name'] = 'i';
self::$_sections['i']['loop'] = is_array($_loop=self::$_tpl_vars['passport_annexes']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<div onclick="passport.annex_details(<?php echo self::$_tpl_vars['passport_annexes'][self::$_sections['i']['index']]['passport_id']; ?>
, <?php echo self::$_tpl_vars['passport_annexes'][self::$_sections['i']['index']]['id']; ?>
);">
	<div style="text-align: center;"><?php echo self::$_tpl_vars['passport_annexes'][self::$_sections['i']['index']]['number']; ?>
</div>
	<div><?php echo self::$_tpl_vars['passport_annexes'][self::$_sections['i']['index']]['title']; ?>
</div>
	<div style="color: <?php if (self::$_tpl_vars['passport_annexes'][self::$_sections['i']['index']]['status_id'] == 2): ?>#048F12<?php else: ?>#04368F<?php endif; ?>; font-weight: 600;"><?php echo self::$_tpl_vars['passport_annexes'][self::$_sections['i']['index']]['status_title']; ?>
</div>
	<div><?php echo self::$_tpl_vars['passport_annexes'][self::$_sections['i']['index']]['files']; ?>
</div>
	<div><?php echo self::$_tpl_vars['passport_annexes'][self::$_sections['i']['index']]['owner']; ?>
</div>
	<div>
		<i class="icon icon_ellipsis" onclick="common.menu_popup_toggle(this, event);">
			<div class="menu_popup" style="width: 140px;">
				<?php if (self::$_tpl_vars['passport_annexes'][self::$_sections['i']['index']]['status_id'] != 2): ?>
				<div onclick="passport.annex_edit_window(<?php echo self::$_tpl_vars['passport_id']; ?>
, <?php echo self::$_tpl_vars['passport_annexes'][self::$_sections['i']['index']]['id']; ?>
, 'list');"><i class="icon icon_edit"></i> Редактировать</div>
				<div onclick="passport.annex_delete_window(<?php echo self::$_tpl_vars['passport_id']; ?>
, <?php echo self::$_tpl_vars['passport_annexes'][self::$_sections['i']['index']]['id']; ?>
);"><i class="icon icon_delete_5"></i> Удалить</div>
				<div onclick="passport.annex_archive_toggle(<?php echo self::$_tpl_vars['passport_id']; ?>
, <?php echo self::$_tpl_vars['passport_annexes'][self::$_sections['i']['index']]['id']; ?>
, 'list', 'close');"><i class="icon icon_archive_add"></i> Архивировать</div>
				<?php else: ?>
				<div onclick="passport.annex_archive_toggle(<?php echo self::$_tpl_vars['passport_id']; ?>
, <?php echo self::$_tpl_vars['passport_annexes'][self::$_sections['i']['index']]['id']; ?>
, 'list', 'open');"><i class="icon icon_archive_remove"></i> Восстановить</div>
				<?php endif; ?>
			</div>
		</i>
	</div>
</div>
<?php endfor; endif; ?>
<?php else: ?>
<div style="display: table-cell; margin-top: 15px; padding: 20px; border: 1px dashed #c2c8cf; border-radius: 3px; font-size: 12px; color: #5c626a;">В этот цифровой паспорт еще не добавлены приложения.</div>
<?php endif; ?>