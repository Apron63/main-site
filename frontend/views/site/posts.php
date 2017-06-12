<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Мои статьи';
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ''];
?>
<h2><?= Html::encode($this->title) ?></h2>

<p>Иногда я пишу статьи. Даже бывает что сам их читаю ))</p>
<p>Верстка в процессе разработки</p>

<ul>
    <li><a href="../article/nostalgie" class="btn btn-link">Немного вступления (ностальгическое)</a></li>
    <li><a href="../article/yii-and-symfony" class="btn btn-link">Про Yii и Symfony</a></li>
</ul>
