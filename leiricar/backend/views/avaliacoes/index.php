<?php

use common\models\Avaliacoes;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\AvaliacoesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Avaliacoes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="avaliacoes-index">


    <p>
        <?= Html::a('Criar Avaliacoes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            'comentario',
            'data_avaliacao',
            'avaliacao',
            [
                'attribute' => 'ID_cliente',
                'label' => 'Cliente',
                'value' => function ($model) {
                    return $model->cliente ? $model->cliente->nome : 'Indisponível';
                },
            ],
            'ID_produto',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Avaliacoes $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
