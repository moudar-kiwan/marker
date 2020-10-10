<div class="product_edit_option_item">
	<div class="product_edit_option_title"><input type="text" class="input_primary" placeholder="Название" value="<?php echo self::$_tpl_vars['option']['title']; ?>
" autocomplete="off" autocorrect="off" autocapitalize="off"></div>
	<div class="product_edit_option_value"><input type="text" class="input_primary" placeholder="Значение" value="<?php echo self::$_tpl_vars['option']['value']; ?>
" autocomplete="off" autocorrect="off" autocapitalize="off"></div>
	<div class="product_edit_option_units">
		<input type="text" class="input_primary" placeholder="Ед. измерения" value="<?php echo self::$_tpl_vars['option']['units_title']; ?>
" autocomplete="off" autocorrect="off" autocapitalize="off">
		<i class="icon icon_expand" onclick="common.results_toggle(this);" style="position: absolute; top: 1px; right: 0px; font-size: 17px; cursor: pointer; line-height: 38px; padding: 0 14px;"></i>
		<div class="results_container">
			<?php if (isset(self::$_sections['j'])) unset(self::$_sections['j']);
self::$_sections['j']['name'] = 'j';
self::$_sections['j']['loop'] = is_array($_loop=self::$_tpl_vars['units']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<div class="result_item" onclick="common.result_select(this, '<?php echo self::$_tpl_vars['units'][self::$_sections['j']['index']]['title_short']; ?>
');"><?php echo self::$_tpl_vars['units'][self::$_sections['j']['index']]['title_short']; ?>
<?php if (self::$_tpl_vars['units'][self::$_sections['j']['index']]['title_full'] != self::$_tpl_vars['units'][self::$_sections['j']['index']]['title_short']): ?> (<?php echo self::$_tpl_vars['units'][self::$_sections['j']['index']]['title_full']; ?>
)<?php endif; ?></div>
			<?php endfor; endif; ?>
		</div>
	</div>
	<div class="product_edit_option_delete"><i class="icon icon_delete_2<?php if (self::$_tpl_vars['count'] == 1): ?> disabled<?php endif; ?>" onclick="product.option_delete(this);"></i></div>
	<input class="product_edit_option_id" type="hidden" value="<?php echo self::$_tpl_vars['option']['id']; ?>
">
</div>