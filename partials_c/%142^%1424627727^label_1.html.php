<div style="background: #fff; padding: 20px; display: inline-block; user-select: none; width: <?php echo self::$_tpl_vars['label']['preview_width']; ?>
px; height: <?php echo self::$_tpl_vars['label']['preview_height']; ?>
px;">
	<div class="code_wrap" style="border-radius: 16px; overflow: hidden; width: 100%; height: 100%;">
		<div class="code_manufacturer"><?php echo self::$_tpl_vars['label']['company_title']; ?>
</div>
		<div class="code_main" style="margin-top: 10px;">
			<div class="code_main_left" style="width: 100%;">
				<div style="font-size: 22px; font-weight: 600; word-wrap: break-word; margin-bottom: 10px; line-height: 105%;">
					<?php echo self::$_tpl_vars['label']['product_title']; ?>
, <?php echo self::$_tpl_vars['label']['options'][0]['title_print']; ?>
 <?php echo self::$_tpl_vars['label']['options'][0]['value']; ?>

				</div>
				<div class="code_info">
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
					<?php if (self::$_tpl_vars['label']['options'][self::$_sections['i']['index']]['title'] && self::$_sections['i']['index'] >= 1 && self::$_sections['i']['index'] < 5): ?>
					<div>
						<div style="width: 50%; line-height: <?php echo self::$_tpl_vars['label']['preview_row']; ?>
px;"><?php echo self::$_tpl_vars['label']['options'][self::$_sections['i']['index']]['title_print']; ?>
</div>
						<div style="width: 50%; line-height: <?php echo self::$_tpl_vars['label']['preview_row']; ?>
px;"><?php echo self::$_tpl_vars['label']['options'][self::$_sections['i']['index']]['value']; ?>
</div>
					</div>
					<?php endif; ?>
					<?php endfor; endif; ?>
				</div>
			</div>
			<div class="code_main_right" style="width: 0%; min-width: <?php echo self::$_tpl_vars['label']['preview_code']; ?>
px;">
				<img src="<?php echo self::$_tpl_vars['label']['qr']; ?>
" class="code_qr">
			</div>
		</div>
		<div style="font-size: 20px; line-height: 110%; margin-top: 10px; font-weight: 600;">
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
			<?php if (self::$_tpl_vars['label']['options'][self::$_sections['i']['index']]['title'] && self::$_tpl_vars['label']['options'][self::$_sections['i']['index']]['value'] && self::$_sections['i']['index'] >= 5): ?>
				<?php echo self::$_tpl_vars['label']['options'][self::$_sections['i']['index']]['title_print']; ?>
 <?php echo self::$_tpl_vars['label']['options'][self::$_sections['i']['index']]['value']; ?>
<?php if (self::$_sections['i']['index'] != self::$_sections['i']['max'] - 1): ?>, <?php endif; ?>
			<?php endif; ?>
			<?php endfor; endif; ?>
		</div>
	</div>
</div>