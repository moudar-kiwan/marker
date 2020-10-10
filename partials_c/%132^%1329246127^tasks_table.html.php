<div style="display: table-row; color: #04368f; font-weight: 600; font-size: 12px;">
	<div style="display: table-cell; width: 10%; vertical-align: bottom; padding-bottom: 10px;">Дата<br>создания</div>
	<div style="display: table-cell; width: 10%; vertical-align: bottom; padding-bottom: 10px;">Дата<br>завершения</div>
	<div style="display: table-cell; width: 25%; vertical-align: bottom; padding-bottom: 10px;">Название</div>
	<div style="display: table-cell; width: 20%; vertical-align: bottom; padding-bottom: 10px;">Исполнитель</div>
	<div style="display: table-cell; width: 15%; vertical-align: bottom; padding-bottom: 10px;">Кол-во всего<br>/ к маркировке</div>
	<div style="display: table-cell; width: 15%; vertical-align: bottom; padding-bottom: 10px;"></div>
	<div style="display: table-cell; width: 5%; vertical-align: bottom; padding-bottom: 10px;"></div>
</div>
<?php if (isset(self::$_sections['i'])) unset(self::$_sections['i']);
self::$_sections['i']['name'] = 'i';
self::$_sections['i']['loop'] = is_array($_loop=self::$_tpl_vars['tasks']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<a class="task_item" href="/tasks/<?php echo self::$_tpl_vars['tasks'][self::$_sections['i']['index']]['id']; ?>
?act=edit">
	<div style="display: table-cell; width: 10%; padding: 10px 0; border-top: 1px solid #ebedec; vertical-align: top; font-size: 12px;">
		<div><?php echo self::$_tpl_vars['tasks'][self::$_sections['i']['index']]['date']; ?>
</div>
	</div>
	<div style="display: table-cell; width: 10%; padding: 10px 0; border-top: 1px solid #ebedec; vertical-align: top; font-size: 12px;">
		<div><?php echo self::$_tpl_vars['tasks'][self::$_sections['i']['index']]['date_end']; ?>
</div>
	</div>
	<div style="display: table-cell; width: 25%; padding: 10px 0; border-top: 1px solid #ebedec; vertical-align: top; font-size: 12px; font-weight: 600;"><?php echo self::$_tpl_vars['tasks'][self::$_sections['i']['index']]['title']; ?>
</div>
	<div style="display: table-cell; width: 20%; padding: 10px 0; border-top: 1px solid #ebedec; vertical-align: top; font-size: 12px;">
		<?php if (self::$_tpl_vars['tasks'][self::$_sections['i']['index']]['users']): ?>
		<?php if (isset(self::$_sections['j'])) unset(self::$_sections['j']);
self::$_sections['j']['name'] = 'j';
self::$_sections['j']['loop'] = is_array($_loop=self::$_tpl_vars['tasks'][self::$_sections['i']['index']]['users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
		<div><?php echo self::$_tpl_vars['tasks'][self::$_sections['i']['index']]['users'][self::$_sections['j']['index']]['full_name']; ?>
</div>
		<?php endfor; endif; ?>
		<?php else: ?>
		<div>-</div>
		<?php endif; ?>
	</div>
	<div style="display: table-cell; width: 15%; padding: 10px 0; border-top: 1px solid #ebedec; vertical-align: top; font-size: 12px;"><?php echo self::$_tpl_vars['tasks'][self::$_sections['i']['index']]['products_all']; ?>
/<?php echo self::$_tpl_vars['tasks'][self::$_sections['i']['index']]['products_active']; ?>
</div>
	<div style="display: table-cell; width: 15%; padding: 10px 0; border-top: 1px solid #ebedec; vertical-align: top; position: relative;">
		<?php if (self::$_tpl_vars['tasks'][self::$_sections['i']['index']]['status'] == 1): ?>
		<span class="home_product_item_status complete">Выполнено</span>
		<?php else: ?>
		<span class="home_product_item_status wait">Запланировано</span>
		<?php endif; ?>
	</div>
	<div style="display: table-cell; width: 5%; padding: 10px 0; border-top: 1px solid #ebedec; vertical-align: top; position: relative; text-align: right;">
		<i class="icon icon_delete_2" onclick="task.delete(<?php echo self::$_tpl_vars['tasks'][self::$_sections['i']['index']]['id']; ?>
);" style="font-size: 22px; color: #04368f; cursor: pointer; margin-top: 3px; margin-left: 10px; margin-right: 5px;"></i>
	</div>
</a>
<?php endfor; endif; ?>