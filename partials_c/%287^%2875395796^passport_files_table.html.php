<?php if (self::$_tpl_vars['files']): ?>
<div>
	<div style="width: 14%; padding-left: 10px;">Раздел</div>
	<div style="width: 12%;">Статус</div>
	<div style="width: 47%;">Название</div>
	<div style="width: 10%;">Кто загрузил</div>
	<div style="width: 12%; text-align: right; padding-right: 10px;">Загружено</div>
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
	<div style="padding-left: 10px;"><span style="display: block; text-overflow: ellipsis; white-space: nowrap; max-width: 100px; overflow: hidden;" title="<?php echo self::$_tpl_vars['files'][self::$_sections['i']['index']]['sub_title']; ?>
"><?php echo self::$_tpl_vars['files'][self::$_sections['i']['index']]['sub_title']; ?>
</span></div>
	<div style="font-weight: 600; <?php if (self::$_tpl_vars['files'][self::$_sections['i']['index']]['status_id'] == 2): ?>color: #cb0000;<?php elseif (self::$_tpl_vars['files'][self::$_sections['i']['index']]['status_id'] == 1): ?>color: #048F12;<?php else: ?>color: #04368F;<?php endif; ?>"><?php echo self::$_tpl_vars['files'][self::$_sections['i']['index']]['status_title']; ?>
</div>
	<div><span style="display: block; text-overflow: ellipsis; white-space: nowrap; max-width: 320px; overflow: hidden;" title="<?php echo self::$_tpl_vars['files'][self::$_sections['i']['index']]['title']; ?>
"><?php echo self::$_tpl_vars['files'][self::$_sections['i']['index']]['title']; ?>
</span></div>
	<div><span style="display: block; text-overflow: ellipsis; white-space: nowrap; max-width: 100px; overflow: hidden;"><?php echo self::$_tpl_vars['files'][self::$_sections['i']['index']]['owner_groups']; ?>
</span></div>
	<div style="text-align: right; padding-right: 10px;"><?php echo self::$_tpl_vars['files'][self::$_sections['i']['index']]['created']; ?>
</div>
</div>
<?php endfor; endif; ?>
<?php else: ?>
<div style="display: table-cell; margin-top: 15px; padding: 20px; border: 1px dashed #c2c8cf; border-radius: 3px; font-size: 12px; color: #5c626a;">В этот цифровой паспорт еще не загружены файлы.</div>
<?php endif; ?>