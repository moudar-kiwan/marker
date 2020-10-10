<div class="intro_bg"></div>
<div class="intro_wrap">
	<form onsubmit="window.login(event);">
        <div class="intro_input_group">
            <i class="icon icon_email intro_icon_email"></i>
            <input class="intro_input" type="email" id="login" placeholder="Почта" onfocus="error_hide('login');" oninput="error_hide('login');" autocomplete="off" autocorrect="off" autocapitalize="off">
            <label class="intro_error" id="login_error"></label>
        </div>
        <div class="intro_input_group">
            <i class="icon icon_password intro_icon_password"></i>
            <input class="intro_input" type="password" id="password" placeholder="Пароль" onfocus="error_hide('password');" oninput="error_hide('password');" autocomplete="off" autocorrect="off" autocapitalize="off">
            <label class="intro_error" id="password_error"></label>
        </div>
        <div class="intro_short">
            <i id="login_radio" class="icon icon_checked_on intro_short_icon" onclick="radio_toggle();"></i>
            <span class="intro_short_text" style="cursor: pointer;" onclick="radio_toggle();">Запомнить меня</span>
            <input type="hidden" id="short" value="0">
        </div>
        <div class="intro_controls">
            <button type="submit">Войти</button>
        </div>
        <a href="./password_restore" class="intro_password_restore">Забыли пароль?</a>
	</form>
</div>