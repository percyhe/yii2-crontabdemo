<?php
namespace console\controllers;
use Yii;
use yii\console\Controller;
use yii\console\ExitCode;
class ExampleController   extends Controller {
    /**
     * 测试每分钟运行
     */
    public function actionMinute() {
        echo 'run example/minute 每分钟运行一次',"\n";
        return ExitCode::OK;
    }

    /**
     * 测试每小时运行
     */
    public function actionHours() {
        echo 'run example/hours 每小时运行一次',"\n";
        return ExitCode::OK;
    }

    public function actionTestAdd(){
        echo time()."我也是每分钟执行一次哦","\n";
        return ExitCode::OK;
    }


}