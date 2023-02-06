<?php
namespace console\controllers;
use yii\console\Controller;

class TestController extends Controller
{
    /**
     * 执行测试脚本
     */
    public function actionDo()
    {
        echo 'hello test console';
    }
}