<div style="padding: 20px;">
<div style="display: table; width: 100%; margin-bottom: 20px;">
	<div class="home_top_group">
		<div class="home_top_group_wrap" style="display: table; width: 100%; position: relative;">
			<div style="display: table-cell; width: 50%; vertical-align: top;">
				<div class="home_top_title">Израсходовано</div>
				<div class="home_top_text">Тариф: <span style="font-weight: 600;">Базовый</span></div>
				<div class="home_top_text">Баланс: <span style="font-weight: 600;">125 210 ₽</span></div>
				<div class="home_top_text">Занято: <span style="font-weight: 600; color: #8F98A3;"><?php echo self::$_tpl_vars['count_products']['wait']; ?>
 Гб</span></div>
				<div class="home_top_text">Свободно: <span style="font-weight: 600; color: #4ea851;"><?php echo self::$_tpl_vars['count_products']['completed']; ?>
 Гб</span></div>
				<a class="btn_light" href="javascript:product.edit_window(0, 'detail');" style="margin-top: 25px; margin-bottom: 30px;">Подробнее</a>
				<div style="margin-top: 10px; color: #aaa; font-size: 11px; position: absolute; bottom: 20px; left: 20px;">* указаны данные за все время</div>
			</div>
			<div style="display: table-cell; width: 50%; vertical-align: top;">
				<div id="chart_products" style="min-width: 150px; width: 100%; height: 200px;"></div>
			</div>
		</div>
	</div>
	<div class="home_top_group">
		<div class="home_top_group_wrap" style="display: table; width: 100%; position: relative;">
			<div style="display: table-cell; width: 50%; vertical-align: top;">
				<div class="home_top_title">Пользователи</div>
				<div class="home_top_text">Новые: <span style="font-weight: 600; color: #8F98A3;"><?php echo self::$_tpl_vars['count_tasks']['wait']; ?>
</span></div>
				<div class="home_top_text">Активные: <span style="font-weight: 600; color: #4ea851;"><?php echo self::$_tpl_vars['count_tasks']['completed']; ?>
</span></div>
				<div class="home_top_text">Заблокированы: <span style="font-weight: 600; color: #d10b20;"><?php echo self::$_tpl_vars['count_tasks']['expired']; ?>
</span></div>
				<div class="home_top_text">Не активные: <span style="font-weight: 600; color: #d36e20;"><?php echo self::$_tpl_vars['count_tasks']['warning']; ?>
</span></div>
				<a class="btn_light" href="/task?act=edit" style="margin-top: 25px; margin-bottom: 30px;">Подробнее</a>
				<div style="margin-top: 10px; color: #aaa; font-size: 11px; position: absolute; bottom: 20px; left: 20px;">* указаны данные за последние 30 дней</div>
			</div>
			<div style="display: table-cell; width: 50%; vertical-align: top;">
				<div id="chart_tasks" style="min-width: 150px; width: 100%; height: 200px;"></div>
			</div>
		</div>
	</div>
</div>
<div style="display: table; width: 100%;">
	<div style="width: 50%; display: table-cell; vertical-align: top; padding-right: 10px;">
		<div style="padding: 20px; border-radius: 5px; background: #fff; min-height: 380px; box-shadow: 0 1px 0 0 #d7d8db, 0 0 0 1px #e3e4e8;">
			<div style="font-size: 16px; color: #04368f;">Список пользователей</div>
			<div style="margin-top: 15px;">
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
				<a class="home_product_item" href="/products/<?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['id']; ?>
">
					<div class="home_product_title"><?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['title']; ?>
</div>
					<div class="home_product_date"><?php echo self::$_tpl_vars['products'][self::$_sections['i']['index']]['created']; ?>
</div>
					<?php if (self::$_tpl_vars['products'][self::$_sections['i']['index']]['status'] == 1): ?>
					<span class="home_product_item_status complete">Отмаркировано</span>
					<?php else: ?>
					<span class="home_product_item_status wait">Запланировано</span>
					<?php endif; ?>
				</a>
				<?php endfor; endif; ?>
			</div>
		</div>
	</div>
	<div style="width: 50%; display: table-cell; vertical-align: top; padding-left: 10px;">
		<div style="padding: 20px; border-radius: 5px; background: #fff; min-height: 380px; box-shadow: 0 1px 0 0 #d7d8db, 0 0 0 1px #e3e4e8;">
			<div style="font-size: 16px; color: #04368f;">Активность пользователей</div>
			<!--<div style="padding-top: 10px;">
				<a class="tab_primary active" href="/tasks">Все</a>
				<a class="tab_primary" href="/tasks?show=active">Активные</a>
				<a class="tab_primary" href="/tasks?show=closed">Завершены</a>
			</div>-->
			<div style="padding-top: 5px;">
				<?php if (isset(self::$_sections['i'])) unset(self::$_sections['i']);
self::$_sections['i']['name'] = 'i';
self::$_sections['i']['loop'] = is_array($_loop=self::$_tpl_vars['tasks']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<a class="home_task_item" href="/task?act=edit&id=<?php echo self::$_tpl_vars['tasks'][self::$_sections['i']['index']]['id']; ?>
">
					<div class="home_task_title"><?php echo self::$_tpl_vars['tasks'][self::$_sections['i']['index']]['title']; ?>
 (<?php echo self::$_tpl_vars['tasks'][self::$_sections['i']['index']]['products_all']; ?>
/<?php echo self::$_tpl_vars['tasks'][self::$_sections['i']['index']]['products_active']; ?>
)</div>
					<div class="home_task_date">
						<i class="icon icon_calendar" style="margin-right: 10px; font-size: 15px;"></i>
						<span><?php echo self::$_tpl_vars['tasks'][self::$_sections['i']['index']]['date_end']; ?>
</span>
					</div>
					<i class="icon <?php if (self::$_tpl_vars['tasks'][self::$_sections['i']['index']]['status']): ?>icon_success<?php else: ?>icon_wait<?php endif; ?>" style="position: absolute; top: 19px; right: 19px; font-size: 24px; color: #979797;"></i>
				</a>
				<?php endfor; endif; ?>
			</div>
		</div>
	</div>
</div>
</div>