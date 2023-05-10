<?php
date_default_timezone_set('Europe/Lisbon');
require '../vendor/autoload.php';

use exads\primeNumbers\primeNumbersUtils;
use exads\asciiArray\asciiArrayUtils;
use exads\tvSeries\tvSeriesUtils;
use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/../.env');

$list = primeNumbersUtils::getFullList();
print_r($list);


$asciiArrayUtils = new asciiArrayUtils();
$asciiArrayUtils->createRandomAsciiArray();
print_r($asciiArrayUtils->fullArray);
$asciiArrayUtils->removeRandomElement();
echo "the missing char is: ".$asciiArrayUtils->findMissingAscii();

$tvSeriesUtils = new tvSeriesUtils();
$tvSeriesUtils->nextAired();
