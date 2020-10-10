<?php if (isset(self::$_sections['a'])) unset(self::$_sections['a']);
self::$_sections['a']['name'] = 'a';
self::$_sections['a']['loop'] = is_array($_loop=self::$_tpl_vars['labels']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
self::$_sections['a']['show'] = true;
self::$_sections['a']['max'] = self::$_sections['a']['loop'];
self::$_sections['a']['step'] = 1;
self::$_sections['a']['start'] = self::$_sections['a']['step'] > 0 ? 0 : self::$_sections['a']['loop']-1;
if (self::$_sections['a']['show']) {
    self::$_sections['a']['total'] = self::$_sections['a']['loop'];
    if (self::$_sections['a']['total'] == 0)
        self::$_sections['a']['show'] = false;
} else
    self::$_sections['a']['total'] = 0;
if (self::$_sections['a']['show']):

            for (self::$_sections['a']['index'] = self::$_sections['a']['start'], self::$_sections['a']['iteration'] = 1;
                 self::$_sections['a']['iteration'] <= self::$_sections['a']['total'];
                 self::$_sections['a']['index'] += self::$_sections['a']['step'], self::$_sections['a']['iteration']++):
?>
	<?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>self::$_tpl_vars['labels'][self::$_sections['a']['index']]['template'], 'vars'=>['label' => self::$_tpl_vars['labels'][self::$_sections['a']['index']]]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?>
<?php endfor; endif; ?>