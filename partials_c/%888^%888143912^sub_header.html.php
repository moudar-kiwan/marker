<div class="home home_index">
	
	<div class="mobile_menu" id="mobile-menu">
		<div class="mobile_menu_wrap">
			<a onclick="intro.change_page('home');" class="mobile_menu_item<?php if (self::$_tpl_vars['section'] == 'home'): ?> active<?php endif; ?>"<?php if (! self::$_tpl_vars['async']): ?> style="animation-delay: 0.3s;"<?php endif; ?>><span>Главная</span></a>
			<a onclick="intro.change_page('marker');" class="mobile_menu_item<?php if (self::$_tpl_vars['section'] == 'marker'): ?> active<?php endif; ?>"<?php if (! self::$_tpl_vars['async']): ?> style="animation-delay: 0.4s;"<?php endif; ?>><span>Маркер</span></a>
			<a onclick="intro.change_page('scaner');" class="mobile_menu_item<?php if (self::$_tpl_vars['section'] == 'scaner'): ?> active<?php endif; ?>"<?php if (! self::$_tpl_vars['async']): ?> style="animation-delay: 0.5s;"<?php endif; ?>><span>Сканер</span></a>
			<a onclick="intro.change_page('help');" class="mobile_menu_item<?php if (self::$_tpl_vars['section'] == 'help'): ?> active<?php endif; ?>"<?php if (! self::$_tpl_vars['async']): ?> style="animation-delay: 0.6s;"<?php endif; ?>><span>Помощь</span></a>
		</div>
	</div>

	<div class="header" id="header">
		<div class="header_wrap">
			<a onclick="intro.change_page('home');" class="logo<?php if (! self::$_tpl_vars['async']): ?> fade_in_left<?php endif; ?>"<?php if (! self::$_tpl_vars['async']): ?> style="animation-delay: 0.2s;"<?php endif; ?>>
				<?php if (self::$_tpl_vars['section'] == 'marker'): ?>
				<img class="logo_main" src="/images/intro/logo_marker.svg">
				<?php elseif (self::$_tpl_vars['section'] == 'scaner'): ?>
				<img class="logo_main" src="/images/intro/logo_scaner.svg">
				<?php else: ?>
				<img class="logo_main" src="/images/intro/logo_main.svg">
				<?php endif; ?>
				<img class="logo_mobile" src="/images/intro/logo_main.svg">
			</a>
			<div class="menu">
				<a onclick="intro.change_page('home');" class="menu_item<?php if (! self::$_tpl_vars['async']): ?> fade_in_left<?php endif; ?><?php if (self::$_tpl_vars['section'] == 'home'): ?> active<?php endif; ?>"<?php if (! self::$_tpl_vars['async']): ?> style="animation-delay: 0.3s;"<?php endif; ?>>Главная</a>
				<a onclick="intro.change_page('marker');" class="menu_item<?php if (! self::$_tpl_vars['async']): ?> fade_in_left<?php endif; ?><?php if (self::$_tpl_vars['section'] == 'marker'): ?> active<?php endif; ?>"<?php if (! self::$_tpl_vars['async']): ?> style="animation-delay: 0.3s;"<?php endif; ?>>Маркер</a>
				<a onclick="intro.change_page('scaner');" class="menu_item<?php if (! self::$_tpl_vars['async']): ?> fade_in_left<?php endif; ?><?php if (self::$_tpl_vars['section'] == 'scaner'): ?> active<?php endif; ?>"<?php if (! self::$_tpl_vars['async']): ?> style="animation-delay: 0.3s;"<?php endif; ?>>Сканер</a>
				<a onclick="intro.change_page('help');" class="menu_item<?php if (! self::$_tpl_vars['async']): ?> fade_in_left<?php endif; ?><?php if (self::$_tpl_vars['section'] == 'help'): ?> active<?php endif; ?>"<?php if (! self::$_tpl_vars['async']): ?> style="animation-delay: 0.3s;"<?php endif; ?>>Помощь</a>
			</div>
			<div class="auth auth_index<?php if (! self::$_tpl_vars['async']): ?> fade_in_left<?php endif; ?>"<?php if (! self::$_tpl_vars['async']): ?> style="animation-delay: 0.3s;"<?php endif; ?>><a href="/login">Вход</a></div>
			<div class="burger<?php if (! self::$_tpl_vars['async']): ?> fade_in_left<?php endif; ?>"<?php if (! self::$_tpl_vars['async']): ?> style="animation-delay: 0.3s;"<?php endif; ?> onclick="intro.toggle_menu();">
				<div class="burger_item" id="burger"></div>
			</div>
		</div>
	</div>
	
	<div class="home_block<?php if (self::$_tpl_vars['section'] == 'marker'): ?> home_block_marker<?php elseif (self::$_tpl_vars['section'] == 'scaner'): ?> home_block_scaner<?php endif; ?>" style="overflow: hidden;">
		<?php if (self::$_tpl_vars['section'] == 'marker'): ?>
		<div class="home_desc fade_in_left" style="animation-delay: 1.8s; z-index: 100; height: 122px;">Веб-сервис</div>
		<?php elseif (self::$_tpl_vars['section'] == 'scaner'): ?>
		<div class="home_mobile fade_in_left" style="animation-delay: 1.8s; z-index: 100; height: 122px;"><div>Доступно на ОС Android</div>Мобильное приложение</div>
		<?php endif; ?>
	</div>
	
	<div class="home_info home_info_index" style="overflow: hidden;">
		<?php if (self::$_tpl_vars['section'] == 'marker'): ?>
		<div class="home_title fade_in_up" style="animation-delay: 1.0s;">Маркировать продукцию</div>
		<div class="home_title fade_in_up" style="animation-delay: 1.2s;">просто</div>
		<?php elseif (self::$_tpl_vars['section'] == 'scaner'): ?>
		<div class="home_title fade_in_up" style="animation-delay: 1.0s;">Сканировать продукцию</div>
		<div class="home_title fade_in_up" style="animation-delay: 1.2s;">стало быстрее</div>
		<?php elseif (self::$_tpl_vars['section'] == 'help'): ?>
		<div class="home_title fade_in_up" style="animation-delay: 1.0s;">Остались вопросы?</div>
		<div class="home_informer fade_in_left" style="animation-delay: 1.2s;">Попробуйте найти ответ в нашем списке распространенных вопросов</div>
		<?php else: ?>
		<div class="home_title fade_in_up" style="animation-delay: 1.0s;">Платформа промышленной</div>
		<div class="home_title fade_in_up" style="animation-delay: 1.2s;">маркировки №1</div>
		<div class="home_links fade_in_left" style="animation-delay: 1.3s;">
			<a onclick="intro.change_page('marker');" class="home_link">
				<span>Я поставляю<br>продукцию</span>
				<div class="home_link_btn"><i class="home_link_icon icon_arrow_right"></i></div>
			</a>
			<div class="home_links_border"></div>
			<a onclick="intro.change_page('scaner');" class="home_link">
				<span>Я заказываю<br>продукцию</span>
				<div class="home_link_btn"><i class="home_link_icon icon_arrow_right"></i></div>
			</a>
		</div>
		<?php endif; ?>
	</div>
	
	<?php if (self::$_tpl_vars['section'] == 'marker'): ?>
	<div class="home_banner home_banner_marker fade_in_up" style="animation-delay: 1.0s;">
		<div class="home_banner_wrap">
			<div class="home_banner_item fade_in_up" style="animation-delay: 1.2s;">
				<div class="home_banner_title">Хотите знать<br>как это работает?</div>
				<div class="home_banner_desc">Все о взаимодействие с продуктом</div>
			</div>
		</div>
	</div>
	<?php elseif (self::$_tpl_vars['section'] == 'scaner'): ?>
	<div class="home_banner home_banner_marker fade_in_up" style="animation-delay: 1.0s;">
		<div class="home_banner_wrap">
			<div class="home_banner_item fade_in_up" style="animation-delay: 1.2s;">
				<div class="home_banner_title">Хотите знать<br>как это работает?</div>
				<div class="home_banner_desc">Все о взаимодействие с продуктом</div>
			</div>
		</div>
	</div>
	<?php elseif (self::$_tpl_vars['section'] == 'help'): ?>
	<div class="home_banner home_banner_marker fade_in_up" style="animation-delay: 1.0s;">
		<div class="home_banner_wrap">
			<div class="home_banner_item fade_in_up" style="animation-delay: 1.2s;">
				<div class="home_banner_title">Не нашли ответ на вопрос?</div>
				<div class="home_banner_desc">Напишите нам в поддержку и мы поможем вам</div>
			</div>
		</div>
	</div>
	<?php else: ?>
	<div class="home_banner home_banner_index fade_in_up" style="animation-delay: 1.0s;">
		<div class="home_banner_wrap">
			<div class="home_banner_item fade_in_up" style="animation-delay: 1.2s;">
				<div class="home_banner_title">Удобно</div>
				<div class="home_banner_desc">Быстро и просто оптимизируйте ресурсы организации на проведение складских операций</div>
			</div>
			<div class="home_banner_item fade_in_up" style="animation-delay: 1.3s;">
				<div class="home_banner_title">Выгодно</div>
				<div class="home_banner_desc">Переходите с дорогостоящего сканирующего оборудования на привычные смартфоны</div>
			</div>
			<div class="home_banner_item fade_in_up" style="animation-delay: 1.4s;">
				<div class="home_banner_title">Безопасно</div>
				<div class="home_banner_desc">Будьте уверены в безопасности ваших данных, работая в сервисе, которому доверяют</div>
			</div>
		</div>
	</div>
	<?php endif; ?>

	<div class="home_overlay"></div>
	<div class="home_video">
		<video playsinline autoplay muted loop>
			<?php if (self::$_tpl_vars['section'] == 'scaner'): ?>
			<source src="/video/intro_3.mp4" type="video/mp4">
			<source src="/video/intro_3.ogv" type="video/ogg">
			<source src="/video/intro_3.webm" type="video/webm">
			<?php elseif (self::$_tpl_vars['section'] == 'marker'): ?>
			<source src="/video/intro_2.mp4" type="video/mp4">
			<source src="/video/intro_2.ogv" type="video/ogg">
			<source src="/video/intro_2.webm" type="video/webm">
			<?php else: ?>
			<source src="/video/intro_1.mp4" type="video/mp4">
			<source src="/video/intro_1.ogv" type="video/ogg">
			<source src="/video/intro_1.webm" type="video/webm">
			<?php endif; ?>
		</video>        
	</div>
		
</div>