<?php

namespace backend\controllers;

class EmpresaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
