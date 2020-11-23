<?php
/**
 * Created by PhpStorm.
 * User: zhaolin
 * Email: 79534505@qq.com
 * Date Time: 2020-11-04 17:25
 */

namespace Feeloho\Obs;

use Obs\ObsClient;

class Obs
{
    /**
     * @var string
     */
    private $ak;

    /**
     * @var string|string
     */
    private $sk;
    /**
     * @var string|string
     */
    private $bucket;
    /**
     * @var string|string
     */
    private $endpoint;
    /**
     * @var ObsClient
     */
    private $client;

    /**
     * ObsAdapter constructor.
     * @param string $ak
     * @param string $sk
     * @param string $bucket
     * @param string $endpoint
     */
    public function __construct($ak, $sk, $bucket, $endpoint)
    {
        $this->ak = $ak;
        $this->sk = $sk;
        $this->bucket = $bucket;
        $this->endpoint = $endpoint;
        $this->initClient();
    }
    public function initClient()
    {
        if (empty($this->client)) {
            $this->client = new ObsClient([
                'key' => $this->ak,
                'secret' => $this->sk,
                'endpoint' => $this->endpoint,
            ]);
        }
        return $this;
    }
}