<div class="modal_head">
	<span><?php if (! self::$_tpl_vars['user']['user_id']): ?>Добавить<?php else: ?>Редактировать<?php endif; ?> пользователя</span>
	<i class="icon icon_delete" onclick="common.modal_hide();"></i>	
</div>
<div style="padding: 20px; border-radius: 0 0 3px 3px; background: #fff;">
	<div style="padding-top: 0px;">
		<div class="input_label">Фамилия</div>
		<input class="input_primary" id="last_name" type="text" value="<?php echo self::$_tpl_vars['user']['last_name']; ?>
" placeholder="Иванов" oninput="input_error_hide(this);" autocomplete="off" autocorrect="off" autocapitalize="off">
	</div>
	<div style="padding-top: 15px;">
		<div class="input_label">Имя</div>
		<input class="input_primary" id="first_name" type="text" value="<?php echo self::$_tpl_vars['user']['first_name']; ?>
" placeholder="Иван" oninput="input_error_hide(this);" autocomplete="off" autocorrect="off" autocapitalize="off">
	</div>
	<div style="padding-top: 15px;">
		<div class="input_label">Отчество</div>
		<input class="input_primary" id="middle_name" type="text" value="<?php echo self::$_tpl_vars['user']['middle_name']; ?>
" placeholder="Иванович" oninput="input_error_hide(this);" autocomplete="off" autocorrect="off" autocapitalize="off">
	</div>
	<div style="padding-top: 15px;">
		<div class="input_label">Электронная почта</div>
		<input class="input_primary" id="email" type="text" value="<?php echo self::$_tpl_vars['user']['email']; ?>
" placeholder="user@example.com" oninput="input_error_hide(this);" autocomplete="off" autocorrect="off" autocapitalize="off">
	</div>
	<div style="padding-top: 15px;">
		<div class="input_label">Телефон</div>
		<input class="input_primary" id="phone" type="text" value="<?php echo self::$_tpl_vars['user']['phone']; ?>
" placeholder="+79000000000" oninput="input_error_hide(this);" autocomplete="off" autocorrect="off" autocapitalize="off">
	</div>
	<div style="padding-top: 15px;">
		<div class="input_label">Должность</div>
		<input class="input_primary" id="occupation" type="text" value="<?php echo self::$_tpl_vars['user']['occupation']; ?>
" placeholder="" oninput="input_error_hide(this);" autocomplete="off" autocorrect="off" autocapitalize="off">
	</div>
	<div style="padding-top: 15px;">
		<div class="input_label">Группа</div>
		<div class="selector" style="position: relative;" onclick="common.results_toggle(this, event);">
			<input type="text" class="input_primary" placeholder="Название" value="<?php echo self::$_tpl_vars['user']['group_title']; ?>
" autocomplete="off" autocorrect="off" autocapitalize="off" disabled style="cursor: pointer;">
			<input type="hidden" id="group_id" value="<?php echo self::$_tpl_vars['user']['group_id']; ?>
">
			<i class="icon icon_expand" style="position: absolute; top: 1px; right: 0px; font-size: 17px; cursor: pointer; line-height: 38px; padding: 0 14px;"></i>
			<div class="results_container">
				<?php if (isset(self::$_sections['i'])) unset(self::$_sections['i']);
self::$_sections['i']['name'] = 'i';
self::$_sections['i']['loop'] = is_array($_loop=self::$_tpl_vars['groups']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<div class="result_item" onclick="common.result_select(this, '<?php echo self::$_tpl_vars['groups'][self::$_sections['i']['index']]['title']; ?>
', <?php echo self::$_tpl_vars['groups'][self::$_sections['i']['index']]['id']; ?>
, 'full');"><?php echo self::$_tpl_vars['groups'][self::$_sections['i']['index']]['title']; ?>
</div>
				<?php endfor; endif; ?>
			</div>
		</div>
	</div>
	<div style="padding-top: 15px;">
		<div class="input_label">Пароль</div>
		<input class="input_primary" id="password" type="text" value="" placeholder="" oninput="input_error_hide(this);" autocomplete="off" autocorrect="off" autocapitalize="off">
	</div>
	<div style="padding-top: 15px;">
		<div class="input_label">Примечание</div>
		<input class="input_primary" id="note" type="text" value="<?php echo self::$_tpl_vars['user']['note']; ?>
" placeholder="" oninput="input_error_hide(this);" autocomplete="off" autocorrect="off" autocapitalize="off">
	</div>
	<div style="margin-top: 20px;">
		<div class="btn_primary" onclick="user.edit_update(<?php echo self::$_tpl_vars['user']['user_id']; ?>
);">Сохранить</div>
	</div>
</div>