<?php if (self::$_tpl_vars['preload'] == 1): ?>
<div class="preloader">
	<?php if (self::$_tpl_vars['section'] == 'marker'): ?>
	<img src="/images/intro/logo_marker.svg">
	<?php elseif (self::$_tpl_vars['section'] == 'scaner'): ?>
	<img src="/images/intro/logo_scaner.svg">
	<?php else: ?>
	<img src="/images/intro/logo_main.svg">
	<?php endif; ?>
	<div></div>
</div>
<?php endif; ?>