<head>
<!-- General -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title><?php echo self::$_tpl_vars['title']; ?>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="description" content="<?php echo @constant('DEFAULT_DESC'); ?>
" />
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="<?php echo @constant('DEFAULT_TITLE'); ?>
">
<meta name="format-detection" content="telephone=no">
<meta name="google" content="notranslate">
<meta name="msapplication-TileColor" content="#2d89ef">
<meta name="theme-color" content="#ffffff">
<!-- Apple & Android -->
<link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png" />
<link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon" sizes="60x60" href="/images/favicon/apple-touch-icon-60x60.png" />
<link rel="manifest" href="/manifest.json?2" />
<!-- Common Icons -->
<link rel="shortcut icon" href="/favicon.ico?2" type="image/x-icon" />
<link rel="mask-icon" sizes="any" href="/favicon-pinned.svg?2" color="#2871d0" />
<!-- CSS Files -->
<link rel="stylesheet" type="text/css" media="all" href="/css/fonts.css?52" />
<link rel="stylesheet" type="text/css" media="all" href="/css/common.css?244" />
<link rel="stylesheet" type="text/css" media="all" href="/css/section/auth.css?9" />
<link rel="stylesheet" type="text/css" media="all" href="/css/section/bill.css?5" />
<link rel="stylesheet" type="text/css" media="all" href="/css/section/dashboard.css?3" />
<link rel="stylesheet" type="text/css" media="all" href="/css/section/label.css?8" />
<link rel="stylesheet" type="text/css" media="all" href="/css/section/passport.css?102" />
<link rel="stylesheet" type="text/css" media="all" href="/css/section/picks.css?1" />
<link rel="stylesheet" type="text/css" media="all" href="/css/section/print.css?15" />
<link rel="stylesheet" type="text/css" media="all" href="/css/section/product.css?105" />
<link rel="stylesheet" type="text/css" media="all" href="/css/section/scans.css?1" />
<link rel="stylesheet" type="text/css" media="all" href="/css/section/support.css?3" />
<link rel="stylesheet" type="text/css" media="all" href="/css/section/task.css?35" />
<link rel="stylesheet" type="text/css" media="all" href="/css/section/users.css?7" />
<?php if (self::$_tpl_vars['global']['path'] == 'login' || self::$_tpl_vars['global']['path'] == 'new_password'): ?>
<link rel="stylesheet" type="text/css" media="all" href="/css/section/intro.css?58" />
<?php endif; ?>
<!-- Java Script Files -->
<script type="text/javascript" src="/js/lib/common.js?57"></script>
<script type="text/javascript" src="/js/common.js?111"></script>
<script type="text/javascript" src="/js/owner.js?16"></script>
<script type="text/javascript" src="/js/section/auth.js?3"></script>
<script type="text/javascript" src="/js/section/bill.js?5"></script>
<script type="text/javascript" src="/js/section/label.js?61"></script>
<script type="text/javascript" src="/js/section/passport.js?125"></script>
<script type="text/javascript" src="/js/section/pick.js?9"></script>
<script type="text/javascript" src="/js/section/product.js?333"></script>
<script type="text/javascript" src="/js/section/scan.js?8"></script>
<script type="text/javascript" src="/js/section/settings.js?1"></script>
<script type="text/javascript" src="/js/section/support.js?2"></script>
<script type="text/javascript" src="/js/section/task.js?51"></script>
<script type="text/javascript" src="/js/section/user.js?23"></script>
<?php if (self::$_tpl_vars['global']['path'] == 'dashboard'): ?>
<script type="text/javascript" src="/js/lib/amcharts4/core.js?8"></script>
<script type="text/javascript" src="/js/lib/amcharts4/charts.js?2"></script>
<script type="text/javascript" src="/js/lib/amcharts4/themes/frozen.js?3"></script>
<script type="text/javascript" src="/js/lib/amcharts4/themes/animated.js"></script>
<script type="text/javascript" src="/js/section/dashboard.js?8"></script>
<?php endif; ?>
<?php if (self::$_tpl_vars['global']['path'] == 'login' || self::$_tpl_vars['global']['path'] == 'new_password'): ?>
<script type="text/javascript" src="/js/section/intro.js?34"></script>
<?php endif; ?>
<!-- Global Vars -->
<script type="text/javascript">
var global = <?php echo '{'; ?>

	access: <?php echo self::$_tpl_vars['global']['access']; ?>
,
	path: "<?php echo self::$_tpl_vars['global']['path']; ?>
",
	company_id: <?php echo self::$_tpl_vars['global']['company_id']; ?>
,
	user_id: <?php echo self::$_tpl_vars['global']['user_id']; ?>
,
<?php if (self::$_tpl_vars['global']['path'] == 'dashboard'): ?>
	size_used: <?php echo self::$_tpl_vars['company']['size_used']; ?>
,
	size_free: <?php echo self::$_tpl_vars['company']['size_free']; ?>
,
	size_total: <?php echo self::$_tpl_vars['company']['size_total']; ?>
,
	users_new: <?php echo self::$_tpl_vars['users_count']['new']; ?>
,
	users_active: <?php echo self::$_tpl_vars['users_count']['active']; ?>
,
	users_inactive: <?php echo self::$_tpl_vars['users_count']['inactive']; ?>
,
	users_blocked: <?php echo self::$_tpl_vars['users_count']['blocked']; ?>
,
<?php endif; ?>
<?php if (self::$_tpl_vars['global']['path'] == 'product'): ?>
 	group_id: <?php echo self::$_tpl_vars['product']['group_id']; ?>
,
<?php endif; ?>
<?php if (self::$_tpl_vars['global']['path'] == 'products'): ?>
 	group_id: <?php echo self::$_tpl_vars['group_id']; ?>
,
	group_status: "<?php echo self::$_tpl_vars['group_status']; ?>
",
 	offset: <?php echo self::$_tpl_vars['offset']; ?>
,
<?php endif; ?>
<?php if (self::$_tpl_vars['global']['path'] == 'support'): ?>
	status: "<?php echo self::$_tpl_vars['status']; ?>
",
 	offset: <?php echo self::$_tpl_vars['offset']; ?>
,
<?php endif; ?>
<?php if (self::$_tpl_vars['global']['path'] == 'notifications'): ?>
	count_notifications: <?php echo self::$_tpl_vars['owner']['count_notifications']; ?>
,
	offset: <?php echo self::$_tpl_vars['offset']; ?>
,
<?php endif; ?>
<?php if (self::$_tpl_vars['global']['path'] == 'task'): ?>
	task_users: <?php echo self::$_tpl_vars['task']['users_simple']; ?>
,
	task_products: <?php echo self::$_tpl_vars['task']['products_simple']; ?>
,
<?php endif; ?>
<?php if (self::$_tpl_vars['global']['path'] == 'new_password'): ?>
	token: "<?php echo self::$_tpl_vars['token']; ?>
",
<?php endif; ?>
<?php echo '}'; ?>

</script>
</head>