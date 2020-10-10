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
<div class="product_item">
	<div class="product_item_title"><?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['customer']['title']; ?>
, договор <?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['contract']['title']; ?>
</div>
	<div class="product_item_options">
		<div>Договор: <span><?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['quantity']; ?>
</span></div>
		<div>Дата отгрузки: <span><?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['contract']['title']; ?>
</span></div>
	</div>
</div>
<?php endfor; endif; ?>