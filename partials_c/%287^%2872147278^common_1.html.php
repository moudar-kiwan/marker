<div class="passport_section">
	
	<div class="passport_breadcrumbs">
		<a href="/passports">все записи</a>
		<i class="icon icon_next"></i>
		<a href="/passports/<?php echo self::$_tpl_vars['passport']['id']; ?>
"><?php echo self::$_tpl_vars['passport']['title']; ?>
</a>
		<i class="icon icon_next"></i>
		<span><?php echo self::$_tpl_vars['section']['title']; ?>
</span>
	</div>
	
	<div class="passport_section_title">Раздел 1. <?php echo self::$_tpl_vars['section']['title']; ?>
</div>
	
	<div id="passport_section_table"><?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>"./partials/section/passports/sections/table.html", 'vars'=>[]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?></div>

</div>