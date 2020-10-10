<div style="padding: 20px;">
<div style="padding: 20px 20px 50px 20px; border-radius: 5px; background: #fff; min-height: 200px; box-shadow: 0 1px 0 0 #d7d8db, 0 0 0 1px #e3e4e8;">
	
	<?php if (self::$_tpl_vars['owner']['access'] != 4): ?>
	<div style="padding-bottom: 20px;">
		<a href="<?php echo self::$_tpl_vars['back_url']; ?>
" class="btn_gray" style="height: 30px; line-height: 30px; width: auto; text-align: center; margin-right: 8px;">Назад</a>
		<?php if (self::$_tpl_vars['group']['status'] == 1): ?>
		<div onclick="product.history(<?php echo self::$_tpl_vars['product']['id']; ?>
);" class="btn_primary" style="height: 30px; line-height: 30px; width: auto; text-align: center; margin-right: 8px;">История</div>
		<?php endif; ?>
		<?php if (self::$_tpl_vars['group']['status'] == 0): ?>
		<?php if (! self::$_tpl_vars['product']['user_id'] || self::$_tpl_vars['product']['user_id'] == self::$_tpl_vars['owner']['user_id']): ?>
		<div onclick="product.edit_window(<?php echo self::$_tpl_vars['product']['id']; ?>
, 'detail');" class="btn_primary" style="height: 30px; line-height: 30px; width: auto; text-align: center; margin-right: 8px;">Редактировать</div>
		<?php endif; ?>
		<div onclick="product.copy_window(<?php echo self::$_tpl_vars['product']['id']; ?>
, 'detail');" class="btn_primary" style="height: 30px; line-height: 30px; width: auto; text-align: center; margin-right: 8px;">Дублировать</div>
		<?php endif; ?>
		<div onclick="product.print(<?php echo self::$_tpl_vars['product']['id']; ?>
);" class="btn_primary" style="height: 30px; line-height: 30px; width: auto; text-align: center; margin-right: 8px;" target="_blank">Печать</div>
		<!--<a href="/product?act=download&id=<?php echo self::$_tpl_vars['product']['id']; ?>
" class="btn_primary" style="width: auto; text-align: center;" target="_blank">Скачать</a>-->
	</div>
	<?php endif; ?>
	<div style="width: 100%; display: table; table-layout: fixed;">
		<div style="width: 50%; display: table-cell; vertical-align: top; padding-right: 10px;">
			<div style="width: 100%; min-height: 250px;  border: 1px solid #c7d0d7; border-radius: 3px; padding: 20px; overflow: hidden;">
				<div style="color: #04368f; font-size: 12px; font-weight: 600; margin-bottom: 10px;">Наименование</div>
				<div style="font-size: 16px; font-weight: 400; padding-bottom: 10px; border-bottom: 1px solid #ebedec; overflow: hidden; text-overflow: ellipsis;"><?php echo self::$_tpl_vars['product']['title']; ?>
</div>
				<div style="color: #04368f; font-size: 12px; font-weight: 600; margin-bottom: 10px; margin-top: 20px;">Изготовитель</div>
				<div style="font-size: 16px; font-weight: 400; padding-bottom: 10px; border-bottom: 1px solid #ebedec;"><?php echo self::$_tpl_vars['product']['company_title']; ?>
</div>
				<div style="color: #04368f; font-size: 12px; font-weight: 600; margin-bottom: 10px; margin-top: 20px;">Дата изготовления</div>
				<div style="font-size: 16px; font-weight: 400; padding-bottom: 10px; border-bottom: 1px solid #ebedec;"><?php echo self::$_tpl_vars['product']['produced']; ?>
</div>
			</div>
		</div>
		<div style="width: 50%; display: table-cell; vertical-align: top; padding-left: 10px;">
			<div style="background: #eee; border: 1px solid #c7d0d7; border-radius: 3px; overflow: hidden; height: 250px; width: 100%; position: relative;">
				<div id="label_preview" style="position: absolute; left: 50%; top: 50%; width: 0; height: 0; transform: scale(0.3); margin-left: <?php echo self::$_tpl_vars['label']['preview_left']; ?>
px; margin-top: <?php echo self::$_tpl_vars['label']['preview_top']; ?>
px;">
					<?php echo self::$_tpl_vars['label_preview']; ?>

				</div>
			</div>
		</div>
	</div>
	
	<?php if (self::$_tpl_vars['product']['options']): ?>
	<div style="width: 100%; border: 1px solid #c7d0d7; border-radius: 3px; padding: 20px; margin-top: 20px;">
		<div style="color: #04368f; font-size: 12px; font-weight: 600; margin-bottom: 10px; margin-top: 0px;">Характеристики изделия</div>
		<div class="product_options_table">
			<div class="product_options_column">
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
				<?php if (self::$_sections['i']['index'] % 2 == 0): ?>
				<div class="product_options_item">
					<div class="product_options_title"><?php echo self::$_tpl_vars['product']['options'][self::$_sections['i']['index']]['title']; ?>
<?php if (self::$_tpl_vars['product']['options'][self::$_sections['i']['index']]['units_title']): ?>, <?php echo self::$_tpl_vars['product']['options'][self::$_sections['i']['index']]['units_title']; ?>
<?php endif; ?></div>
					<div class="product_options_value"><?php echo self::$_tpl_vars['product']['options'][self::$_sections['i']['index']]['value']; ?>
</div>
				</div>
				<?php endif; ?>
				<?php endfor; endif; ?>
			</div>
			<div class="product_options_column">
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
				<?php if (( self::$_sections['i']['index'] + 1 ) % 2 == 0): ?>
				<div class="product_options_item">
					<div class="product_options_title"><?php echo self::$_tpl_vars['product']['options'][self::$_sections['i']['index']]['title']; ?>
<?php if (self::$_tpl_vars['product']['options'][self::$_sections['i']['index']]['units_title']): ?>, <?php echo self::$_tpl_vars['product']['options'][self::$_sections['i']['index']]['units_title']; ?>
<?php endif; ?></div>
					<div class="product_options_value"><?php echo self::$_tpl_vars['product']['options'][self::$_sections['i']['index']]['value']; ?>
</div>
				</div>
				<?php endif; ?>
				<?php endfor; endif; ?>
			</div>
		</div>
	</div>
	<?php endif; ?>
	
	<?php if (self::$_tpl_vars['product']['files']): ?>
	<div style="width: 100%; border: 1px solid #c7d0d7; border-radius: 3px; padding: 20px; margin-top: 20px;">
		<div style="color: #04368f; font-size: 12px; font-weight: 600; margin-bottom: 10px;">Сопроводительная документация</div>
		<div style="margin-top: 5px; display: inline-block; width: 100%;">
			<?php if (isset(self::$_sections['i'])) unset(self::$_sections['i']);
self::$_sections['i']['name'] = 'i';
self::$_sections['i']['loop'] = is_array($_loop=self::$_tpl_vars['product']['files']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<div class="product_file_item">
				<?php if (self::$_tpl_vars['product']['files'][self::$_sections['i']['index']]['type'] == 1): ?>
				<i class="icon icon_pdf"></i>
				<?php elseif (self::$_tpl_vars['product']['files'][self::$_sections['i']['index']]['type'] == 2): ?>
				<i class="icon icon_word"></i>
				<?php elseif (self::$_tpl_vars['product']['files'][self::$_sections['i']['index']]['type'] == 3): ?>
				<i class="icon icon_excel"></i>
				<?php elseif (self::$_tpl_vars['product']['files'][self::$_sections['i']['index']]['type'] == 4): ?>
				<i class="icon icon_txt"></i>
				<?php elseif (self::$_tpl_vars['product']['files'][self::$_sections['i']['index']]['type'] == 5): ?>
				<i class="icon icon_jpg"></i>
				<?php elseif (self::$_tpl_vars['product']['files'][self::$_sections['i']['index']]['type'] == 6): ?>
				<i class="icon icon_png"></i>
				<?php endif; ?>
				<a href="<?php echo self::$_tpl_vars['product']['files'][self::$_sections['i']['index']]['path']; ?>
" target="_blank"><?php echo self::$_tpl_vars['product']['files'][self::$_sections['i']['index']]['title']; ?>
</a>
				<span><?php echo self::$_tpl_vars['product']['files'][self::$_sections['i']['index']]['size']; ?>
 Mb</span>
			</div>
			<?php endfor; endif; ?>
		</div>
	</div>
	<?php endif; ?>

</div>
</div>