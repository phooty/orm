<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;

$em = include_once __DIR__ . '/bootstrap.php';

return ConsoleRunner::createHelperSet($em->getDoctrineManager());
