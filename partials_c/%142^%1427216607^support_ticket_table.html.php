<?php if (isset(self::$_sections['i'])) unset(self::$_sections['i']);
self::$_sections['i']['name'] = 'i';
self::$_sections['i']['loop'] = is_array($_loop=self::$_tpl_vars['messages']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<div style="display: table; width: 100%; margin-top: 25px;">
    <div style="display: table-cell; vertical-align: top; width: 5%;">
        <?php if (self::$_tpl_vars['messages'][self::$_sections['i']['index']]['role'] == 1): ?>
        <img src="/images/support.png" style="width: 50px; height: 50px; border-radius: 50%; -o-object-fit: cover;object-fit: cover;">
        <?php else: ?>
        <img src="/images/author.png" style="width: 50px; height: 50px; border-radius: 50%; -o-object-fit: cover;object-fit: cover;">
        <?php endif; ?>
    </div>
    <div style="display: table-cell; vertical-align: top; width: 95%; padding: 0 0 0 20px;">
        <div style="font-weight: 600; font-size: 13px; word-break: break-word;">
            <?php if (self::$_tpl_vars['messages'][self::$_sections['i']['index']]['role'] == 1): ?>Служба поддержки<?php else: ?><?php echo self::$_tpl_vars['user']['first_name']; ?>
 <?php echo self::$_tpl_vars['user']['last_name']; ?>
<?php endif; ?>
            <span style="display: inline-block; margin: 0 0 0 20px; font-size: 12px; color: #8a959b; font-weight: 400;"><?php echo self::$_tpl_vars['messages'][self::$_sections['i']['index']]['created']; ?>
</span>
        </div>
        <div style="margin-top: 10px; width: 100%; font-size: 14px; line-height: 18px;"><?php echo self::$_tpl_vars['messages'][self::$_sections['i']['index']]['body']; ?>
</div>
    </div>
</div>
<?php endfor; endif; ?>
<?php if (self::$_tpl_vars['support']['status'] != "Закрыт"): ?>
<div style="display: table; width: 100%; margin-top: 50px;">
    <div style="display: table-cell; vertical-align: top; width: 5%;">
        <img src="/images/author.png" style="width: 50px; height: 50px; border-radius: 50%; -o-object-fit: cover;object-fit: cover;">
    </div>
    <div style="display: table-cell; vertical-align: top; width: 95%; padding: 0 0 0 20px;">
        <textarea class="input_primary" style="height: 250px; resize: none; line-height: 20px; padding: 8px 10px;" id="msg" type="text" placeholder="Введите свое сообщение..." oninput="input_error_hide(this);" autocomplete="off" autocorrect="off" autocapitalize="off"></textarea>
        <div style="display: table; width: 100%; margin-top: 15px;">
            <div style="display: table-cell; width: 50%; vertical-align: middle; text-align: left;">
                <div class="btn_primary" onclick="support.send_message(<?php echo self::$_tpl_vars['support']['id']; ?>
);" style="line-height: 30px; height: 30px; padding: 0 15px;">Отправить</div>
            </div>
            <div style="display: table-cell; width: 50%; vertical-align: middle; text-align: right;">
                <div class="btn_primary" onclick="support.close_ticket(<?php echo self::$_tpl_vars['support']['id']; ?>
, 'support_ticket', event);" style="line-height: 30px; height: 30px; padding: 0 15px;">Закрыть тикет</div>
            </div>
        </div>
    </div>
</div>
<?php else: ?>
<div style="width: 100%; margin-top: 50px; padding: 20px; border: 1px dashed #c2c8cf; border-radius: 3px; font-size: 12px; line-height: 16px; color: #5c626a; text-align: center;">
    Работы по данному обращению завершены.<br>При возникновении новых вопросов создайте, пожалуйста, новый <span style="color: #04368f; cursor: pointer; font-weight: 600;" onclick="support.create_window();">тикет</span>.
</div>
<?php endif; ?>