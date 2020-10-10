<div style="display: table-cell; vertical-align: top; width: 45%; padding-right: 20px;">
	<div style="width: 100%; min-height: 300px; border: 1px solid #c7d0d7; border-radius: 3px; padding: 20px;">
		<div style="margin-top: 0px;">
			<div class="input_label">Название этикетки</div>
			<input type="text" id="title" class="input_primary" placeholder="Название" value="<?php echo self::$_tpl_vars['label']['title']; ?>
" oninput="input_error_hide(this);" autocomplete="off" autocorrect="off" autocapitalize="off">
		</div>
		<div style="margin-top: 20px;">
			<div class="input_label">Тип</div>
			<div class="selector" style="width: 100%; position: relative;" onclick="common.results_toggle(this, event);">
				<input type="text" id="type_title" class="input_primary" placeholder="Наименование" value="<?php echo self::$_tpl_vars['label']['type_title']; ?>
" disabled style="cursor: pointer;">
				<input type="hidden" id="type_id" value="<?php echo self::$_tpl_vars['label']['type_id']; ?>
">
				<i class="icon icon_expand" style="position: absolute; top: 1px; right: 0px; font-size: 17px; cursor: pointer; line-height: 38px; padding: 0 14px;"></i>
				<div class="results_container">
					<?php if (isset(self::$_sections['i'])) unset(self::$_sections['i']);
self::$_sections['i']['name'] = 'i';
self::$_sections['i']['loop'] = is_array($_loop=self::$_tpl_vars['types']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
					<div class="result_item" onclick="common.result_select(this, '<?php echo self::$_tpl_vars['types'][self::$_sections['i']['index']]['title']; ?>
', <?php echo self::$_tpl_vars['types'][self::$_sections['i']['index']]['id']; ?>
, 'full'); label.update('type');"><?php echo self::$_tpl_vars['types'][self::$_sections['i']['index']]['title']; ?>
</div>
					<?php endfor; endif; ?>
				</div>
			</div>
		</div>
		<div style="margin-top: 20px; display: table; width: 100%;">
			<div style="width: 50%; display: table-cell; padding-right: 10px;">
				<div class="input_label" style="text-align: center;">Ширина, мм</div>
				<div class="input_numeric">
					<div><div <?php if (self::$_tpl_vars['label']['size_width'] != 60): ?> onclick="label.size_update('width', 'minus', <?php echo self::$_tpl_vars['label']['id']; ?>
);"<?php else: ?> class="disabled"<?php endif; ?>><i class="icon icon_minus"></i></div></div>
					<div><input type="text" id="size_width" class="input_primary" value="<?php echo self::$_tpl_vars['label']['size_width']; ?>
" disabled></div>
					<div><div <?php if (self::$_tpl_vars['label']['size_width'] != 100): ?> onclick="label.size_update('width', 'plus', <?php echo self::$_tpl_vars['label']['id']; ?>
);"<?php else: ?> class="disabled"<?php endif; ?>><i class="icon icon_plus"></i></div></div>
				</div>
			</div>
			<div style="width: 50%; display: table-cell; padding-left: 10px;">
				<div class="input_label" style="text-align: center;">Высота, мм</div>
				<div class="input_numeric">
					<div><div <?php if (self::$_tpl_vars['label']['size_height'] != 30): ?> onclick="label.size_update('height', 'minus', <?php echo self::$_tpl_vars['label']['id']; ?>
);"<?php else: ?> class="disabled"<?php endif; ?>><i class="icon icon_minus"></i></div></div>
					<div><input type="text" id="size_height" class="input_primary" value="<?php echo self::$_tpl_vars['label']['size_height']; ?>
" disabled></div>
					<div><div <?php if (self::$_tpl_vars['label']['size_height'] != 80): ?> onclick="label.size_update('height', 'plus', <?php echo self::$_tpl_vars['label']['id']; ?>
);"<?php else: ?> class="disabled"<?php endif; ?>><i class="icon icon_plus"></i></div></div>
				</div>
			</div>
		</div>
		<div style="margin-top: 20px; display: table; width: 100%;">
			<div style="width: 50%; display: table-cell; padding-right: 10px;">
				<div class="input_label" style="text-align: center;">Размер кода, мм</div>
				<div class="input_numeric">
					<div><div <?php if (self::$_tpl_vars['label']['size_code'] != 13): ?> onclick="label.size_update('code', 'minus', <?php echo self::$_tpl_vars['label']['id']; ?>
);"<?php else: ?> class="disabled"<?php endif; ?>><i class="icon icon_minus"></i></div></div>
					<div><input type="text" id="size_code" class="input_primary" value="<?php echo self::$_tpl_vars['label']['size_code']; ?>
" disabled></div>
					<div><div <?php if (self::$_tpl_vars['label']['size_code'] != 30): ?> onclick="label.size_update('code', 'plus', <?php echo self::$_tpl_vars['label']['id']; ?>
);"<?php else: ?> class="disabled"<?php endif; ?>><i class="icon icon_plus"></i></div></div>
				</div>
			</div>
			<div style="width: 50%; display: table-cell; padding-left: 10px;">
				<div class="input_label" style="text-align: center; <?php if (self::$_tpl_vars['label']['type_id'] == 4): ?>display: none;<?php endif; ?>">Высота ячеек, мм</div>
				<div class="input_numeric" style="<?php if (self::$_tpl_vars['label']['type_id'] == 4): ?>display: none;<?php endif; ?>">
					<div><div onclick="label.size_update('row', 'minus', <?php echo self::$_tpl_vars['label']['id']; ?>
);"><i class="icon icon_minus"></i></div></div>
					<div><input type="text" id="size_row" class="input_primary" value="<?php echo self::$_tpl_vars['label']['size_row']; ?>
" disabled></div>
					<div><div onclick="label.size_update('row', 'plus', <?php echo self::$_tpl_vars['label']['id']; ?>
);"><i class="icon icon_plus"></i></div></div>
				</div>
			</div>
		</div>
		<div style="margin-top: 20px; <?php if (self::$_tpl_vars['label']['type_id'] == 4): ?>display: none;<?php endif; ?>">
			<div class="input_label">Название компании</div>
			<input type="text" id="company_title" class="input_primary" placeholder="Название" value='<?php echo self::$_tpl_vars['label']['company_title']; ?>
' oninput="label.update('common'); input_error_hide(this);" autocomplete="off" autocorrect="off" autocapitalize="off">
		</div>
	</div>
	<div style="margin-top: 20px; margin-bottom: 0px;">
		<div class="btn_primary" onclick="label.save(<?php echo self::$_tpl_vars['label']['id']; ?>
);">Сохранить</div>
	</div>
</div>