<?php if (self::$_tpl_vars['scans']): ?>
<?php if (isset(self::$_sections['i'])) unset(self::$_sections['i']);
self::$_sections['i']['name'] = 'i';
self::$_sections['i']['loop'] = is_array($_loop=self::$_tpl_vars['scans']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<div class="scans_item" onclick="scan.show_product(<?php echo self::$_tpl_vars['scans'][self::$_sections['i']['index']]['product_id']; ?>
);">
	<div class="scans_item_title"><?php echo self::$_tpl_vars['scans'][self::$_sections['i']['index']]['product_title']; ?>
</div>
	<div class="scans_item_info">
		<div>Производитель: <span><?php echo self::$_tpl_vars['scans'][self::$_sections['i']['index']]['manufacturer']; ?>
</span></div>
		<div>Пользователь: <span><?php echo self::$_tpl_vars['scans'][self::$_sections['i']['index']]['user_name']; ?>
</span></div>
		<div>Дата операции: <span><?php echo self::$_tpl_vars['scans'][self::$_sections['i']['index']]['created']; ?>
</span></div>
	</div>
</div>
<?php endfor; endif; ?>
<?php else: ?>
<div style="padding: 20px; border: 1px dashed #c2c8cf; border-radius: 3px; font-size: 12px; color: #5c626a;">Нет данных</div>
<?php endif; ?>