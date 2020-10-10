<?php if (self::$_tpl_vars['info']): ?>
        <?php if (isset(self::$_sections['i'])) unset(self::$_sections['i']);
self::$_sections['i']['name'] = 'i';
self::$_sections['i']['loop'] = is_array($_loop=self::$_tpl_vars['info']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
        <div style="display: table; width: 100%; padding: 5px 10px; margin-bottom: 10px; border: 1px solid #99a2b3; border-radius: 2px; background: #fff; cursor: pointer;">
            <div href="./auth?sub=users&cid=<?php echo self::$_tpl_vars['info'][self::$_sections['i']['index']]['id']; ?>
" class="goto_item" style="width: 25%; display: table-cell; padding: 17px 8px;">
            	<?php echo self::$_tpl_vars['info'][self::$_sections['i']['index']]['title']; ?>

                <br><span style="font-weight: 600;">Тип:</span> <?php echo self::$_tpl_vars['info'][self::$_sections['i']['index']]['type_title']; ?>

                <?php if (self::$_tpl_vars['info'][self::$_sections['i']['index']]['code']): ?><br><span style="font-weight: 600;">Код:</span> <?php echo self::$_tpl_vars['info'][self::$_sections['i']['index']]['code']; ?>
<?php endif; ?>
			</div>
            <div href="./auth?sub=users&cid=<?php echo self::$_tpl_vars['info'][self::$_sections['i']['index']]['id']; ?>
" class="goto_item" style="width: 25%; display: table-cell; padding: 17px 8px;">
            	<span style="font-weight: 600;">ОГРН:</span> <?php echo self::$_tpl_vars['info'][self::$_sections['i']['index']]['ogrn']; ?>
<br>
            	<span style="font-weight: 600;">ИНН:</span> <?php echo self::$_tpl_vars['info'][self::$_sections['i']['index']]['inn']; ?>
<br>
                <span style="font-weight: 600;">КПП:</span> <?php echo self::$_tpl_vars['info'][self::$_sections['i']['index']]['kpp']; ?>

			</div>
            <div href="./auth?sub=users&cid=<?php echo self::$_tpl_vars['info'][self::$_sections['i']['index']]['id']; ?>
" class="goto_item" style="width: 25%; display: table-cell; padding: 17px 8px;"><?php echo self::$_tpl_vars['info'][self::$_sections['i']['index']]['address']; ?>
</div>
            <div href="./auth?sub=users&cid=<?php echo self::$_tpl_vars['info'][self::$_sections['i']['index']]['id']; ?>
" class="goto_item" style="width: 25%; display: table-cell; padding: 17px 8px;">
            	<span style="font-weight: 600;">Тел.:</span> <?php echo self::$_tpl_vars['info'][self::$_sections['i']['index']]['phone']; ?>
<br>
            	<span style="font-weight: 600;">Email:</span> <?php echo self::$_tpl_vars['info'][self::$_sections['i']['index']]['email']; ?>
<br>
			</div>
            <div style="display: table-cell; width: 0; padding: 17px 8px;"><i class="icon icon_edit goto_item" href="./auth?sub=companies&action=edit&cid=<?php echo self::$_tpl_vars['info'][self::$_sections['i']['index']]['id']; ?>
" style="color: #0079c2; font-size: 18px; line-height: 30px; width: 25px; text-align: center;"></i></div>
            <div style="display: table-cell; width: 0; padding: 17px 8px;"><i class="icon icon_delete_2" onclick="company_delete(<?php echo self::$_tpl_vars['info'][self::$_sections['i']['index']]['id']; ?>
, <?php if (self::$_tpl_vars['offset']): ?><?php echo self::$_tpl_vars['offset']; ?>
<?php else: ?>0<?php endif; ?>, '<?php if (self::$_tpl_vars['query']): ?><?php echo self::$_tpl_vars['query']; ?>
<?php else: ?><?php endif; ?>');" style="color: #D70003; font-size: 16px; line-height: 30px; width: 25px; text-align: center;"></i></div>
        </div>
        <?php endfor; endif; ?>
<?php else: ?>
<div style="margin: 25px; padding: 10px 0;">нет организаций ...</div>
<?php endif; ?>