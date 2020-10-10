<div style="padding: 20px;">
<div style="display: table; width: 100%; margin-bottom: 20px;">
	<div class="home_top_group">
		<div class="home_top_group_wrap" style="display: table; width: 100%; position: relative;">
			<div style="display: table-cell; width: 50%; vertical-align: top;">
				<div class="home_top_title">Статус</div>
				<div class="home_top_text">Тариф: <span style="font-weight: 600;">Базовый</span></div>
				<div class="home_top_text">Баланс: <span style="font-weight: 600;"><?php echo self::$_tpl_vars['company']['balance']; ?>
 ₽</span></div>
				<div class="home_top_text">Занято: <span style="font-weight: 600; color: #8F98A3;"><?php echo self::$_tpl_vars['company']['size_used']; ?>
 Гб</span></div>
				<div class="home_top_text">Свободно: <span style="font-weight: 600; color: #4ea851;"><?php echo self::$_tpl_vars['company']['size_free']; ?>
 Гб</span></div>
				<a class="btn_light" href="/bills" style="margin-top: 25px; margin-bottom: 30px;">Подробнее</a>
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
				<div class="home_top_text">Новые: <span style="font-weight: 600; color: #8F98A3;"><?php echo self::$_tpl_vars['users_count']['new']; ?>
</span></div>
				<div class="home_top_text">Активные: <span style="font-weight: 600; color: #4ea851;"><?php echo self::$_tpl_vars['users_count']['active']; ?>
</span></div>
				<div class="home_top_text">Заблокированы: <span style="font-weight: 600; color: #d10b20;"><?php echo self::$_tpl_vars['users_count']['blocked']; ?>
</span></div>
				<div class="home_top_text">Не активные: <span style="font-weight: 600; color: #d36e20;"><?php echo self::$_tpl_vars['users_count']['inactive']; ?>
</span></div>
				<a class="btn_light" href="/users" style="margin-top: 25px; margin-bottom: 30px;">Подробнее</a>
				<div style="margin-top: 10px; color: #aaa; font-size: 11px; position: absolute; bottom: 20px; left: 20px;">* активные - любая активность за последние 7 дней</div>
			</div>
			<div style="display: table-cell; width: 50%; vertical-align: top;">
				<div id="chart_tasks" style="min-width: 150px; width: 100%; height: 200px;"></div>
			</div>
		</div>
	</div>
</div>

<div style="padding: 20px; border-radius: 5px; background: #fff; min-height: 380px; box-shadow: 0 1px 0 0 #d7d8db, 0 0 0 1px #e3e4e8; position: relative;">
	<div style="font-size: 16px; color: #04368f;">Активность пользователей</div>
	<i class="icon icon_excel" onclick="dashboard.stats_export();" style="position: absolute; top: 12px; right: 12px; padding: 10px; font-size: 18px; color: #777; cursor: pointer;"></i>
	<div style="margin-top: 10px; color: #aaa; font-size: 11px;">* данные за текущую неделю, для просмотра данных за все периоды скачайте отчет в формате Excel.</div>
	<div class="dashboard_table">
		<div class="dashboard_table_item header">
			<div style="width: 25%;">ФИО</div>
			<div style="width: 10%;">группа</div>
			<div style="width: 8%; text-align: center;">файлы (мб)</div>
			<div style="width: 8%; text-align: center;">изделия</div>
			<div style="width: 8%; text-align: center;">время</div>
			<div style="width: 8%; text-align: center;">визиты</div>
			<div style="width: 8%; text-align: center;">просмотры</div>
			<div style="width: 8%; text-align: center;">логины</div>
			<div style="width: 17%; text-align: center;">последний визит</div>
		</div>
		<?php if (isset(self::$_sections['i'])) unset(self::$_sections['i']);
self::$_sections['i']['name'] = 'i';
self::$_sections['i']['loop'] = is_array($_loop=self::$_tpl_vars['stats']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
		<div class="dashboard_table_item">
			<div style="width: 25%;"><?php echo self::$_tpl_vars['stats'][self::$_sections['i']['index']]['name']; ?>
</div>
			<div style="width: 10%;"><?php echo self::$_tpl_vars['stats'][self::$_sections['i']['index']]['group']; ?>
</div>
			<div style="width: 8%; text-align: center;"><?php echo self::$_tpl_vars['stats'][self::$_sections['i']['index']]['files']; ?>
<?php if (self::$_tpl_vars['stats'][self::$_sections['i']['index']]['size'] != '-'): ?> (<?php echo self::$_tpl_vars['stats'][self::$_sections['i']['index']]['size']; ?>
)<?php endif; ?></div>
			<div style="width: 8%; text-align: center;"><?php echo self::$_tpl_vars['stats'][self::$_sections['i']['index']]['products']; ?>
</div>
			<div style="width: 8%; text-align: center;"><?php echo self::$_tpl_vars['stats'][self::$_sections['i']['index']]['time']; ?>
</div>
			<div style="width: 8%; text-align: center;"><?php echo self::$_tpl_vars['stats'][self::$_sections['i']['index']]['visits']; ?>
</div>
			<div style="width: 8%; text-align: center;"><?php echo self::$_tpl_vars['stats'][self::$_sections['i']['index']]['views']; ?>
</div>
			<div style="width: 8%; text-align: center;"><?php echo self::$_tpl_vars['stats'][self::$_sections['i']['index']]['logins']; ?>
</div>
			<div style="width: 17%; text-align: center;"><?php echo self::$_tpl_vars['stats'][self::$_sections['i']['index']]['last_active']; ?>
</div>
		</div>
		<?php endfor; endif; ?>
	</div>
</div>
</div>