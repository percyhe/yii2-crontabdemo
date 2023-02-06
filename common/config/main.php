<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'timeZone'=>'Asia/Chongqing',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => \yii\caching\FileCache::class,
        ],
    ],
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
];
