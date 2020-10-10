<div style="padding-left: 40px;">
	
	<div class="passport_worker_sub_title">Необходимо загрузить</div>
	<?php if (self::$_tpl_vars['files']['not_upload']): ?>
	<div>
		<?php if (isset(self::$_sections['j'])) unset(self::$_sections['j']);
self::$_sections['j']['name'] = 'j';
self::$_sections['j']['loop'] = is_array($_loop=self::$_tpl_vars['files']['not_upload']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
self::$_sections['j']['show'] = true;
self::$_sections['j']['max'] = self::$_sections['j']['loop'];
self::$_sections['j']['step'] = 1;
self::$_sections['j']['start'] = self::$_sections['j']['step'] > 0 ? 0 : self::$_sections['j']['loop']-1;
if (self::$_sections['j']['show']) {
    self::$_sections['j']['total'] = self::$_sections['j']['loop'];
    if (self::$_sections['j']['total'] == 0)
        self::$_sections['j']['show'] = false;
} else
    self::$_sections['j']['total'] = 0;
if (self::$_sections['j']['show']):

            for (self::$_sections['j']['index'] = self::$_sections['j']['start'], self::$_sections['j']['iteration'] = 1;
                 self::$_sections['j']['iteration'] <= self::$_sections['j']['total'];
                 self::$_sections['j']['index'] += self::$_sections['j']['step'], self::$_sections['j']['iteration']++):
?>
		<div class="passport_worker_sub_item">
			<div style="font-size: 11.5px;"><span style="font-weight: 600;">Раздел <?php echo self::$_tpl_vars['files']['not_upload'][self::$_sections['j']['index']]['number']; ?>
.</span> <?php echo self::$_tpl_vars['files']['not_upload'][self::$_sections['j']['index']]['title']; ?>
</div>
			<i class="icon icon_upload" onclick="passport.files_upload(<?php echo self::$_tpl_vars['passport_id']; ?>
, 0, 1, <?php echo self::$_tpl_vars['files']['not_upload'][self::$_sections['j']['index']]['number']; ?>
, <?php echo self::$_tpl_vars['files']['not_upload'][self::$_sections['j']['index']]['template_id']; ?>
, 0, 'worker');"></i>
		</div>
		<?php endfor; endif; ?>
	</div>
	<?php else: ?>
	<div style="padding: 15px; border: 1px dashed #c2c8cf; border-radius: 3px; font-size: 12px; color: #5c626a; text-align: center;">Все документы загружены</div>
	<?php endif; ?>

	<div class="passport_worker_sub_title" style="margin-top: 10px;">Загружено</div>
	<?php if (self::$_tpl_vars['files']['upload']): ?>
	<div>
		<?php if (isset(self::$_sections['j'])) unset(self::$_sections['j']);
self::$_sections['j']['name'] = 'j';
self::$_sections['j']['loop'] = is_array($_loop=self::$_tpl_vars['files']['upload']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
self::$_sections['j']['show'] = true;
self::$_sections['j']['max'] = self::$_sections['j']['loop'];
self::$_sections['j']['step'] = 1;
self::$_sections['j']['start'] = self::$_sections['j']['step'] > 0 ? 0 : self::$_sections['j']['loop']-1;
if (self::$_sections['j']['show']) {
    self::$_sections['j']['total'] = self::$_sections['j']['loop'];
    if (self::$_sections['j']['total'] == 0)
        self::$_sections['j']['show'] = false;
} else
    self::$_sections['j']['total'] = 0;
if (self::$_sections['j']['show']):

            for (self::$_sections['j']['index'] = self::$_sections['j']['start'], self::$_sections['j']['iteration'] = 1;
                 self::$_sections['j']['iteration'] <= self::$_sections['j']['total'];
                 self::$_sections['j']['index'] += self::$_sections['j']['step'], self::$_sections['j']['iteration']++):
?>
		<div class="passport_worker_sub_item<?php if (self::$_tpl_vars['files']['upload'][self::$_sections['j']['index']]['status_id'] == 1): ?> green<?php elseif (self::$_tpl_vars['files']['upload'][self::$_sections['j']['index']]['status_id'] == 2): ?> red<?php else: ?> blue<?php endif; ?>">
			<div style="font-size: 11.5px; margin-bottom: 10px;"><span style="font-weight: 600;">Раздел <?php echo self::$_tpl_vars['files']['upload'][self::$_sections['j']['index']]['number']; ?>
.</span> <?php echo self::$_tpl_vars['files']['upload'][self::$_sections['j']['index']]['title']; ?>
</div>
			<div class="passport_worker_upload_table">
				<div>
					<div style="width: 15%;">Статус</div>
					<div style="width: 15%;">Загружено</div>
					<div style="width: 20%;">Файл</div>
					<div style="width: 10%;">Размер</div>
					<div style="width: 30%;">Примечание</div>
					<div style="width: 5%;"></div>
					<div style="width: 5%;"></div>
				</div>
				<?php if (isset(self::$_sections['k'])) unset(self::$_sections['k']);
self::$_sections['k']['name'] = 'k';
self::$_sections['k']['loop'] = is_array($_loop=self::$_tpl_vars['files']['upload'][self::$_sections['j']['index']]['items']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
self::$_sections['k']['show'] = true;
self::$_sections['k']['max'] = self::$_sections['k']['loop'];
self::$_sections['k']['step'] = 1;
self::$_sections['k']['start'] = self::$_sections['k']['step'] > 0 ? 0 : self::$_sections['k']['loop']-1;
if (self::$_sections['k']['show']) {
    self::$_sections['k']['total'] = self::$_sections['k']['loop'];
    if (self::$_sections['k']['total'] == 0)
        self::$_sections['k']['show'] = false;
} else
    self::$_sections['k']['total'] = 0;
if (self::$_sections['k']['show']):

            for (self::$_sections['k']['index'] = self::$_sections['k']['start'], self::$_sections['k']['iteration'] = 1;
                 self::$_sections['k']['iteration'] <= self::$_sections['k']['total'];
                 self::$_sections['k']['index'] += self::$_sections['k']['step'], self::$_sections['k']['iteration']++):
?>
				<div>
					<div><?php echo self::$_tpl_vars['files']['upload'][self::$_sections['j']['index']]['items'][self::$_sections['k']['index']]['status_title']; ?>
</div>
					<div><?php echo self::$_tpl_vars['files']['upload'][self::$_sections['j']['index']]['items'][self::$_sections['k']['index']]['created']; ?>
</div>
					<div><a href="<?php echo self::$_tpl_vars['files']['upload'][self::$_sections['j']['index']]['items'][self::$_sections['k']['index']]['path']; ?>
" target="_blank">открыть</a></div>
					<div><?php echo self::$_tpl_vars['files']['upload'][self::$_sections['j']['index']]['items'][self::$_sections['k']['index']]['size']; ?>
 Мб</div>
					<div><?php if (self::$_tpl_vars['files']['upload'][self::$_sections['j']['index']]['items'][self::$_sections['k']['index']]['note']): ?><?php echo self::$_tpl_vars['files']['upload'][self::$_sections['j']['index']]['items'][self::$_sections['k']['index']]['note']; ?>
<?php else: ?>-<?php endif; ?></div>
					<div>
						<?php if (self::$_tpl_vars['files']['upload'][self::$_sections['j']['index']]['items'][self::$_sections['k']['index']]['status_id'] != 1): ?>
						<a onclick="passport.file_edit_window(<?php echo self::$_tpl_vars['files']['upload'][self::$_sections['j']['index']]['items'][self::$_sections['k']['index']]['id']; ?>
, 'worker');" style="cursor: pointer; margin-right: 15px;">править</a>
						<?php endif; ?>
					</div>
					<div>
						<?php if (self::$_tpl_vars['files']['upload'][self::$_sections['j']['index']]['items'][self::$_sections['k']['index']]['status_id'] != 1): ?>
						<a onclick="passport.files_upload(<?php echo self::$_tpl_vars['passport_id']; ?>
, 0, 1, <?php echo self::$_tpl_vars['files']['upload'][self::$_sections['j']['index']]['number']; ?>
, <?php echo self::$_tpl_vars['files']['upload'][self::$_sections['j']['index']]['template_id']; ?>
, <?php echo self::$_tpl_vars['files']['upload'][self::$_sections['j']['index']]['items'][self::$_sections['k']['index']]['id']; ?>
, 'worker');" style="cursor: pointer; margin-right: 15px;">обновить</a>
						<?php endif; ?>
					</div>
					<div>
						<?php if (self::$_tpl_vars['files']['upload'][self::$_sections['j']['index']]['items'][self::$_sections['k']['index']]['status_id'] != 1): ?>
						<a onclick="passport.file_delete(<?php echo self::$_tpl_vars['files']['upload'][self::$_sections['j']['index']]['items'][self::$_sections['k']['index']]['id']; ?>
, 'worker')" style="cursor: pointer;">удалить</a>
						<?php endif; ?>
					</div>
				</div>
				<?php endfor; endif; ?>
			</div>
			<?php if (self::$_tpl_vars['files']['upload'][self::$_sections['j']['index']]['status_id'] == 0 || self::$_tpl_vars['files']['upload'][self::$_sections['j']['index']]['status_id'] == 2): ?>
			<i class="icon icon_upload" title="Загрузить еще один файл" onclick="passport.files_upload(<?php echo self::$_tpl_vars['passport_id']; ?>
, 0, 1, <?php echo self::$_tpl_vars['files']['upload'][self::$_sections['j']['index']]['number']; ?>
, <?php echo self::$_tpl_vars['files']['upload'][self::$_sections['j']['index']]['template_id']; ?>
, 0, 'worker');" style="top: 2px;"></i>
			<?php endif; ?>
		</div>
		<?php endfor; endif; ?>
	</div>
	<?php else: ?>
	<div style="padding: 15px; border: 1px dashed #c2c8cf; border-radius: 3px; font-size: 12px; color: #5c626a; text-align: center;">Нет загруженных документов</div>
	<?php endif; ?>
	
	<div class="passport_worker_sub_title" style="margin-top: 10px;">Дополнительные документы</div>
	<div class="passport_worker_sub_item">
		<?php if (self::$_tpl_vars['files']['extra']): ?>
		<div class="passport_worker_upload_table">
			<div>
				<div style="width: 15%;">Загружено</div>
				<div style="width: 25%;">Файл</div>
				<div style="width: 15%;">Размер</div>
				<div style="width: 30%;">Примечание</div>
				<div style="width: 5%;"></div>
				<div style="width: 5%;"></div>
				<div style="width: 5%;"></div>
			</div>
			<?php if (isset(self::$_sections['j'])) unset(self::$_sections['j']);
self::$_sections['j']['name'] = 'j';
self::$_sections['j']['loop'] = is_array($_loop=self::$_tpl_vars['files']['extra']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
self::$_sections['j']['show'] = true;
self::$_sections['j']['max'] = self::$_sections['j']['loop'];
self::$_sections['j']['step'] = 1;
self::$_sections['j']['start'] = self::$_sections['j']['step'] > 0 ? 0 : self::$_sections['j']['loop']-1;
if (self::$_sections['j']['show']) {
    self::$_sections['j']['total'] = self::$_sections['j']['loop'];
    if (self::$_sections['j']['total'] == 0)
        self::$_sections['j']['show'] = false;
} else
    self::$_sections['j']['total'] = 0;
if (self::$_sections['j']['show']):

            for (self::$_sections['j']['index'] = self::$_sections['j']['start'], self::$_sections['j']['iteration'] = 1;
                 self::$_sections['j']['iteration'] <= self::$_sections['j']['total'];
                 self::$_sections['j']['index'] += self::$_sections['j']['step'], self::$_sections['j']['iteration']++):
?>
			<div>
				<div><?php echo self::$_tpl_vars['files']['extra'][self::$_sections['j']['index']]['created']; ?>
</div>
				<div><a href="<?php echo self::$_tpl_vars['files']['extra'][self::$_sections['j']['index']]['path']; ?>
" target="_blank">открыть</a></div>
				<div><?php echo self::$_tpl_vars['files']['extra'][self::$_sections['j']['index']]['size']; ?>
 Мб</div>
				<div><?php if (self::$_tpl_vars['files']['extra'][self::$_sections['j']['index']]['note']): ?><?php echo self::$_tpl_vars['files']['extra'][self::$_sections['j']['index']]['note']; ?>
<?php else: ?>-<?php endif; ?></div>
				<div><a onclick="passport.file_edit_window(<?php echo self::$_tpl_vars['files']['extra'][self::$_sections['j']['index']]['id']; ?>
, 'worker');" style="cursor: pointer; margin-right: 15px;">править</a></div>
				<div><a onclick="passport.files_upload(<?php echo self::$_tpl_vars['passport_id']; ?>
, 0, 3, <?php echo self::$_tpl_vars['files']['extra'][self::$_sections['j']['index']]['number']; ?>
, <?php echo self::$_tpl_vars['files']['extra'][self::$_sections['j']['index']]['template_id']; ?>
, <?php echo self::$_tpl_vars['files']['extra'][self::$_sections['j']['index']]['id']; ?>
, 'worker');" style="cursor: pointer; margin-right: 15px;">обновить</a></div>
				<div><a onclick="passport.file_delete(<?php echo self::$_tpl_vars['files']['extra'][self::$_sections['j']['index']]['id']; ?>
, 'worker')" style="cursor: pointer;">удалить</a></div>
			</div>
			<?php endfor; endif; ?>
		</div>
		<?php else: ?>
		<div>дополнительные файлы не загружены</div>
		<?php endif; ?>
		<i class="icon icon_upload" title="Загрузить еще один файл" onclick="passport.files_upload(<?php echo self::$_tpl_vars['passport_id']; ?>
, 0, 3, 0, 0, 0, 'worker');"></i>
	</div>
	
</div>