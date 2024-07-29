<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Produtos $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="produtos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Descricao')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Preco')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_categoria')->textInput() ?>

    <?= $form->field($model, 'Quantidade')->textInput() ?>

    <?= $form->field($model, 'id_iva')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
