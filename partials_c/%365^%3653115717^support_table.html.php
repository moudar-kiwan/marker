<?php if (self::$_tpl_vars['support']): ?>
<?php if (isset(self::$_sections['i'])) unset(self::$_sections['i']);
self::$_sections['i']['name'] = 'i';
self::$_sections['i']['loop'] = is_array($_loop=self::$_tpl_vars['support']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<div class="group_item droppable unselectable" onclick="support.ticket_details(<?php echo self::$_tpl_vars['support'][self::$_sections['i']['index']]['id']; ?>
);">
	<div class="group_item_title" style="width: 85%; word-break: break-all;">№ <?php echo self::$_tpl_vars['support'][self::$_sections['i']['index']]['id']; ?>
 — <?php echo self::$_tpl_vars['support'][self::$_sections['i']['index']]['title']; ?>
</div>
	<div class="group_item_options">
		<div><?php echo self::$_tpl_vars['support'][self::$_sections['i']['index']]['snippet']; ?>
</div>
		<?php if (self::$_tpl_vars['support'][self::$_sections['i']['index']]['updated'] == 0): ?>
		<div>Создан: <span><?php echo self::$_tpl_vars['support'][self::$_sections['i']['index']]['created']; ?>
</span></div>
		<?php else: ?>
		<div>Обновлен: <span><?php echo self::$_tpl_vars['support'][self::$_sections['i']['index']]['updated']; ?>
</span></div>
		<?php endif; ?>
	</div>
	<span style="position: absolute; top: 14px; right: 12px;" class="product_item_status <?php if (self::$_tpl_vars['support'][self::$_sections['i']['index']]['status'] != 'Закрыт'): ?>complete<?php else: ?>wait<?php endif; ?>" <?php if (self::$_tpl_vars['support'][self::$_sections['i']['index']]['status'] != 'Закрыт'): ?>onclick="support.close_ticket(<?php echo self::$_tpl_vars['support'][self::$_sections['i']['index']]['id']; ?>
, 'support', event);"<?php endif; ?>><?php echo self::$_tpl_vars['support'][self::$_sections['i']['index']]['status']; ?>
</span>
</div>
<?php endfor; endif; ?>
<?php else: ?>
<div style="width: 100%; margin-top: 15px; padding: 20px; border: 1px dashed #c2c8cf; border-radius: 3px; font-size: 12px; color: #5c626a; text-align: center;">Обращения в службу поддержки не найдены.</div>
<?php endif; ?>