<?php if (self::$_tpl_vars['notifications']): ?>
<?php if (isset(self::$_sections['i'])) unset(self::$_sections['i']);
self::$_sections['i']['name'] = 'i';
self::$_sections['i']['loop'] = is_array($_loop=self::$_tpl_vars['notifications']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<div class="group_item droppable unselectable" style="cursor: auto; padding: 12px 115px 12px 12px; min-height: auto;">
	<div class="group_item_title"><?php echo self::$_tpl_vars['notifications'][self::$_sections['i']['index']]['title']; ?>
</div>
	<div class="group_item_body" style="margin-top: 5px; color: #474A4C;"><?php echo self::$_tpl_vars['notifications'][self::$_sections['i']['index']]['body']; ?>
</div>
	<div class="group_item_options" style="padding-top: 0; ">
		<div style="color: #8a959b;"><?php echo self::$_tpl_vars['notifications'][self::$_sections['i']['index']]['created']; ?>
</div>
	</div>
	<span style="position: absolute; top: 14px; right: 12px;" class="product_item_status <?php if (self::$_tpl_vars['notifications'][self::$_sections['i']['index']]['unread'] == 1): ?>complete<?php else: ?>wait<?php endif; ?>"><?php if (self::$_tpl_vars['notifications'][self::$_sections['i']['index']]['unread'] == 0): ?>Прочитанный<?php else: ?>Новый<?php endif; ?></span>
</div>
<?php endfor; endif; ?>
<?php else: ?>
<div style="width: 100%; margin-top: 15px; padding: 20px; border: 1px dashed #c2c8cf; border-radius: 3px; font-size: 12px; color: #5c626a; text-align: center;">Уведомлений пока нет</div>
<?php endif; ?>