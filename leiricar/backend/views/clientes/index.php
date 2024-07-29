<?php

use common\models\Clientes;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\ClientesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Clientes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clientes-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Criar Clientes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'nome',
            'codigopostal',
            'localidade',
            'rua',
            'nif',
            'telefone',
            [
                'attribute' => 'user_id',
                'label' => 'Username',
                'value' => function ($model) {
                    return $model->user ? $model->user->username : 'Indisponível';
                },
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Clientes $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id, 'user_id' => $model->user_id]);
                 }
            ],
        ],
    ]); ?>


</div>
