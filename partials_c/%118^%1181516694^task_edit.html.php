<div style="padding: 20px; background: #fff; min-height: 200px;">
	<div style="font-size: 18px; color: #04368f; font-weight: 400;"><?php if (self::$_tpl_vars['task']['id']): ?>Редактировать задание<?php else: ?>Новое задание<?php endif; ?></div>
	<div style="color: #04368f; padding: 35px 0 10px 0; font-weight: 600;">I. Основные параметры</div>
	<div style="padding-top: 25px; width: 100%; border-top: 1px solid #ebedec;">
		<div style="display: table; width: 100%;">
			<div style="display: table-cell; width: 50%; padding-right: 5px;">
				<div class="input_label">Название задания</div>
				<input class="input_primary" id="title" type="text" value="<?php echo self::$_tpl_vars['task']['title']; ?>
" oninput="input_error_hide(this);" autocomplete="off" autocorrect="off" autocapitalize="off">
			</div>
			<div style="display: table-cell; width: 50%; padding-left: 5px;">
				<div class="input_label">Дата завершения</div>
				<input class="input_primary" id="date_end" type="text" value="<?php echo self::$_tpl_vars['task']['date_end']; ?>
" oninput="input_error_hide(this);" placeholder="ДД.ММ.ГГГГ" autocomplete="off" autocorrect="off" autocapitalize="off">
			</div>
		</div>
	</div>
	<div style="color: #04368f; padding: 35px 0 10px 0; font-weight: 600;">II. Выбор исполнителей</div>
	<div style="margin-top: 0px; padding-top: 25px; width: 100%; border-top: 1px solid #ebedec;">
		<div class="btn_primary" onclick="task.user_add_window();">Назначить</div>
		<div style="color: #04368f; font-size: 12px; font-weight: 600; margin-top: 15px;">Выбранные сотрудники:</div>
		<div id="selected_users">
			<?php if (self::$_tpl_vars['task']['users']): ?>
			<?php if (isset(self::$_sections['i'])) unset(self::$_sections['i']);
self::$_sections['i']['name'] = 'i';
self::$_sections['i']['loop'] = is_array($_loop=self::$_tpl_vars['task']['users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<div id="selected_user_<?php echo self::$_tpl_vars['task']['users'][self::$_sections['i']['index']]['id']; ?>
" class="selected_users_item">
				<?php echo self::$_tpl_vars['task']['users'][self::$_sections['i']['index']]['full_name']; ?>
<i class="icon icon_delete_3" onclick="task.user_delete(<?php echo self::$_tpl_vars['task']['users'][self::$_sections['i']['index']]['id']; ?>
);"></i>
			</div>
			<?php endfor; endif; ?>
			<?php else: ?>
			<div id="selected_users_blank" class="selected_empty">Сотрудники еще не назначены. Используйте выпадающий список для назначения исполнителей по этому заданию.</div>
			<?php endif; ?>
		</div>
	</div>
	<div style="color: #04368f; padding: 35px 0 10px 0; font-weight: 600;">III. Выбор изделий</div>
	<div style="padding-top: 25px; width: 100%; border-top: 1px solid #ebedec;">
		<div class="btn_primary" onclick="task.product_add_window();">Добавить</div>	
		<div style="color: #04368f; font-size: 12px; font-weight: 600; margin-top: 15px;">Выбранные изделия:</div>
		<div id="selected_products">
			<?php if (self::$_tpl_vars['task']['products']): ?>
			<?php if (isset(self::$_sections['i'])) unset(self::$_sections['i']);
self::$_sections['i']['name'] = 'i';
self::$_sections['i']['loop'] = is_array($_loop=self::$_tpl_vars['task']['products']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<div id="selected_product_<?php echo self::$_tpl_vars['task']['products'][self::$_sections['i']['index']]['id']; ?>
" class="selected_products_item">
				<?php echo self::$_tpl_vars['task']['products'][self::$_sections['i']['index']]['title']; ?>
<i class="icon icon_delete_3" onclick="task.product_delete(<?php echo self::$_tpl_vars['task']['products'][self::$_sections['i']['index']]['id']; ?>
);"></i>
			</div>
			<?php endfor; endif; ?>
			<?php else: ?>
			<div id="selected_products_blank" class="selected_empty">Изделия не добавлены. Используйте выпадающий список для назначения изделий этому заданию.</div>
			<?php endif; ?>
		</div>
	</div>
	<div style="margin-top: 30px; margin-bottom: 50px;">
		<div class="btn_primary" onclick="task.save(<?php echo self::$_tpl_vars['task']['id']; ?>
);">Сохранить</div>
	</div>
</div>