<?php

namespace App\Traits;

use Aws\Rekognition\RekognitionClient;

trait ReKognitionTrait
{
    public function comparar($img1, $img2)
    {
        $client = new RekognitionClient([
            'region' => 'us-east-2',
            'version' => 'latest',
        ]);

        $compareFaceResults = $client->compareFaces([
            'SimilarityThreshold' => 80,
            'SourceImage' => [
                'Bytes' => file_get_contents($img1),
            ],
            'TargetImage' => [
                'Bytes' => file_get_contents($img2),
            ],
        ]);

        $faceMatch = $compareFaceResults["FaceMatches"];

        if ($faceMatch) {

            return true;
        }

        return false;
    }
}
