<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\AvaliacoesSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="avaliacoes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'comentario') ?>

    <?= $form->field($model, 'data_avaliacao') ?>

    <?= $form->field($model, 'avaliacao') ?>

    <?= $form->field($model, 'ID_cliente') ?>

    <?php // echo $form->field($model, 'ID_produto') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
