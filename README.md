<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Advanced Project Template</h1>
    <br>
</p>

Yii 2 Advanced Project Template is a skeleton [Yii 2](http://www.yiiframework.com/) application best for
developing complex Web applications with multiple tiers.

The template includes three tiers: front end, back end, and console, each of which
is a separate Yii application.

The template is designed to work in a team development environment. It supports
deploying the application in different environments.

Documentation is at [docs/guide/README.md](docs/guide/README.md).

[![Latest Stable Version](https://img.shields.io/packagist/v/yiisoft/yii2-app-advanced.svg)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Total Downloads](https://img.shields.io/packagist/dt/yiisoft/yii2-app-advanced.svg)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![build](https://github.com/yiisoft/yii2-app-advanced/workflows/build/badge.svg)](https://github.com/yiisoft/yii2-app-advanced/actions?query=workflow%3Abuild)

DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
    tests/               contains tests for common classes    
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for backend application    
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for frontend application
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides



?????????console?????????  ???????????? https://gitee.com/jianglibin/yii2-crontab/
??????console/controllers/ExampleController.php
???????????????????????? common/config/main.php
   'controllerMap' => [
        'fixture' => [
            'class' => \yii\console\controllers\FixtureController::class,
            'namespace' => 'common\fixtures',
        ],
        'crontab' => [
            'class' => 'CrontabConsole\controllers\CrontabController',
            'driver' => [
                'class' => 'CrontabConsole\drivers\File',
                'tasks' => [
                    ['crontab_str' => '* * * * *', 'route' => 'example/minute'],
                    ['crontab_str' => '* * * * *', 'route' => 'example/test-add'],
                    ['crontab_str' => '0 */1 * * *', 'route' => 'example/hours'],
                    //????????????????????????????????????
                ]
                ,
//                 'class' => 'CrontabConsole\drivers\Mysql',
//                 'dsn' => 'mysql:host=localhost;dbname=test',
//                 'username' => 'percy',
//                 'password' => 'percy',
//                 'charset' => 'utf8',

            ],
        ],
    ],
    
   
    
  
    ??????????????????  chmod -x yii2.sh  //?????????????????????
      ??????linux????????? crontab -e
          ??? i    ??????
    * * * * *  ????????????/yii2.sh
    :wq  ??????
    ????????????vim ??????
    
    
    
    
    
    ?????????  ??????console/controllers/ExampleController.php
    ????????????????????? php yii example/test-add
    linux  crontab -e
    ??? i   
    * * * * * /usr/local/Cellar/php@8.0/8.0.18/bin/php /Users/mac/PhpstormProjects/yii2/yii crontab/run >> /Users/mac/yii2run.txt
    ???????????????????????????    /usr/local/Cellar/php@8.0/8.0.18/bin/php php??????/bin/php 
    /Users/mac/PhpstormProjects/yii2/yii crontab/run    ????????????/yii crontab/run
     >> /Users/mac/yii2run.txt  ?????????????????????
     
     
     
     ??????console/runtime/crontab/  ??????????????????  ??????-output.log
     crontab.data ??????file????????????
     
    
```
