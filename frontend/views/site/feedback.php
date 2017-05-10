<?php

/* https://getmdl.io/index.html */

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

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
            'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
            'horizontalCssClasses' => [
                'label' => 'col-sm-2 mdl-textfield__label',
                'offset' => 'col-sm-offset-2 mdl-textfield__input',
                'wrapper' => 'col-sm-10',
                'error' => '',
                'hint' => '',
            ],
        ],
    ]); ?>

    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

    <?= $form->field($model, 'message')->textarea(['rows' => 5]) ?>

    <div class="col-sm-offset-2">
        <?= Html::submitButton('Создать', ['class' => 'btn btn-success', 'name' => 'contact-button']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
