<div class="modal_head">
	<span><?php if (! self::$_tpl_vars['group']['id']): ?>Добавить<?php else: ?>Редактировать<?php endif; ?> партию</span>
	<i class="icon icon_delete" onclick="common.modal_hide();"></i>	
</div>
<div style="padding: 20px; border-radius: 0 0 3px 3px; background: #fff;">
	<div style="padding-top: 0px;">
		<div style="color: #04368f; font-size: 12px; font-weight: 600; margin-bottom: 10px;">Название</div>
		<input id="title" type="text" class="input_primary" value="<?php echo self::$_tpl_vars['group']['title']; ?>
" oninput="input_error_hide(this);" maxlength="255" autocomplete="off" autocorrect="off" autocapitalize="off">
	</div>
	<div style="padding-top: 15px;">
		<div class="input_label">Заказчик</div>
		<div style="width: 100%; position: relative;">
			<input type="text" id="customer_title" class="input_primary" placeholder="Наименование" value="<?php echo self::$_tpl_vars['group']['customer']['title']; ?>
" oninput="product.search_customer(this);" autocomplete="off" autocorrect="off" autocapitalize="off">
			<input type="hidden" id="customer_id" value="<?php echo self::$_tpl_vars['group']['customer']['id']; ?>
">
			<div class="results_container"></div>
		</div>
	</div>
	<div style="margin-top: 20px;">
		<div class="btn_primary" onclick="product.group_edit_update(<?php echo self::$_tpl_vars['group']['id']; ?>
);">Сохранить</div>
	</div>
</div>