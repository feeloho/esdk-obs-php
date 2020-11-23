<?php

require __DIR__.'/../vendor/autoload.php';

require __DIR__ . '/../src/obs-autoloader.php'; // sample env

use Obs\ObsClient;

$ak = config('obs.accessKey');
$sk = config('obs.secretKey');
$endpoint = config('obs.endpoint');

/*
 * Constructs a obs client instance with your account for accessing OBS
 */
$obsClient = ObsClient::factory ([
    'key' => $ak,
    'secret' => $sk,
    'endpoint' => $endpoint,
    'socket_timeout' => 30,
    'connect_timeout' => 10
]);

// B.C. for PSR Log's old inheritance
// see https://github.com/php-fig/log/pull/52
if (!class_exists('\\PHPUnit_Framework_TestCase', true)) {
    class_alias('\\PHPUnit\\Framework\\TestCase', '\\PHPUnit_Framework_TestCase');
}
