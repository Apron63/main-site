<?php

/* https://getmdl.io/index.html */

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\widgets\ThemedField;

$this->title = 'Обратная связь';
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ''];
?>

<div class="site-feedback">
<h3><?= Html::encode($this->title) ?></h3>
<p>Есть что сказать? Не молчите!</p>

<?php $form = ActiveForm::begin([
    'id' => 'feedback-form',
    'layout' => 'horizontal',
    'fieldConfig' => [
        //'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
        'template' => "{beginWrapper}\n{input}\n{label}\n{hint}\n{error}\n{endWrapper}",
        'horizontalCssClasses' => [
            'label' => 'mdl-textfield__label',
            'offset' => 'mdl-textfield__input',
            'wrapper' => 'mdl-textfield mdl-js-textfield mdl-textfield--floating-label',
            'error' => '',
            'hint' => '',
        ],
    ],
]); ?>


<?= ThemedField::renderField($model, 'name'); ?>

<?= 1/*ThemedField::renderArea($model, 'message');*/ ?>

<div class="">
    <?= Html::submitButton('Создать', ['class' => 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent', 'name' => 'contact-button']) ?>
</div>

<?php ActiveForm::end(); ?>

</div>
