<?php

namespace App\Traits;

use Aws\Rekognition\RekognitionClient;

trait RekognitionTrait
{
    public function comparar($urlImg1, $urlImg2)
    {
        $client = new RekognitionClient(['region' => 'us-east-2', 'version' => 'latest']);

        $results = $client->compareFaces([
            'SimilarityThreshold' => 80,
            'SourceImage' => ['Bytes' => file_get_contents($urlImg1)],
            'TargetImage' => ['Bytes' => file_get_contents($urlImg2)],
        ]);

        $similarity = $results["FaceMatches"][0]["Similarity"] ?? 0;

        return ($similarity > 80) ? true : false;
    }
}
