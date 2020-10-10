<?php if (isset(self::$_sections['i'])) unset(self::$_sections['i']);
self::$_sections['i']['name'] = 'i';
self::$_sections['i']['loop'] = is_array($_loop=self::$_tpl_vars['files']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<div class="product_edit_file_item" id="file_<?php echo self::$_tpl_vars['files'][self::$_sections['i']['index']]['id']; ?>
">
	<div class="product_edit_file_icon">
		<?php if (self::$_tpl_vars['files'][self::$_sections['i']['index']]['type'] == 1): ?>
		<i class="icon icon_pdf"></i>
		<?php elseif (self::$_tpl_vars['files'][self::$_sections['i']['index']]['type'] == 2): ?>
		<i class="icon icon_word"></i>
		<?php elseif (self::$_tpl_vars['files'][self::$_sections['i']['index']]['type'] == 3): ?>
		<i class="icon icon_excel"></i>
		<?php elseif (self::$_tpl_vars['files'][self::$_sections['i']['index']]['type'] == 4): ?>
		<i class="icon icon_txt"></i>
		<?php elseif (self::$_tpl_vars['files'][self::$_sections['i']['index']]['type'] == 5): ?>
		<i class="icon icon_jpg"></i>
		<?php elseif (self::$_tpl_vars['files'][self::$_sections['i']['index']]['type'] == 6): ?>
		<i class="icon icon_png"></i>
		<?php endif; ?>
	</div>
	<div class="product_edit_file_name"><input type="text" class="input_primary" id="file_name_<?php echo self::$_tpl_vars['files'][self::$_sections['i']['index']]['id']; ?>
" value="<?php echo self::$_tpl_vars['files'][self::$_sections['i']['index']]['title']; ?>
" placeholder="Название документа" autocomplete="off" autocorrect="off" autocapitalize="off" disabled></div>
	<div class="product_edit_file_delete"><i class="icon icon_delete_2" onclick="product.file_delete(<?php echo self::$_tpl_vars['files'][self::$_sections['i']['index']]['id']; ?>
);"></i></div>
</div>
<?php endfor; endif; ?>