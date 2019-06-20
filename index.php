<?php
use Phooty\Orm\Support\OrmUtil;

$em = include_once __DIR__ . '/bootstrap.php';

$orm = new OrmUtil($em->getDoctrineManager());

dd($orm->find('Player', [
    'surname' => 'Jones'
]));
