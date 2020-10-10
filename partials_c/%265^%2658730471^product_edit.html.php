<div class="modal_head">
	<span><?php if (self::$_tpl_vars['product']['draft']): ?>Добавить новое<?php else: ?>Редактировать<?php endif; ?> изделие</span>
	<i class="icon icon_delete" onclick="common.modal_hide();"></i>	
</div>
<div style="padding: 20px; border-radius: 0 0 3px 3px; background: #fff;">
	<div style="color: #04368f; padding: 0px 0 10px 0; font-weight: 600;">I. Базовые характеристики</div>
	<div style="display: table; width: 100%; padding-top: 25px; border-top: 1px solid #ebedec;">
		<div style="display: table-cell; width: 50%; padding-right: 5px;">
			<div style="color: #04368f; font-size: 12px; font-weight: 600; margin-bottom: 10px;">Полное наименование</div>
			<input id="title" type="text" class="input_primary" value="<?php echo self::$_tpl_vars['product']['title']; ?>
" oninput="input_error_hide(this);" maxlength="255" autocomplete="off" autocorrect="off" autocapitalize="off">
		</div>
		<div style="display: table-cell; width: 50%; padding-left: 5px;">
			<div class="input_label">Заводской номер</div>
			<input class="input_primary" id="code" type="text" value="<?php echo self::$_tpl_vars['product']['code']; ?>
" oninput="input_error_hide(this);" maxlength="50" autocomplete="off" autocorrect="off" autocapitalize="off">
		</div>
	</div>
	<div style="display: table; width: 100%; padding-top: 15px;">
		<div style="display: table-cell; width: 50%; padding-right: 5px;">
			<div class="input_label">Дата изготовления</div>
			<input class="input_primary" id="produced" type="text" value="<?php echo self::$_tpl_vars['product']['produced']; ?>
" oninput="input_error_hide(this);" placeholder="ДД.ММ.ГГГГ" autocomplete="off" autocorrect="off" autocapitalize="off">
		</div>
		<div style="display: table-cell; width: 50%; padding-left: 5px;">
			<div class="input_label">Дата отгрузки</div>
			<input class="input_primary" id="shipped" type="text" value="<?php echo self::$_tpl_vars['product']['shipped']; ?>
" oninput="input_error_hide(this);" placeholder="ДД.ММ.ГГГГ" autocomplete="off" autocorrect="off" autocapitalize="off">
		</div>
	</div>
	<div style="color: #04368f; padding: 35px 0 10px 0; font-weight: 600;">II. Базис поставки</div>
	<div style="display: table; width: 100%; padding-top: 25px; border-top: 1px solid #ebedec;">
		<div style="display: table-cell; width: 50%; padding-right: 5px;">
			<div class="input_label">Заказчик</div>
			<div style="width: 100%; position: relative;">
				<input type="text" id="customer_title" class="input_primary" placeholder="Наименование" value="<?php echo self::$_tpl_vars['product']['customer']['title']; ?>
" oninput="product.search_customer(this);" autocomplete="off" autocorrect="off" autocapitalize="off">
				<input type="hidden" id="customer_id" value="<?php echo self::$_tpl_vars['product']['customer']['id']; ?>
">
				<div class="results_container"></div>
			</div>
		</div>
		<div style="display: table-cell; width: 50%; padding-left: 5px;">
			<div class="input_label">Договор поставки</div>
			<div style="width: 100%; position: relative;">
				<input type="text" id="contract_title" class="input_primary" placeholder="Номер договора" value="<?php if (self::$_tpl_vars['product']['contract']['title']): ?><?php echo self::$_tpl_vars['product']['contract']['title']; ?>
 прил. <?php echo self::$_tpl_vars['product']['contract']['annex_number']; ?>
<?php endif; ?>" oninput="product.search_contract(this);" autocomplete="off" autocorrect="off" autocapitalize="off">
				<input type="hidden" id="contract_id" value="<?php echo self::$_tpl_vars['product']['contract']['id']; ?>
">
				<div class="results_container"></div>
			</div>
		</div>
	</div>
	<div style="display: table; width: 100%; padding-top: 15px;">
		<div style="display: table-cell; width: 50%; padding-right: 5px;">
			<div class="input_label">Грузополучатель</div>
			<div style="width: 100%; position: relative;">
				<input type="text" id="consignee_title" class="input_primary" placeholder="Наименование" value="<?php echo self::$_tpl_vars['product']['consignee']['title']; ?>
" oninput="product.search_consignee(this);" autocomplete="off" autocorrect="off" autocapitalize="off">
				<input type="hidden" id="consignee_id" value="<?php echo self::$_tpl_vars['product']['customer']['id']; ?>
">
				<div class="results_container"></div>
			</div>
		</div>
		<div style="display: table-cell; width: 50%; padding-left: 5px;">
			<div class="input_label">Пункт назначения</div>
			<input class="input_primary" id="destination" type="text" value="<?php echo self::$_tpl_vars['product']['destination']; ?>
" placeholder="Наименование" autocomplete="off" autocorrect="off" autocapitalize="off">
		</div>
	</div>
	<div style="color: #04368f; padding: 35px 0 10px 0; font-weight: 600;">III. Дополнительные характеристики</div>
	<div style="padding-top: 5px; width: 100%; border-top: 1px solid #ebedec;">
		<div style="margin-bottom: 10px;" id="product_edit_options">
			<?php if (isset(self::$_sections['i'])) unset(self::$_sections['i']);
self::$_sections['i']['name'] = 'i';
self::$_sections['i']['loop'] = is_array($_loop=self::$_tpl_vars['product']['options']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>"./partials/section/products/product_edit_option.html", 'vars'=>['option' => self::$_tpl_vars['product']['options'][self::$_sections['i']['index']],'count' => self::$_tpl_vars['count_options']]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?>
			<?php endfor; endif; ?>
		</div>
		<div class="btn_primary" onclick="product.option_add();">Добавить еще</div>
	</div>
	<div style="color: #04368f; padding: 35px 0 10px 0; font-weight: 600;">IV. Документация</div>
	<div style="padding-top: 20px; width: 100%; border-top: 1px solid #ebedec;">
		<div class="btn_primary" onclick="product.files_upload(<?php echo self::$_tpl_vars['product']['id']; ?>
);" style="margin-bottom: 20px;">Загрузить</div>
		<div style="border: 1px solid #ebedec; border-radius: 3px; padding: 20px 20px; font-size: 12px; letter-spacing: 0; line-height: 150%;">
			Вы можете загрузить в карточку изделия файлы сопроводительной документации размером до 30 Mb, в форматах Excel (xls, xlsx), Word (doc, docx), Adobe Acrobat (pdf) или растровом изображении (jpg, png, bmp, gif, webp).
		</div>
		<div id="product_files" style="margin-top: 10px;"><?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>"./partials/section/products/product_edit_files.html", 'vars'=>['files' => self::$_tpl_vars['product']['files']]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?></div>
	</div>
	<div style="margin-top: 30px; margin-bottom: 10px;">
		<div class="btn_primary" onclick="product.edit_update(<?php echo self::$_tpl_vars['product']['id']; ?>
);">Сохранить</div>
	</div>
</div>