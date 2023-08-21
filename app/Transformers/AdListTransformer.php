<?php

namespace App\Transformers;

use App\Models\Api\Ad;
use League\Fractal\TransformerAbstract;

class AdListTransformer extends TransformerAbstract
{
    public function transform(Ad $ad): array
    {
        return [
            'id' => $ad->id,
            'title' => $ad->name,
            'image' => $ad->image,
            'description' => $ad->description,
        ];
    }

}
