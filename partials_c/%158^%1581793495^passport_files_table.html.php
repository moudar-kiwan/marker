<?php if (self::$_tpl_vars['files']): ?>
<div>
	<div style="width: 4%;"></div>
	<div style="width: 10%;">Раздел</div>
	<div style="width: 10%;">Статус</div>
	<div style="width: 30%;">Название</div>
	<div style="width: 6%;">Отдел</div>
	<div style="width: 24%;">Кто загрузил</div>
	<div style="width: 16%;">Загружено</div>
	<div style="width: 0%;"></div>
</div>
<?php if (isset(self::$_sections['i'])) unset(self::$_sections['i']);
self::$_sections['i']['name'] = 'i';
self::$_sections['i']['loop'] = is_array($_loop=self::$_tpl_vars['files']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<div onclick="passport.file_open('<?php echo self::$_tpl_vars['files'][self::$_sections['i']['index']]['path']; ?>
');">
	<div style="text-align: center;"><?php echo self::$_tpl_vars['files'][self::$_sections['i']['index']]['number']; ?>
</div>
	<div><span style="display: block; text-overflow: ellipsis; white-space: nowrap; max-width: 80px; overflow: hidden;" title="<?php echo self::$_tpl_vars['files'][self::$_sections['i']['index']]['sub_title']; ?>
"><?php echo self::$_tpl_vars['files'][self::$_sections['i']['index']]['sub_title']; ?>
</span></div>
	<div style="font-weight: 600; <?php if (self::$_tpl_vars['files'][self::$_sections['i']['index']]['status_id'] == 2): ?>color: #cb0000;<?php elseif (self::$_tpl_vars['files'][self::$_sections['i']['index']]['status_id'] == 1): ?>color: #048F12;<?php else: ?>color: #04368F;<?php endif; ?>"><?php echo self::$_tpl_vars['files'][self::$_sections['i']['index']]['status_title']; ?>
</div>
	<div>
		<div style="color: #04368F; font-weight: 600; text-overflow: ellipsis; white-space: nowrap; max-width: 250px; overflow: hidden;" title="<?php echo self::$_tpl_vars['files'][self::$_sections['i']['index']]['title']; ?>
"><?php echo self::$_tpl_vars['files'][self::$_sections['i']['index']]['title']; ?>
</div>
		<div style="margin-top: 5px;"><?php echo self::$_tpl_vars['files'][self::$_sections['i']['index']]['size']; ?>
 Mb</div>
	</div>
	<div><?php echo self::$_tpl_vars['files'][self::$_sections['i']['index']]['owner_groups']; ?>
</div>
	<div>
		<div style="color: #04368F; font-weight: 600; text-overflow: ellipsis; white-space: nowrap; max-width: 200px; overflow: hidden;"><?php echo self::$_tpl_vars['files'][self::$_sections['i']['index']]['owner_name']; ?>
<?php if (self::$_tpl_vars['files'][self::$_sections['i']['index']]['owner_occupation']): ?> (<?php echo self::$_tpl_vars['files'][self::$_sections['i']['index']]['owner_occupation']; ?>
)<?php endif; ?></div>
		<div style="margin-top: 5px;"><?php echo self::$_tpl_vars['files'][self::$_sections['i']['index']]['owner_email']; ?>
, тел.: <?php echo self::$_tpl_vars['files'][self::$_sections['i']['index']]['owner_phone']; ?>
</div>
	</div>
	<div><?php echo self::$_tpl_vars['files'][self::$_sections['i']['index']]['created']; ?>
</div>
	<div>
		<i class="icon icon_ellipsis" onclick="common.menu_popup_toggle(this, event);">
			<div class="menu_popup" style="width: 185px;">
				<?php if (self::$_tpl_vars['files'][self::$_sections['i']['index']]['status_id'] != 1): ?>
				<div onclick="passport.file_status_update(<?php echo self::$_tpl_vars['files'][self::$_sections['i']['index']]['id']; ?>
, 1);"><i class="icon icon_accept"></i> Принять</div>
				<?php endif; ?>
				<?php if (self::$_tpl_vars['files'][self::$_sections['i']['index']]['status_id'] != 2): ?>
				<div onclick="passport.file_status_update(<?php echo self::$_tpl_vars['files'][self::$_sections['i']['index']]['id']; ?>
, 2);"><i class="icon icon_revision"></i> На доработку</div>
				<?php endif; ?>
				<div onclick="passport.file_edit_window(<?php echo self::$_tpl_vars['files'][self::$_sections['i']['index']]['id']; ?>
, 'list');"><i class="icon icon_edit"></i> Редактировать</div>
			</div>
		</i>
	</div>
</div>
<?php endfor; endif; ?>
<?php else: ?>
<div style="display: table-cell; margin-top: 15px; padding: 20px; border: 1px dashed #c2c8cf; border-radius: 3px; font-size: 12px; color: #5c626a;">В этот цифровой паспорт еще не загружены файлы.</div>
<?php endif; ?>