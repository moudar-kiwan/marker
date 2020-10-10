<?php if (self::$_tpl_vars['contracts']): ?>
<?php if (isset(self::$_sections['i'])) unset(self::$_sections['i']);
self::$_sections['i']['name'] = 'i';
self::$_sections['i']['loop'] = is_array($_loop=self::$_tpl_vars['contracts']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<div class="result_item" onclick="product.search_contract_select(<?php echo self::$_tpl_vars['contracts'][self::$_sections['i']['index']]['id']; ?>
, '<?php echo self::$_tpl_vars['contracts'][self::$_sections['i']['index']]['title']; ?>
 прил. <?php echo self::$_tpl_vars['contracts'][self::$_sections['i']['index']]['annex_number']; ?>
');"><?php echo self::$_tpl_vars['contracts'][self::$_sections['i']['index']]['title']; ?>
 прил. <?php echo self::$_tpl_vars['contracts'][self::$_sections['i']['index']]['annex_number']; ?>
</div>
<?php endfor; endif; ?>
<?php else: ?>
<div class="result_item">Ничего не найдено ...</div>
<?php endif; ?>