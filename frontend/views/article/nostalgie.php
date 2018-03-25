<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Статья вступительная, ностальгическая';
$this->params['breadcrumbs'][] = ['label' => 'Мои статьи', 'url' => ['site/posts']];
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ''];
?>

<div class="site-about">
    <h2><?= Html::encode($this->title) ?></h2>

    <p class="my-article">
        Где-то на Хабре была такая заметка, что человек, который много лет программировал не каком-нибудь языке,
        привыкает к  нему, а в дальнейшем смотрит на программирование через "призму" этого языка. Расскажу и я о своей
        "призме".
    </p>

    <p class="my-article">
        Язык довольно редкий и сейчас наверное "мертвый", я не уверен, знает ли его вообще кто нибудь. Итак, встречаем - CLARION.
        Для тех, кто не знает что это, могу сказать - аналог Dephi. Примерно одинаково были, однако Delphi используют и сейчас
        а Clarion практически нет.
    </p>

    <p class="my-article">
        Clarion предназначен для быстрой разработки приложений, работающих с БД. В основу заложен набор готовых классов - шаблонов,
        которые можно было сначала спроектировать как каркас приложения, а потом донастроить по потребностям. Самая фишка была в том,
        что можно было получить готовое приложение для его установки без дополнительных компонент. Как говорится "сухо и комфортно".
        Увы, но на рынок это вышло как то "краешком", программистов на Clarion было катастрофически мало, и я был среди них.
    </p>

    <p class="my-article">
        А теперь позволю себе взглянуть на Yii, которое я сейчас осваиваю, используя навыки от Calrion. У них много общего.
        Это шаблонная система быстрой разработки. Там - генератор форм и тут - генератор Gii. Там - готовый каркас приложения,
        есть он и в Yii. А вот чего не хватает - удобного GUI IDE для работы, "заточенного" под конкретный язык.
        В Clarion как раз такое IDE входило в комплект - работа в режиме WYSIWYG. Увы, но для работы с Yii использую
        PhpStorm, но он более "общий" инструмент.
    </p>

    <p class="my-article">
        Немного расскажу и о том, почему именно Yii. В последнее время, кстати, его сильно ругают. Мол, противоречий там масса, для
        маленьких проектов слишком сложно, для больших недостаточно сложно, а для интернет-магазинов естьготовые конструкцци, так что
        не заморачивайтесь! А на деле почему-то никто не вспоминает основное достоинство - шикарный набор виджетов (строительных
        кирпичиков) и все это "из коробки". Самое главное - принцип RD (Rapid Development). Мв можем максимально быстро собрать
        "каркас" приложения. Там не будет "украшательств" в виде верстки, а "заглушки" стандартного бутстрапа, но и это уже хорошо.
        При желании бутстрап можно "выпилить" и установить какой ниьудь пользовательский набор, это не так и сложно.
    </p>
</div>
