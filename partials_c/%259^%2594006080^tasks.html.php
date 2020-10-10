<div class="content_wrap">
	<div class="content_title">Задания</div>
	<div style="display: table; width: 100%; margin-top: 15px;">
		<div style="display: table-cell;">
			<a class="tab_primary<?php if (self::$_tpl_vars['show'] == 'all'): ?> active<?php endif; ?>" href="/tasks">Все</a>
			<a class="tab_primary<?php if (self::$_tpl_vars['show'] == 'active'): ?> active<?php endif; ?>" href="/tasks?show=active">Запланированные</a>
			<a class="tab_primary<?php if (self::$_tpl_vars['show'] == 'complete'): ?> active<?php endif; ?>" href="/tasks?show=complete">Выполненные</a>
		</div>
		<div style="display: table-cell; text-align: right;">
			<a class="btn_primary" href="/tasks/new?act=edit" style="line-height: 30px; height: 30px;">Добавить</a>
		</div>
	</div>
	<?php if (self::$_tpl_vars['tasks']): ?>
	<div id="tasks_table"><?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>"./partials/section/tasks/tasks_table.html", 'vars'=>[]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?></div>
	<?php else: ?>
	<div style="margin-top: 15px; padding: 20px; border: 1px solid #c2c8cf; border-radius: 3px; font-size: 12px; color: #5c626a;">задания не найдены</div>
	<?php endif; ?>
</div>