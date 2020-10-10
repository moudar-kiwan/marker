<?php if (self::$_tpl_vars['bills']): ?>
<div>
	<div style="width: 20%;">Номер счета</div>
	<div style="width: 18%;">Сумма</div>
	<div style="width: 17%;">Статус</div>
	<div style="width: 15%;">PDF</div>
	<div style="width: 15%;">Выставлен</div>
	<div style="width: 15%;">Оплачен</div>
	<div style="width: 0%;"></div>
</div>
<?php if (isset(self::$_sections['i'])) unset(self::$_sections['i']);
self::$_sections['i']['name'] = 'i';
self::$_sections['i']['loop'] = is_array($_loop=self::$_tpl_vars['bills']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<div onclick="">
	<div><?php echo self::$_tpl_vars['bills'][self::$_sections['i']['index']]['number']; ?>
</div>
	<div><?php echo self::$_tpl_vars['bills'][self::$_sections['i']['index']]['amount']; ?>
 ₽</div>
	<div><?php echo self::$_tpl_vars['bills'][self::$_sections['i']['index']]['status']; ?>
</div>
	<div><a href="/bills?act=download&id=<?php echo self::$_tpl_vars['bills'][self::$_sections['i']['index']]['id']; ?>
" target="_blank">скачать</a></div>
	<div><?php echo self::$_tpl_vars['bills'][self::$_sections['i']['index']]['created']; ?>
</div>
	<div><?php echo self::$_tpl_vars['bills'][self::$_sections['i']['index']]['paid']; ?>
</div>
	<div>
		<i class="icon icon_ellipsis" onclick="common.menu_popup_toggle(this, event);">
			<div class="menu_popup" style="width: 185px;">
				<div onclick="bill.delete(<?php echo self::$_tpl_vars['bills'][self::$_sections['i']['index']]['id']; ?>
);"><i class="icon icon_delete_5"></i> Удалить</div>
			</div>
		</i>
	</div>
</div>
<?php endfor; endif; ?>
<?php else: ?>
<div style="display: table-cell; width: 100%; margin-top: 15px; padding: 20px; border: 1px dashed #c2c8cf; border-radius: 3px; font-size: 12px; color: #5c626a;">Счета не найдены.</div>
<?php endif; ?>