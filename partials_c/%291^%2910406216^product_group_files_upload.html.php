<div style="color: #04368f; font-size: 12px; font-weight: 600; margin-bottom: 10px;">Загруженные документы</div>
<div id="group_files_table">
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
	<div class="group_file_item">
		<div><i class="icon icon_success group_files_upload<?php if (self::$_tpl_vars['files'][self::$_sections['i']['index']]['status_id'] != 1): ?> disabled<?php endif; ?>"<?php if (self::$_tpl_vars['files'][self::$_sections['i']['index']]['status_id'] == 1): ?> onclick="product.group_files_upload_toggle(this, <?php echo self::$_tpl_vars['files'][self::$_sections['i']['index']]['group_file_id']; ?>
, <?php echo self::$_tpl_vars['files'][self::$_sections['i']['index']]['group_id']; ?>
);"<?php endif; ?>></i></div>
		<div><?php if (self::$_tpl_vars['files'][self::$_sections['i']['index']]['size']): ?><?php echo self::$_tpl_vars['files'][self::$_sections['i']['index']]['size']; ?>
 Mb<?php else: ?>-<?php endif; ?></div>
		<div>
			<?php if (self::$_tpl_vars['files'][self::$_sections['i']['index']]['status_id'] == 1): ?>
			<a href="<?php echo self::$_tpl_vars['files'][self::$_sections['i']['index']]['path']; ?>
" target="_blank" style="text-decoration: none; display: inline;"><?php echo self::$_tpl_vars['files'][self::$_sections['i']['index']]['title']; ?>
</a>
			<?php else: ?>
			<span style="color: #C50003;"><?php echo self::$_tpl_vars['files'][self::$_sections['i']['index']]['title']; ?>
</span>
			<?php endif; ?>
		</div>
		<div><i class="icon icon_delete_2" onclick="product.group_files_delete(<?php echo self::$_tpl_vars['files'][self::$_sections['i']['index']]['group_id']; ?>
, <?php echo self::$_tpl_vars['files'][self::$_sections['i']['index']]['group_file_id']; ?>
);"></i></div>
	</div>
	<?php endfor; endif; ?>
</div>