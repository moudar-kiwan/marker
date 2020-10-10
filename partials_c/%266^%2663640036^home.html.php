<div id="modal"><div id="modal_container"><div id="modal_overlay"><div class="dn" id="modal_close" onclick="common.modal_hide();"><i class="icon icon_delete"></i></div><div id="modal_content"></div></div></div></div>
<div id="notifications_popup" class="notifications_popup"><?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>"./partials/section/notifications/notifications_popup.html", 'vars'=>[]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?></div>
<div id="scroll_fix">
<div id="content"<?php if (self::$_tpl_vars['global']['menu'] == 0): ?> class="short"<?php endif; ?>>
		<div id="top_menu">
			<div id="top_menu_left">
				<i class="icon icon_burger top_menu_burger" onclick="common.menu_toggle();"></i>
				<a class="top_menu_logo" href="/">маркер</a>
				<div style="width: 100%; height: 36px; margin-top: 6px; border-right: 1px solid #e2e6e7;"></div>
			</div>
			<div id="top_menu_main">
				<?php if (self::$_tpl_vars['owner']['access'] == 3 && ! self::$_tpl_vars['owner']['company']['show_passports']): ?>
				<i class="icon icon_search" style="position: absolute; left: 20px; top: 16px; font-size: 16px; color: #04368f;"></i>
				<input id="search" type="text" placeholder="Поиск" value="<?php echo self::$_tpl_vars['search']; ?>
" oninput="common.search();" style="width: 100%; height: 49px; border: 0; padding: 0 20px 0 50px; line-height: 50px;" autocomplete="off" autocorrect="off" autocapitalize="off">
				<?php endif; ?>
			</div>
			<div id="top_menu_right">
				<a href="/logout" class="top_menu_item" style="right: 0px; text-decoration: none;"><i class="icon icon_logout" style="font-size: 18px; color: #04368f; top: 48%;"></i></a>
				<div id="notification_button"><?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>"./partials/section/notifications/notifications_button.html", 'vars'=>[]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?></div>
				<div id="owner_name" style="font-size: 13px; margin-top: 10px; font-weight: 600; text-transform: uppercase; color: #04368f; letter-spacing: 0;"><?php echo self::$_tpl_vars['owner']['full_name']; ?>
</div>
				<div style="font-size: 11px; margin-top: 2px; font-weight: 600; text-transform: uppercase;"><?php echo self::$_tpl_vars['owner']['company_title']; ?>
</div>
			</div>
		</div>
		<div id="menu">
			<?php if (self::$_tpl_vars['owner']['access'] == 2): ?>
			<a class="menu_item<?php if (self::$_tpl_vars['global']['path'] == 'dashboard'): ?> select<?php endif; ?>" href="/">
				<i class="icon icon_dashboard" style="font-size: 20px;"></i><span>Главная</span>
			</a>
			<?php endif; ?>
			<?php if (self::$_tpl_vars['owner']['access'] == 2): ?>
			<a class="menu_item<?php if (self::$_tpl_vars['global']['path'] == 'users'): ?> select<?php endif; ?>" href="/users">
				<i class="icon icon_users" style="font-size: 20px;"></i><span>Пользователи</span>
			</a>
			<?php endif; ?>
			<?php if (self::$_tpl_vars['owner']['access'] == 2): ?>
			<a class="menu_item<?php if (self::$_tpl_vars['global']['path'] == 'bills'): ?> select<?php endif; ?>" href="/bills">
				<i class="icon icon_bills" style="font-size: 20px;"></i><span>Счета</span>
			</a>
			<?php endif; ?>
			<?php if (self::$_tpl_vars['owner']['access'] == 3 && self::$_tpl_vars['owner']['company']['show_products']): ?>
			<a class="menu_item<?php if (self::$_tpl_vars['global']['path'] == 'products' || ( self::$_tpl_vars['global']['path'] == 'home' && ! self::$_tpl_vars['owner']['company']['show_home'] )): ?> select<?php endif; ?>" href="/products">
				<i class="icon icon_products" style="font-size: 20px;"></i><span>Изделия</span>
			</a>
			<?php endif; ?>
			<?php if (self::$_tpl_vars['owner']['access'] == 3 && self::$_tpl_vars['owner']['company']['show_passports']): ?>
			<a class="menu_item<?php if (self::$_tpl_vars['global']['path'] == 'passports'): ?> select<?php endif; ?>" href="/passports">
				<i class="icon icon_passports" style="font-size: 20px;"></i><span>Паспорта</span>
			</a>
			<?php endif; ?>
			<?php if (self::$_tpl_vars['owner']['access'] == 4): ?>
			<a class="menu_item<?php if (self::$_tpl_vars['global']['path'] == 'scans'): ?> select<?php endif; ?>" href="/scans">
				<i class="icon icon_scans" style="font-size: 20px;"></i><span>Сканирование</span>
			</a>
			<?php endif; ?>
			<?php if (self::$_tpl_vars['owner']['access'] == 4): ?>
			<a class="menu_item<?php if (self::$_tpl_vars['global']['path'] == 'picks'): ?> select<?php endif; ?>" href="/picks">
				<i class="icon icon_products" style="font-size: 20px;"></i><span>Оприходование</span>
			</a>
			<?php endif; ?>
			<!--<?php if (self::$_tpl_vars['owner']['company']['show_tasks']): ?>
			<a class="menu_item<?php if (self::$_tpl_vars['global']['path'] == 'tasks'): ?> select<?php endif; ?>" href="/tasks">
				<i class="icon icon_tasks" style="font-size: 20px;"></i><span>Задания</span>
			</a>
			<?php endif; ?>-->
			<?php if (self::$_tpl_vars['owner']['access'] == 3 && self::$_tpl_vars['owner']['company']['show_products']): ?>
			<a class="menu_item<?php if (self::$_tpl_vars['global']['path'] == 'labels'): ?> select<?php endif; ?>" href="/labels">
				<i class="icon icon_qr" style="font-size: 20px;"></i><span>Этикетки</span>
			</a>
			<?php endif; ?>
			<div style="width: 100%; padding-top: 10px; margin-top: 10px; border-top: 1px solid rgba(255, 255, 255, 0.3);">
				<a class="menu_item<?php if (self::$_tpl_vars['global']['path'] == 'settings'): ?> select<?php endif; ?>" href="/settings">
					<i class="icon icon_settings" style="font-size: 20px;"></i><span>Настройки</span>
				</a>
				<a class="menu_item<?php if (self::$_tpl_vars['global']['path'] == 'support'): ?> select<?php endif; ?>" href="/support">
					<i class="icon icon_support" style="font-size: 20px;"></i><span>Задать вопрос</span>
				</a>
			</div>
		</div>
		<div id="main_content_wrap">
			<div id="main_content">
				<?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>(self::$_tpl_vars['main_content']), 'vars'=>[]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?>
			</div>
		</div>
	</div>
</div>