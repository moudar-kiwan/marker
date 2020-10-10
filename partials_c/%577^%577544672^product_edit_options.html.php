<?php if (isset(self::$_sections['i'])) unset(self::$_sections['i']);
self::$_sections['i']['name'] = 'i';
self::$_sections['i']['loop'] = is_array($_loop=self::$_tpl_vars['options']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<div class="product_edit_option_item">
	<div class="product_edit_option_title"><input type="text" class="input_primary" placeholder="Название" value="<?php echo self::$_tpl_vars['options'][self::$_sections['i']['index']]['title']; ?>
" autocomplete="off" autocorrect="off" autocapitalize="off"></div>
	<div class="product_edit_option_value"><input type="text" class="input_primary" placeholder="Значение" value="<?php echo self::$_tpl_vars['options'][self::$_sections['i']['index']]['value']; ?>
" autocomplete="off" autocorrect="off" autocapitalize="off"></div>
	<div class="product_edit_option_units">
		<input type="text" class="input_primary" placeholder="Ед. изм" value="<?php echo self::$_tpl_vars['options'][self::$_sections['i']['index']]['units_title']; ?>
" autocomplete="off" autocorrect="off" autocapitalize="off">
		<i class="icon icon_expand" onclick="common.results_toggle(this);" style="position: absolute; top: 1px; right: 0px; font-size: 17px; cursor: pointer; line-height: 38px; padding: 0 14px;"></i>
		<div class="results_container">
			<div class="result_item" onclick="common.result_select(this, 'units');">гр (грамм)</div>
			<div class="result_item" onclick="common.result_select(this, 'units');">кг (килограмм)</div>
			<div class="result_item" onclick="common.result_select(this, 'units');">км (километр)</div>
			<div class="result_item" onclick="common.result_select(this, 'units');">л (литр)</div>
			<div class="result_item" onclick="common.result_select(this, 'units');">лет</div>
			<div class="result_item" onclick="common.result_select(this, 'units');">м (метр)</div>
			<div class="result_item" onclick="common.result_select(this, 'units');">м2 (квадратный метр)</div>
			<div class="result_item" onclick="common.result_select(this, 'units');">м3 (кубический метр)</div>
			<div class="result_item" onclick="common.result_select(this, 'units');">мм (миллиметр)</div>
			<div class="result_item" onclick="common.result_select(this, 'units');">МПa (мегапаскаль)</div>
			<div class="result_item" onclick="common.result_select(this, 'units');">С (град. Цельсия)</div>
			<div class="result_item" onclick="common.result_select(this, 'units');">см (сантиметр)</div>
			<div class="result_item" onclick="common.result_select(this, 'units');">т (тонна)</div>
			<div class="result_item" onclick="common.result_select(this, 'units');">шт. (штука)</div>
			<div class="result_item" onclick="common.result_select(this, 'units');">% (процент)</div>
		</div>
	</div>
	<div class="product_edit_option_delete"><i class="icon icon_delete_2<?php if (self::$_tpl_vars['count'] == 1): ?> disabled<?php endif; ?>" onclick="product.option_delete(this);"></i></div>
	<input class="product_edit_option_id" type="hidden" value="<?php echo self::$_tpl_vars['options'][self::$_sections['i']['index']]['id']; ?>
">
</div>
<?php endfor; endif; ?>