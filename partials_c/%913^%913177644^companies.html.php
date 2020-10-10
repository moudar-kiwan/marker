<div style="padding: 20px; border-radius: 5px; background: #fff; box-shadow: 0 1px 0 0 #d7d8db, 0 0 0 1px #e3e4e8;">
	<div style="font-size: 18px; color: #04368f; font-weight: 400; margin-bottom: 20px;">Пользователи</div>
			<div style="width: 100%; margin-bottom: 0px; display: inline-block;">
				<a href="/auth?sub=companies&action=edit" class="btn_primary">Добавить</a>
				<div id="paginator_wrap"><?php echo self::$_tpl_vars['paginator']; ?>
</div>
				<div style="float: right; position: relative; border-bottom: 1px solid #04368f; width: 300px; height: 36px;">
					<input id="search_query" class="input_sub" type="text" placeholder="Поиск огранизации" oninput="contractor_search();" style="padding-right: 30px;" autocomplete="off" autocorrect="off" autocapitalize="off">
					<div class="icon icon_search" id="search_sub" style="color: #04368f;"></div>
				</div>
				<div style="float: right; position: relative; width: 200px; height: 36px; margin-right: 10px;">
					<select id="type" class="checks_products_select" onchange="contractor_type();" style="border: 0; border-bottom: 1px solid #04368f; line-height: 36px; height: 36px; width: 100%;">
						<option value="-1">Все организации</option>
						<option value="0"<?php if (self::$_tpl_vars['type'] == 0): ?> selected<?php endif; ?>>Администрация</option>
						<option value="1"<?php if (self::$_tpl_vars['type'] == 1): ?> selected<?php endif; ?>>Поставщики</option>
						<option value="2"<?php if (self::$_tpl_vars['type'] == 2): ?> selected<?php endif; ?>>Заказчики</option>
						<option value="3"<?php if (self::$_tpl_vars['type'] == 3): ?> selected<?php endif; ?>>Инспекции</option>
					</select>
				</div>
			</div>
		<div id="companies_table" style="margin-top: 10px;"><?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>"./partials/section/users/companies_table.html", 'vars'=>[]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?></div>
</div>