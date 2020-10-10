<div class="modal_head">
	<span>Редактировать документ</span>
	<i class="icon icon_delete" onclick="common.modal_hide();"></i>	
</div>
<div style="padding: 20px; border-radius: 0 0 3px 3px; background: #fff;">
	<div style="padding-top: 0px;">
		<div class="input_label">Название документа</div>
		<input class="input_primary" id="title" type="text" value="<?php echo self::$_tpl_vars['file']['title']; ?>
" placeholder="Название" autocomplete="off" autocorrect="off" autocapitalize="off">
	</div>
	<div style="padding-top: 15px;">
		<div class="input_label">Раздел и группа</div>
		<div class="selector" style="position: relative;" onclick="common.results_toggle(this, event);">
			<input type="text" class="input_primary" placeholder="Наименование" value="<?php if (self::$_tpl_vars['file']['group_title']): ?>Раздел <?php echo self::$_tpl_vars['file']['sub_number']; ?>
. <?php echo self::$_tpl_vars['file']['title']; ?>
. Отдел - <?php echo self::$_tpl_vars['file']['group_title']; ?>
<?php else: ?>Дополнительные документы<?php endif; ?>" autocomplete="off" autocorrect="off" autocapitalize="off" disabled style="padding-right: 36px; cursor: pointer;">
			<input type="hidden" id="template_id" value="<?php echo self::$_tpl_vars['file']['template_id']; ?>
">
			<i class="icon icon_expand" style="position: absolute; top: 1px; right: 0px; font-size: 17px; cursor: pointer; line-height: 38px; padding: 0 14px;"></i>
			<div class="results_container">
				<?php if (isset(self::$_sections['i'])) unset(self::$_sections['i']);
self::$_sections['i']['name'] = 'i';
self::$_sections['i']['loop'] = is_array($_loop=self::$_tpl_vars['sections']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<div class="result_item" onclick="common.result_select(this, '<?php if (self::$_tpl_vars['sections'][self::$_sections['i']['index']]['group_title']): ?>Раздел <?php echo self::$_tpl_vars['sections'][self::$_sections['i']['index']]['sub_number']; ?>
. <?php echo self::$_tpl_vars['sections'][self::$_sections['i']['index']]['title']; ?>
. Отдел - <?php echo self::$_tpl_vars['sections'][self::$_sections['i']['index']]['group_title']; ?>
<?php else: ?><?php echo self::$_tpl_vars['sections'][self::$_sections['i']['index']]['title']; ?>
<?php endif; ?>', <?php echo self::$_tpl_vars['sections'][self::$_sections['i']['index']]['id']; ?>
, 'full');"><?php if (self::$_tpl_vars['sections'][self::$_sections['i']['index']]['group_title']): ?>Раздел <?php echo self::$_tpl_vars['sections'][self::$_sections['i']['index']]['sub_number']; ?>
. <?php echo self::$_tpl_vars['sections'][self::$_sections['i']['index']]['title']; ?>
. Отдел - <?php echo self::$_tpl_vars['sections'][self::$_sections['i']['index']]['group_title']; ?>
<?php else: ?><?php echo self::$_tpl_vars['sections'][self::$_sections['i']['index']]['title']; ?>
<?php endif; ?></div>
				<?php endfor; endif; ?>
			</div>
		</div>
	</div>
	<div style="margin-top: 20px;">
		<div class="btn_primary" onclick="passport.file_edit_update(<?php echo self::$_tpl_vars['file']['id']; ?>
, '<?php echo self::$_tpl_vars['mode']; ?>
');">Сохранить</div>
	</div>
</div>