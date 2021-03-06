<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Про Yii и Symfony';
$this->params['breadcrumbs'][] = ['label' => 'Мои статьи', 'url' => ['site/posts']];
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ''];
?>

<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Сказ про то как я Симфони учил</p>

    <p class="my-article">
        Начну немного издалека. Пришла как то мне пора приобщаться к миру большому, непонятному, сложному -
        веб-программированию. И начал я учить язык заморский, в иной вере выдуманный - PHP значится....
        Ну и сразу, чтоб не изобретать коляску самобеглую с колесами квадратными, совет дельный вычитал -
        есть средства дивные, фреймворками их кличут. Мол, будет тебе там сразу все по полочкам,
        знай только подставляй буковки да циферки, и сайт тебе будет работать как ты хошь, да и править
        им можно в любое направление, и будет он послушный аки кот Васька когда жрать захочет ))
    </p>
    <p class="my-article">
        Шутки в сторону, начал я фреймворк присматривать а тех то всего и ничего. Есть маленькие, есть
        большие, есть сложные, есть простенькие. Но вот пишут люди, мол есть такой Yii, и свежим взглядом
        изложен, и нравится многим, и авторы солидные, и чтива неперяно ))). Начал я искать что там сочинили.
        И оказалось, что и версия есть свежая Yii2, и автора - люди авторитетные, и документации много много,
        и вече есть народное, и видеоматериалы выкладывают, и семинары проводят. Загляденье!
    </p>

    <p class="my-article">
        И вот уж не знаю как вышло, но первое что мне глянулось, был канал на Ютубе, канал заморский, из
        стран дальних, жарких - из Индии. Видать ближе не нашлось))) И видел я как скормный писал мастер ихний
        код сперва на дешевом ноутбуке с Линуксом, а потом и на макбук пересел. Ну, думаю, значит хорошо он пишет,
        раз благосостояние в гору его пошло. Начл и я пробовать. Скромно так, помалешечку.
    </p>
    <p class="my-article">
        Однако сказ не про то. Начал я значится, помаленьку писать-то, и так, и сяк - красиво получается.
        Надо уже и дело делать, а не баловством заниматься. И стал я парнеров себе подыскивать. И нашелся
        такой добрый человек, слово молвил, задание дал, и давать стал далее все больше и больше.
    </p>
    <p class="my-article">
        И молвит он как то раз - а чего мол мы на таком барахле-то работаем? Давай, мол Symfony пробовать.
        И сам, дескать Александр Макаров его использует, и классика это, как музыка - не стареет, всегда уважаема.
        Однако, не попробовав, ничего же не скажешь. И сделали мы проект на Symfony. И решил я рассказать
        что мне больше понравилось и почему.
    </p>
    <p class="my-article">
        Ну а теперь все серьезно!
        Итак, сравниваем Yii2 2.0.11 и Symfony 3.2.4. Если где-то и мелькали обзоры, то это были более старые
        версии. А теперь мы сравниваем свежее и подобное.
        И еще - все это сугубо личные впечатления и не претендуют на истину в первой инстанции.
    </p>
    <p class="my-article">
        Сразу скажу, что примерно все одинакове, только может быть названо по-разному. Но есть и принципиальные
        различия. Первое, что я хочу отметить - Yii - это скорее чемодан с набором инструментов, вполне себе
        готовый для использования "из коробки", тогда как Symfony - скорее "пустой чемодан", в котором есть
        много много прекрасно организованного места для инструментов, но сами инструменты надо докупать
        (скачивать) дополнительно. Далее, для вывода собсвенно самой веб страницы Yii использует как чистое PHP,
        что, как говорят довольно некультурно, так и обертки-виджеты, что уже приемлимо. Symfony же ипользует
        шаблонизатор собственного разлива Twig. Причем Twig неплохо живет и сам по себе, что является причиной
        его довольно-таки бешеной популярности. Лично мне Twig как то не по душе пришелся. В принципе это еще
        один "язык" шаблонизации со своими правилами. Надо ли его осваивать, или вернутся к истокам и вспомнить,
        что собственно сам "чистый" PHP и есть шаблонизатор - это вопрос.
        Мое мнение - плюсик Yii за более интегрированный подход.
    </p>
    <p class="my-article">
        Одним из важнейших компонентов сложного веб-сайта является работа с базой данных. Самый простой случай -
        регистрация пользоватлей, например. Yii предлагает нам уровень абстракции Active Record - как бы "покадровый"
        просмотр табличных данных. Для более "тонкой" обработки есть ActiveQuery, напосредственно приближенное к
        уровню PDO. Symfony предлагает более глобальный инструмент Doctrine, в которым принципы чуть чуть иные.
        Увы, но сложность Doctrine довольно высока для быстрого изучения. Хотя, возможно это и достойный инструмент.
        Yii в свою очередь, делает упор на скорость разработки, там все ясно и понятно. Simfony сложнее но возможно
        и мощнее в использовании, однако мой плюс в сторону Yii.
    </p>
    <p class="my-article">
        Немного в продолжение предыдущей темы. Работа с таблицами БД - это работа с классами внутри фреймворка.
        Здесь каждой табличке соответствует свой класс, а полям - свойства класса. В Yii эти свойства определены
        как public, соответственно доступ к свойствам организован напрямую, а в Symfony - private со своими геттерми
        и сеттерами. Чисто академически вариант от Symfony более "классически правильный", поставим один плюсик
        сюда.
    </p>
    <p class="my-article">
        Одной из важнейших частей фреймворка является роутинг - разбор url адреса и "отдатие на съедение"
        поступившей информации соответствующему обработчику. И тут у нас принципы немного различаются. Yii ожидает
        адреса в формате controller/action, отдает в соответствующий controller, ищет в нем action и запускает его.
        В Symfony контроллер сам решает какой адрес он ожидает, ну а роутер, вероятно, заранее составляет таблицу
        роутинга по имеющейся информации. Тут, скорее всего, подход из Yii более "академический", хотя не могу
        и не буду утверждать, что он единственно верный. Полплюсика в сторону Yii пожалуй что.
    </p>

</div>
