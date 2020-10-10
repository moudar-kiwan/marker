<div style="padding: 20px 20px 50px 20px; background: #fff; min-height: 200px; padding-bottom: 170px;">
	
	<div class="passport_breadcrumbs">
		<a href="/passports">все записи</a>
		<i class="icon icon_next"></i>
		<a href="/passports/<?php echo self::$_tpl_vars['passport']['id']; ?>
"><?php echo self::$_tpl_vars['passport']['title']; ?>
</a>
		<i class="icon icon_next"></i>
		<span>раздел <?php echo self::$_tpl_vars['section']['number']; ?>
</span>
	</div>
	
	<div style="font-size: 18px; color: #04368f; margin-top: 10px;">Раздел <?php echo self::$_tpl_vars['section']['number']; ?>
. <?php echo self::$_tpl_vars['section']['title']; ?>
</div>
	<div style="margin-top: 15px;">
		<div onclick="passport.files_upload(<?php echo self::$_tpl_vars['passport']['id']; ?>
, <?php echo self::$_tpl_vars['section']['id']; ?>
, 1, 0, 0, 0, 'common');" class="btn_primary" style="height: 30px; line-height: 30px; width: auto; text-align: center; margin-right: 8px;">Загрузить</div>
		<div onclick="passport.section_edit_window(<?php echo self::$_tpl_vars['passport']['id']; ?>
, <?php echo self::$_tpl_vars['section']['id']; ?>
, 'detail');" class="btn_primary" style="height: 30px; line-height: 30px; width: auto; text-align: center; margin-right: 8px;">Редактировать</div>
	</div>
	
	<div style="font-size: 14px; font-weight: 600; margin-top: 20px;">Загруженные документы</div>
	<div class="passport_sections" id="passport_files"><?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>"./partials/section/passports/passport_sub_files_table.html", 'vars'=>[]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?></div>

</div>