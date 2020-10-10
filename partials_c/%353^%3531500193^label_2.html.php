<div style="background: #fff; padding: 20px; display: inline-block; user-select: none; width: <?php echo self::$_tpl_vars['label']['preview_width']; ?>
px; height: <?php echo self::$_tpl_vars['label']['preview_height']; ?>
px;">
	<div class="code_wrap" style="border-radius: 16px; overflow: hidden; width: 100%; height: 100%;">
		<div class="code_manufacturer"><?php echo self::$_tpl_vars['label']['company_title']; ?>
</div>
		<div class="code_main" style="margin-top: 10px;">
			<div class="code_main_left" style="width: 100%;">
				<div style="font-size: 22px; font-weight: 600; word-wrap: break-word; margin-bottom: 10px; line-height: 105%; text-align: center;">
					<div><?php echo self::$_tpl_vars['label']['product_title']; ?>
</div>
					<div style="margin-top: 5px;"><?php echo self::$_tpl_vars['label']['options'][0]['title_print']; ?>
 <?php echo self::$_tpl_vars['label']['options'][0]['value']; ?>
</div>
				</div>
				<div class="code_info">
					<div>
						<div style="width: 50%; line-height: <?php echo self::$_tpl_vars['label']['preview_row']; ?>
px;"><?php echo self::$_tpl_vars['label']['options'][1]['title_print']; ?>
</div>
						<div style="width: 50%; line-height: <?php echo self::$_tpl_vars['label']['preview_row']; ?>
px;"><?php echo self::$_tpl_vars['label']['options'][2]['title_print']; ?>
</div>
					</div>
					<div>
						<div style="width: 50%; line-height: <?php echo self::$_tpl_vars['label']['preview_row']; ?>
px;"><?php echo self::$_tpl_vars['label']['options'][1]['value']; ?>
</div>
						<div style="width: 50%; line-height: <?php echo self::$_tpl_vars['label']['preview_row']; ?>
px;"><?php echo self::$_tpl_vars['label']['options'][2]['value']; ?>
</div>
					</div>
				</div>
			</div>
			<div class="code_main_right" style="width: 0%; min-width: <?php echo self::$_tpl_vars['label']['preview_code']; ?>
px;">
				<img src="<?php echo self::$_tpl_vars['label']['qr']; ?>
" class="code_qr">
			</div>
		</div>
		<div style="font-size: 24px; line-height: 110%; margin-top: 10px; font-weight: 600;">
			<div style="margin-top: 12px;"><?php echo self::$_tpl_vars['label']['options'][3]['title_print']; ?>
 <?php echo self::$_tpl_vars['label']['options'][3]['value']; ?>
</div>
			<div style="display: table; width: 100%; margin-top: 10px;">
				<div style="display: table-cell; width: 33.333%;"><?php echo self::$_tpl_vars['label']['options'][4]['title_print']; ?>
 <?php echo self::$_tpl_vars['label']['options'][4]['value']; ?>
</div>
				<div style="display: table-cell; width: 33.333%; text-align: center;"><?php echo self::$_tpl_vars['label']['options'][5]['title_print']; ?>
 <?php echo self::$_tpl_vars['label']['options'][5]['value']; ?>
</div>
				<div style="display: table-cell; width: 33.333%; text-align: right;"><?php echo self::$_tpl_vars['label']['options'][6]['title_print']; ?>
 <?php echo self::$_tpl_vars['label']['options'][6]['value']; ?>
</div>
			</div>
		</div>
	</div>
</div>