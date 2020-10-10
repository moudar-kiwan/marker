<?php if (self::$_tpl_vars['labels']): ?>
<?php if (isset(self::$_sections['i'])) unset(self::$_sections['i']);
self::$_sections['i']['name'] = 'i';
self::$_sections['i']['loop'] = is_array($_loop=self::$_tpl_vars['labels']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<div id="product_<?php echo self::$_tpl_vars['labels'][self::$_sections['i']['index']]['id']; ?>
" class="product_item" style="display: table; width: 100%; cursor: default;">
	<div style="display: table-cell; vertical-align: top; width: 50%;">
		<div class="product_item_title" style="margin-bottom: 15px;"><?php echo self::$_tpl_vars['labels'][self::$_sections['i']['index']]['title']; ?>
</div>
		<div class="btn_primary" onclick="label.edit(<?php echo self::$_tpl_vars['labels'][self::$_sections['i']['index']]['id']; ?>
);" style="line-height: 30px; height: 30px;">Редактировать</div>
		<div class="btn_primary" onclick="label.delete(<?php echo self::$_tpl_vars['labels'][self::$_sections['i']['index']]['id']; ?>
);" style="line-height: 30px; height: 30px; margin-left: 8px;">Удалить</div>
	</div>
	<div style="display: table-cell; vertical-align: top; width: 50%;">
		<div style="background: #eee; border-radius: 3px; overflow: hidden; margin: 0 0 0 auto; height: <?php echo self::$_tpl_vars['labels'][self::$_sections['i']['index']]['preview_height']; ?>
px; width: <?php echo self::$_tpl_vars['labels'][self::$_sections['i']['index']]['preview_width']; ?>
px; position: relative;">
			<div id="label_preview" style="position: absolute; left: 0; width: 0; height: 0; top: 0; transform: scale(0.3);">
				<?php echo self::$_tpl_vars['labels'][self::$_sections['i']['index']]['preview']; ?>

			</div>
		</div>
	</div>
</div>
<?php endfor; endif; ?>
<?php else: ?>
<div style="margin-top: 15px; padding: 20px; border: 1px solid #c2c8cf; border-radius: 3px; font-size: 12px; color: #5c626a;">этикетки не найдены</div>
<?php endif; ?>