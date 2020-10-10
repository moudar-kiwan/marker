<div class="modal_head">
	<span><?php if (! self::$_tpl_vars['passport']['id']): ?>Добавить<?php else: ?>Редактировать<?php endif; ?> паспорт</span>
	<i class="icon icon_delete" onclick="common.modal_hide();"></i>	
</div>
<div style="padding: 20px; border-radius: 0 0 3px 3px; background: #fff;">
	<div style="padding-top: 0px;">
		<div class="input_label">Наименование изделия</div>
		<input class="input_primary" id="title" type="text" value="<?php echo self::$_tpl_vars['passport']['title']; ?>
" placeholder="" autocomplete="off" autocorrect="off" autocapitalize="off">
	</div>
	<div style="padding-top: 15px;">
		<div class="input_label">Номер заказа</div>
		<input class="input_primary" id="order_number" type="text" value="<?php echo self::$_tpl_vars['passport']['order_number']; ?>
" placeholder="" autocomplete="off" autocorrect="off" autocapitalize="off">
	</div>
	<div style="padding-top: 15px;">
		<div class="input_label">Заводской номер</div>
		<input class="input_primary" id="number" type="text" value="<?php echo self::$_tpl_vars['passport']['number']; ?>
" placeholder="" autocomplete="off" autocorrect="off" autocapitalize="off">
	</div>
	<div style="padding-top: 15px;">
		<div class="input_label">Форма паспорта изделия</div>
		<div class="selector" style="position: relative;" onclick="common.results_toggle(this, event);">
			<input type="text" class="input_primary" placeholder="Наименование" value="<?php echo self::$_tpl_vars['passport']['type_title']; ?>
" autocomplete="off" autocorrect="off" autocapitalize="off" disabled style="cursor: pointer;">
			<input type="hidden" id="type_id" value="<?php echo self::$_tpl_vars['passport']['type_id']; ?>
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
, 'full');"><?php echo self::$_tpl_vars['types'][self::$_sections['i']['index']]['title']; ?>
</div>
				<?php endfor; endif; ?>
			</div>
		</div>
	</div>
	<div style="padding-top: 15px; position: relative;">
		<div class="input_label">Дата изготовления</div>
		<i class="icon icon_calendar_2" style="position: absolute; bottom: 10px; right: 11px; font-size: 16px; color: #c9cbcf;"></i>
		<input class="input_primary" id="produced" type="text" value="<?php echo self::$_tpl_vars['passport']['produced']; ?>
" placeholder="ДД.ММ.ГГГГ" autocomplete="off" autocorrect="off" autocapitalize="off">
	</div>
	<div style="margin-top: 20px;">
		<div class="btn_primary" onclick="passport.edit_update(<?php echo self::$_tpl_vars['passport']['id']; ?>
);">Сохранить</div>
	</div>
</div>