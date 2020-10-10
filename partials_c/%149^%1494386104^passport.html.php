<div style="padding: 20px 20px 50px 20px; background: #fff; min-height: 200px; padding-bottom: 170px;">
	
	<div class="passport_breadcrumbs">
		<a href="/passports">все записи</a>
		<i class="icon icon_next"></i>
		<span><?php echo self::$_tpl_vars['passport']['title']; ?>
</span>
	</div>
	
	<div style="font-size: 18px; color: #04368f; margin-top: 10px;"><?php echo self::$_tpl_vars['passport']['title']; ?>
</div>
	<div style="margin-top: 15px;">
		<div onclick="passport.edit_window(<?php echo self::$_tpl_vars['passport_id']; ?>
);" class="btn_primary" style="height: 30px; line-height: 30px; width: auto; text-align: center; margin-right: 8px;">Редактировать</div>
		<div onclick="passport.archive_toggle(<?php echo self::$_tpl_vars['passport_id']; ?>
, 2);" class="btn_primary" style="height: 30px; line-height: 30px; width: auto; text-align: center; margin-right: 8px;">Архивировать</div>
		<div onclick="passport.files_list(<?php echo self::$_tpl_vars['passport_id']; ?>
);" class="btn_primary" style="height: 30px; line-height: 30px; width: auto; text-align: center; margin-right: 8px;">Список файлов</div>
	</div>
	
	<div style="font-size: 14px; font-weight: 600; margin-top: 20px;">Разделы паспорта</div>
	<div class="passport_sections" id="passport_sections"><?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>"./partials/section/passports/passport_sections_table.html", 'vars'=>[]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?></div>
	
	<div style="font-size: 14px; font-weight: 600; margin-top: 20px;">Приложения</div>
	
	<div style="margin-top: 15px;">
		<div onclick="passport.annex_edit_window(<?php echo self::$_tpl_vars['passport_id']; ?>
, 0);" class="btn_primary" style="height: 30px; line-height: 30px; width: auto; text-align: center; margin-right: 8px;">Добавить приложение</div>
	</div>
	
	<div class="passport_sections" id="passport_annexes"><?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>"./partials/section/passports/passport_annexes_table.html", 'vars'=>[]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?></div>

</div>