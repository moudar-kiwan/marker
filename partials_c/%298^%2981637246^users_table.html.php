<?php if (self::$_tpl_vars['users']): ?>
<?php if (isset(self::$_sections['i'])) unset(self::$_sections['i']);
self::$_sections['i']['name'] = 'i';
self::$_sections['i']['loop'] = is_array($_loop=self::$_tpl_vars['users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<div class="users_item">
	<div class="users_item_icons">
		<i class="icon icon_ellipsis" onclick="common.menu_popup_toggle(this, event);">
			<div class="menu_popup" style="width: 160px;">
				<div onclick="user.edit_window(<?php echo self::$_tpl_vars['users'][self::$_sections['i']['index']]['user_id']; ?>
);"><i class="icon icon_edit"></i> Редактировать</div>
				<?php if (self::$_tpl_vars['users'][self::$_sections['i']['index']]['access'] == 3): ?>
				<?php if (self::$_tpl_vars['users'][self::$_sections['i']['index']]['blocked']): ?>
				<div onclick="user.block(<?php echo self::$_tpl_vars['users'][self::$_sections['i']['index']]['user_id']; ?>
, 0);"><i class="icon icon_block"></i> Разблокировать</div>
				<?php else: ?>
				<div onclick="user.block(<?php echo self::$_tpl_vars['users'][self::$_sections['i']['index']]['user_id']; ?>
, 1);"><i class="icon icon_block"></i> Заблокировать</div>
				<?php endif; ?>
				<div onclick="user.delete_window(<?php echo self::$_tpl_vars['users'][self::$_sections['i']['index']]['user_id']; ?>
);"><i class="icon icon_delete_5"></i> Удалить</div>
				<?php endif; ?>
			</div>
		</i>
	</div>
	<div class="users_item_title"><?php echo self::$_tpl_vars['users'][self::$_sections['i']['index']]['full_name']; ?>
</div>
	<div class="users_item_info">
		<div>Доступ: <span><?php echo self::$_tpl_vars['users'][self::$_sections['i']['index']]['status']; ?>
</span></div>
		<div>Телефон: <span><?php echo self::$_tpl_vars['users'][self::$_sections['i']['index']]['phone']; ?>
</span></div>
		<div>Добавлен: <span><?php echo self::$_tpl_vars['users'][self::$_sections['i']['index']]['created']; ?>
</span></div>
		<div>Статус: <span style="<?php if (! self::$_tpl_vars['users'][self::$_sections['i']['index']]['blocked']): ?>color: #109f14; <?php else: ?>color: #DB0000;<?php endif; ?>"><?php if (! self::$_tpl_vars['users'][self::$_sections['i']['index']]['blocked']): ?>Активный<?php else: ?>Заблокирован<?php endif; ?></span></div>
		<div>Email: <span><?php echo self::$_tpl_vars['users'][self::$_sections['i']['index']]['email']; ?>
</span></div>
		<?php if (self::$_tpl_vars['users'][self::$_sections['i']['index']]['group_id']): ?>
		<div>Группа: <span><?php echo self::$_tpl_vars['users'][self::$_sections['i']['index']]['group_title']; ?>
</span></div>
		<?php endif; ?>
		<?php if (self::$_tpl_vars['users'][self::$_sections['i']['index']]['occupation']): ?>
		<div>Должность: <span><?php echo self::$_tpl_vars['users'][self::$_sections['i']['index']]['occupation']; ?>
</span></div>
		<?php endif; ?>
		<?php if (self::$_tpl_vars['users'][self::$_sections['i']['index']]['note']): ?>
		<div>Примечание: <span><?php echo self::$_tpl_vars['users'][self::$_sections['i']['index']]['note']; ?>
</span></div>
		<?php endif; ?>
	</div>
</div>
<?php endfor; endif; ?>
<?php else: ?>
<div style="padding: 20px; border: 1px dashed #c2c8cf; border-radius: 3px; font-size: 12px; color: #5c626a;">Нет добавленных пользователей</div>
<?php endif; ?>