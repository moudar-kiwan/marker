<div class="modal_head">
	<span>Выбрать изделия</span>
	<i class="icon icon_delete" onclick="common.modal_hide();"></i>	
</div>
<div class="modal_search">
	<i class="icon icon_search"></i>
	<input id="modal_search" type="text" placeholder="Поиск" oninput="task.product_search();" autocomplete="off" autocorrect="off" autocapitalize="off">
</div>
<div class="modal_info">
    <div id="modal_search_results"><?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>"./partials/modal/task_add_product_search.html", 'vars'=>[]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?></div>
</div>