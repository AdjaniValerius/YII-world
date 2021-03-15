<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CountrylanguageSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="countrylanguage-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'CountryCode') ?>

    <?= $form->field($model, 'Language') ?>

    <?= $form->field($model, 'IsOfficial') ?>

    <?= $form->field($model, 'Percentage') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
