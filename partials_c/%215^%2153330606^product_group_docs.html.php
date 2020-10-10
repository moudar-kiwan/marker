<div class="modal_head">
	<span>Добавление документов</span>
	<i class="icon icon_delete" onclick="common.modal_hide();"></i>	
</div>
<div style="padding: 15px 20px; background: #fff; border-bottom: 1px solid #ccc;">
	<div class="btn_primary" onclick="product.group_docs_upload(<?php echo self::$_tpl_vars['group_id']; ?>
);" style="line-height: 30px; height: 30px;">Загрузить</div>
</div>
<div style="padding: 15px 20px; background: #fff; border-bottom: 1px solid #ccc;">
	<div style="color: #04368f; font-size: 12px; font-weight: 600; margin-bottom: 10px;">Загруженные документы</div>
	<div style="display: table; width: 100%;">
		<div style="display: table-row; width: 100%;">
			<div style="display: table-cell; width: 0%; vertical-align: middle; padding: 10px 0; padding-right: 15px;"><i class="icon icon_doc"></i></div>
			<div style="display: table-cell; width: 100%; vertical-align: middle; padding: 10px 0;">Тестовый документ 1</div>
			<div style="display: table-cell; width: 0%; vertical-align: middle; padding: 10px 0;"><i class="icon icon_delete"></i></div>
		</div>
	</div>
</div>
<div style="padding: 15px 20px; border-radius: 0 0 3px 3px; background: #fff;">
	<?php if (self::$_tpl_vars['products']): ?>
	<div style="color: #04368f; font-size: 12px; font-weight: 600; margin-bottom: 10px;">Изделия в партии</div>
	<div class="product_history_table">
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
		<div>
			<div style="width: 90%;">
				<div style="font-size: 12px;"><?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['title']; ?>
</div>
			</div>
			<div style="width: 10%; text-align: right;">

			</div>
		</div>
		<?php endfor; endif; ?>
	</div>
	<?php else: ?>
	<div class="product_history_blank"><span>В этой партии нет изделий. Добавьте изделия в партию, после чего попробуйте выполнить это действие снова.</span></div>
	<?php endif; ?>
</div>