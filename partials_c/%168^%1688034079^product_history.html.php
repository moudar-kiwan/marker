<div class="modal_head">
	<span>История сканирований</span>
	<i class="icon icon_delete" onclick="common.modal_hide();"></i>	
</div>
<div style="padding: 10px 20px; border-radius: 0 0 3px 3px; background: #fff;">
	<?php if (self::$_tpl_vars['info']): ?>
	<div class="product_history_table">
		<?php if (isset(self::$_sections['i'])) unset(self::$_sections['i']);
self::$_sections['i']['name'] = 'i';
self::$_sections['i']['loop'] = is_array($_loop=self::$_tpl_vars['info']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
		<div>
			<div style="width: 25%;">
				<div style="font-size: 12px;"><?php echo self::$_tpl_vars['info'][self::$_sections['i']['index']]['created_date']; ?>
</div>
				<div style="font-size: 12px; color: #7C8591; margin-top: 5px;">в <?php echo self::$_tpl_vars['info'][self::$_sections['i']['index']]['created_time']; ?>
</div>
			</div>
			<div style="width: 50%;">
				<?php if (self::$_tpl_vars['info'][self::$_sections['i']['index']]['user_title']): ?>
				<div style="font-size: 12px;"><?php echo self::$_tpl_vars['info'][self::$_sections['i']['index']]['user_title']; ?>
</div>
				<div style="color: #7C8591; margin-top: 5px; font-size: 12px;"><?php echo self::$_tpl_vars['info'][self::$_sections['i']['index']]['company_title']; ?>
</div>
				<?php else: ?>
				<div style="font-size: 12px;">не авторизован</div>
				<?php endif; ?>
			</div>
			<div style="width: 15%;">
				<i class="icon product_history_source <?php if (! self::$_tpl_vars['info'][self::$_sections['i']['index']]['source']): ?>icon_android<?php else: ?>icon_web<?php endif; ?>" title="<?php if (! self::$_tpl_vars['info'][self::$_sections['i']['index']]['source']): ?>Android<?php else: ?>Website<?php endif; ?>"></i>
			</div>
			<div style="width: 10%; text-align: right;">
				<a class="icon icon_map<?php if (self::$_tpl_vars['info'][self::$_sections['i']['index']]['lat'] != 0 && self::$_tpl_vars['info'][self::$_sections['i']['index']]['lng'] != 0): ?> active<?php endif; ?>" <?php if (self::$_tpl_vars['info'][self::$_sections['i']['index']]['lat'] != 0 && self::$_tpl_vars['info'][self::$_sections['i']['index']]['lng'] != 0): ?> href="https://www.google.com/maps?q=loc:<?php echo self::$_tpl_vars['info'][self::$_sections['i']['index']]['lat']; ?>
,<?php echo self::$_tpl_vars['info'][self::$_sections['i']['index']]['lng']; ?>
"<?php endif; ?> target="_blank"></a>
			</div>
		</div>
		<?php endfor; endif; ?>
	</div>
	<?php else: ?>
	<div class="product_history_blank"><span>История сканирования по выбранному изделию отсутствует, попробуйте выполнить сканирование через приложение и зайти повторно.</span></div>
	<?php endif; ?>
</div>