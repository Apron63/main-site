<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Мои проекты';
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ''];
?>
<h1><?= Html::encode($this->title) ?></h1>

<div class="panel panel-primary">
    <div class="panel-heading">
        Учет показаний счетчиков
    </div>
    <div class="panel-body">
        Это приложение позволяет вести учет счетчиков по организациям. Можно отслеживать срок окончания
        поверки приборов, показания приборов. Пользователь может подготовить, просмотреть и напечатать
        отчет по приборам, у которых заканчивается поверка, а также расход по счетчикам за месяц.
    </div>
    <div class="panel-footer">
        <p><a href="/paldec/frontend/web" target="_blank">Перейти к приложению</a></p>
        <p><a href="https://github.com/apron63/paldec" target="_blank">Исходный код на GitHub</a></p>
    </div>
</div>

<div class="panel panel-primary">
    <div class="panel-heading">
        Тестовое задание для ID20
    </div>
    <div class="panel-body">
        Вывод данных из БД транзакций платежных карт. Предварительно посчитать число транзакций за период.
        Фильтр по периоду и номеру карты.
        Не заморачивался насчет верстки, главное - функционал.
    </div>
    <div class="panel-footer">
        <p><a href="/qingzi/frontend/web" target="_blank">Перейти к приложению</a></p>
        <p><a href="https://github.com/apron63/qingzi" target="_blank">Исходный код на GitHub</a></p>
    </div>
</div>


