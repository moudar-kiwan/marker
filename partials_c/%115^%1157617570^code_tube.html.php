<div style="width: 640px; min-height: 280px; padding: 16px 20px; border: 2px solid #000; display: block;">

	<div style="font-weight: 600; font-size: 16px; text-align: center; vertical-align: middle;"><?php echo self::$_tpl_vars['product']['manufacturer']['title']; ?>
 тел. +<?php echo self::$_tpl_vars['product']['manufacturer']['phone']; ?>
</div>
	
	<div class="code_main" style="margin-top: 8px; display: table; width: 100%;">
		<div style="display: table-cell; vertical-align: top; width: 70%;">
			<div style="font-size: 16px; font-weight: 600; word-wrap: break-word; max-width: 600px; line-height: 120%; vertical-align: middle;"><?php echo self::$_tpl_vars['product']['title']; ?>
<?php if (self::$_tpl_vars['custom']['certificate']): ?>, Сертификат <?php echo self::$_tpl_vars['custom']['certificate']; ?>
<?php endif; ?></div>
			
			<?php if (self::$_tpl_vars['custom']['package'] || self::$_tpl_vars['custom']['melt'] || self::$_tpl_vars['custom']['tube_number'] || self::$_tpl_vars['custom']['length']): ?>
			<div class="code_info" style="margin-top: 8px;">
				<?php if (self::$_tpl_vars['custom']['package']): ?>
				<div style="width: 50%;">
					<div style="text-align: center; padding: 6px 15px; font-size: 16px; font-weight: 600;">Пакет</div>
					<div style="text-align: center; padding: 6px 15px; font-size: 16px; font-weight: 600;"><?php echo self::$_tpl_vars['custom']['package']; ?>
</div>
				</div>
				<?php endif; ?>
				<?php if (self::$_tpl_vars['custom']['melt']): ?>
				<div style="width: 50%;">
					<div style="text-align: center; padding: 6px 15px; font-size: 16px; font-weight: 600;">Плавка</div>
					<div style="text-align: center; padding: 6px 15px; font-size: 16px; font-weight: 600;"><?php echo self::$_tpl_vars['custom']['melt']; ?>
</div>
				</div>
				<?php endif; ?>
				<?php if (self::$_tpl_vars['custom']['tube_number']): ?>
				<div style="width: 50%;">
					<div style="text-align: center; padding: 6px 15px; font-size: 16px; font-weight: 600;">№ трубы</div>
					<div style="text-align: center; padding: 6px 15px; font-size: 16px; font-weight: 600;"><?php echo self::$_tpl_vars['custom']['tube_number']; ?>
</div>
				</div>
				<?php endif; ?>
				<?php if (self::$_tpl_vars['custom']['length']): ?>
				<div style="width: 50%;">
					<div style="text-align: center; padding: 6px 15px; font-size: 16px; font-weight: 600;">Длина</div>
					<div style="text-align: center; padding: 6px 15px; font-size: 16px; font-weight: 600;"><?php echo self::$_tpl_vars['custom']['length']; ?>
</div>
				</div>
				<?php endif; ?>
			</div>
			<?php endif; ?>
			<div style="font-weight: 600; font-size: 15px; padding: 0; margin: 0; margin-top: 10px; line-height: 80%; display: block;">Покрытие: <?php if (self::$_tpl_vars['custom']['coating']): ?><?php echo self::$_tpl_vars['custom']['coating']; ?>
<?php else: ?>не указано<?php endif; ?>, Дата: <?php if (self::$_tpl_vars['custom']['coating_date']): ?><?php echo self::$_tpl_vars['custom']['coating_date']; ?>
<?php else: ?>не указана<?php endif; ?></div>
			<div style="font-weight: 600; font-size: 15px; padding: 0; margin: 0; margin-top: 10px; line-height: 80%; display: block;">
				<?php if (self::$_tpl_vars['custom']['skk']): ?>СКК <?php echo self::$_tpl_vars['custom']['skk']; ?>
<?php endif; ?>
				<?php if (self::$_tpl_vars['custom']['part']): ?> партия №<?php echo self::$_tpl_vars['custom']['part']; ?>
<?php endif; ?>
				<?php if (self::$_tpl_vars['custom']['tu']): ?> ТУ <?php echo self::$_tpl_vars['custom']['tu']; ?>
<?php endif; ?>
			</div>
		</div>
		
		<div style="display: table-cell; vertical-align: middle; width: 30%; position: relative;">
			<img src="storage/product_274.png" class="code_qr" style="width: 175px;">
			<div style="font-weight: 400; font-size: 14px; margin-top: 12px; letter-spacing: 0; text-align: right;">напечатано в marker.team</div>
		</div>
	</div>
	
</div>