<?php

return [
    
    'id' => 'yii',
    'basePath' => realpath( __DIR__ . '/../'),
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    
];