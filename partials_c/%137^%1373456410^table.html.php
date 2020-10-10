<table>
		<?php if (isset(self::$_sections['i'])) unset(self::$_sections['i']);
self::$_sections['i']['name'] = 'i';
self::$_sections['i']['loop'] = is_array($_loop=self::$_tpl_vars['table']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
		<tr>
			<?php if (isset(self::$_sections['j'])) unset(self::$_sections['j']);
self::$_sections['j']['name'] = 'j';
self::$_sections['j']['loop'] = is_array($_loop=self::$_tpl_vars['table'][self::$_sections['i']['index']]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<?php if (self::$_tpl_vars['mode'] == 'edit' && ( self::$_tpl_vars['table'][self::$_sections['i']['index']][self::$_sections['j']['index']]['mode'] == 'edit_row' || self::$_tpl_vars['table'][self::$_sections['i']['index']][self::$_sections['j']['index']]['mode'] == 'edit_col' || self::$_tpl_vars['table'][self::$_sections['i']['index']][self::$_sections['j']['index']]['mode'] == 'edit_all' )): ?>
			<td class="pt_edit">
				<i class="icon icon_checked_2_off pt_checkbox" onclick="passport.context_menu_toggle(this, event);">
					<div class="pt_context_menu">
						<?php if (self::$_tpl_vars['table'][self::$_sections['i']['index']][self::$_sections['j']['index']]['mode'] == 'edit_row' || self::$_tpl_vars['table'][self::$_sections['i']['index']][self::$_sections['j']['index']]['mode'] == 'edit_all'): ?>
						<div onclick="passport.row_add(<?php echo self::$_tpl_vars['table'][self::$_sections['i']['index']][self::$_sections['j']['index']]['table_row_id']; ?>
);">Добавить строку</div>
						<div onclick="passport.row_delete(<?php echo self::$_tpl_vars['table'][self::$_sections['i']['index']][self::$_sections['j']['index']]['table_row_id']; ?>
);">Удалить строку</div>
						<?php endif; ?>
						<?php if (self::$_tpl_vars['table'][self::$_sections['i']['index']][self::$_sections['j']['index']]['mode'] == 'edit_col' || self::$_tpl_vars['table'][self::$_sections['i']['index']][self::$_sections['j']['index']]['mode'] == 'edit_all'): ?>
						<div onclick="passport.col_add(0);">Добавить столбец</div>
						<div onclick="passport.col_delete(0);">Удалить столбец</div>
						<?php endif; ?>
					</div>
				</i>
			</td>
			<?php endif; ?>
			<?php if (self::$_tpl_vars['table'][self::$_sections['i']['index']][self::$_sections['j']['index']]['mode'] == 'main'): ?>
			<td style="width: <?php echo self::$_tpl_vars['table'][self::$_sections['i']['index']][self::$_sections['j']['index']]['width']; ?>
%;"<?php if (self::$_tpl_vars['table'][self::$_sections['i']['index']][self::$_sections['j']['index']]['colspan'] > 1): ?> colspan="<?php echo self::$_tpl_vars['table'][self::$_sections['i']['index']][self::$_sections['j']['index']]['colspan']; ?>
"<?php endif; ?><?php if (self::$_tpl_vars['table'][self::$_sections['i']['index']][self::$_sections['j']['index']]['rowspan'] > 1): ?> rowspan="<?php echo self::$_tpl_vars['table'][self::$_sections['i']['index']][self::$_sections['j']['index']]['rowspan']; ?>
"<?php endif; ?>>
				<?php if (self::$_tpl_vars['table'][self::$_sections['i']['index']][self::$_sections['j']['index']]['editable']): ?><input id="cell_<?php echo self::$_tpl_vars['table'][self::$_sections['i']['index']][self::$_sections['j']['index']]['id']; ?>
" class="edit_cell" type="text">
				<?php else: ?><span><?php echo self::$_tpl_vars['table'][self::$_sections['i']['index']][self::$_sections['j']['index']]['content']; ?>
</span><?php endif; ?>
			</td>
			<?php endif; ?>
			<?php endfor; endif; ?>
		</tr>
		<?php endfor; endif; ?>
</table>