<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ListView;

$this->title = 'A-Zone';
?>

<div>
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_list',
    ]);?>
</div>