<div style="background: #e9eef4; padding: 20px; min-height: 100%; position: absolute; left: 0; right: 0;">
	<div style="padding: 20px; border-radius: 5px; background: #fff; min-height: 200px; box-shadow: 0 1px 0 0 #d7d8db, 0 0 0 1px #e3e4e8;">

		<div style="width: 100%; display: table;">
			<div style="width: 100%; display: table-cell; vertical-align: top;">
				<div style="color: #04368f; font-size: 12px; font-weight: 600; margin-bottom: 10px;">Наименование</div>
				<div style="font-size: 16px; font-weight: 400; padding-bottom: 10px; border-bottom: 1px solid #ebedec;"><?php echo self::$_tpl_vars['product']['title']; ?>
</div>
				<div style="color: #04368f; font-size: 12px; font-weight: 600; margin-bottom: 10px; margin-top: 20px;">Изготовитель</div>
				<div style="font-size: 16px; font-weight: 400; padding-bottom: 10px; border-bottom: 1px solid #ebedec;"><?php echo self::$_tpl_vars['product']['company_title']; ?>
</div>
				<div style="color: #04368f; font-size: 12px; font-weight: 600; margin-bottom: 10px; margin-top: 20px;">Адрес изготовителя</div>
				<div style="font-size: 16px; font-weight: 400; padding-bottom: 10px; border-bottom: 1px solid #ebedec;"><?php echo self::$_tpl_vars['product']['company_address']; ?>
</div>
				<div style="color: #04368f; font-size: 12px; font-weight: 600; margin-bottom: 10px; margin-top: 20px;">Дата изготовления</div>
				<div style="font-size: 16px; font-weight: 400; padding-bottom: 10px; border-bottom: 1px solid #ebedec;"><?php echo self::$_tpl_vars['product']['produced']; ?>
</div>
				<div style="color: #04368f; font-size: 12px; font-weight: 600; margin-bottom: 10px; margin-top: 20px;">Дата отгрузки</div>
				<div style="font-size: 16px; font-weight: 400; padding-bottom: 10px; border-bottom: 1px solid #ebedec;"><?php echo self::$_tpl_vars['product']['shipped']; ?>
</div>
			</div>
		</div>
		
		<a href="<?php echo self::$_tpl_vars['product']['url']; ?>
" class="btn_primary product_simple_btn" target="_blank">Открыть в приложении</a>

	</div>
</div>