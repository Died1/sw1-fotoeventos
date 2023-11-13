<?php

namespace App\Traits;

use Aws\S3\Exception\S3Exception;
use Aws\S3\S3Client;

trait S3Trait
{
    public function saveS3($file, $path = '')
    {
        try {
            $s3 = new S3Client([
                'version' => 'latest',
                'region' => env('AWS_DEFAULT_REGION'),
                'credentials' => [
                    'key' => env('AWS_ACCESS_KEY_ID'),
                    'secret' => env('AWS_SECRET_ACCESS_KEY'),
                ],
            ]);
            $fileName = uniqid().$file->getClientOriginalName();
            $s3->putObject([
                'Bucket' => env('AWS_BUCKET'),
                'Key' => $path.$fileName,
                'Body' => file_get_contents($file),
                'ACL' => 'public-read',
            ]);
            $path = $s3->getObjectUrl('sw1-fotos', $fileName);
            return  $path;

        } catch (S3Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

}
