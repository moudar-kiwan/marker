<?php if (self::$_tpl_vars['picks']): ?>
<?php if (isset(self::$_sections['i'])) unset(self::$_sections['i']);
self::$_sections['i']['name'] = 'i';
self::$_sections['i']['loop'] = is_array($_loop=self::$_tpl_vars['picks']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<div class="passport_worker_item">
	<div id="pick_preview_<?php echo self::$_tpl_vars['picks'][self::$_sections['i']['index']]['id']; ?>
" onclick="pick.expand(<?php echo self::$_tpl_vars['picks'][self::$_sections['i']['index']]['id']; ?>
);">
		<i class="icon icon_ellipsis" onclick="common.menu_popup_toggle(this, event);">
			<div class="menu_popup" style="width: 160px;">
				<div onclick="pick.export(<?php echo self::$_tpl_vars['picks'][self::$_sections['i']['index']]['id']; ?>
);"><i class="icon icon_export"></i> Экспорт</div>
				<?php if (self::$_tpl_vars['picks'][self::$_sections['i']['index']]['status'] == 0): ?>
				<div onclick="pick.archive_toggle(<?php echo self::$_tpl_vars['picks'][self::$_sections['i']['index']]['id']; ?>
, 1);"><i class="icon icon_archive_add"></i> Архивировать</div>
				<?php elseif (self::$_tpl_vars['picks'][self::$_sections['i']['index']]['status'] == 1): ?>
				<div onclick="pick.archive_toggle(<?php echo self::$_tpl_vars['picks'][self::$_sections['i']['index']]['id']; ?>
, 0);"><i class="icon icon_archive_remove"></i> Восстановить</div>
				<?php endif; ?>
			</div>
		</i>
		<div class="passport_worker_item_title">Оприходование #<?php echo self::$_tpl_vars['picks'][self::$_sections['i']['index']]['id']; ?>
</div>
		<div class="passport_worker_item_info">
			<div>Производитель: <span><?php echo self::$_tpl_vars['picks'][self::$_sections['i']['index']]['manufacturers']; ?>
</span></div>
			<div>Отсканировано изделий: <span><?php echo self::$_tpl_vars['picks'][self::$_sections['i']['index']]['count_products']; ?>
 шт.</span></div>
			<div>Дата операции: <span><?php echo self::$_tpl_vars['picks'][self::$_sections['i']['index']]['created']; ?>
</span></div>
		</div>
	</div>
	<div id="pick_details_<?php echo self::$_tpl_vars['picks'][self::$_sections['i']['index']]['id']; ?>
" class="passport_worker_item_details">
		<div id="pick_details_wrap_<?php echo self::$_tpl_vars['picks'][self::$_sections['i']['index']]['id']; ?>
">
			<?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>"./partials/section/picks/picks_products_table.html", 'vars'=>['products' => self::$_tpl_vars['picks'][self::$_sections['i']['index']]['products']]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?>
		</div>
	</div>
</div>
<?php endfor; endif; ?>
<?php else: ?>
<div style="padding: 20px; border: 1px dashed #c2c8cf; border-radius: 3px; font-size: 12px; color: #5c626a;">Нет данных</div>
<?php endif; ?>