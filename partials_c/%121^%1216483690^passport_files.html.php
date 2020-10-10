<div style="padding: 20px 20px 50px 20px; background: #fff; min-height: 200px; padding-bottom: 170px;">
	
	<div class="passport_breadcrumbs">
		<a href="/passports">все записи</a>
		<i class="icon icon_next"></i>
		<a href="/passports/<?php echo self::$_tpl_vars['passport']['id']; ?>
"><?php echo self::$_tpl_vars['passport']['title']; ?>
</a>
		<i class="icon icon_next"></i>
		<span>файлы</span>
	</div>
	
	<div style="font-size: 18px; color: #04368f; margin-top: 10px;"><?php echo self::$_tpl_vars['passport']['title']; ?>
</div>
	
	<div style="font-size: 14px; font-weight: 600; margin-top: 20px;">Список загруженных файлов</div>
	<div class="passport_sections" id="passport_files"><?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>"./partials/section/passports/passport_files_table.html", 'vars'=>[]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?></div>

</div>