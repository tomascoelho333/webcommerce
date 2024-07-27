<?php

namespace backend\controllers;

class ClientesController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
