<div style="margin: 0 auto; background: #fff; padding: 10px; width: 340px; height: 140px;">
	<div class="label_preview">
		<div class="label_preview_company"><?php echo self::$_tpl_vars['label']['company_title']; ?>
</div>
		<div class="label_preview_title">Наименование изделия</div>
		<div class="label_preview_table">
			<div class="label_preview_table_left">
				<div class="label_preview_options">
					<?php if (isset(self::$_sections['i'])) unset(self::$_sections['i']);
self::$_sections['i']['name'] = 'i';
self::$_sections['i']['loop'] = is_array($_loop=self::$_tpl_vars['label']['options']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
					<?php if (self::$_tpl_vars['label']['options'][self::$_sections['i']['index']]['title']): ?>
					<div>
						<div><?php echo self::$_tpl_vars['label']['options'][self::$_sections['i']['index']]['title']; ?>
</div>
						<div>Значение</div>
					</div>
					<?php endif; ?>
					<?php endfor; endif; ?>
				</div>
			</div>
			<div class="label_preview_table_right">
				<img class="label_preview_qr" src="/images/qr.png">
			</div>
		</div>
	</div>
</div>