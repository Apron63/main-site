<?php
/**
 * Created by PhpStorm.
 * User: Zver
 * Date: 14.06.2017
 * Time: 22:10
 */

use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>

<div class="list">
    <?= date('d.m.Y H:s', $model->created_at) ?><br>
    <?= $model->addr ?><br>
    <?= $model->ref_url ?><br>
    <?= $model->user_agent ?><br>
    <hr>
</div>