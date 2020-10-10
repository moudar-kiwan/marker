<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<title><?php echo self::$_tpl_vars['title']; ?>
</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-title" content="МАСК" />
		<meta name="format-detection" content="telephone=no" />
		<meta name="google" content="notranslate" />
		<link rel="apple-touch-icon" sizes="180x180" href="/images/intro/favicons/index/apple-touch-icon.png"/>
		<link rel="icon" type="image/png" sizes="32x32" href="/images/intro/favicons/index/favicon-32x32.png"/>
		<link rel="icon" type="image/png" sizes="16x16" href="/images/intro/favicons/index/favicon-16x16.png"/>
		<link rel="manifest" href="/images/intro/favicons/index/site.webmanifest"/>
		<meta name="msapplication-TileColor" content="#da532c" />
		<meta name="theme-color" content="#ffffff" />
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" media="all" href="/css/fonts.css?52" />
		<link rel="stylesheet" type="text/css" media="all" href="/css/section/intro.css?59"/>
		<!-- javascript files -->
		<script type="text/javascript" src="/js/lib/common.js?2"></script>
		<script type="text/javascript" src="/js/section/intro.js?25"></script>
	</head>
	<body id="body"<?php if (self::$_tpl_vars['preload'] == 1): ?> class="body_fixed"<?php endif; ?>>
		<div id="modal"><div id="modal_container"><div id="modal_overlay"><div id="modal_content"></div></div></div></div>
		<?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>"./partials/intro/sub_preload.html", 'vars'=>[]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?>
		<div id="intro_content"><?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>(self::$_tpl_vars['section_content']), 'vars'=>[]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?></div>
		<!-- Yandex.Metrika counter -->
		<script type="text/javascript">(function(m,e,t,r,i,k,a)<?php echo '{'; ?>
m[i]=m[i]||function()<?php echo '{'; ?>
(m[i].a=m[i].a||[]).push(arguments)<?php echo '}'; ?>
;m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)<?php echo '}'; ?>
)(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(66773818, "init", <?php echo '{'; ?>
clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true<?php echo '}'; ?>
);</script>
		<noscript><div><img src="https://mc.yandex.ru/watch/66773818" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
		<!-- /Yandex.Metrika counter -->
	</body>
</html>