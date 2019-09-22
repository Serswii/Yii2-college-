<?php
namespace klisl\mytest\controllers;
use Yii;
use yii\web\Controller;
use klisl\mytest\models\Tests;
class TestController extends Controller
{
    public $layout = 'main';
    public function actionIndex()
    {
        // регистрируем ресурсы:
        \college\mytest\TestsAssetsBundle::register($this->view);
        $datas = Tests::find()->all();
        return $this->render('index',[
            'datas' => $datas
        ]);
    }
}