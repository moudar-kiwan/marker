<?php if (self::$_tpl_vars['notifications_limit']): ?>
<div class="notifications_popup_body" id="notifications_scroll">
	<?php if (isset(self::$_sections['i'])) unset(self::$_sections['i']);
self::$_sections['i']['name'] = 'i';
self::$_sections['i']['loop'] = is_array($_loop=self::$_tpl_vars['notifications_limit']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
		<?php if (self::$_tpl_vars['notifications_limit'][self::$_sections['i']['index']]['unread'] == 1): ?>
		<div class="notifications_popup_item" style="background: #F7F8FA;">
			<div style="font-weight: 600; font-size: 12px; word-break: break-word;"><?php echo self::$_tpl_vars['notifications_limit'][self::$_sections['i']['index']]['title']; ?>
</div>
			<div style="color: #474A4C; margin-top: 5px; font-size: 12px; word-break: break-word;"><?php echo self::$_tpl_vars['notifications_limit'][self::$_sections['i']['index']]['body']; ?>
</div>
			<div style="color: #8a959b; margin-top: 5px; font-size: 12px;"><?php echo self::$_tpl_vars['notifications_limit'][self::$_sections['i']['index']]['created']; ?>
</div>
		</div>
		<?php endif; ?>
	<?php endfor; endif; ?>

	<?php if (self::$_tpl_vars['notifications_read'] != 0): ?><div style="width: 100%; padding: 10px 15px; border-top: .0625rem solid rgba(33,37,44,.15); font-weight: 500;">Просмотренные</div><?php endif; ?>
	
	<?php if (isset(self::$_sections['i'])) unset(self::$_sections['i']);
self::$_sections['i']['name'] = 'i';
self::$_sections['i']['loop'] = is_array($_loop=self::$_tpl_vars['notifications_limit']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
		<?php if (self::$_tpl_vars['notifications_limit'][self::$_sections['i']['index']]['unread'] == 0): ?>
		<div class="notifications_popup_item">
			<div style="font-weight: 600; font-size: 12px; word-break: break-word;"><?php echo self::$_tpl_vars['notifications_limit'][self::$_sections['i']['index']]['title']; ?>
</div>
			<div style="color: #474A4C; margin-top: 5px; font-size: 12px; word-break: break-word;"><?php echo self::$_tpl_vars['notifications_limit'][self::$_sections['i']['index']]['body']; ?>
</div>
			<div style="color: #8a959b; margin-top: 5px; font-size: 12px;"><?php echo self::$_tpl_vars['notifications_limit'][self::$_sections['i']['index']]['created']; ?>
</div>
		</div>
		<?php endif; ?>
	<?php endfor; endif; ?>
</div>
<?php else: ?>
<div id="notifications_content"><div style="width: 100%; padding: 25px 0; font-size: 12px; color: #5c626a; text-align: center;">Новых уведомлений пока нет</div></div>
<?php endif; ?>
<div class="notifications_btn" onclick="owner.notifications_show_all();">Показать все</div>