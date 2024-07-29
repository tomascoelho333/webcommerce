<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Clientes $model */

$this->title = 'Criar Clientes';
$this->params['breadcrumbs'][] = ['label' => 'Clientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clientes-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
