<div style="display: table; width: 100%;">
	<div style="display: table-cell; width: 20%; vertical-align: top;">Поставщик: </div>
	<div style="display: table-cell; width: 80%; vertical-align: top;">
		<div style="font-weight: 600;">ООО "НГ-Софт"</div>
		<div><span style="font-weight: 600;">Р/c:</span> 40702810912030674919, Филиал "Корпоративный" ПАО "Совкомбанк" Г МОСКВА,</div>
		<div><span style="font-weight: 600;">Корр.сч.:</span> 30101810445250000360, <span style="font-weight: 600;">БИК:</span> 044525360</div>
		<div><span style="font-weight: 600;">ИНН/КПП:</span> 9729293217/772901001</div>
	</div>
</div>
<div style="display: table; width: 100%; margin-top: 20px;">
	<div style="display: table-cell; width: 20%; vertical-align: top;">Плательщик: </div>
	<div style="display: table-cell; width: 80%; vertical-align: top;">
		<div style="font-weight: 600;"><?php echo self::$_tpl_vars['company']['title']; ?>
</div>
		<div><span style="font-weight: 600;">Р/c:</span> <?php echo self::$_tpl_vars['company']['bank_rs']; ?>
, <?php echo self::$_tpl_vars['company']['bank_title']; ?>
,</div>
		<div><span style="font-weight: 600;">Корр.сч.:</span> <?php echo self::$_tpl_vars['company']['bank_cs']; ?>
, <span style="font-weight: 600;">БИК:</span> <?php echo self::$_tpl_vars['company']['bank_code']; ?>
</div>
		<div><span style="font-weight: 600;">ИНН/КПП:</span> <?php echo self::$_tpl_vars['company']['inn']; ?>
/<?php echo self::$_tpl_vars['company']['kpp']; ?>
</div>
	</div>
</div>
<div style="margin-top: 50px;">
	<div style="text-align: center; font-weight: 600;">СЧЁТ № <?php echo self::$_tpl_vars['bill']['number']; ?>
 от <?php echo self::$_tpl_vars['bill']['created']; ?>
</div>
	<div style="text-align: center;">на оплату по договору № <?php echo self::$_tpl_vars['company']['id']; ?>
 от <?php echo self::$_tpl_vars['company']['created']; ?>
</div>
</div>
<div class="bill_table" style="margin-top: 30px;">
	<div>
		<div style="width: 75%;">Наименование</div>
		<div style="width: 25%;">Сумма</div>
	</div>
	<div>
		<div style="width: 75%;">Оплата услуг по договору</div>
		<div style="width: 25%;"><?php echo self::$_tpl_vars['bill']['amount']; ?>
 руб.</div>
	</div>
	<div>
		<div style="width: 75%;">НДС 0%</div>
		<div style="width: 25%;">0.00 руб.</div>
	</div>
	<div>
		<div style="width: 75%; font-weight: 600;">Итого к оплате:</div>
		<div style="width: 25%;"><?php echo self::$_tpl_vars['bill']['amount']; ?>
 руб.</div>
	</div>
</div>
<div style="display: table; width: 100%; margin-top: 30px;">
	<div style="display: table-cell; width: 50%;">Генеральный директор</div>
	<div style="display: table-cell; width: 50%; text-align: right;">Рубинов В.А.</div>
</div>
<div style="margin-top: 30px; text-align: right;">
	<img src="<?php echo self::$_tpl_vars['stamp']; ?>
" style="width: 150px; margin-right: 100px;">
</div>