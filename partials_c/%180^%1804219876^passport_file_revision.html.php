<div class="modal_head">
	<span>Отправить на доработку</span>
	<i class="icon icon_delete" onclick="common.modal_hide();"></i>	
</div>
<div style="padding: 20px; border-radius: 0 0 3px 3px; background: #fff;">
	<div style="padding-top: 0px;">
		<div class="input_label">Причина</div>
		<input class="input_primary" id="note" type="text" placeholder="Напишите комментарий" autocomplete="off" autocorrect="off" autocapitalize="off">
	</div>
	<div style="margin-top: 20px;">
		<div class="btn_primary" onclick="passport.file_revision(<?php echo self::$_tpl_vars['file']['id']; ?>
);">Отправить</div>
	</div>
</div>