<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

require 'vendor/autoload.php';

$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
$log->addWarning('Foo');


$foo = new Acme\Foo();

echo "works2";