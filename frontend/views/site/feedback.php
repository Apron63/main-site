<?php

/* https://getmdl.io/index.html */

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
//use common\widgets\ThemedField;

$this->title = 'Обратная связь';
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ''];
?>

<div class="site-feedback">
<h3><?= Html::encode($this->title) ?></h3>
<p>Есть что сказать? Не молчите!</p>

<?php $form = ActiveForm::begin([
    'id' => 'feedback-form',
    'fieldConfig' => [
        'template' => '{input}{label}',
        'options' => [
            'class' => 'mdl-textfield mdl-js-textfield',
        ],
        'labelOptions' => ['class' => 'mdl-textfield__label'],
        'inputOptions' => ['class' => 'mdl-textfield__input'],
    ],
    //'labelClass' => 'mylabel',
]); ?>

<?= $form->field($model, 'name')->textInput(['autofocus' => 'on', 'autocomplete' => 'off'])?>
<?= $form->field($model, 'message')->textArea()?>

<div class="">
    <?= Html::submitButton('Оставить сообщение', ['class' => 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent', 'name' => 'contact-button']) ?>
</div>

<?php ActiveForm::end(); ?>

</div>
