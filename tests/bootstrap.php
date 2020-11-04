<?php
declare(strict_types=1);

require __DIR__.'/../vendor/autoload.php';

require __DIR__ . '/../src/obs-autoloader.php'; // sample env

use Obs\ObsClient;
use Obs\ObsException;

$ak = 'VCMWB3DSKZUJDCQ4TEDD'; //getenv('huawei_obs_ak');
$sk = 'rwt1k7d0eHbuvunvBi6RsQkumJIq7iviYWFcvHGK'; getenv('huawei_obs_sk');
$endpoint = '119.84.98.10'; //getenv('endpoint');

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
