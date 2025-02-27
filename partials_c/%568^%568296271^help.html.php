<!--<div class="preloader preloader_index">
      <div class="preloader_block">
        <div class="preloader_rectangle">
          <div class="preloader_rectangle_item"></div>
        </div>
        <div class="preloader_title">
					<div class="preloader_title_m"></div>
					<div class="preloader_title_a"></div>
					<div class="preloader_title_s"></div>
					<div class="preloader_title_k"></div>
				</div>
      </div>
</div>-->
    
<?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>"./partials/intro/sub_header.html", 'vars'=>[]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?>

<div class="questions">
	<div class="container">
		<div class="row">
			<div class="col-5"><h3 class="h3">Часто задаваемые вопросы</h3></div>
			<div class="col-7"></div>
		</div>
		<div class="question_item" onclick="intro.question_toggle(this);">
			<div class="question_title">Как присоединиться к системе? <i></i></div>
			<div class="question_desc"><div>Для работы приложения используется инновационная нейронная сеть, которая позволяет точно определять код, даже если качество фотографии плохое. Технология прошла тестирование на десятках тысяч пользователей без единого сбоя.</div></div>
		</div>
		<div class="question_item" onclick="intro.question_toggle(this);">
			<div class="question_title">Документы надежно защищены? <i></i></div>
			<div class="question_desc"><div>Мы надежно храним все документы и заботимся о том что бы они были доступны только нужным людям, мало того - теперь вы их не потеряете. Все информация хранится в личном кабинете.</div></div>
		</div>
		<div class="question_item" onclick="intro.question_toggle(this);">
			<div class="question_title">Мои данные защищены? <i></i></div>
			<div class="question_desc"><div>Все персональные данные пользователей хранятся на территории России в зашифрованном виде в защищенных облачных хранилищах. Доступ к ним имеют только сертифицированные специалисты. Данные используются исключительно по прямому предназначению и не передаются третьим лицам, в том числе в рекламных целях. Иными словами мы делаем все, чтобы защитить ваши данные и не допустить их использование в нежелательных целях.</div></div>
		</div>
	</div>
</div>

<?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>"./partials/intro/sub_submit.html", 'vars'=>[]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?>
<?php $_html_tpl_vars = self::$_tpl_vars;
self::include_file(['file'=>"./partials/intro/sub_footer.html", 'vars'=>[]]);
self::$_tpl_vars = $_html_tpl_vars;
unset($_html_tpl_vars);
 ?>