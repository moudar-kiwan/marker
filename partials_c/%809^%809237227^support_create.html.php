<div class="modal_head">
	<span>Формирование тикета</span>
	<i class="icon icon_delete" onclick="common.modal_hide();"></i>	
</div>
<div style="padding: 20px; border-radius: 0 0 3px 3px; background: #fff;">
	<div style="padding-top: 0px;">
		<div class="input_label">Тема</div>
		<input class="input_primary" id="title" type="text" oninput="input_error_hide(this);" autocomplete="off" autocorrect="off" autocapitalize="off">
	</div>
	<div style="padding-top: 15px;">
		<div class="input_label">Сообщение</div>
		<textarea class="input_primary" style="height: 150px; resize: none; line-height: 20px; padding: 8px 10px;" id="msg" type="text" oninput="input_error_hide(this);" autocomplete="off" autocorrect="off" autocapitalize="off"></textarea>
	</div>
	<div style="margin-top: 20px;">
		<div class="btn_primary" onclick="support.create_update();">Отправить</div>
	</div>
</div>