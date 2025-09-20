<?php

return [
    'db1'=>[
        'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=survey',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
    ],
    'db2'=>[
        'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=ballone',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
    ],

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
