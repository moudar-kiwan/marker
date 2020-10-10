<?php if (self::$_tpl_vars['products']): ?>
<?php if (isset(self::$_sections['i'])) unset(self::$_sections['i']);
self::$_sections['i']['name'] = 'i';
self::$_sections['i']['loop'] = is_array($_loop=self::$_tpl_vars['products']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<div class="modal_search_item">
	<div class="modal_search_info">
		<div><?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['title']; ?>
</div>
		<div class="modal_search_info_sub"><?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['code']; ?>
</div>
	</div>
	<i id="modal_product_<?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['id']; ?>
" class="icon icon_success modal_search_delete<?php if (self::$_tpl_vars['products'][self::$_sections['i']['index']]['selected']): ?> active<?php endif; ?>" onclick="task.product_toggle(<?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['id']; ?>
, '<?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['title']; ?>
');"></i>
</div>
<?php endfor; endif; ?>
<?php else: ?>
<div class="modal_search_blank">Подходящих изделий не найдено. Измените условия поиска или добавьте новые изделия в систему.</div>
<?php endif; ?>