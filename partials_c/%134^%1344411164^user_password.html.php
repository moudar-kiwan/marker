<div class="modal_head">
	<span>Пароль</span>
	<i class="icon icon_delete" onclick="common.modal_hide();"></i>	
</div>
<div style="padding: 20px; border-radius: 0 0 3px 3px; background: #fff;">
	<div style="line-height: 145%; text-align: center; padding: 25px 20px;">
		<?php if (self::$_tpl_vars['user_id']): ?>
		Пароль для пользователя <?php echo self::$_tpl_vars['full_name']; ?>
 изменен на <span style="font-weight: 600; color: #04368f;"><?php echo self::$_tpl_vars['password']; ?>
</span>. 
		<?php else: ?>
		Пользователь <?php echo self::$_tpl_vars['full_name']; ?>
 добавлен в систему, пароль <span style="font-weight: 600; color: #04368f;"><?php echo self::$_tpl_vars['password']; ?>
</span>. 
		<?php endif; ?>
		Письмо с параметрами доступа отправлено на почту <span style="font-weight: 600; color: #04368f;"><?php echo self::$_tpl_vars['email']; ?>
</span>.
	</div>
</div>