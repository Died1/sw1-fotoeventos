<?php

namespace App\Traits;

use Aws\Rekognition\RekognitionClient;

trait RekognitionTrait
{
    public function comparar($img1)
    {
        $client = new RekognitionClient(['region' => 'us-east-2', 'version' => 'latest']);

        $results = $client->compareFaces([
            'SimilarityThreshold' => 80,
            'SourceImage' => ['Bytes' => $img1],
            'TargetImage' => ['Bytes' => $img1],
        ]);

        $similarity = $results["FaceMatches"][0]["Similarity"] ?? 0;

        return ($similarity > 80) ? true : false;
    }
}
