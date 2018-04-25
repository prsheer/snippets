<?php

use DesignPatterns\Singleton\SingletonProduct;

require_once '../../vendor/autoload.php';

$firstProduct = SingletonProduct::getInstance();
$secondProduct = SingletonProduct::getInstance();

$firstProduct->mix = 'test';
$secondProduct->mix = 'example';

print_r($firstProduct->mix); //test
print_r($secondProduct->mix);//example

