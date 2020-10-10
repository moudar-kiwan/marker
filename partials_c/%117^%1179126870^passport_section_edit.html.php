<div class="modal_head">
	<span><?php if (! self::$_tpl_vars['passport_section']['id']): ?>Добавить<?php else: ?>Редактировать<?php endif; ?> раздел</span>
	<i class="icon icon_delete" onclick="common.modal_hide();"></i>	
</div>
<div style="padding: 20px; border-radius: 0 0 3px 3px; background: #fff;">
	<div style="padding-top: 0px;">
		<div class="input_label">Название раздела</div>
		<input class="input_primary" id="title" type="text" value="<?php echo self::$_tpl_vars['passport_section']['title']; ?>
" placeholder="Наименование" autocomplete="off" autocorrect="off" autocapitalize="off">
	</div>
	<div style="margin-top: 20px;">
		<div class="btn_primary" onclick="passport.section_edit_update(<?php echo self::$_tpl_vars['passport_id']; ?>
, <?php echo self::$_tpl_vars['passport_section']['id']; ?>
, '<?php echo self::$_tpl_vars['mode']; ?>
');">Сохранить</div>
	</div>
</div>