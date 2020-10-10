<?php if (isset(self::$_sections['i'])) unset(self::$_sections['i']);
self::$_sections['i']['name'] = 'i';
self::$_sections['i']['loop'] = is_array($_loop=self::$_tpl_vars['products']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	<div style="width: 100%;">
		<div style="font-size: 12px;">
			<div style="overflow: hidden; white-space: nowrap; max-width: 415px; font-weight: 600; padding-right: 50px; text-overflow: ellipsis;"><?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['title']; ?>
</div>
			<?php if (self::$_tpl_vars['products'][self::$_sections['i']['index']]['options']): ?>
			<div style="color: #727375; padding-top: 2px; padding-right: 20px;">
				<?php if (isset(self::$_sections['j'])) unset(self::$_sections['j']);
self::$_sections['j']['name'] = 'j';
self::$_sections['j']['loop'] = is_array($_loop=self::$_tpl_vars['products'][self::$_sections['i']['index']]['options']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
self::$_sections['j']['show'] = true;
self::$_sections['j']['max'] = self::$_sections['j']['loop'];
self::$_sections['j']['step'] = 1;
self::$_sections['j']['start'] = self::$_sections['j']['step'] > 0 ? 0 : self::$_sections['j']['loop']-1;
if (self::$_sections['j']['show']) {
    self::$_sections['j']['total'] = self::$_sections['j']['loop'];
    if (self::$_sections['j']['total'] == 0)
        self::$_sections['j']['show'] = false;
} else
    self::$_sections['j']['total'] = 0;
if (self::$_sections['j']['show']):

            for (self::$_sections['j']['index'] = self::$_sections['j']['start'], self::$_sections['j']['iteration'] = 1;
                 self::$_sections['j']['iteration'] <= self::$_sections['j']['total'];
                 self::$_sections['j']['index'] += self::$_sections['j']['step'], self::$_sections['j']['iteration']++):
?>
				<?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['options'][self::$_sections['j']['index']]['title']; ?>
 <span style="color: #454647;"><?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['options'][self::$_sections['j']['index']]['value']; ?>
</span>
				<?php endfor; endif; ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
	<div style="width: 0%;">
		<i id="modal_file_product_<?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['id']; ?>
" class="icon icon_success group_files_product<?php if (self::$_tpl_vars['products'][self::$_sections['i']['index']]['group_file_attached']): ?> active<?php endif; ?>" onclick="product.group_files_product_toggle(this, <?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['id']; ?>
, <?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['group_id']; ?>
);"></i>
	</div>
</div>
<?php endfor; endif; ?>