<div style="width: 100%; min-height: 300px; border: 1px solid #c7d0d7; border-radius: 3px; padding: 20px; margin-top: 20px; <?php if (self::$_tpl_vars['label']['type_id'] == 4): ?>display: none;<?php endif; ?>">
	<div class="input_label">Информация на этикетке</div>
	<div style="font-size: 11px; margin-top: 10px; margin-bottom: 5px; line-height: 135%;">
		Введите названия опциональных характеристик в той форме, в которой они будут использоваться в карточке изделия.
	</div>
	<div style="display: table; width: 100%; font-size: 11px; margin-top: 5px;">
		<div style="display: table-cell; width: 50%;">Наименование</div>
		<div style="display: table-cell; width: 0%; padding-left: 10px;"><div style="width: 32px;"></div></div>
	</div>
	<div id="label_edit_options">
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
		<div class="label_edit_option">
			<div>
				<input type="text" class="input_primary label_edit_option_title" placeholder="Наименование" value="<?php echo self::$_tpl_vars['label']['options'][self::$_sections['i']['index']]['title']; ?>
" oninput="label.update('common');">
			</div>
			<div>
				<div onclick="label.option_sort(this, 'up');"><i class="icon icon_expand"></i></div>
				<div onclick="label.option_sort(this, 'down');"><i class="icon icon_expand"></i></div>
			</div>
		</div>
		<?php endfor; endif; ?>
	</div>
	<div class="btn_light" onclick="label.option_add();" style="line-height: 30px; height: 32px; margin-top: 20px; user-select: none;"><i class="icon icon_plus" style="font-size: 10px; font-weight: 400; margin-right: 5px;"></i> Добавить</div>
</div>