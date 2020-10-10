<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>"head.html", 'vars'=>[]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?>
<body>
	<?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>(self::$_tpl_vars['section_content']), 'vars'=>[]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?>
</body>
</html>