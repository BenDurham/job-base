<?php

namespace app\controllers;

class CategoryController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }   

    public function actionCreate()
    {
        return $this->render('create');
    }



}