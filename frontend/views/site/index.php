<?php

/* @var $this yii\web\View */
use frontend\assets\MainAsset;

$this->title = 'Творческая лаборатория';
MainAsset::register($this);
?>
<div class="site-index">
    <div class="body-content">
    	<div class="text-center main-header">
	Сайт развивается!
	</div>
	<div>
		<ul>
  			<li><a href="site/projects" class="round green">Проекты<span class="round">Примеры моих проектов</span></a></li>
			<li><a href="site/posts" class="round red">Статьи<span class="round">Что вижу, то и пою. Мысли вслух</span></a></li>
			<li><a href="site/feedback" class="round yellow">Отзывы<span class="round">Напишите мне... Пожалуйста!</span></a></li>
		</ul> 
	</div>
	<div class="main-text">
		Здравствуйте!<br>
		Вы зашли на сайт вольнодумца!<br>
		Здесь вы можете посмотреть на робкие попытки пробы себя. Всячески приветствуются попытки ободрить, 
		помочь, подсказать, направить).<br>
		Кто я? Ищущий свой путь.<br>
		Что я? Веб-программист, который хочет научиться делать так чтоб восторгались!
		
	</div>
    </div>
</div>
