<?php
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    /**
     * Test put bucket operation
     */
    public function testGetBucketStorageInfo()
    {
        global $obsClient;

        /*
        $bucketName = 'obs-ga';
        $resp = $obsClient->doBucketVersioningOperation(['Bucket' => $bucketName], function($exception, $resp){
            return $resp;
//            printf("Getting bucket storageInfo Size:%d,ObjectNumber:%d\n\n", $resp ['Size'], $resp ['ObjectNumber']);
        });
        print_r($resp);
        */
    }
}