<?php
$dbData = require(__DIR__ . '/db-data.php');

// versuchen, verbindung zur 1. Datenbank aufzubauen
// => return Daten von 1. Datenbank

// versuchen, verbindung zur 2. Datenbank aufzubauen
// => return Daten von 2. Datenbank

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
];
